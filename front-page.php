<?php
/**
 * Front Page Template (Trang Chủ) - SANWAY
 * High-End Positive Architectural & Monumental Vision
 *
 * @package SANWAY
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- =====================================================================
         1. MONUMENTAL HERO SECTION (TO VÀO, TÍCH CỰC & TỰ TIN)
         ===================================================================== -->
    <section class="sw-pos-hero">
        <!-- Ghost Typography Background Watermark -->
        <div class="sw-hero-ghost-light">SANWAY JSC</div>

        <div class="sw-container">
            <div class="sw-pos-hero-content">
                <!-- Positive Energy Badge -->
                <div class="sw-pos-badge">
                    <span class="sw-pos-dot"></span>
                    SANWAY JSC • AN TOÀN ĐỂ PHÁT TRIỂN THỊNH VƯỢNG
                </div>

                <!-- Monumental Headline (TO VÀO - TÍCH CỰC - MẠNH MẼ) -->
                <h1 class="sw-pos-hero-title">
                    <span class="sw-line">KIẾN TẠO AN TÂM</span>
                    <span class="sw-line sw-text-red">VỮNG BƯỚC TIẾN XA</span>
                </h1>

                <!-- Brand Slogan -->
                <div class="sw-pos-slogan">
                    "CHO MỖI BƯỚC TIẾN <span>THÊM VỮNG VÀNG</span>"
                </div>

                <!-- Uplifting Narrative -->
                <p class="sw-pos-desc">
                    Đồng hành cùng sự thịnh vượng và phát triển bền vững của doanh nghiệp bằng các giải pháp kỹ thuật phòng cháy chữa cháy tiêu chuẩn hàng đầu.
                </p>

                <!-- Monumental CTAs -->
                <div class="sw-pos-actions">
                    <a href="tel:0936543389" class="sw-btn-pos-primary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>KHẢO SÁT KỸ THUẬT: 0936 543 389</span>
                    </a>
                    <a href="<?php echo esc_url( function_exists( 'sanway_get_about_url' ) ? sanway_get_about_url() : home_url( '/gioi-thieu/' ) ); ?>" class="sw-btn-pos-secondary">
                        <span>HỒ SƠ NĂNG LỰC</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         2. MONUMENTAL NUMBERS (TRIỂN LÃM 3 CON SỐ - SÁNG SỦA & UY TÍN)
         ===================================================================== -->
    <section class="sw-pos-numbers-section">
        <div class="sw-container">
            <div class="sw-pos-numbers-grid">
                <div class="sw-pos-num-item">
                    <div class="sw-pos-num-val">100<span>%</span></div>
                    <div class="sw-pos-num-title">Đạt Chuẩn Kiểm Định Quốc Gia</div>
                    <div class="sw-pos-num-sub">100% thiết bị đạt chuẩn kiểm định & CO/CQ minh bạch</div>
                </div>

                <div class="sw-pos-num-item">
                    <div class="sw-pos-num-val">24<span>/7</span></div>
                    <div class="sw-pos-num-title">Đồng Hành Toàn Thời Gian</div>
                    <div class="sw-pos-num-sub">Kỹ sư túc trực bảo trì và ứng cứu nhanh tại các KCN</div>
                </div>

                <div class="sw-pos-num-item">
                    <div class="sw-pos-num-val">TCVN</div>
                    <div class="sw-pos-num-title">Tiêu Chuẩn Vượt Trội</div>
                    <div class="sw-pos-num-sub">Tuân thủ nghiêm ngặt chuẩn QCVN 06:2022/BXD</div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         3. ARCHITECTURAL SHOWCASE (5 CỘT TRỤ GIẢI PHÁP - SÁNG SỦA, CAO CẤP)
         ===================================================================== -->
    <section class="sw-pos-pillars-section" id="giai-phap">
        <div class="sw-container">
            <div class="sw-pos-section-head">
                <span class="sw-pos-section-tag">HỆ SINH THÁI KỸ THUẬT</span>
                <h2 class="sw-pos-section-title">GIẢI PHÁP AN TOÀN TOÀN DIỆN</h2>
            </div>

            <div class="sw-pos-pillar-list">
                <!-- Pillar 01 -->
                <div class="sw-pos-pillar-row">
                    <div class="sw-pos-pillar-idx">01</div>
                    <div class="sw-pos-pillar-title">BÁO CHÁY TỰ ĐỘNG</div>
                    <div class="sw-pos-pillar-desc">
                        Tủ trung tâm địa chỉ thông minh, cảm biến quang điện & laser BEAM độ nhạy cao.
                    </div>
                </div>

                <!-- Pillar 02 -->
                <div class="sw-pos-pillar-row">
                    <div class="sw-pos-pillar-idx">02</div>
                    <div class="sw-pos-pillar-title">CHỮA CHÁY SPRINKLER</div>
                    <div class="sw-pos-pillar-desc">
                        Mạng lưới đầu phun tự động phản ứng nhanh bảo vệ toàn vẹn tài sản doanh nghiệp.
                    </div>
                </div>

                <!-- Pillar 03 -->
                <div class="sw-pos-pillar-row">
                    <div class="sw-pos-pillar-idx">03</div>
                    <div class="sw-pos-pillar-title">TRẠM BƠM ĐẦU NÃO</div>
                    <div class="sw-pos-pillar-desc">
                        Động cơ điện & Diesel công suất lớn, tủ điều khiển tự động hóa duy trì áp lực liên tục.
                    </div>
                </div>

                <!-- Pillar 04 -->
                <div class="sw-pos-pillar-row">
                    <div class="sw-pos-pillar-idx">04</div>
                    <div class="sw-pos-pillar-title">KIỂM ĐỊNH & NẠP SẠC</div>
                    <div class="sw-pos-pillar-desc">
                        Quy trình kiểm tra định kỳ, nạp sạc bình khí CO2 và bột ABC đạt chuẩn kiểm định.
                    </div>
                </div>

                <!-- Pillar 05 -->
                <div class="sw-pos-pillar-row">
                    <div class="sw-pos-pillar-idx">05</div>
                    <div class="sw-pos-pillar-title">THẨM DUYỆT NGHIỆM THU</div>
                    <div class="sw-pos-pillar-desc">
                        Hồ sơ thiết kế chuẩn mực, bảo chứng an toàn pháp lý tuyệt đối cho chủ đầu tư.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         4. POSITIVE MANIFESTO (TUYÊN NGÔN TRUYỀN CẢM HỨNG)
         ===================================================================== -->
    <section class="sw-pos-manifesto-section">
        <div class="sw-container">
            <blockquote class="sw-pos-manifesto-quote">
                "AN TOÀN LÀ NỀN TẢNG • THỊNH VƯỢNG LÀ <span>ĐÍCH ĐẾN</span>"
            </blockquote>
        </div>
    </section>

    <!-- =====================================================================
         5. POSITIVE CTA STAGE
         ===================================================================== -->
    <section class="sw-pos-cta-section">
        <div class="sw-container">
            <div class="sw-pos-cta-box">
                <span class="sw-pos-section-tag">ĐỒNG HÀNH CÙNG DOANH NGHIỆP</span>
                <h3 class="sw-pos-cta-title">SẴN SÀNG KIẾN TẠO SỰ AN TÂM CÙNG BẠN</h3>
                <p style="font-size: 17px; color: var(--sw-slate); max-width: 620px; margin: 0 auto;">
                    Kết nối trực tiếp cùng Giám Đốc SANWAY JSC để nhận phương án kỹ thuật và giải pháp tối ưu.
                </p>

                <div>
                    <a href="tel:0936543389" class="sw-pos-cta-phone">
                        0936 543 389
                    </a>
                </div>

                <div>
                    <a href="tel:0936543389" class="sw-btn-pos-primary">
                        KẾT NỐI NGAY
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
