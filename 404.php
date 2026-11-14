<?php
/**
 * The template for displaying 404 pages (not found) - SANWAY
 *
 * @package SANWAY
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="sw-container" style="padding: 100px 0 120px 0; text-align: center; min-height: 65vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <div class="sw-hero-logo-row" style="margin-bottom: 32px;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-hero-logo-link" aria-label="SANWAY Homepage">
                <img src="<?php echo esc_url( sanway_get_logo_url( 'horizontal' ) ); ?>" alt="CÔNG TY CỔ PHẦN SANWAY" class="sw-hero-logo-img" style="height: 64px;">
            </a>
        </div>
        <span class="sw-tag-red" style="margin-bottom: 16px;">404 • KHÔNG TÌM THẤY TRANG</span>
        <h1 style="font-size: clamp(2.4rem, 5vw, 4rem); font-weight: 900; color: var(--sw-dark); margin-bottom: 20px;">
            NỘI DUNG NÀY ĐANG ĐƯỢC CẬP NHẬT
        </h1>
        <p style="font-size: 1.1rem; color: var(--sw-muted); max-width: 540px; margin-bottom: 36px;">
            Trang bạn đang tìm kiếm không tồn tại hoặc đã được thay đổi. Vui lòng quay lại Trang Chủ hoặc liên hệ trực tiếp với SANWAY.
        </p>
        <div style="display: flex; gap: 16px; flex-wrap: wrap; justify-content: center;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-btn-pos-primary">
                VỀ TRANG CHỦ SANWAY
            </a>
            <a href="tel:0936543389" class="sw-btn-pos-secondary">
                HOTLINE: 0936 543 389
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
