<?php
/**
 * @file
 * custom_profile.features.inc
 */

/**
 * Implements hook_node_info().
 */
function custom_profile_node_info() {
  $items = array(
    'profile' => array(
      'name' => t('Profile'),
      'base' => 'node_content',
      'description' => t('Use <em>Profile</em> to create profile pages'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
