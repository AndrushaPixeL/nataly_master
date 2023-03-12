<?php

function nail_assets() {
    wp_enqueue_style( "header", get_template_directory_uri().'/assets/css/header.css');
    wp_enqueue_style( "index", get_template_directory_uri().'/assets/css/index.css');
    wp_enqueue_style( "font-style", "https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap");
    wp_enqueue_style( "font-style");
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/assets/scripts/custom.js', 
    array('jquery'), false, true);
}

add_action("wp_enqueue_scripts", "nail_assets");
add_theme_support("custom-logo");

function remove_nbsp_from_content($content) {
   $content = preg_replace('/&nbsp;/', ' ', $content);
   return $content;
}
add_filter('the_content', 'remove_nbsp_from_content');
