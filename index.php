<?php
/**
 * Main Template File (Fallback) - SANWAY
 *
 * @package SANWAY
 */

if ( function_exists( 'sanway_is_contact_page' ) && sanway_is_contact_page() ) {
    include get_template_directory() . '/page-contact.php';
    return;
}

// Fallback to front page layout
include get_template_directory() . '/front-page.php';
