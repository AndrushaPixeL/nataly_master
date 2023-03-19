<?php

function nail_assets() {
    wp_enqueue_style( "header", get_template_directory_uri().'/assets/css/header.css');
    wp_enqueue_style( "index", get_template_directory_uri().'/assets/css/index.css');
	wp_enqueue_style( "form", get_template_directory_uri().'/assets/css/form.css');
	wp_enqueue_style( "footer", get_template_directory_uri().'/assets/css/footer.css');
    wp_enqueue_style( "font-style", "https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap");
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

if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'widget',
		'id'   => 'widget',
		'description'   => 'Область widget',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}

add_filter( 'wp_sitemaps_enabled', '__return_false' );