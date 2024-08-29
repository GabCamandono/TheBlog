<?php 

function theblog_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/main.css' , microtime() );
    wp_enqueue_script('main-js', get_template_directory_uri() . '/script/script.js', [], microtime(), true);

}

   
add_action('wp_enqueue_scripts', 'theblog_assets' );

function theblog_theme_support(){
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'theblog_theme_support');

