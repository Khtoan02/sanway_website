<?php
/**
 * SANWAY Theme functions and definitions
 *
 * @package SANWAY
 */

if ( ! defined( "ABSPATH" ) ) {
    exit; // Exit if accessed directly.
}

function sanway_theme_setup() {
    add_theme_support( "title-tag" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "html5", array( "search-form", "comment-form", "comment-list", "gallery", "caption" ) );
    
    register_nav_menus( array(
        "primary" => esc_html__( "Primary Menu", "sanway" ),
        "footer"  => esc_html__( "Footer Menu", "sanway" ),
    ) );
}
add_action( "after_setup_theme", "sanway_theme_setup" );

function sanway_enqueue_scripts() {
    wp_enqueue_style( "sanway-style", get_stylesheet_uri(), array(), "1.0.0" );
}
add_action( "wp_enqueue_scripts", "sanway_enqueue_scripts" );
