<?php
/**
 * Footer template for SANWAY Theme
 *
 * @package SANWAY
 */
?>
<footer class="sw-footer" id="lien-he">
    <div class="sw-container">
        <div class="sw-footer-grid">
            <!-- Col 1: About SANWAY -->
            <div class="sw-footer-col">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-logo-brand" style="margin-bottom: 16px;">
                    <?php 
                    $logo_url = function_exists( 'sanway_get_logo_url' ) ? sanway_get_logo_url( 'horizontal' ) : '';
                    if ( $logo_url ) : ?>
                        <img src="<?php echo esc_url( $logo_url ); ?>" alt="SANWAY PCCC" style="height: 44px; filter: brightness(0) invert(1);">
                    <?php else : ?>
                        <span class="sw-brand-name" style="color: #FFFFFF;">SANWAY JSC</span>
                    <?php endif; ?>
                </a>
                <p class="sw-footer-about">
                    <strong>SANWAY JSC</strong> — Thiết bị, giải pháp thi công và bảo trì hệ thống PCCC tiêu chuẩn cho doanh nghiệp và nhà xưởng công nghiệp.
                </p>
                <div style="font-size: 13.5px; color: #94A3B8; line-height: 1.6;">
                    <em>"Cho mỗi bước tiến thêm vững vàng"</em>
                </div>
            </div>

            <!-- Col 2: Navigation & Services -->
            <div class="sw-footer-col">
                <h4 class="sw-footer-col-title">Doanh Nghiệp & Dịch Vụ</h4>
                <ul class="sw-footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-footer-link">Trang Chủ</a></li>
                    <li><a href="<?php echo esc_url( function_exists( 'sanway_get_about_url' ) ? sanway_get_about_url() : home_url( '/gioi-thieu/' ) ); ?>" class="sw-footer-link">Hồ Sơ Năng Lực (Giới Thiệu)</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#giai-phap' ) ); ?>" class="sw-footer-link">Báo Cháy & Chữa Cháy Tự Động</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#giai-phap' ) ); ?>" class="sw-footer-link">Trạm Bơm & Nạp Sạc Bình PCCC</a></li>
                </ul>
            </div>

            <!-- Col 3: Contact Details -->
            <div class="sw-footer-col">
                <h4 class="sw-footer-col-title">Thông Tin Liên Hệ</h4>
                <ul class="sw-footer-contact-list">
                    <li class="sw-footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span>Số 35/51 Trung Lực, phường Hải An, TP. Hải Phòng</span>
                    </li>
                    <li class="sw-footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>
                            Hotline: <strong style="color: #FFFFFF;">0936 543 389</strong><br>
                            Phụ trách kinh doanh: 0936 888 666
                        </span>
                    </li>
                    <li class="sw-footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                        <span>Email: sanway.pccc@gmail.com</span>
                    </li>
                    <li class="sw-footer-contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                        <span>Website: www.sanway.vn</span>
                    </li>
                </ul>
            </div>

            <!-- Col 4: Corporate Governance & Direct Support -->
            <div class="sw-footer-col">
                <h4 class="sw-footer-col-title">Pháp Nhân & Cam Kết</h4>
                <div style="background: rgba(255, 255, 255, 0.05); padding: 18px; border-radius: 12px; border: 1px solid rgba(255, 255, 255, 0.1);">
                    <div style="font-size: 13.5px; color: #FFFFFF; font-weight: 700; margin-bottom: 6px;">
                        Giám Đốc Điều Hành:
                    </div>
                    <div style="font-size: 15px; color: #F87171; font-weight: 800; margin-bottom: 12px;">
                        ĐỖ THỊ BÍCH VÂN
                    </div>
                    <div style="font-size: 13px; color: #94A3B8; line-height: 1.5;">
                        • Thiết bị kiểm định chuẩn TCVN<br>
                        • Trực kỹ thuật khẩn cấp 24/7<br>
                        • Bảo hành công trình 12 - 24 tháng
                    </div>
                </div>
            </div>
        </div>

        <div class="sw-footer-bottom">
            <div>
                © <?php echo esc_html( date( 'Y' ) ); ?> <strong>CÔNG TY CỔ PHẦN SANWAY (SANWAY JSC)</strong>. Mọi quyền được bảo lưu.
            </div>
            <div>
                Tiêu chuẩn thiết kế & thi công PCCC: TCVN 3890 - QCVN 06:2022/BXD
            </div>
        </div>
    </div>
</footer>

<!-- Mobile Floating Call Bar -->
<div class="sw-mobile-floating-bar">
    <div class="sw-mobile-floating-inner">
        <a href="tel:0936543389" class="sw-btn sw-btn-primary sw-btn-sm" style="width: 100%;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            Gọi 0936 543 389
        </a>
        <a href="https://zalo.me/0936543389" target="_blank" rel="noopener noreferrer" class="sw-btn sw-btn-secondary sw-btn-sm" style="width: 100%;">
            Tư vấn qua Zalo
        </a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Persistent Header shadow on scroll
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
