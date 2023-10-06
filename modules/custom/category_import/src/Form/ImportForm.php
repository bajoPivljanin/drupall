<?php

namespace Drupal\category_import\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Database\Database;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\file\Entity\File;
use Drupal\taxonomy\Entity\Term;
use Drupal\taxonomy\Entity\Vocabulary;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\File\FileSystemInterface;
use Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use Symfony\Component\Mime\MimeTypes;

class ImportForm extends FormBase {

  use StringTranslationTrait;

  protected \Drupal\Core\Config\ImmutableConfig $config;

  protected EntityStorageInterface $vocabularyStorage;

  protected $messenger;

  protected FileSystemInterface $fileSystem;
  public function __construct(
    ConfigFactoryInterface $config_factory,
    EntityStorageInterface $vocabulary_storage,
    MessengerInterface $messenger,
    FileSystemInterface $file_system
  )
  {
    $this->config = $config_factory->get('taxonomy_import.config');
    $this->vocabularyStorage = $vocabulary_storage;
    $this->messenger = $messenger;
    $this->fileSystem = $file_system;
  }


  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('entity_type.manager')->getStorage('taxonomy_vocabulary'),
      $container->get('messenger'),
      $container->get('file_system')
    );
  }

  public function getFormId() {
    return 'import_taxonomy_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $vocabularies = $this->vocabularyStorage->loadMultiple();
    $vocabulariesList = [];
    foreach ($vocabularies as $vid => $vocabulary) {
      $vocabulariesList[$vid] = $vocabulary->get('name');
    }

    $form['field_vocabulary_name'] = [
      '#type' => 'select',
      '#title' => $this->t('Vocabulary name'),
      '#options' => $vocabulariesList,
      '#attributes' => [
        'class' => ['vocab-name-select'],
      ],
      '#description' => $this->t('Select vocabulary!'),
    ];

    $form['taxonomy_file'] = [
      '#type' => 'managed_file',
      '#title' => $this->t('Import file'),
      '#required' => TRUE,
      '#upload_location' => 'public://taxonomy_files/',
      '#upload_validators' => [
        'file_validate_extensions' => [$this->config->get('file_extensions') ?? SettingsForm::DEFAULT_FILE_EXTENSION],
      ],
      '#description' => $this->t('Upload a file to Import taxonomy!') . $this->config->get('file_max_size'),
    ];

    $form['actions']['#type'] = 'actions';
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Import'),
      '#button_type' => 'primary',
    ];

    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    $file = File::load($form_state->getValue('taxonomy_file')[0]);
    if (empty($file)) {
       $form_state->setErrorByName('taxonomy_file', $this->t('You must upload a file!'));
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $vocabularyName = $form_state->getValue('field_vocabulary_name');
    $fileId = $form_state->getValue('taxonomy_file')[0];
    $file = File::load($fileId);

    if ($file) {
      $mime = new MimeTypes();
      $fileUri = $file->getFileUri();
      $mimeType = $mime->guessMimeType($fileUri);

      if ($mimeType === 'text/csv' || $mimeType === 'application/csv') {
        $vocabularyMachineName = $this->generateVocabularyMachineName($vocabularyName);
        $vocabulary = Vocabulary::load($vocabularyMachineName);

        if (!$vocabulary) {
          // Create the vocabulary if it doesn't exist.
          $vocabulary = Vocabulary::create([
            'vid' => $vocabularyMachineName,
            'name' => $vocabularyName,
            'description' => '',
          ]);
          $vocabulary->save();
        }

        $csvData = file_get_contents($fileUri);
        $lines = explode(PHP_EOL, $csvData);

        foreach ($lines as $line) {
          $data = str_getcsv($line);
          $termName = $data[0];
          $parentTermName = $data[1] ?? '';

          if (!empty($termName)) {
            $parentTerm = $this->loadTermByName($parentTermName, $vocabularyMachineName);
            $term = $this->loadTermByName($termName, $vocabularyMachineName);

            if (!$term) {
              $term = Term::create([
                'vid' => $vocabularyMachineName,
                'name' => $termName,
                'parent' => $parentTerm ? [$parentTerm->id()] : [],
              ]);
              $term->save();
            }
          }
        }

        $this->messenger->addStatus($this->t('Taxonomy terms imported successfully.'));
      }
      else {
        $this->messenger->addError($this->t('Invalid file format. Only CSV files are supported.'));
        $this->messenger->addError($this->t('Detected MIME type: ' . $mimeType));

      }
    }
    else {
      $this->messenger->addError($this->t('Failed to load the uploaded file.'));
    }
  }

  protected function generateVocabularyMachineName($vocabularyName) {
    // Convert to lowercase and replace spaces with underscores.
    return preg_replace('/[^a-z0-9_]+/', '_', strtolower($vocabularyName));
  }

  protected function loadTermByName($termName, $vocabularyMachineName) {
    $terms = \Drupal::entityTypeManager()
      ->getStorage('taxonomy_term')
      ->loadByProperties(['name' => $termName, 'vid' => $vocabularyMachineName]);

    return reset($terms);
  }
}
