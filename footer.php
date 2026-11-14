<?php
/**
 * Footer template for SANWAY Theme
 * High-End Minimalist Corporate Footer
 *
 * @package SANWAY
 */
?>
<footer class="sw-pos-footer" id="lien-he">
    <div class="sw-container">
        <div class="sw-pos-footer-grid">
            <!-- Brand & Slogan -->
            <div class="sw-pos-footer-col">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: inline-block; margin-bottom: 24px;">
                    <?php 
                    $logo_white = function_exists( 'sanway_get_logo_url' ) ? sanway_get_logo_url( 'white' ) : '';
                    if ( $logo_white ) : ?>
                        <img src="<?php echo esc_url( $logo_white ); ?>" alt="SANWAY PCCC" style="height: 56px; width: auto;">
                    <?php else : ?>
                        <span style="font-size: 26px; font-weight: 900; color: #FFFFFF;">SANWAY JSC</span>
                    <?php endif; ?>
                </a>
                <div style="font-size: 15px; color: #F87171; font-weight: 800; letter-spacing: 0.04em; text-transform: uppercase;">
                    "CHO MỖI BƯỚC TIẾN THÊM VỮNG VÀNG"
                </div>
            </div>

            <!-- Direct Contact -->
            <div class="sw-pos-footer-col">
                <h4 class="sw-pos-footer-col-title">CÔNG TY CỔ PHẦN SANWAY</h4>
                <div style="display: flex; flex-direction: column; gap: 14px;">
                    <div class="sw-pos-footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Số 35/51 Trung Lực, P. Hải An, TP. Hải Phòng</span>
                    </div>

                    <div class="sw-pos-footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>
                            Hotline: <strong style="color: #FFFFFF; font-size: 16px;">0936 543 389</strong>
                        </span>
                    </div>

                    <div class="sw-pos-footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>Email: sanway.pccc@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="sw-pos-footer-bottom">
            <div>
                © <?php echo esc_html( date( 'Y' ) ); ?> <strong>CÔNG TY CỔ PHẦN SANWAY (SANWAY JSC)</strong>. Mọi quyền được bảo lưu.
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
