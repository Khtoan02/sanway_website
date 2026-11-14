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

define( 'SANWAY_VERSION', '1.1.1' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function sanway_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ) );

    // Support Gutenberg responsive embeds
    add_theme_support( 'responsive-embeds' );

    // Custom Logo Support
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Register Primary Navigation Menu
    register_nav_menus( array(
        'primary' => esc_html__( 'Thanh điều hướng chính (Primary Menu)', 'sanway' ),
        'footer'  => esc_html__( 'Menu chân trang (Footer Menu)', 'sanway' ),
    ) );
}
add_action( 'after_setup_theme', 'sanway_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function sanway_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'sanway-google-fonts',
        'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
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
 * Helper: Lấy URL trang Giới thiệu thông minh
 * Tự động tìm page có slug 'gioi-thieu' hoặc 'about', fallback sang '?view=about'
 */
function sanway_get_about_url() {
    $about_page = get_page_by_path( 'gioi-thieu' );
    if ( ! $about_page ) {
        $about_page = get_page_by_path( 'about' );
    }
    if ( $about_page ) {
        return get_permalink( $about_page->ID );
    }
    return add_query_arg( 'view', 'about', home_url( '/' ) );
}

/**
 * Helper: Kiểm tra đang ở trang giới thiệu
 */
function sanway_is_about_page() {
    if ( isset( $_GET['view'] ) && 'about' === sanitize_key( $_GET['view'] ) ) {
        return true;
    }
    if ( is_page( array( 'gioi-thieu', 'about' ) ) ) {
        return true;
    }
    if ( is_page_template( 'page-about.php' ) ) {
        return true;
    }
    return false;
}

/**
 * Router fallback: Khi truy cập `?view=about`, load template page-about.php
 */
function sanway_template_redirect() {
    if ( is_admin() ) {
        return;
    }
    if ( isset( $_GET['view'] ) && 'about' === sanitize_key( $_GET['view'] ) ) {
        $template = locate_template( array( 'page-about.php' ) );
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
    $file_name = ( 'icon' === $type ) ? 'logo-icon.png' : 'logo-horizontal.png';
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    if ( $custom_logo_id && 'horizontal' === $type ) {
        $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );
        if ( ! empty( $logo[0] ) ) {
            return $logo[0];
        }
    }
    return get_template_directory_uri() . '/assets/images/' . $file_name;
}
