<?php

namespace Drupal\category_import\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an import block.
 *
 * @Block(
 *   id = "category_import_example",
 *   admin_label = @Translation("Import block"),
 *   category = @Translation("category_import")
 * )
 */
class ImportBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [
      '#markup' => $this->t('This will help you with importing taxonomies.'),
    ];
    return $build;
  }

}
