<?php

//Scripts
add_action( 'wp_enqueue_scripts', 'carbon_scripts' );
function carbon_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', false );
    wp_enqueue_style( 'style-default', get_template_directory_uri() . '/style.css', false );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), false );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Roboto+Condensed:300|Roboto+Slab:300,400,700' );
}

//Nav Menu
add_action( 'init', 'carbon_nav_menu' );
function carbon_nav_menu() {
	register_nav_menus(
		array(
			'main_menu' => 'Main Menu'
		)
	);
}

//Add Excerpt
add_post_type_support( 'page', 'excerpt' );

// Limpa Header
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
remove_action( 'wp_head', 'rest_output_link_wp_head');

?>