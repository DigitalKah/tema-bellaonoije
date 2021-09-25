<?php
function style_css() {

	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), false, false );

	wp_register_style( 'style-css', get_template_directory_uri() . '/style.css', array('bootstrap-css'), false, false );

	wp_register_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css', array('style-css'), false, false );

	wp_enqueue_style( 'custom-css' );
}
add_action( 'wp_enqueue_scripts', 'style_css' );