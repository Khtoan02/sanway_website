<?php
/**
 * Header template for SANWAY Theme
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

<header class="sw-header" id="swHeader">
    <div class="sw-container">
        <div class="sw-header-inner">
            <!-- Brand Logo -->
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

            <!-- Desktop Navigation -->
            <nav class="sw-nav-wrapper" aria-label="<?php esc_attr_e( 'Menu chính', 'sanway' ); ?>">
                <ul class="sw-nav">
                    <li>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-nav-link <?php echo ( ! function_exists( 'sanway_is_about_page' ) || ! sanway_is_about_page() ) && ( is_front_page() || is_home() ) ? 'is-active' : ''; ?>">
                            Trang Chủ
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( function_exists( 'sanway_get_about_url' ) ? sanway_get_about_url() : home_url( '/gioi-thieu/' ) ); ?>" class="sw-nav-link <?php echo ( function_exists( 'sanway_is_about_page' ) && sanway_is_about_page() ) ? 'is-active' : ''; ?>">
                            Giới Thiệu
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/#giai-phap' ) ); ?>" class="sw-nav-link">
                            Giải Pháp PCCC
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/#quy-trinh' ) ); ?>" class="sw-nav-link">
                            Quy Trình
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/#nang-luc' ) ); ?>" class="sw-nav-link">
                            Năng Lực Kỹ Thuật
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/#lien-he' ) ); ?>" class="sw-nav-link">
                            Liên Hệ
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Actions & Hotline -->
            <div class="sw-header-actions">
                <a href="tel:0936543389" class="sw-header-hotline" title="Gọi hotline kỹ thuật 24/7">
                    <span class="sw-hotline-icon">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </span>
                    <div class="sw-hotline-info">
                        <span class="sw-hotline-label">Tư vấn PCCC 24/7</span>
                        <span class="sw-hotline-number">0936 543 389</span>
                    </div>
                </a>

                <!-- Mobile Hamburger Toggle -->
                <button type="button" class="sw-menu-toggle" id="swMenuToggle" aria-label="Mở menu">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div class="sw-mobile-drawer" id="swMobileDrawer">
        <div class="sw-mobile-drawer-content">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-nav-link">Trang Chủ</a>
            <a href="<?php echo esc_url( function_exists( 'sanway_get_about_url' ) ? sanway_get_about_url() : home_url( '/gioi-thieu/' ) ); ?>" class="sw-nav-link">Giới Thiệu Doanh Nghiệp</a>
            <a href="<?php echo esc_url( home_url( '/#giai-phap' ) ); ?>" class="sw-nav-link">Giải Pháp & Dịch Vụ PCCC</a>
            <a href="<?php echo esc_url( home_url( '/#quy-trinh' ) ); ?>" class="sw-nav-link">Quy Trình Triển Khai</a>
            <a href="<?php echo esc_url( home_url( '/#nang-luc' ) ); ?>" class="sw-nav-link">Hồ Sơ Năng Lực</a>
            <a href="<?php echo esc_url( home_url( '/#lien-he' ) ); ?>" class="sw-nav-link">Liên Hệ & Khảo Sát</a>
            <div style="padding-top: 12px;">
                <a href="tel:0936543389" class="sw-btn sw-btn-primary" style="width: 100%;">
                    Gọi Ngay: 0936 543 389
                </a>
            </div>
        </div>
    </div>
</header>
