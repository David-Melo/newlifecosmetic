<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array());
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), '0.1.0', true );
}

function dm_theme_setup(){

    add_theme_support( 'post-thumbnails' );
    register_nav_menu('alt','Alt Navigation');
    register_nav_menu('footer','Footer Navigation');

}
add_action('init', 'dm_theme_setup');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
	    'page_title' => 'Site Options',
        'menu_title' => 'Site Options',
        'menu_slug' =>  'site-options',
	));

}

function my_acf_google_map_api( $api ){

    $api['key'] = 'AIzaSyCbomR1i3Hm9T-azK2OIWRBf24E5LlIg38';

    return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');