<?php 

function burgerRestaurant_files() {
  wp_enqueue_script('burgerRestaurant-main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true); 

  wp_enqueue_style('burgerRestaurant-styles', get_theme_file_uri('/build/index.css'));
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
}

add_action('wp_enqueue_scripts', 'burgerRestaurant_files');

function burgerRestaurant_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  // register_nav_menu('headerMenuLocation', 'Header Menu Location');
  // register_nav_menu('footerLocationOne', 'Footer Location One');
  // register_nav_menu('footerLocationTwo', 'Footer Location Two');
}

add_action('after_setup_theme', 'burgerRestaurant_features');

function burgerRestaurant_adjust_queries($query) {
  // location archive page displays locations in ascending alphabetical order.
  if(!is_admin() AND is_post_type_archive('location') AND is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }

  // event archive page only shows upcoming events ordered by soonest event first 
  if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(// don't show past events
      array(
        'key' => 'event_date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
      )
      ));
  }
}

add_action('pre_get_posts', 'burgerRestaurant_adjust_queries');

add_filter('ai1wm_exclude_themes_from_export', 'ignoreCertainFiles');

function ignoreCertainFiles($exclude_filters) {
  $exclude_filters[] = 'burgerRestaurant/node_modules';
  return $exclude_filters;
}