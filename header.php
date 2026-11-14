<?php
/**
 * Header template for SANWAY Theme
 * High-End Positive Architectural Header (Crisp Centered Logo)
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
<body <?php body_class( 'sw-positive-artistic-theme' ); ?>>
<?php wp_body_open(); ?>

<!-- High-End International Artistic Header (Light & Crisp) -->
<header class="sw-header-positive" id="swHeader">
    <div class="sw-container">
        <div class="sw-header-center">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-art-logo-link" aria-label="SANWAY Homepage">
                <?php 
                $logo_url = function_exists( 'sanway_get_logo_url' ) ? sanway_get_logo_url( 'horizontal' ) : '';
                if ( $logo_url ) : ?>
                    <img src="<?php echo esc_url( $logo_url ); ?>" alt="SANWAY PCCC" class="sw-art-logo-img">
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
