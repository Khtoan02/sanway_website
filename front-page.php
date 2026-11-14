<?php
/**
 * Front Page Template (Trang Chủ) - SANWAY
 * Chuẩn cấu trúc 7 phần & hình ảnh đồ họa chủ đạo:
 * 01. Hero               — Slogan + 1 câu mô tả   | Công trình 3D tổng thể (21:9)
 * 02. Lĩnh vực hoạt động — 3 tên lĩnh vực         | 3 khối hình ảnh lớn
 * 03. Giải pháp PCCC     — 4 nhóm dịch vụ         | Mô hình hệ thống kỹ thuật 3D
 * 04. Đối tác toàn diện  — 3 giá trị              | Mặt cắt công trình tích hợp
 * 05. Quy trình          — 5 bước ngắn            | Đồ họa timeline liên tục
 * 06. Đồng hành & Hợp tác— 6 loại hình công trình | Lưới ảnh kiến trúc
 * 07. Kết nối            — Slogan + CTA           | Hình ảnh kiến trúc toàn cảnh
 *
 * @package SANWAY
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- =====================================================================
         01. HERO (Logo Doanh Nghiệp + Slogan + 1 Câu Mô Tả | Kiến Trúc 21:9 Sảnh Đỏ)
         ===================================================================== -->
    <section class="sw-hero-219" id="hero">
        <!-- Architectural Building Background & Precision Gradient Overlay -->
        <div class="sw-hero-bg-wrapper">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-building-facade.jpg' ); ?>" alt="CÔNG TY CỔ PHẦN SANWAY - Hệ thống PCCC Chuẩn Mực Quốc Tế" class="sw-hero-bg-img">
            <div class="sw-hero-gradient-overlay"></div>
        </div>

        <div class="sw-container sw-hero-container">
            <!-- Brand Logo Đặt Trực Tiếp Vào Section 1 (Kích Thước Lớn, Sang Trọng) -->
            <div class="sw-hero-logo-row">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-hero-logo-link" aria-label="SANWAY Homepage">
                    <?php 
                    $logo_url = function_exists( 'sanway_get_logo_url' ) ? sanway_get_logo_url( 'horizontal' ) : '';
                    if ( $logo_url ) : ?>
                        <img src="<?php echo esc_url( $logo_url ); ?>" alt="CÔNG TY CỔ PHẦN SANWAY" class="sw-hero-logo-img">
                    <?php else : ?>
                        <div class="sw-logo-text-wrapper">
                            <span class="sw-brand-name">SANWAY</span>
                            <span class="sw-brand-tagline">Phòng Cháy Chữa Cháy</span>
                        </div>
                    <?php endif; ?>
                </a>
            </div>

            <!-- Left Content Column (Ngữ nghĩa tiếng Việt chuẩn chỉ, không ngắt dòng vô thức) -->
            <div class="sw-hero-left-col">
                <div class="sw-pos-badge">
                    <span class="sw-pos-dot"></span>
                    SANWAY JSC • AN TOÀN DOANH NGHIỆP
                </div>

                <h1 class="sw-hero-slogan-title">
                    <span class="sw-title-line">CHO MỖI BƯỚC TIẾN</span>
                    <span class="sw-title-line sw-text-red">THÊM VỮNG VÀNG</span>
                </h1>

                <p class="sw-hero-subline">
                    Hệ thống phòng cháy chữa cháy chuẩn mực quốc tế, kiến tạo an tâm cho các đại công trình và nhà máy công nghiệp.
                </p>

                <div class="sw-hero-btn-row">
                    <a href="tel:0936543389" class="sw-btn-pos-primary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>KHẢO SÁT: 0936 543 389</span>
                    </a>
                    <a href="<?php echo esc_url( function_exists( 'sanway_get_contact_url' ) ? sanway_get_contact_url() : home_url( '/lien-he/' ) ); ?>" class="sw-btn-pos-secondary">
                        <span>GỬI YÊU CẦU BÁO GIÁ</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         02. LĨNH VỰC HOẠT ĐỘNG (3 tên lĩnh vực | 3 khối hình ảnh lớn)
         ===================================================================== -->
    <section class="sw-section-pad" id="linh-vuc">
        <div class="sw-container">
            <div class="sw-section-header-clean">
                <span class="sw-tag-red">02 / LĨNH VỰC HOẠT ĐỘNG</span>
                <h2 class="sw-title-monumental">BA TRỤ CỘT CHUYÊN MÔN</h2>
            </div>

            <!-- 3 Khối Hình Ảnh Lớn (3 Large Visual Blocks) -->
            <div class="sw-three-image-grid">
                <!-- Khối 1: Vật tư & Thiết bị -->
                <div class="sw-image-card">
                    <div class="sw-image-box">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pccc-engineer-pipes.jpg' ); ?>" alt="Thiết Bị PCCC Chuẩn Kiểm Định" class="sw-card-img">
                        <div class="sw-image-overlay"></div>
                    </div>
                    <div class="sw-image-content">
                        <span class="sw-card-num">01</span>
                        <h3 class="sw-card-title">THIẾT BỊ & VẬT TƯ PCCC CHUẨN KIỂM ĐỊNH</h3>
                        <p class="sw-card-desc">Cung cấp hơn 47+ chủng loại trang thiết bị đạt chuẩn kiểm định Cảnh sát PCCC và CO/CQ minh bạch.</p>
                    </div>
                </div>

                <!-- Khối 2: Thi công & Lắp đặt -->
                <div class="sw-image-card">
                    <div class="sw-image-box">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pccc-pump-station.jpg' ); ?>" alt="Thi Công Lắp Đặt Hệ Thống PCCC" class="sw-card-img">
                        <div class="sw-image-overlay"></div>
                    </div>
                    <div class="sw-image-content">
                        <span class="sw-card-num">02</span>
                        <h3 class="sw-card-title">THI CÔNG & LẮP ĐẶT HỆ THỐNG TOÀN DIỆN</h3>
                        <p class="sw-card-desc">Thi công mạng lưới báo cháy tự động, hệ thống Sprinkler và cụm trạm bơm công nghiệp công suất lớn.</p>
                    </div>
                </div>

                <!-- Khối 3: Bảo trì & Thẩm duyệt -->
                <div class="sw-image-card">
                    <div class="sw-image-box">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/factory-facility.jpg' ); ?>" alt="Bảo Trì KCN & Thẩm Duyệt Pháp Lý" class="sw-card-img">
                        <div class="sw-image-overlay"></div>
                    </div>
                    <div class="sw-image-content">
                        <span class="sw-card-num">03</span>
                        <h3 class="sw-card-title">BẢO TRÌ NHÀ MÁY & THẨM DUYỆT PHÁP LÝ</h3>
                        <p class="sw-card-desc">Hợp đồng bảo dưỡng định kỳ tại các KCN, nạp sạc bình PCCC tận nơi và hoàn thiện hồ sơ nghiệm thu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         03. GIẢI PHÁP PCCC (4 nhóm dịch vụ | Mô hình hệ thống kỹ thuật 3D)
         ===================================================================== -->
    <section class="sw-section-pad sw-bg-subtle" id="giai-phap">
        <div class="sw-container">
            <div class="sw-section-header-clean">
                <span class="sw-tag-red">03 / GIẢI PHÁP PCCC</span>
                <h2 class="sw-title-monumental">HỆ THỐNG KỸ THUẬT TIÊU CHUẨN</h2>
            </div>

            <div class="sw-solutions-composite-grid">
                <!-- 4 Nhóm dịch vụ bên trái -->
                <div class="sw-solutions-list">
                    <div class="sw-solution-item">
                        <div class="sw-sol-num">01</div>
                        <div>
                            <h3 class="sw-sol-name">HỆ THỐNG BÁO CHÁY TỰ ĐỘNG</h3>
                            <p class="sw-sol-text">Tủ trung tâm địa chỉ thông minh, cảm biến quang điện, nhiệt gia tăng & laser BEAM độ nhạy cao.</p>
                        </div>
                    </div>

                    <div class="sw-solution-item">
                        <div class="sw-sol-num">02</div>
                        <div>
                            <h3 class="sw-sol-name">HỆ THỐNG CHỮA CHÁY SPRINKLER</h3>
                            <p class="sw-sol-text">Mạng lưới đầu phun tự động phản ứng nhanh, cụm van tràn xả áp lực cao bảo vệ an toàn nhà xưởng.</p>
                        </div>
                    </div>

                    <div class="sw-solution-item">
                        <div class="sw-sol-num">03</div>
                        <div>
                            <h3 class="sw-sol-name">TRẠM BƠM CÔNG SUẤT CAO</h3>
                            <p class="sw-sol-text">Động cơ điện & Diesel công suất lớn, tủ điều khiển tự động hóa PLC duy trì liên tục áp lực nước.</p>
                        </div>
                    </div>

                    <div class="sw-solution-item">
                        <div class="sw-sol-num">04</div>
                        <div>
                            <h3 class="sw-sol-name">KIỂM ĐỊNH & NẠP SẠC BÌNH PCCC</h3>
                            <p class="sw-sol-text">Kiểm tra áp lực định kỳ, nạp sạc khí CO2 (MT3) và bình bột ABC (MFZL4, MFZ35) đạt chuẩn kiểm định.</p>
                        </div>
                    </div>
                </div>

                <!-- Mô hình kỹ thuật 3D bên phải -->
                <div class="sw-tech-3d-model-card">
                    <div class="sw-model-box">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-3d-architecture.jpg' ); ?>" alt="Mô hình hệ thống kỹ thuật 3D" class="sw-model-img">
                        <div class="sw-model-badge">MÔ HÌNH HỆ THỐNG KỸ THUẬT 3D</div>
                    </div>
                    <div class="sw-model-caption">
                        <strong>Tổ Hợp Kết Cấu & Mạng Lưới Kỹ Thuật PCCC</strong>
                        <span>Mặt cắt trực quan hệ thống đường ống dẫn, đầu phun Sprinkler và trạm bơm liên động.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         04. ĐỐI TÁC TOÀN DIỆN (3 giá trị | Mặt cắt công trình tích hợp)
         ===================================================================== -->
    <section class="sw-section-pad" id="doi-tac">
        <div class="sw-container">
            <div class="sw-section-header-clean">
                <span class="sw-tag-red">04 / ĐỐI TÁC TOÀN DIỆN</span>
                <h2 class="sw-title-monumental">BA GIÁ TRỊ CỐT LÕI</h2>
            </div>

            <div class="sw-partner-composite-grid">
                <!-- Mặt cắt công trình tích hợp bên trái -->
                <div class="sw-cross-section-box">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/modern-office.jpg' ); ?>" alt="Mặt cắt công trình tích hợp" class="sw-cross-img">
                    <div class="sw-cross-tag">TỔ HỢP CÔNG TRÌNH VĂN PHÒNG & NHÀ XƯỞNG</div>
                </div>

                <!-- 3 Giá trị cốt lõi bên phải -->
                <div class="sw-values-stack">
                    <div class="sw-val-item">
                        <div class="sw-val-idx">01</div>
                        <div>
                            <h3 class="sw-val-title">AN TOÀN TUYỆT ĐỐI</h3>
                            <p class="sw-val-desc">Đặt tính mạng con người và giá trị tài sản doanh nghiệp làm trọng tâm tối thượng trong từng chi tiết kỹ thuật.</p>
                        </div>
                    </div>

                    <div class="sw-val-item">
                        <div class="sw-val-idx">02</div>
                        <div>
                            <h3 class="sw-val-title">CHUẨN MỰC PHÁP LÝ</h3>
                            <p class="sw-val-desc">100% tuân thủ quy chuẩn kỹ thuật QCVN 06:2022/BXD và thủ tục thẩm duyệt nghiệm thu của cơ quan Cảnh sát PCCC.</p>
                        </div>
                    </div>

                    <div class="sw-val-item">
                        <div class="sw-val-idx">03</div>
                        <div>
                            <h3 class="sw-val-title">ĐỒNG HÀNH BỀN VỮNG</h3>
                            <p class="sw-val-desc">Chính sách bảo hành 12 - 24 tháng, bảo dưỡng định kỳ và túc trực kỹ thuật khẩn cấp 24/7 trọn vòng đời sử dụng.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         05. QUY TRÌNH (5 bước ngắn | Đồ họa timeline liên tục)
         ===================================================================== -->
    <section class="sw-section-pad sw-bg-subtle" id="quy-trinh">
        <div class="sw-container">
            <div class="sw-section-header-clean">
                <span class="sw-tag-red">05 / PHƯƠNG THỨC LÀM VIỆC</span>
                <h2 class="sw-title-monumental">QUY TRÌNH 5 BƯỚC TIÊU CHUẨN</h2>
            </div>

            <!-- Đồ họa Timeline Liên tục (Continuous Timeline Graphics) -->
            <div class="sw-timeline-container">
                <div class="sw-timeline-line"></div>
                <div class="sw-timeline-steps">
                    <!-- Step 1 -->
                    <div class="sw-tstep">
                        <div class="sw-tstep-node">01</div>
                        <h4 class="sw-tstep-name">KHẢO SÁT</h4>
                        <p class="sw-tstep-text">Đo đạc hiện trường & đánh giá hiện trạng thực tế công trình.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="sw-tstep">
                        <div class="sw-tstep-node">02</div>
                        <h4 class="sw-tstep-name">THIẾT KẾ</h4>
                        <p class="sw-tstep-text">Lập bản vẽ giải pháp kỹ thuật & bóc tách dự toán minh bạch.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="sw-tstep">
                        <div class="sw-tstep-node">03</div>
                        <h4 class="sw-tstep-name">THẨM DUYỆT</h4>
                        <p class="sw-tstep-text">Hoàn thiện hồ sơ thẩm duyệt chuẩn pháp lý với cơ quan PCCC.</p>
                    </div>

                    <!-- Step 4 -->
                    <div class="sw-tstep">
                        <div class="sw-tstep-node">04</div>
                        <h4 class="sw-tstep-name">THI CÔNG</h4>
                        <p class="sw-tstep-text">Lắp đặt thiết bị chính hãng và chạy thử nghiệm liên động.</p>
                    </div>

                    <!-- Step 5 -->
                    <div class="sw-tstep">
                        <div class="sw-tstep-node">05</div>
                        <h4 class="sw-tstep-name">BÀN GIAO</h4>
                        <p class="sw-tstep-text">Nghiệm thu Cảnh sát PCCC & kích hoạt bảo hành bảo trì.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         06. ĐỒNG HÀNH & HỢP TÁC (6 loại hình công trình | Lưới ảnh kiến trúc)
         ===================================================================== -->
    <section class="sw-section-pad" id="hop-tac">
        <div class="sw-container">
            <div class="sw-section-header-clean">
                <span class="sw-tag-red">06 / ĐỒNG HÀNH & HỢP TÁC</span>
                <h2 class="sw-title-monumental">6 LOẠI HÌNH CÔNG TRÌNH TIÊU BIỂU</h2>
                <p style="font-size: 16px; color: var(--sw-muted); margin-top: 8px;">
                    SANWAY tự hào phục vụ đa dạng các quy mô công trình công nghiệp và dân dụng tại Hải Phòng và miền Bắc.
                </p>
            </div>

            <!-- Lưới Ảnh Kiến Trúc (6 Architectural Grid Items) -->
            <div class="sw-arch-grid">
                <div class="sw-arch-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/factory-facility.jpg' ); ?>" alt="Nhà xưởng & Nhà máy FDI" class="sw-arch-img">
                    <div class="sw-arch-mask">
                        <span class="sw-arch-no">01</span>
                        <h4 class="sw-arch-label">Nhà Xưởng & Nhà Máy FDI</h4>
                    </div>
                </div>

                <div class="sw-arch-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architecture-facade.jpg' ); ?>" alt="Tổ hợp công nghiệp & Khu chế xuất" class="sw-arch-img">
                    <div class="sw-arch-mask">
                        <span class="sw-arch-no">02</span>
                        <h4 class="sw-arch-label">Tổ Hợp Công Nghiệp & KCN</h4>
                    </div>
                </div>

                <div class="sw-arch-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/modern-office.jpg' ); ?>" alt="Tòa nhà văn phòng & Trụ sở" class="sw-arch-img">
                    <div class="sw-arch-mask">
                        <span class="sw-arch-no">03</span>
                        <h4 class="sw-arch-label">Tòa Nhà Văn Phòng & Trụ Sở</h4>
                    </div>
                </div>

                <div class="sw-arch-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pccc-pump-station.jpg' ); ?>" alt="Trạm bơm đầu não & Phòng máy kỹ thuật" class="sw-arch-img">
                    <div class="sw-arch-mask">
                        <span class="sw-arch-no">04</span>
                        <h4 class="sw-arch-label">Phòng Máy Kỹ Thuật & Trạm Bơm</h4>
                    </div>
                </div>

                <div class="sw-arch-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pccc-engineer-pipes.jpg' ); ?>" alt="Kho vận Logistics & Kho ngoại quan" class="sw-arch-img">
                    <div class="sw-arch-mask">
                        <span class="sw-arch-no">05</span>
                        <h4 class="sw-arch-label">Kho Vận Logistics & Cảng Biển</h4>
                    </div>
                </div>

                <div class="sw-arch-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-3d-architecture.jpg' ); ?>" alt="Tổ hợp thương mại & Công trình cao tầng" class="sw-arch-img">
                    <div class="sw-arch-mask">
                        <span class="sw-arch-no">06</span>
                        <h4 class="sw-arch-label">Tổ Hợp Thương Mại & Cao Tầng</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         07. KẾT NỐI (Slogan + CTA | Hình ảnh kiến trúc toàn cảnh)
         ===================================================================== -->
    <section class="sw-connect-panoramic-section" id="ket-noi">
        <!-- Hình ảnh kiến trúc toàn cảnh làm nền -->
        <div class="sw-panoramic-bg-box">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/architecture-facade.jpg' ); ?>" alt="SANWAY Panoramic Architecture" class="sw-panoramic-img">
            <div class="sw-panoramic-overlay"></div>
        </div>

        <div class="sw-container">
            <div class="sw-panoramic-content">
                <span class="sw-tag-white">07 / KẾT NỐI HỢP TÁC</span>
                <div class="sw-panoramic-slogan">
                    "CHO MỖI BƯỚC TIẾN <span>THÊM VỮNG VÀNG</span>"
                </div>
                <h2 class="sw-panoramic-heading">
                    SẴN SÀNG ĐỒNG HÀNH BẢO VỆ DOANH NGHIỆP BẠN
                </h2>
                <p class="sw-panoramic-sub">
                    Kết nối trực tiếp cùng Giám Đốc SANWAY JSC để nhận phương án kỹ thuật và bảng báo giá chi tiết trong vòng 24 giờ.
                </p>

                <div class="sw-panoramic-actions">
                    <a href="tel:0936543389" class="sw-btn-pos-primary" style="padding: 18px 40px; font-size: 16px;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>HOTLINE: 0936 543 389</span>
                    </a>
                    <a href="<?php echo esc_url( function_exists( 'sanway_get_contact_url' ) ? sanway_get_contact_url() : home_url( '/lien-he/' ) ); ?>" class="sw-btn-pos-secondary" style="padding: 18px 36px; font-size: 16px;">
                        <span>GỬI FORM LIÊN HỆ & BÁO GIÁ</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
