<?php

namespace Drupal\current_weather\Controller;

use Drupal\Core\Controller\ControllerBase;

class APIController extends ControllerBase{
  public function getWeather()
  {
    $api_key = '61accc1f951cf655157b401b9ad3f36a';
    $api_endpoint = 'https://api.openweathermap.org/data/2.5/weather?q=subotica&units=metric&appid=' . $api_key;
    $response = file_get_contents($api_endpoint);

    if ($response) {
      $data = json_decode($response);

      // Extract temperature and weather icon data.
      $temperature = $data->main->temp;
      $weather_icon = $data->weather[0]->icon;

      $output = '<div class="current-weather">';
      $output .= '<img src="http://openweathermap.org/img/w/' . $weather_icon . '.png" alt="Weather Icon">';
      $output .= '<div class="temperature">' . round($temperature) . '°C</div>';
      $output .= '</div>';

      return [
        '#markup' => $output,
      ];
    }

    return t('Unable to fetch weather data.');
  }
}
