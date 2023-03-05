<?php

function nail_assets() {
    wp_enqueue_style( "header", get_template_directory_uri().'/assets/css/header.css');
    wp_enqueue_style( "index", get_template_directory_uri().'/assets/css/index.css');
    wp_enqueue_style( "font-style", "https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap");
    wp_enqueue_style( "font-style");
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/assets/scripts/custom.js', 
    array('jquery'), false, true);
}

// function tutsplus_enqueue_custom_js() {
//     wp_enqueue_script('custom', get_stylesheet_directory_uri().'/assets/scripts/custom.js', 
//     array('jquery'), false, true);
// }

add_action("wp_enqueue_scripts", "nail_assets");