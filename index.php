<?php
/**
 * Main Template File (Fallback) - SANWAY
 *
 * @package SANWAY
 */

if ( function_exists( 'sanway_is_about_page' ) && sanway_is_about_page() ) {
    get_template_part( 'page-about' );
    return;
}

// Fallback to front page layout
get_template_part( 'front-page' );
