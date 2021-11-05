<?php 

function burgerRestaurant_post_types() {
  // Location Post Type
  register_post_type('location', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'locations'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Locations',
      'add_new_item' => 'Add New Location',
      'edit_item' => 'Edit Location',
      'all_items' => 'All Locations',
      'singular_name' => 'Location'
    ),
    'menu_icon' => 'dashicons-location-alt'
  ));

  // Event Post Type
  register_post_type('event', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));
}

add_action('init', 'burgerRestaurant_post_types');