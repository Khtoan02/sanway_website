<?php
/**
 * SANWAY Theme functions and definitions
 *
 * @package SANWAY
 * @subpackage Sanway_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'SANWAY_VERSION', '2.0.0' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function sanway_theme_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-logo', array(
        'height'      => 90,
        'width'       => 320,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'sanway_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function sanway_enqueue_scripts() {
    // Google Fonts (Plus Jakarta Sans)
    wp_enqueue_style(
        'sanway-google-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700;1,900&display=swap',
        array(),
        null
    );

    // Main Theme Stylesheet
    wp_enqueue_style(
        'sanway-style',
        get_stylesheet_uri(),
        array( 'sanway-google-fonts' ),
        SANWAY_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'sanway_enqueue_scripts' );

/**
 * Add resource preconnect for fonts
 */
function sanway_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin' => 'anonymous',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'sanway_resource_hints', 10, 2 );

/**
 * Helper: Lấy URL trang Liên Hệ thông minh
 */
function sanway_get_contact_url() {
    $contact_page = get_page_by_path( 'lien-he' );
    if ( ! $contact_page ) {
        $contact_page = get_page_by_path( 'contact' );
    }
    if ( $contact_page ) {
        return get_permalink( $contact_page->ID );
    }
    return add_query_arg( 'view', 'contact', home_url( '/' ) );
}

/**
 * Helper: Kiểm tra đang ở trang Liên Hệ
 */
function sanway_is_contact_page() {
    if ( isset( $_GET['view'] ) && 'contact' === sanitize_key( $_GET['view'] ) ) {
        return true;
    }
    if ( is_page( array( 'lien-he', 'contact' ) ) ) {
        return true;
    }
    if ( is_page_template( 'page-contact.php' ) ) {
        return true;
    }
    return false;
}

/**
 * Router fallback: Khi truy cập `?view=contact`, load template page-contact.php
 */
function sanway_template_redirect() {
    if ( is_admin() ) {
        return;
    }
    if ( isset( $_GET['view'] ) && 'contact' === sanitize_key( $_GET['view'] ) ) {
        $template = locate_template( array( 'page-contact.php' ) );
        if ( $template ) {
            load_template( $template );
            exit;
        }
    }
}
add_action( 'template_redirect', 'sanway_template_redirect' );

/**
 * Helper: Lấy URL Logo
 */
function sanway_get_logo_url( $type = 'horizontal' ) {
    if ( 'icon' === $type ) {
        $file_name = 'logo-icon.png';
    } elseif ( 'white' === $type ) {
        $file_name = 'logo-horizontal-white.png';
    } else {
        $file_name = 'logo-horizontal.png';
    }
    return get_template_directory_uri() . '/assets/images/' . $file_name;
}
