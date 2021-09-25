<?php
function bootstrap_scripts() {	

	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), "3.5.1", true );

  wp_register_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.js', array('jquery'), "1.16.1", true );

  wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('popper-js'), "5.1.1", true );

	wp_enqueue_script( 'bootstrap-js' );

}

add_action( 'wp_enqueue_scripts', 'bootstrap_scripts' );