<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/dist/css/app.css' );
	//var_dump(get_template_directory_uri() . '/dist/css/app.css');
}
get_template_part('ashley');
get_template_part('rich');
?>
