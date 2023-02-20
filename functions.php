<?php


add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style( 'golovna', get_template_directory_uri() . '/assets/css/golovna.css' );
	wp_enqueue_style( 'contakts', get_template_directory_uri() . '/assets/css/kontakt.css' );
	wp_enqueue_style( 'pro_fond', get_template_directory_uri() . '/assets/css/pro_fond.css' );
	wp_enqueue_style( 'pro_nas', get_template_directory_uri() . '/assets/css/pro_nas.css' );
	wp_enqueue_style( 'proects', get_template_directory_uri() . '/assets/css/proect.css' );
    wp_enqueue_style( 'header_and_footer', get_template_directory_uri() . '/assets/css/header_and_footer.css' );

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js');

	wp_enqueue_script('jquery' );
    wp_enqueue_script( 'burger_menu', get_template_directory_uri() . '/assets/js/burger_menu.js', array('jquery'), 'null', true );
});
 
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>