<?php

namespace Drupal\sync_news\Controller;

use Drupal\taxonomy\Entity\Term;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use GuzzleHttp\Client;
use Drupal\Core\Entity\EntityInterface;


class SyncNewsController extends ControllerBase {

  public function sync_all_news() {
    return [
      '#type' => 'markup',
      '#markup' => t('Sync all news!')
    ];
  }
  public function enter_data_business() {
    $key = '69487902523b410fa96697e4a798cc6d';
    $api = 'https://newsapi.org/v2/everything?q=business&from=2023-09-06&sortBy=publishedAt&apiKey=69487902523b410fa96697e4a798cc6d';
    $vocabulary_name = 'ingredients'; // Replace with your vocabulary machine name.
    $term_name = 'business'; // Replace with the desired category name.
    $node_type = 'news';

    $decode = file_get_contents($api);

    if ($decode) {
      $data = json_decode($decode);

      $results = [];

      // Fetch and add 10 data entries from the API.
      for ($i = 0; $i < 10; $i++) {
        // Load or create the term.
        $term = \Drupal::entityTypeManager()
          ->getStorage('taxonomy_term')
          ->loadByProperties(['vid' => $vocabulary_name, 'name' => $term_name]);

        if (empty($term)) {
          // Term doesn't exist, so create it.
          $term = Term::create([
            'vid' => $vocabulary_name,
            'name' => $term_name,
          ]);
          $term->save();
        } else {
          // Term exists, use the first one found.
          $term = reset($term);
        }

        // Check if the article at index $i exists.
        if (isset($data->articles[$i])) {
          $article = $data->articles[$i];

          $title = $article->title;
          $author = $article->author;
          $body = $article->description;

          // Create a new node.
          $node = Node::create([
            'type' => $node_type,
            'title' => $title,
            'category' => $term_name,
            'field_news_author' => $author,
            'body' => [
              'value' => $body,
              'format' => 'plain_text', // Set the desired text format.
            ],
            // Add more fields as needed.
            'field_category' => $term->id(),
          ]);

          // Save the node.
          $node->save();

          // Store the result.
          $results[] = 'Data for article ' . ($i + 1) . ' has been entered.';
        }
      }

      // Create a response with the results.
      $response = new JsonResponse(['message' => implode("\n", $results)]);
    } else {
      // Handle the case where the API response is empty.
      $error_message = 'API response is empty or there was an issue with the API request.';
      \Drupal::logger('my_module')->error($error_message);
      $response = new Response($error_message, 500);
    }

    return $response;
  }

  public function enter_data_tesla()
  {
    $api = 'https://newsapi.org/v2/everything?q=tesla&from=2023-09-06&sortBy=publishedAt&apiKey=69487902523b410fa96697e4a798cc6d';
    $vocabulary_name = 'ingredients'; // Replace with your vocabulary machine name.
    $term_name = 'tesla'; // Replace with the desired category name.
    $node_type = 'news';

    $decode = file_get_contents($api);

    if ($decode) {
      $data = json_decode($decode);

      $results = [];

      // Fetch and add 10 data entries from the API.
      for ($i = 0; $i < 5; $i++) {
        // Load or create the term.
        $term = \Drupal::entityTypeManager()
          ->getStorage('taxonomy_term')
          ->loadByProperties(['vid' => $vocabulary_name, 'name' => $term_name]);

        if (empty($term)) {
          // Term doesn't exist, so create it.
          $term = Term::create([
            'vid' => $vocabulary_name,
            'name' => $term_name,
          ]);
          $term->save();
        } else {
          // Term exists, use the first one found.
          $term = reset($term);
        }

        // Check if the article at index $i exists.
        if (isset($data->articles[$i])) {
          $article = $data->articles[$i];

          $title = $article->title;
          $author = $article->author;
          $body = $article->description;

          // Create a new node.
          $node = Node::create([
            'type' => $node_type,
            'title' => $title,
            'category' => $term_name,
            'field_news_author' => $author,
            'body' => [
              'value' => $body,
              'format' => 'plain_text', // Set the desired text format.
            ],
            // Add more fields as needed.
            'field_category' => $term->id(),
          ]);

          // Save the node.
          $node->save();

          // Store the result.
          $results[] = 'Data for article ' . ($i + 1) . ' has been entered.';
        }
      }

      // Create a response with the results.
      $response = new JsonResponse(['message' => implode("\n", $results)]);
    } else {
      // Handle the case where the API response is empty.
      $error_message = 'API response is empty or there was an issue with the API request.';
      \Drupal::logger('my_module')->error($error_message);
      $response = new Response($error_message, 500);
    }

    return $response;
  }

  public function enter_data_other()
  {
    $api = 'https://newsapi.org/v2/everything?q=other&from=2023-09-05&sortBy=publishedAt&apiKey=69487902523b410fa96697e4a798cc6d';
    $vocabulary_name = 'ingredients'; // Replace with your vocabulary machine name.
    $term_name = 'other'; // Replace with the desired category name.
    $node_type = 'news';

    $decode = file_get_contents($api);

    if ($decode) {
      $data = json_decode($decode);

      $results = [];

      // Fetch and add 10 data entries from the API.
      for ($i = 0; $i < 5; $i++) {
        // Load or create the term.
        $term = \Drupal::entityTypeManager()
          ->getStorage('taxonomy_term')
          ->loadByProperties(['vid' => $vocabulary_name, 'name' => $term_name]);

        if (empty($term)) {
          // Term doesn't exist, so create it.
          $term = Term::create([
            'vid' => $vocabulary_name,
            'name' => $term_name,
          ]);
          $term->save();
        } else {
          // Term exists, use the first one found.
          $term = reset($term);
        }

        // Check if the article at index $i exists.
        if (isset($data->articles[$i])) {
          $article = $data->articles[$i];

          $title = $article->title;
          $author = $article->author;
          $body = $article->description;

          // Create a new node.
          $node = Node::create([
            'type' => $node_type,
            'title' => $title,
            'category' => $term_name,
            'field_news_author' => $author,
            'body' => [
              'value' => $body,
              'format' => 'plain_text', // Set the desired text format.
            ],
            // Add more fields as needed.
            'field_category' => $term->id(),
          ]);

          // Save the node.
          $node->save();

          // Store the result.
          $results[] = 'Data for article ' . ($i + 1) . ' has been entered.';
        }
      }

      // Create a response with the results.
      $response = new JsonResponse(['message' => implode("\n", $results)]);
    } else {
      // Handle the case where the API response is empty.
      $error_message = 'API response is empty or there was an issue with the API request.';
      \Drupal::logger('my_module')->error($error_message);
      $response = new Response($error_message, 500);
    }

    return $response;
  }
}
