<?php
/**
 * Header template for SANWAY Theme
 * Minimalist International Enterprise Header (Logo Only)
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
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Ultra-Clean International Enterprise Header -->
<header class="sw-header sw-header-minimal" id="swHeader">
    <div class="sw-container">
        <div class="sw-header-center">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-logo-brand" aria-label="SANWAY Homepage">
                <?php 
                $logo_url = function_exists( 'sanway_get_logo_url' ) ? sanway_get_logo_url( 'horizontal' ) : '';
                if ( $logo_url ) : ?>
                    <img src="<?php echo esc_url( $logo_url ); ?>" alt="SANWAY PCCC" class="sw-logo-img">
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
