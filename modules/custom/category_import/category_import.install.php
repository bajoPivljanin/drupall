<?php

/**
 * @file
 * Install, update and uninstall functions for the category_import module.
 */

/**
 * Implements hook_install().
 */
function category_import_install() {
  \Drupal::messenger()->addStatus(__FUNCTION__);
}

/**
 * Implements hook_uninstall().
 */
function category_import_uninstall() {
  \Drupal::messenger()->addStatus(__FUNCTION__);
}

/**
 * Implements hook_schema().
 */
function category_import_schema() {
  $schema['category_import_example'] = [
    'description' => 'Table description.',
    'fields' => [
      'id' => [
        'type' => 'serial',
        'not null' => TRUE,
        'description' => 'Primary Key: Unique record ID.',
      ],
      'uid' => [
        'type' => 'int',
        'unsigned' => TRUE,
        'not null' => TRUE,
        'default' => 0,
        'description' => 'The {users}.uid of the user who created the record.',
      ],
      'status' => [
        'description' => 'Boolean indicating whether this record is active.',
        'type' => 'int',
        'unsigned' => TRUE,
        'not null' => TRUE,
        'default' => 0,
        'size' => 'tiny',
      ],
      'type' => [
        'type' => 'varchar_ascii',
        'length' => 64,
        'not null' => TRUE,
        'default' => '',
        'description' => 'Type of the record.',
      ],
      'created' => [
        'type' => 'int',
        'not null' => TRUE,
        'default' => 0,
        'description' => 'Timestamp when the record was created.',
      ],
      'data' => [
        'type' => 'blob',
        'not null' => TRUE,
        'size' => 'big',
        'description' => 'The arbitrary data for the item.',
      ],
    ],
    'primary key' => ['id'],
    'indexes' => [
      'type' => ['type'],
      'uid' => ['uid'],
      'status' => ['status'],
    ],
  ];

  return $schema;
}

/**
 * Implements hook_requirements().
 */
function category_import_requirements($phase) {
  $requirements = [];

  if ($phase == 'runtime') {
    $value = mt_rand(0, 100);
    $requirements['category_import_status'] = [
      'title' => t('category_import status'),
      'value' => t('category_import value: @value', ['@value' => $value]),
      'severity' => $value > 50 ? REQUIREMENT_INFO : REQUIREMENT_WARNING,
    ];
  }

  return $requirements;
}
