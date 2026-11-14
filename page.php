<?php
/**
 * The template for displaying all single pages - SANWAY
 *
 * @package SANWAY
 */

// If page slug is 'lien-he' or 'contact', render page-contact.php
if ( is_page( array( 'lien-he', 'contact' ) ) ) {
    get_template_part( 'page-contact' );
    return;
}

get_header();
?>

<main id="primary" class="site-main">
    <div class="sw-container" style="padding: 72px 0 96px 0; min-height: 60vh;">
        <!-- Brand Logo (Top navigation back to home) -->
        <div class="sw-hero-logo-row" style="margin-bottom: 40px;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-hero-logo-link" aria-label="SANWAY Homepage">
                <img src="<?php echo esc_url( sanway_get_logo_url( 'horizontal' ) ); ?>" alt="CÔNG TY CỔ PHẦN SANWAY" class="sw-hero-logo-img" style="height: 64px;">
            </a>
        </div>

        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header" style="margin-bottom: 32px;">
                    <h1 class="entry-title" style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 900; color: var(--sw-dark); letter-spacing: -0.02em;">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <div class="entry-content" style="font-size: 1.1rem; line-height: 1.85; color: var(--sw-gray-body);">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
