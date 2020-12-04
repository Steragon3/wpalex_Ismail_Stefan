<?php

// enqueue scripts and styles
function enqueue_scripts_and_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri().'/<%=htmlWebpackPlugin.files.chunks.main.css %>', array(), null, false);
    wp_enqueue_script( 'main-js', get_template_directory_uri().'/<%=htmlWebpackPlugin.files.chunks.main.entry %>', array(), null, false );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

// enable dynamic title tags
function add_title_tag() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'add_title_tag');

?>
