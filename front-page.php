<?php
/**
 * Front Page Template (Trang Chủ) - SANWAY
 * Monumental Industrial Haute-Engineering & Artistic Architecture
 *
 * @package SANWAY
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- =====================================================================
         1. MONUMENTAL ARTISTIC HERO SECTION
         ===================================================================== -->
    <section class="sw-art-hero">
        <!-- Giant Ghost Typography Watermark -->
        <div class="sw-hero-ghost-watermark">SANWAY ENGINEERING</div>

        <div class="sw-container">
            <div class="sw-hero-content-center">
                <!-- Technical Origin Badge -->
                <div class="sw-art-coordinate-label">
                    <span class="sw-art-dot-live"></span>
                    SANWAY JSC • HẢI PHÒNG • 20°51'N 106°41'E
                </div>

                <!-- Monumental Headline (TO VÀO - ĐẲNG CẤP QUỐC TẾ) -->
                <h1 class="sw-art-hero-headline">
                    <span class="sw-headline-break">LÁ CHẮN</span>
                    <span class="sw-headline-break sw-accent-gradient">AN TOÀN</span>
                    <span class="sw-headline-break">CÔNG NGHIỆP</span>
                </h1>

                <!-- Brand Slogan -->
                <div class="sw-art-hero-slogan">
                    "CHO MỖI BƯỚC TIẾN <span>THÊM VỮNG VÀNG</span>"
                </div>

                <!-- Minimal Narrative -->
                <p class="sw-art-hero-desc">
                    Hệ thống phòng cháy chữa cháy chuẩn mực quốc tế cho các đại công trình, nhà xưởng FDI và cơ sở sản xuất trọng điểm.
                </p>

                <!-- Monumental CTAs -->
                <div class="sw-art-hero-actions">
                    <a href="tel:0936543389" class="sw-btn-art-primary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>KHẢO SÁT DỰ ÁN: 0936 543 389</span>
                    </a>
                    <a href="<?php echo esc_url( function_exists( 'sanway_get_about_url' ) ? sanway_get_about_url() : home_url( '/gioi-thieu/' ) ); ?>" class="sw-btn-art-outline">
                        <span>HỒ SƠ NĂNG LỰC</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         2. MONUMENTAL NUMBERS (TRIỂN LÃM 3 CON SỐ KHỔNG LỒ)
         ===================================================================== -->
    <section class="sw-monumental-numbers-section">
        <div class="sw-container">
            <div class="sw-monumental-grid">
                <div class="sw-monumental-item">
                    <div class="sw-monumental-val">100<span>%</span></div>
                    <div class="sw-monumental-label">Kiểm Định Bộ Công An</div>
                    <div class="sw-monumental-sub">100% vật tư đạt chuẩn kiểm định & CO/CQ</div>
                </div>

                <div class="sw-monumental-item">
                    <div class="sw-monumental-val">24<span>/7</span></div>
                    <div class="sw-monumental-label">Trực Chiến Kỹ Thuật</div>
                    <div class="sw-monumental-sub">Sẵn sàng ứng cứu và bảo trì khẩn cấp</div>
                </div>

                <div class="sw-monumental-item">
                    <div class="sw-monumental-val">QCVN</div>
                    <div class="sw-monumental-label">Quy Chuẩn 06:2022/BXD</div>
                    <div class="sw-monumental-sub">Thẩm duyệt & nghiệm thu tiêu chuẩn tuyệt đối</div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         3. ARCHITECTURAL SHOWCASE (5 CỘT TRỤ GIẢI PHÁP - DẢI NGHỆ THUẬT)
         ===================================================================== -->
    <section class="sw-pillars-section" id="giai-phap">
        <div class="sw-container">
            <div class="sw-art-section-head">
                <span class="sw-art-tag">CỘT TRỤ GIẢI PHÁP</span>
                <h2 class="sw-art-section-title">HỆ SINH THÁI KỸ THUẬT PCCC</h2>
            </div>

            <div class="sw-pillar-list">
                <!-- Pillar 01 -->
                <div class="sw-pillar-row">
                    <div class="sw-pillar-index">01</div>
                    <div class="sw-pillar-title">BÁO CHÁY TỰ ĐỘNG</div>
                    <div class="sw-pillar-meta">
                        Tủ trung tâm địa chỉ đa kênh, cảm biến quang điện & laser BEAM phát hiện hỏa hoạn tức thời.
                    </div>
                </div>

                <!-- Pillar 02 -->
                <div class="sw-pillar-row">
                    <div class="sw-pillar-index">02</div>
                    <div class="sw-pillar-title">CHỮA CHÁY SPRINKLER</div>
                    <div class="sw-pillar-meta">
                        Mạng lưới đầu phun tự động phản ứng nhanh, cụm van tràn xả áp suất cao cho nhà xưởng.
                    </div>
                </div>

                <!-- Pillar 03 -->
                <div class="sw-pillar-row">
                    <div class="sw-pillar-index">03</div>
                    <div class="sw-pillar-title">TRẠM BƠM ĐẦU NÃO</div>
                    <div class="sw-pillar-meta">
                        Cụm máy bơm điện, máy bơm Diesel công suất lớn và tủ điều khiển tự động PLC liên động.
                    </div>
                </div>

                <!-- Pillar 04 -->
                <div class="sw-pillar-row">
                    <div class="sw-pillar-index">04</div>
                    <div class="sw-pillar-title">NĂNG LỰC NẠP SẠC</div>
                    <div class="sw-pillar-meta">
                        Xưởng nạp sạc bình khí CO2 (MT3) và bình bột ABC (MFZL4, MFZ35) đạt chuẩn kiểm định.
                    </div>
                </div>

                <!-- Pillar 05 -->
                <div class="sw-pillar-row">
                    <div class="sw-pillar-index">05</div>
                    <div class="sw-pillar-title">THẨM DUYỆT NGHIỆM THU</div>
                    <div class="sw-pillar-meta">
                        Tư vấn phương án thiết kế chuẩn QCVN, bảo chứng an toàn pháp lý tuyệt đối cho chủ đầu tư.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         4. BRAND MANIFESTO (TUYÊN NGÔN THƯƠNG HIỆU)
         ===================================================================== -->
    <section class="sw-manifesto-section">
        <div class="sw-container">
            <blockquote class="sw-manifesto-quote">
                "AN TOÀN LÀ <span>DANH DỰ</span>.<br>KỶ LUẬT KỸ THUẬT LÀ <span>SỨ MỆNH</span>."
            </blockquote>
        </div>
    </section>

    <!-- =====================================================================
         5. ARTISTIC CTA STAGE
         ===================================================================== -->
    <section class="sw-art-cta-section">
        <div class="sw-container">
            <div class="sw-art-cta-box">
                <span class="sw-art-tag">TRỰC TIẾP TỪ BAN ĐIỀU HÀNH</span>
                <h3 class="sw-art-cta-title">SẴN SÀNG BẢO VỆ CÔNG TRÌNH CỦA BẠN</h3>
                <p style="font-size: 16px; color: var(--sw-text-muted); max-width: 600px; margin: 0 auto;">
                    Kết nối trực tiếp cùng Giám Đốc SANWAY JSC để nhận phương án kỹ thuật và báo giá tối ưu.
                </p>

                <div>
                    <a href="tel:0936543389" class="sw-art-cta-hotline-giant">
                        0936 543 389
                    </a>
                </div>

                <div>
                    <a href="tel:0936543389" class="sw-btn-art-primary">
                        KẾT NỐI NGAY
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
