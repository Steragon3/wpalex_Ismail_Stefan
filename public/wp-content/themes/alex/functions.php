<?php

// enqueue scripts and styles
function enqueue_scripts_and_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri().'/main.65b23c5f51b9d00534ed.css?10a10ced29b932690dca', array(), null, false);
    wp_enqueue_script( 'main-js', get_template_directory_uri().'/main.js?10a10ced29b932690dca', array(), null, false );
}

// enable dynamic title tags
function add_title_tag() {
    add_theme_support( 'title-tag' );
}

function register_my_menus() {
    register_nav_menus(
      array(
        'main-navigation' => __( 'Header Menu' ),
        'footer-navigation' => __( 'Footer Menu' )
       )
     );
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');
add_action( 'init', 'register_my_menus' );
add_action( 'after_setup_theme', 'add_title_tag');
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

add_theme_support( 'post-thumbnails' );
?>

