<?php
/**
 * Front Page Template (Trang Chủ) - SANWAY
 * Chuẩn cấu trúc 9 phần:
 * 01 — Hero Banner & Thông điệp thương hiệu
 * 02 — Giới thiệu SANWAY
 * 03 — Ba lĩnh vực hoạt động
 * 04 — Dịch vụ PCCC trọng tâm
 * 05 — Năng lực triển khai
 * 06 — Quy trình làm việc
 * 07 — Cam kết của SANWAY
 * 08 — Đồng hành và hợp tác
 * 09 — Kết nối cùng SANWAY
 *
 * @package SANWAY
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- =====================================================================
         01 — Hero Banner & Thông điệp thương hiệu
         ===================================================================== -->
    <section class="sw-pos-hero" id="hero">
        <div class="sw-hero-ghost-light">SANWAY JSC</div>

        <div class="sw-container">
            <div class="sw-pos-hero-content">
                <div class="sw-pos-badge">
                    <span class="sw-pos-dot"></span>
                    SANWAY JSC • AN TOÀN ĐỂ PHÁT TRIỂN THỊNH VƯỢNG
                </div>

                <h1 class="sw-pos-hero-title">
                    <span class="sw-line">KIẾN TẠO AN TÂM</span>
                    <span class="sw-line sw-text-red">VỮNG BƯỚC TIẾN XA</span>
                </h1>

                <div class="sw-pos-slogan">
                    "CHO MỖI BƯỚC TIẾN <span>THÊM VỮNG VÀNG</span>"
                </div>

                <p class="sw-pos-desc">
                    Đồng hành cùng sự thịnh vượng và an toàn bền vững của doanh nghiệp bằng hệ thống giải pháp kỹ thuật phòng cháy chữa cháy tiêu chuẩn hàng đầu.
                </p>

                <div class="sw-pos-actions">
                    <a href="<?php echo esc_url( function_exists( 'sanway_get_contact_url' ) ? sanway_get_contact_url() : home_url( '/lien-he/' ) ); ?>" class="sw-btn-pos-primary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>LIÊN HỆ & BÁO GIÁ: 0936 543 389</span>
                    </a>
                    <a href="#gioi-thieu" class="sw-btn-pos-secondary">
                        <span>TÌM HIỂU SANWAY</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         02 — Giới thiệu SANWAY
         ===================================================================== -->
    <section class="sw-pos-section sw-bg-subtle" id="gioi-thieu">
        <div class="sw-container">
            <div class="sw-about-story-box">
                <span class="sw-pos-section-tag">02 / VỀ CHÚNG TÔI</span>
                <h2 class="sw-pos-section-title" style="margin-bottom: 24px;">CÔNG TY CỔ PHẦN SANWAY</h2>
                <div class="sw-pos-slogan" style="font-size: 1.4rem; margin-bottom: 20px;">
                    <em>"CHO MỖI BƯỚC TIẾN <span>THÊM VỮNG VÀNG</span>"</em>
                </div>
                <p style="font-size: 17.5px; line-height: 1.75; color: var(--sw-slate); max-width: 860px; margin: 0 auto 28px auto;">
                    <strong>SANWAY JSC</strong> là doanh nghiệp chuyên sâu trong lĩnh vực tư vấn, thiết kế, cung cấp trang thiết bị và thi công bảo trì hệ thống Phòng Cháy Chữa Cháy (PCCC) cho các cơ sở sản xuất, nhà xưởng FDI và công trình trọng điểm tại Hải Phòng và khu vực miền Bắc. Chúng tôi tin rằng: <strong>An toàn là nền tảng cốt lõi của mọi sự phát triển hưng thịnh.</strong>
                </p>
                <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                    <div class="sw-badge-pill">✓ Pháp nhân minh bạch</div>
                    <div class="sw-badge-pill">✓ Tiêu chuẩn QCVN 06:2022/BXD</div>
                    <div class="sw-badge-pill">✓ Kỹ sư chứng chỉ hành nghề</div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         03 — Ba lĩnh vực hoạt động
         ===================================================================== -->
    <section class="sw-pos-section" id="linh-vuc">
        <div class="sw-container">
            <div class="sw-pos-section-head">
                <span class="sw-pos-section-tag">03 / PHẠM VI NĂNG LỰC</span>
                <h2 class="sw-pos-section-title">BA LĨNH VỰC HOẠT ĐỘNG CHÍNH</h2>
            </div>

            <div class="sw-triad-grid">
                <!-- Field 1 -->
                <div class="sw-triad-card">
                    <div class="sw-triad-number">01</div>
                    <h3 class="sw-triad-title">CUNG ỨNG VẬT TƯ & THIẾT BỊ</h3>
                    <p class="sw-triad-desc">
                        Cung cấp hơn 47+ danh mục trang thiết bị báo cháy, bình chữa cháy bột và khí CO2, van vòi lăng phun chính hãng, đầy đủ kiểm định CO/CQ.
                    </p>
                </div>

                <!-- Field 2 -->
                <div class="sw-triad-card">
                    <div class="sw-triad-number">02</div>
                    <h3 class="sw-triad-title">THI CÔNG & LẮP ĐẶT HỆ THỐNG</h3>
                    <p class="sw-triad-desc">
                        Tổng thầu thi công lắp đặt trọn gói hệ thống báo cháy tự động địa chỉ, mạng lưới chữa cháy Sprinkler và cụm trạm bơm công nghiệp công suất lớn.
                    </p>
                </div>

                <!-- Field 3 -->
                <div class="sw-triad-card">
                    <div class="sw-triad-number">03</div>
                    <h3 class="sw-triad-title">BẢO TRÌ & THẨM DUYỆT PHÁP LÝ</h3>
                    <p class="sw-triad-desc">
                        Hợp đồng bảo dưỡng định kỳ cho nhà máy FDI, nạp sạc bình PCCC thu nhận tận nơi, tư vấn thiết kế và hỗ trợ thủ tục nghiệm thu Cảnh sát PCCC.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         04 — Dịch vụ PCCC trọng tâm
         ===================================================================== -->
    <section class="sw-pos-pillars-section sw-bg-subtle" id="dich-vu">
        <div class="sw-container">
            <div class="sw-pos-section-head">
                <span class="sw-pos-section-tag">04 / DỊCH VỤ TRỌNG TÂM</span>
                <h2 class="sw-pos-section-title">HỆ SINH THÁI GIẢI PHÁP KỸ THUẬT</h2>
            </div>

            <div class="sw-pos-pillar-list">
                <div class="sw-pos-pillar-row">
                    <div class="sw-pos-pillar-idx">01</div>
                    <div class="sw-pos-pillar-title">BÁO CHÁY TỰ ĐỘNG</div>
                    <div class="sw-pos-pillar-desc">
                        Tủ trung tâm địa chỉ thông minh, cảm biến quang điện, nhiệt gia tăng & laser BEAM độ nhạy cao.
                    </div>
                </div>

                <div class="sw-pos-pillar-row">
                    <div class="sw-pos-pillar-idx">02</div>
                    <div class="sw-pos-pillar-title">CHỮA CHÁY SPRINKLER</div>
                    <div class="sw-pos-pillar-desc">
                        Mạng lưới đầu phun tự động phản ứng nhanh, cụm van tràn xả áp suất cao bảo vệ an toàn nhà xưởng.
                    </div>
                </div>

                <div class="sw-pos-pillar-row">
                    <div class="sw-pos-pillar-idx">03</div>
                    <div class="sw-pos-pillar-title">TRẠM BƠM ĐẦU NÃO</div>
                    <div class="sw-pos-pillar-desc">
                        Động cơ điện & Diesel công suất lớn, tủ điều khiển tự động hóa PLC duy trì liên tục áp lực nguồn nước.
                    </div>
                </div>

                <div class="sw-pos-pillar-row">
                    <div class="sw-pos-pillar-idx">04</div>
                    <div class="sw-pos-pillar-title">KIỂM ĐỊNH & NẠP SẠC BÌNH</div>
                    <div class="sw-pos-pillar-desc">
                        Quy trình kiểm tra định kỳ, nạp sạc khí CO2 và bình bột ABC đạt chuẩn kiểm định, giao nhận tận nơi.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         05 — Năng lực triển khai
         ===================================================================== -->
    <section class="sw-pos-numbers-section" id="nang-luc">
        <div class="sw-container">
            <div class="sw-pos-section-head" style="margin-bottom: 48px;">
                <span class="sw-pos-section-tag">05 / NĂNG LỰC THỰC CHIẾN</span>
                <h2 class="sw-pos-section-title">CHỨNG MINH BẰNG NĂNG LỰC</h2>
            </div>

            <div class="sw-pos-numbers-grid">
                <div class="sw-pos-num-item">
                    <div class="sw-pos-num-val">47<span>+</span></div>
                    <div class="sw-pos-num-title">Chủng Loại Thiết Bị Sẵn Kho</div>
                    <div class="sw-pos-num-sub">Cung ứng nhanh chóng, đồng bộ mọi quy mô công trình</div>
                </div>

                <div class="sw-pos-num-item">
                    <div class="sw-pos-num-val">100<span>%</span></div>
                    <div class="sw-pos-num-title">Đạt Chuẩn Kiểm Định Quốc Gia</div>
                    <div class="sw-pos-num-sub">Hồ sơ pháp lý CO/CQ đầy đủ và minh bạch</div>
                </div>

                <div class="sw-pos-num-item">
                    <div class="sw-pos-num-val">24<span>/7</span></div>
                    <div class="sw-pos-num-title">Đồng Hành Kỹ Thuật Toàn Thời Gian</div>
                    <div class="sw-pos-num-sub">Đội ngũ kỹ sư túc trực bảo trì và xử lý nhanh tại KCN</div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         06 — Quy trình làm việc
         ===================================================================== -->
    <section class="sw-pos-section" id="quy-trinh">
        <div class="sw-container">
            <div class="sw-pos-section-head">
                <span class="sw-pos-section-tag">06 / PHƯƠNG PHÁP TRIỂN KHAI</span>
                <h2 class="sw-pos-section-title">4 BƯỚC TIÊU CHUẨN MINH BẠCH</h2>
            </div>

            <div class="sw-workflow-grid">
                <div class="sw-workflow-step">
                    <div class="sw-step-badge">GIAI ĐOẠN 01</div>
                    <h3 class="sw-step-heading">Khảo Sát Hiện Trường</h3>
                    <p class="sw-step-text">Đo đạc thực tế, tiếp nhận yêu cầu và đánh giá công năng công trình.</p>
                </div>

                <div class="sw-workflow-step">
                    <div class="sw-step-badge">GIAI ĐOẠN 02</div>
                    <h3 class="sw-step-heading">Thiết Kế & Dự Toán</h3>
                    <p class="sw-step-text">Lập bản vẽ kỹ thuật tối ưu chi phí và bóc tách bảng báo giá minh bạch.</p>
                </div>

                <div class="sw-workflow-step">
                    <div class="sw-step-badge">GIAI ĐOẠN 03</div>
                    <h3 class="sw-step-heading">Thi Công & Hiệu Chỉnh</h3>
                    <p class="sw-step-text">Lắp đặt thiết bị chính hãng và chạy thử nghiệm liên động toàn hệ thống.</p>
                </div>

                <div class="sw-workflow-step">
                    <div class="sw-step-badge">GIAI ĐOẠN 04</div>
                    <h3 class="sw-step-heading">Nghiệm Thu & Bảo Hành</h3>
                    <p class="sw-step-text">Nghiệm thu với cơ quan Cảnh sát PCCC và kích hoạt bảo hành bảo trì.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         07 — Cam kết của SANWAY
         ===================================================================== -->
    <section class="sw-pos-section sw-bg-subtle" id="cam-ket">
        <div class="sw-container">
            <div class="sw-pos-section-head">
                <span class="sw-pos-section-tag">07 / NGUYÊN TẮC VÀNG</span>
                <h2 class="sw-pos-section-title">CAM KẾT CỦA SANWAY</h2>
            </div>

            <div class="sw-commit-grid">
                <div class="sw-commit-card">
                    <div class="sw-commit-icon">✓</div>
                    <h4 class="sw-commit-title">100% Chuẩn Kiểm Định</h4>
                    <p class="sw-commit-text">Mọi thiết bị đều đạt kiểm định chất lượng của Cảnh sát PCCC và có CO/CQ rõ ràng.</p>
                </div>

                <div class="sw-commit-card">
                    <div class="sw-commit-icon">✓</div>
                    <h4 class="sw-commit-title">Đúng Tiến Độ & Dự Toán</h4>
                    <p class="sw-commit-text">Cam kết bàn giao công trình đúng hẹn, không phát sinh chi phí ngoài hợp đồng.</p>
                </div>

                <div class="sw-commit-card">
                    <div class="sw-commit-icon">✓</div>
                    <h4 class="sw-commit-title">Bảo Hành 12 - 24 Tháng</h4>
                    <p class="sw-commit-text">Chính sách bảo hành dài hạn cùng dịch vụ bảo trì định kỳ chu đáo trọn vòng đời.</p>
                </div>

                <div class="sw-commit-card">
                    <div class="sw-commit-icon">✓</div>
                    <h4 class="sw-commit-title">Trực Kỹ Thuật 24/7</h4>
                    <p class="sw-commit-text">Đội ngũ kỹ thuật viên sẵn sàng ứng cứu và hỗ trợ sự cố khẩn cấp tại các KCN.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         08 — Đồng hành và hợp tác
         ===================================================================== -->
    <section class="sw-pos-manifesto-section" id="dong-hanh">
        <div class="sw-container">
            <span class="sw-pos-section-tag" style="color: #F87171; margin-bottom: 16px;">08 / ĐỒNG HÀNH CHIẾN LƯỢC</span>
            <blockquote class="sw-pos-manifesto-quote" style="margin-bottom: 24px;">
                "AN TOÀN LÀ NỀN TẢNG • THỊNH VƯỢNG LÀ <span>ĐÍCH ĐẾN</span>"
            </blockquote>
            <p style="font-size: 18px; color: #CBD5E1; max-width: 760px; margin: 0 auto; line-height: 1.65;">
                SANWAY tự hào là đối tác đồng hành tin cậy của các chủ đầu tư, tổng thầu xây dựng và ban quản lý tại các KCN trọng điểm: Nomura, Đình Vũ, Tràng Duệ, VSIP, Nam Cầu Kiền...
            </p>
        </div>
    </section>

    <!-- =====================================================================
         09 — Kết nối cùng SANWAY
         ===================================================================== -->
    <section class="sw-pos-cta-section" id="ket-noi">
        <div class="sw-container">
            <div class="sw-pos-cta-box">
                <span class="sw-pos-section-tag">09 / KẾT NỐI HỢP TÁC</span>
                <h3 class="sw-pos-cta-title">SẴN SÀNG KIẾN TẠO SỰ AN TÂM CÙNG BẠN</h3>
                <p style="font-size: 17px; color: var(--sw-slate); max-width: 620px; margin: 0 auto;">
                    Kết nối trực tiếp cùng Giám Đốc SANWAY JSC để nhận tư vấn kỹ thuật và báo giá chi tiết cho công trình.
                </p>

                <div>
                    <a href="tel:0936543389" class="sw-pos-cta-phone">
                        0936 543 389
                    </a>
                </div>

                <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                    <a href="tel:0936543389" class="sw-btn-pos-primary">
                        GỌI 0936 543 389
                    </a>
                    <a href="<?php echo esc_url( function_exists( 'sanway_get_contact_url' ) ? sanway_get_contact_url() : home_url( '/lien-he/' ) ); ?>" class="sw-btn-pos-secondary">
                        GỬI YÊU CẦU BÁO GIÁ
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
