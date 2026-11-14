<?php
/**
 * Footer template for SANWAY Theme
 * High-End Positive Architectural Footer
 *
 * @package SANWAY
 */
?>
<footer class="sw-pos-footer" id="lien-he">
    <div class="sw-container">
        <div class="sw-pos-footer-grid">
            <!-- Col 1: About SANWAY -->
            <div class="sw-pos-footer-col">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: inline-block; margin-bottom: 20px;">
                    <?php 
                    $logo_white = function_exists( 'sanway_get_logo_url' ) ? sanway_get_logo_url( 'white' ) : '';
                    if ( $logo_white ) : ?>
                        <img src="<?php echo esc_url( $logo_white ); ?>" alt="SANWAY PCCC" style="height: 52px; width: auto;">
                    <?php else : ?>
                        <span style="font-size: 24px; font-weight: 900; color: #FFFFFF;">SANWAY JSC</span>
                    <?php endif; ?>
                </a>
                <p style="font-size: 14.5px; line-height: 1.65; color: #94A3B8; margin-bottom: 16px;">
                    <strong>CÔNG TY CỔ PHẦN SANWAY</strong> — Đơn vị chuyên sâu cung cấp thiết bị, giải pháp thi công và bảo chứng an toàn hệ thống PCCC tiêu chuẩn cho doanh nghiệp và nhà máy công nghiệp.
                </p>
                <div style="font-size: 13.5px; color: #F87171; font-weight: 700; letter-spacing: 0.04em;">
                    <em>"CHO MỖI BƯỚC TIẾN THÊM VỮNG VÀNG"</em>
                </div>
            </div>

            <!-- Col 2: Navigation & Solutions -->
            <div class="sw-pos-footer-col">
                <h4 class="sw-pos-footer-col-title">Doanh Nghiệp & Dịch Vụ</h4>
                <div class="sw-pos-footer-list">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-pos-footer-link">Trang Chủ</a>
                    <a href="<?php echo esc_url( function_exists( 'sanway_get_about_url' ) ? sanway_get_about_url() : home_url( '/gioi-thieu/' ) ); ?>" class="sw-pos-footer-link">Hồ Sơ Năng Lực (Giới Thiệu)</a>
                    <a href="<?php echo esc_url( home_url( '/#giai-phap' ) ); ?>" class="sw-pos-footer-link">Báo Cháy & Chữa Cháy Tự Động</a>
                    <a href="<?php echo esc_url( home_url( '/#giai-phap' ) ); ?>" class="sw-pos-footer-link">Trạm Bơm & Nạp Sạc Bình PCCC</a>
                    <a href="<?php echo esc_url( home_url( '/#giai-phap' ) ); ?>" class="sw-pos-footer-link">Tư Vấn Thẩm Duyệt Nghiệm Thu</a>
                </div>
            </div>

            <!-- Col 3: Contact Details & Executive -->
            <div class="sw-pos-footer-col">
                <h4 class="sw-pos-footer-col-title">Thông Tin Liên Hệ</h4>
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
                            Hotline: <strong style="color: #FFFFFF; font-size: 16px;">0936 543 389</strong> (Đỗ Thị Bích Vân)<br>
                            Phụ trách kinh doanh: 0936 888 666
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
            <div>
                Tiêu chuẩn thiết kế & thi công PCCC: TCVN 3890 - QCVN 06:2022/BXD
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('swHeader');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 20) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }
        }, { passive: true });
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>
