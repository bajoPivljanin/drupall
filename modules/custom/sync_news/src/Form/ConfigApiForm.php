<?php
namespace Drupal\sync_news\Form;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\ConfigFormBase;
class ConfigApiForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'sync_news_a_p_i_config';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['sync_news.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['dev_api_url'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API key'),
      '#default_value' => $this->config('sync_news.settings')->get('dev_api_url'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration.
    $this->config('sync_news.settings')
      // Set the submitted configuration setting.
      ->set('dev_api_url.key', $form_state->getValue('dev_api_url'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
