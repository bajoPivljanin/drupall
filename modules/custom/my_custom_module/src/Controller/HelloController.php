<?php

namespace Drupal\my_custom_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

  public function hello_world() {
    return [
      '#type' => 'markup',
      '#markup' => t('Hello world from custom module!')
    ];
  }

}
