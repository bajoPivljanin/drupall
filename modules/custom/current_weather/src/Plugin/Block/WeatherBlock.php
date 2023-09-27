<?php

namespace Drupal\current_weather\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\current_weather\Controller\APIController;

/**
 * Provides a weather block.
 *
 * @Block(
 *   id = "wetather_block",
 *   admin_label = @Translation("Weather Block"),
 *   category = @Translation("Custom weather block")
 * )
 */
class WeatherBlock extends BlockBase {
  public function build()
  {
    $weatherObj = new APIController();
    $data = $weatherObj->getWeather();
    /**
     * {@inheritdoc}
     */
    $output = [
      '#markup' => '<div>'.$data['#markup'].'</div>',
    ];

    return $output;
  }
}
