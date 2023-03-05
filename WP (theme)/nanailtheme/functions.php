<?php
/*

Theme Name: NA | NAIL

Version: 1.0

Author: Murashov I.V.

*/

function enqueue_styles() {

wp_enqueue_style( "whitesquare-style", get_stylesheet_uri());

wp_register_style( "font-style", "https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap");

wp_enqueue_style( "font-style");

}

add_action("wp_enqueue_scripts", 'tutsplus_enqueue_custom_js', "enqueue_styles");

function enqueue_scripts () {
wp_register_script("html5-shim", "http://html5shim.googlecode.com/svn/trunk/html5.js");
wp_enqueue_script("html5-shim");
}

function tutsplus_enqueue_custom_js() {
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/scripts/custom.js', 
    array('jquery'), false, true);
}

