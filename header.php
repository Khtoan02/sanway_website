<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( "charset" ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header border-b border-slate-100 py-4">
    <div class="container mx-auto px-4 flex items-center justify-between">
        <div class="site-branding">
            <a href="<?php echo esc_url( home_url( "/" ) ); ?>" class="font-black text-2xl tracking-wider text-red-600">
                SANWAY
            </a>
        </div>
        <nav class="main-navigation">
            <?php
            wp_nav_menu( array(
                "theme_location" => "primary",
                "menu_class"     => "nav-menu flex gap-6 text-sm font-medium text-slate-700",
                "fallback_cb"    => false,
            ) );
            ?>
        </nav>
    </div>
</header>
