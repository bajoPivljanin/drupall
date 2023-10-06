<?php

namespace Drupal\category_import\Controller;

use Drupal\Core\Controller\ControllerBase;

class CategoryImportController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build = [
      '#type' => 'item',
      '#markup' => $this->t('Import all categories'),
    ];

    return $build;

  }

}
