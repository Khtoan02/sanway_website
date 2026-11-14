<?php
/**
 * Front Page Template (Trang Chủ) - SANWAY
 * Phong cách Doanh nghiệp: Tinh gọn chữ, tập trung vào thông số, dịch vụ cốt lõi và thẩm mỹ công nghiệp hiện đại.
 *
 * @package SANWAY
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- =====================================================================
         1. HERO SECTION (TINH GỌN, SẮC NÉT)
         ===================================================================== -->
    <section class="sw-hero">
        <div class="sw-container">
            <div class="sw-hero-grid">
                <!-- Content Left -->
                <div class="sw-hero-content">
                    <span class="sw-badge sw-badge-red">
                        SANWAY JSC • AN TOÀN PCCC
                    </span>

                    <h1 class="sw-hero-title">
                        Giải Pháp PCCC Toàn Diện Cho Doanh Nghiệp
                    </h1>

                    <p class="sw-hero-desc">
                        Tư vấn thiết kế, thi công lắp đặt và bảo trì hệ thống PCCC tiêu chuẩn cho nhà xưởng, khu công nghiệp và tòa nhà.
                    </p>

                    <div class="sw-hero-actions">
                        <a href="tel:0936543389" class="sw-btn sw-btn-primary">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            <span>Khảo Sát: 0936 543 389</span>
                        </a>
                        <a href="<?php echo esc_url( function_exists( 'sanway_get_about_url' ) ? sanway_get_about_url() : home_url( '/gioi-thieu/' ) ); ?>" class="sw-btn sw-btn-secondary">
                            <span>Hồ Sơ Năng Lực</span>
                        </a>
                    </div>

                    <!-- Highlights / Key Metrics -->
                    <div class="sw-hero-highlights">
                        <div class="sw-stat-item">
                            <div class="sw-stat-val">100<span>%</span></div>
                            <div class="sw-stat-label">Kiểm định PCCC & CO/CQ</div>
                        </div>
                        <div class="sw-stat-item">
                            <div class="sw-stat-val">24<span>/7</span></div>
                            <div class="sw-stat-label">Hỗ trợ kỹ thuật sự cố</div>
                        </div>
                        <div class="sw-stat-item">
                            <div class="sw-stat-val">TCVN</div>
                            <div class="sw-stat-label">Chuẩn QCVN 06:2022</div>
                        </div>
                    </div>
                </div>

                <!-- Visual Technical Card Right -->
                <div class="sw-hero-visual">
                    <div class="sw-hero-card">
                        <div class="sw-hero-card-header">
                            <div class="sw-hero-logo-box">
                                <?php 
                                $logo_icon = function_exists( 'sanway_get_logo_url' ) ? sanway_get_logo_url( 'icon' ) : '';
                                if ( $logo_icon ) : ?>
                                    <img src="<?php echo esc_url( $logo_icon ); ?>" alt="SANWAY Icon">
                                <?php endif; ?>
                                <span style="font-weight: 800; font-size: 14px; letter-spacing: 0.05em;">SANWAY JSC</span>
                            </div>
                            <div class="sw-hero-status-pill">
                                <span class="sw-status-dot"></span>
                                Trực Chiến 24/7
                            </div>
                        </div>

                        <div style="font-size: 13px; color: var(--sw-red); font-weight: 800; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 6px;">
                            "Cho mỗi bước tiến thêm vững vàng"
                        </div>
                        <h3 class="sw-hero-card-title">An Toàn PCCC Tiêu Chuẩn Công Nghiệp</h3>

                        <ul class="sw-checklist">
                            <li class="sw-checklist-item">
                                <span class="sw-check-icon">✓</span>
                                <span>Thẩm duyệt & nghiệm thu PCCC đúng tiến độ</span>
                            </li>
                            <li class="sw-checklist-item">
                                <span class="sw-check-icon">✓</span>
                                <span>Hệ thống báo cháy & chữa cháy tự động Sprinkler</span>
                            </li>
                            <li class="sw-checklist-item">
                                <span class="sw-check-icon">✓</span>
                                <span>Trạm bơm chữa cháy điện, diesel và bù áp tự động</span>
                            </li>
                            <li class="sw-checklist-item">
                                <span class="sw-check-icon">✓</span>
                                <span>Bảo dưỡng, kiểm định & nạp sạc bình PCCC định kỳ</span>
                            </li>
                        </ul>

                        <div class="sw-hero-card-footer">
                            <div>
                                <div style="font-size: 11px; color: #94A3B8; text-transform: uppercase;">Hotline Giám Đốc</div>
                                <div style="font-size: 17px; font-weight: 800; color: #FFFFFF;">0936 543 389</div>
                            </div>
                            <a href="tel:0936543389" class="sw-btn sw-btn-primary sw-btn-sm">
                                Gọi Ngay
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         2. CORE SERVICES (DỊCH VỤ TRỌNG TÂM - BENTO GỌN GÀNG)
         ===================================================================== -->
    <section class="sw-section" id="giai-phap">
        <div class="sw-container">
            <div class="sw-section-header">
                <span class="sw-badge sw-badge-red">LĨNH VỰC HOẠT ĐỘNG</span>
                <h2 class="sw-section-title">Dịch Vụ & Giải Pháp PCCC</h2>
                <p class="sw-section-subtitle">
                    Cung cấp trang thiết bị đạt chuẩn kiểm định và giải pháp kỹ thuật toàn diện cho nhà xưởng.
                </p>
            </div>

            <div class="sw-services-grid">
                <!-- Service 1 -->
                <div class="sw-service-card">
                    <div class="sw-service-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                    </div>
                    <h3 class="sw-service-title">Báo Cháy Tự Động</h3>
                    <p class="sw-service-desc">
                        Tủ trung tâm báo cháy địa chỉ, đầu báo khói quang điện, đầu báo nhiệt gia tăng và hệ thống chuông còi.
                    </p>
                    <ul class="sw-service-bullets">
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Tủ trung tâm địa chỉ & thường</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Đầu báo khói, nhiệt, BEAM</li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="sw-service-card">
                    <div class="sw-service-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                        </svg>
                    </div>
                    <h3 class="sw-service-title">Chữa Cháy Sprinkler</h3>
                    <p class="sw-service-desc">
                        Hệ thống đường ống chữa cháy tự động Sprinkler, cụm van báo động Alarm Valve, van góc và lăng vòi D50/D65.
                    </p>
                    <ul class="sw-service-bullets">
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Đầu phun Sprinkler tự động</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Van góc, lăng vòi, họng tiếp nước</li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="sw-service-card">
                    <div class="sw-service-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                            <line x1="6" y1="6" x2="6.01" y2="6"></line>
                            <line x1="6" y1="18" x2="6.01" y2="18"></line>
                        </svg>
                    </div>
                    <h3 class="sw-service-title">Trạm Bơm Chữa Cháy</h3>
                    <p class="sw-service-desc">
                        Lắp đặt và bảo dưỡng máy bơm điện, máy bơm diesel dự phòng mất điện, bơm bù áp và tủ điện điều khiển tự động.
                    </p>
                    <ul class="sw-service-bullets">
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Máy bơm điện & Diesel công suất lớn</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Tủ điều khiển tự động PLC</li>
                    </ul>
                </div>

                <!-- Service 4 -->
                <div class="sw-service-card">
                    <div class="sw-service-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3 class="sw-service-title">Nạp Sạc Bình PCCC</h3>
                    <p class="sw-service-desc">
                        Kiểm định, bảo dưỡng và nạp sạc bình bột MFZL4, bình khí CO2 MT3, bình xe đẩy MFZ35 giao nhận tận xưởng.
                    </p>
                    <ul class="sw-service-bullets">
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Nạp sạc bột ABC và khí CO2</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Tem kiểm định & giao nhận tận nơi</li>
                    </ul>
                </div>

                <!-- Service 5 -->
                <div class="sw-service-card">
                    <div class="sw-service-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                        </svg>
                    </div>
                    <h3 class="sw-service-title">Thẩm Duyệt & Nghiệm Thu</h3>
                    <p class="sw-service-desc">
                        Thiết kế bản vẽ thi công, tư vấn giải pháp tối ưu chi phí và hoàn thiện hồ sơ nghiệm thu với cơ quan Cảnh sát PCCC.
                    </p>
                    <ul class="sw-service-bullets">
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Thiết kế chuẩn QCVN 06:2022</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Thủ tục nghiệm thu nhanh chóng</li>
                    </ul>
                </div>

                <!-- Service 6 -->
                <div class="sw-service-card">
                    <div class="sw-service-icon-box">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                    </div>
                    <h3 class="sw-service-title">Bảo Trì KCN Định Kỳ</h3>
                    <p class="sw-service-desc">
                        Hợp đồng bảo trì định kỳ hệ thống cơ điện và PCCC nhà máy tại các KCN Nomura, Đình Vũ, Tràng Duệ, VSIP.
                    </p>
                    <ul class="sw-service-bullets">
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Thử liên động định kỳ</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Trực kỹ thuật xử lý sự cố 24/7</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         3. WORKFLOW (4 BƯỚC TINH GỌN)
         ===================================================================== -->
    <section class="sw-section sw-section-subtle" id="quy-trinh">
        <div class="sw-container">
            <div class="sw-section-header">
                <span class="sw-badge sw-badge-red">QUY TRÌNH</span>
                <h2 class="sw-section-title">4 Bước Triển Khai Kỹ Thuật</h2>
                <p class="sw-section-subtitle">
                    Quy trình minh bạch, đúng tiến độ và an toàn tuyệt đối.
                </p>
            </div>

            <div class="sw-workflow-grid">
                <div class="sw-step-card">
                    <div class="sw-step-number">01</div>
                    <h4 class="sw-step-title">Khảo Sát</h4>
                    <p class="sw-step-desc">Đo đạc và đánh giá hiện trạng thực tế công trình.</p>
                </div>

                <div class="sw-step-card">
                    <div class="sw-step-number">02</div>
                    <h4 class="sw-step-title">Dự Toán</h4>
                    <p class="sw-step-desc">Lập thiết kế và báo giá chi tiết, không phát sinh.</p>
                </div>

                <div class="sw-step-card">
                    <div class="sw-step-number">03</div>
                    <h4 class="sw-step-title">Thi Công</h4>
                    <p class="sw-step-desc">Lắp đặt thiết bị chính hãng và thử nghiệm liên động.</p>
                </div>

                <div class="sw-step-card">
                    <div class="sw-step-number">04</div>
                    <h4 class="sw-step-title">Bàn Giao</h4>
                    <p class="sw-step-desc">Nghiệm thu Cảnh sát PCCC và bảo hành bảo trì dài hạn.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         4. CALL TO ACTION BANNER (GỌN GÀNG, HIỆU QUẢ)
         ===================================================================== -->
    <section class="sw-section">
        <div class="sw-container">
            <div class="sw-cta-banner">
                <div class="sw-cta-content">
                    <div style="font-size: 12.5px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; opacity: 0.9; margin-bottom: 6px;">
                        TƯ VẤN & KHẢO SÁT TẬN NƠI
                    </div>
                    <h3 class="sw-cta-title">
                        Bảo Vệ Doanh Nghiệp Bạn Ngay Hôm Nay
                    </h3>
                    <p class="sw-cta-desc">
                        Đội ngũ kỹ sư SANWAY sẵn sàng khảo sát hiện trường và tư vấn giải pháp tối ưu.
                    </p>
                </div>

                <div class="sw-cta-actions">
                    <a href="tel:0936543389" class="sw-btn sw-btn-white">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>Hotline: 0936 543 389</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
