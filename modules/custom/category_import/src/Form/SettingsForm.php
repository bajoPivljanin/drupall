<?php

namespace Drupal\category_import\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure category_import settings for this site.
 */
class SettingsForm extends ConfigFormBase {

  const DEFAULT_FILE_EXTENSION = 'csv';

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'category_import_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['category_import.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['primary'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Settings field'),
      '#default_value' => 'Upload settings field',
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
//  public function validateForm(array &$form, FormStateInterface $form_state) {
//    if ($form_state->getValue('primary') != 'primary') {
//      $form_state->setErrorByName('primary', $this->t('The value is not correct.'));
//    }
//    parent::validateForm($form, $form_state);
//  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('category_import.settings')
      ->set('primary.key', $form_state->getValue('primary'))
      ->save();
    parent::submitForm($form, $form_state);
  }

}
