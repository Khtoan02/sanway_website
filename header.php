<?php
/**
 * Header template for SANWAY Theme
 * Minimalist High-End International Header (Heroic Logo)
 *
 * @package SANWAY
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'sw-dark-artistic-theme' ); ?>>
<?php wp_body_open(); ?>

<!-- High-End International Artistic Header -->
<header class="sw-header sw-header-artistic" id="swHeader">
    <div class="sw-container">
        <div class="sw-header-center">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-art-logo-link" aria-label="SANWAY Homepage">
                <?php 
                $logo_white = function_exists( 'sanway_get_logo_url' ) ? sanway_get_logo_url( 'white' ) : '';
                if ( $logo_white ) : ?>
                    <img src="<?php echo esc_url( $logo_white ); ?>" alt="SANWAY PCCC" class="sw-art-logo-img">
                <?php else : ?>
                    <div class="sw-logo-text-wrapper">
                        <span class="sw-brand-name">SANWAY</span>
                        <span class="sw-brand-tagline">Phòng Cháy Chữa Cháy</span>
                    </div>
                <?php endif; ?>
            </a>
        </div>
    </div>
</header>
