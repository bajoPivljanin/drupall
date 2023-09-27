<?php

namespace Drupal\current_weather\Controller;


use Drupal\Core\Controller\ControllerBase;

class CurrentWeatherController extends ControllerBase{
  public function weather(){
    return [
      '#type' => 'markup',
      '#markup' => t('This is custom weather module!')
    ];
  }
}
