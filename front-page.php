<?php
/**
 * Front Page Template (Trang Chủ) - SANWAY
 *
 * @package SANWAY
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- =====================================================================
         1. HERO SECTION
         ===================================================================== -->
    <section class="sw-hero">
        <div class="sw-container">
            <div class="sw-hero-grid">
                <!-- Content Left -->
                <div class="sw-hero-content">
                    <span class="sw-badge sw-badge-red">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        CÔNG TY CỔ PHẦN SANWAY • AN TOÀN PCCC
                    </span>

                    <h1 class="sw-hero-title">
                        Giải Pháp Phòng Cháy Chữa Cháy <span>Toàn Diện & Chuẩn Mực</span>
                    </h1>

                    <p class="sw-hero-desc">
                        SANWAY JSC chuyên tư vấn thiết kế, thi công lắp đặt và bảo dưỡng trọn gói hệ thống PCCC, cơ điện công nghiệp cho các nhà máy FDI, nhà xưởng khu công nghiệp và tòa nhà cao tầng.
                    </p>

                    <div class="sw-hero-actions">
                        <a href="#khao-sat" class="sw-btn sw-btn-primary">
                            <span>Đăng Ký Khảo Sát Kỹ Thuật</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                        <a href="<?php echo esc_url( function_exists( 'sanway_get_about_url' ) ? sanway_get_about_url() : home_url( '/gioi-thieu/' ) ); ?>" class="sw-btn sw-btn-secondary">
                            <span>Xem Hồ Sơ Năng Lực</span>
                        </a>
                    </div>

                    <!-- Metrics / Highlights -->
                    <div class="sw-hero-highlights">
                        <div class="sw-stat-item">
                            <div class="sw-stat-val">100<span>%</span></div>
                            <div class="sw-stat-label">Thiết bị đạt chuẩn kiểm định PCCC & CO/CQ</div>
                        </div>
                        <div class="sw-stat-item">
                            <div class="sw-stat-val">24<span>/7</span></div>
                            <div class="sw-stat-label">Sẵn sàng phản ứng & ứng cứu kỹ thuật sự cố</div>
                        </div>
                        <div class="sw-stat-item">
                            <div class="sw-stat-val">TCVN<span>/QCVN</span></div>
                            <div class="sw-stat-label">Tuân thủ nghiêm ngặt QCVN 06:2022 & TCVN 3890</div>
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
                                Sẵn Sàng Vận Hành
                            </div>
                        </div>

                        <h3 class="sw-hero-card-title">Hệ Thống PCCC An Toàn & Chuẩn Mực Doanh Nghiệp</h3>
                        <p class="sw-hero-card-desc">
                            "Cho mỗi bước tiến thêm vững vàng" — Bảo vệ tối đa tính mạng, tài sản và sự gián đoạn chuỗi sản xuất của doanh nghiệp.
                        </p>

                        <ul class="sw-checklist">
                            <li class="sw-checklist-item">
                                <span class="sw-check-icon">✓</span>
                                <span>Thẩm duyệt & nghiệm thu PCCC đúng tiến độ cam kết</span>
                            </li>
                            <li class="sw-checklist-item">
                                <span class="sw-check-icon">✓</span>
                                <span>Trạm bơm chữa cháy điện, diesel và bù áp tự động</span>
                            </li>
                            <li class="sw-checklist-item">
                                <span class="sw-check-icon">✓</span>
                                <span>Bảo trì, súc xả đường ống và nạp sạc bình PCCC định kỳ</span>
                            </li>
                            <li class="sw-checklist-item">
                                <span class="sw-check-icon">✓</span>
                                <span>Vật tư, thiết bị có nguồn gốc xuất xứ và kiểm định rõ ràng</span>
                            </li>
                        </ul>

                        <div class="sw-hero-card-footer">
                            <div>
                                <div style="font-size: 11px; color: #94A3B8; text-transform: uppercase;">Hotline Kỹ Sư Trưởng</div>
                                <div style="font-size: 18px; font-weight: 800; color: #FFFFFF;">0936 543 389</div>
                            </div>
                            <a href="tel:0936543389" class="sw-btn sw-btn-primary sw-btn-sm">
                                Kết Nối Ngay
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         2. ABOUT PREVIEW SECTION
         ===================================================================== -->
    <section class="sw-section sw-section-subtle" id="gioi-thieu-tom-tat">
        <div class="sw-container">
            <div class="sw-about-grid">
                <div class="sw-about-visual">
                    <div class="sw-about-box">
                        <div class="sw-about-tag">Hồ Sơ Doanh Nghiệp</div>
                        <h3 class="sw-about-quote">
                            "Lá chắn an toàn kiên cố cho <span>hàng trăm nhà xưởng</span> & cơ sở sản xuất tại Hải Phòng."
                        </h3>
                        <p class="sw-about-desc">
                            CÔNG TY CỔ PHẦN SANWAY thành lập với sứ mệnh mang đến các giải pháp an toàn phòng cháy chữa cháy đạt chuẩn quốc tế, giúp doanh nghiệp an tâm phát triển sản xuất kinh doanh bền vững.
                        </p>

                        <div class="sw-capacity-grid">
                            <div class="sw-capacity-item">
                                <div class="sw-capacity-num">47+</div>
                                <div class="sw-capacity-txt">Danh mục vật tư PCCC tiêu chuẩn sẵn sàng cung ứng</div>
                            </div>
                            <div class="sw-capacity-item">
                                <div class="sw-capacity-num">100%</div>
                                <div class="sw-capacity-txt">Đội ngũ kỹ thuật viên có chứng chỉ hành nghề PCCC</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sw-about-content">
                    <span class="sw-badge sw-badge-red">VỀ CHÚNG TÔI</span>
                    <h2 class="sw-section-title">
                        Đối Tác Uy Tín Hàng Đầu Về Kỹ Thuật PCCC
                    </h2>
                    <p class="sw-section-subtitle" style="margin-bottom: 24px;">
                        SANWAY JSC hiểu rằng mỗi công trình, nhà xưởng đều có đặc thù riêng về kiến trúc và dây chuyền hoạt động. Đội ngũ kỹ sư của chúng tôi luôn trực tiếp khảo sát hiện trường, bóc tách khối lượng chính xác và đề xuất phương án tối ưu nhất về cả chi phí lẫn an toàn pháp lý.
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 16px; margin-bottom: 32px;">
                        <div style="display: flex; align-items: flex-start; gap: 14px;">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background-color: var(--sw-red-light); color: var(--sw-red); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 13px; flex-shrink: 0; margin-top: 2px;">✓</div>
                            <div>
                                <strong style="color: var(--sw-dark); font-size: 15.5px;">Pháp nhân đầy đủ & minh bạch</strong>
                                <p style="font-size: 14px; color: var(--sw-muted); margin-top: 2px;">Đáp ứng đầy đủ điều kiện kinh doanh dịch vụ phòng cháy chữa cháy theo quy định pháp luật.</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 14px;">
                            <div style="width: 24px; height: 24px; border-radius: 50%; background-color: var(--sw-red-light); color: var(--sw-red); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 13px; flex-shrink: 0; margin-top: 2px;">✓</div>
                            <div>
                                <strong style="color: var(--sw-dark); font-size: 15.5px;">Báo giá nhanh chóng & dự toán chính xác</strong>
                                <p style="font-size: 14px; color: var(--sw-muted); margin-top: 2px;">Quy trình bóc tách khối lượng và lập dự toán chuyên nghiệp, không phát sinh chi phí vô lý.</p>
                            </div>
                        </div>
                    </div>

                    <a href="<?php echo esc_url( function_exists( 'sanway_get_about_url' ) ? sanway_get_about_url() : home_url( '/gioi-thieu/' ) ); ?>" class="sw-btn sw-btn-secondary">
                        <span>Đọc Chi Tiết Về SANWAY JSC</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         3. SERVICES & SOLUTIONS SECTION
         ===================================================================== -->
    <section class="sw-section" id="giai-phap">
        <div class="sw-container">
            <div class="sw-section-header">
                <span class="sw-badge sw-badge-red">GIẢI PHÁP & DỊCH VỤ</span>
                <h2 class="sw-section-title">Hệ Sinh Thái Dịch Vụ PCCC Toàn Diện</h2>
                <p class="sw-section-subtitle">
                    Từ tư vấn thiết kế sơ bộ đến bảo dưỡng định kỳ trọn đời, SANWAY cung ứng các giải pháp kỹ thuật PCCC đạt chuẩn an toàn cao nhất.
                </p>
            </div>

            <div class="sw-services-grid">
                <!-- Card 1 -->
                <div class="sw-service-card">
                    <div class="sw-service-icon-box">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                    </div>
                    <h3 class="sw-service-title">Hệ Thống Báo Cháy Tự Động</h3>
                    <p class="sw-service-desc">
                        Cung cấp, lắp đặt và hiệu chỉnh tủ trung tâm báo cháy địa chỉ, mạng lưới đầu báo khói quang điện, đầu báo nhiệt gia tăng, nút ấn khẩn cấp và còi đèn báo động.
                    </p>
                    <ul class="sw-service-bullets">
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Tủ trung tâm báo cháy địa chỉ & kênh thường</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Đầu báo khói, nhiệt, BEAM phản xạ tia chiếu</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Đèn chỉ dẫn thoát nạn và sự cố Exit</li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div class="sw-service-card">
                    <div class="sw-service-icon-box">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                        </svg>
                    </div>
                    <h3 class="sw-service-title">Hệ Thống Chữa Cháy Sprinkler</h3>
                    <p class="sw-service-desc">
                        Thi công mạng lưới đường ống chữa cháy tự động Sprinkler, hệ thống màn ngăn nước Drencher, cụm van báo động Alarm Valve, van góc và cuộn vòi lăng phun D50/D65.
                    </p>
                    <ul class="sw-service-bullets">
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Đầu phun Sprinkler phản ứng nhanh (68°C, 93°C)</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Van góc cứu hỏa, họng tiếp nước PCCC</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Kiểm tra súc rửa đường ống và thử áp lực</li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div class="sw-service-card">
                    <div class="sw-service-icon-box">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                            <line x1="6" y1="6" x2="6.01" y2="6"></line>
                            <line x1="6" y1="18" x2="6.01" y2="18"></line>
                        </svg>
                    </div>
                    <h3 class="sw-service-title">Trạm Bơm Chữa Cháy Đầu Não</h3>
                    <p class="sw-service-desc">
                        Lắp đặt, sửa chữa và bảo dưỡng trạm bơm PCCC công suất cao gồm máy bơm điện chính, máy bơm diesel dự phòng sự cố mất điện, bơm bù áp và tủ điều khiển tự động.
                    </p>
                    <ul class="sw-service-bullets">
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Bơm chữa cháy động cơ điện & Diesel</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Máy bơm bù áp lực cao và bình tích áp</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Tủ điện điều khiển tự động / bằng tay</li>
                    </ul>
                </div>

                <!-- Card 4 -->
                <div class="sw-service-card">
                    <div class="sw-service-icon-box">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                    </div>
                    <h3 class="sw-service-title">Tư Vấn & Thẩm Duyệt Nghiệm Thu</h3>
                    <p class="sw-service-desc">
                        Tư vấn lập phương án PCCC, thiết kế bản vẽ kỹ thuật thi công, hỗ trợ hoàn thiện hồ sơ thẩm duyệt và nghiệm thu đưa công trình vào sử dụng hợp pháp.
                    </p>
                    <ul class="sw-service-bullets">
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Lập bản vẽ thiết kế PCCC chuẩn QCVN 06</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Hỗ trợ hồ sơ thẩm duyệt cơ quan Cảnh sát PCCC</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Đo kiểm điện trở nối đất và cấp giấy nghiệm thu</li>
                    </ul>
                </div>

                <!-- Card 5 -->
                <div class="sw-service-card">
                    <div class="sw-service-icon-box">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <h3 class="sw-service-title">Bảo Dưỡng & Nạp Sạc Bình PCCC</h3>
                    <p class="sw-service-desc">
                        Dịch vụ định kỳ kiểm tra bình chữa cháy xách tay bột ABC (MFZL4), bình khí CO2 (MT3, MT5), bình xe đẩy (MFZ35). Nhận thu gom và giao trả tận nơi cho nhà máy.
                    </p>
                    <ul class="sw-service-bullets">
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Nạp sạc bột chữa cháy và khí CO2 đúng áp lực</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Dán tem kiểm định và bảo hành tiêu chuẩn</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Xe chuyên dụng vận chuyển thu nhận tận xưởng</li>
                    </ul>
                </div>

                <!-- Card 6 -->
                <div class="sw-service-card">
                    <div class="sw-service-icon-box">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                    </div>
                    <h3 class="sw-service-title">Bảo Trì Định Kỳ Nhà Xưởng FDI</h3>
                    <p class="sw-service-desc">
                        Hợp đồng bảo trì hệ thống cơ điện và PCCC định kỳ theo tháng/quý cho các khu công nghiệp Nomura, Đình Vũ, Tràng Duệ, VSIP Hải Phòng.
                    </p>
                    <ul class="sw-service-bullets">
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Test thử liên động hệ thống báo cháy & trạm bơm</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Báo cáo kỹ thuật chi tiết sau mỗi kỳ bảo dưỡng</li>
                        <li class="sw-service-bullet"><span class="sw-bullet-dot"></span> Đội kỹ thuật trực xử lý sự cố khẩn cấp 24/7</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         4. WORKFLOW SECTION
         ===================================================================== -->
    <section class="sw-section sw-section-subtle" id="quy-trinh">
        <div class="sw-container">
            <div class="sw-section-header">
                <span class="sw-badge sw-badge-red">QUY TRÌNH CHUẨN MỰC</span>
                <h2 class="sw-section-title">4 Bước Triển Khai Kỹ Thuật Chuyên Nghiệp</h2>
                <p class="sw-section-subtitle">
                    Mọi dự án tại SANWAY đều tuân thủ chặt chẽ quy trình 4 giai đoạn nhằm đảm bảo chất lượng, tiến độ và tính chính xác tuyệt đối.
                </p>
            </div>

            <div class="sw-workflow-grid">
                <div class="sw-step-card">
                    <div class="sw-step-number">01</div>
                    <div class="sw-badge sw-badge-red sw-btn-sm" style="margin-bottom: 8px;">Giai Đoạn 1</div>
                    <h4 class="sw-step-title">Khảo Sát & Tư Vấn</h4>
                    <p class="sw-step-desc">
                        Kỹ sư SANWAY trực tiếp đến hiện trường nhà xưởng, khảo sát kiến trúc, công năng sử dụng và các nguy cơ cháy nổ tiềm ẩn để đưa ra phương án tối ưu.
                    </p>
                </div>

                <div class="sw-step-card">
                    <div class="sw-step-number">02</div>
                    <div class="sw-badge sw-badge-red sw-btn-sm" style="margin-bottom: 8px;">Giai Đoạn 2</div>
                    <h4 class="sw-step-title">Thiết Kế & Dự Toán</h4>
                    <p class="sw-step-desc">
                        Thiết kế bản vẽ chi tiết theo TCVN, bóc tách khối lượng vật tư chính xác và lập bảng báo giá minh bạch, cam kết không phát sinh chi phí.
                    </p>
                </div>

                <div class="sw-step-card">
                    <div class="sw-step-number">03</div>
                    <div class="sw-badge sw-badge-red sw-btn-sm" style="margin-bottom: 8px;">Giai Đoạn 3</div>
                    <h4 class="sw-step-title">Thi Công & Hiệu Chỉnh</h4>
                    <p class="sw-step-desc">
                        Đội ngũ kỹ thuật viên giàu kinh nghiệm trực tiếp thi công, lắp đặt trang thiết bị chính hãng và chạy thử nghiệm liên động toàn hệ thống.
                    </p>
                </div>

                <div class="sw-step-card">
                    <div class="sw-step-number">04</div>
                    <div class="sw-badge sw-badge-red sw-btn-sm" style="margin-bottom: 8px;">Giai Đoạn 4</div>
                    <h4 class="sw-step-title">Nghiệm Thu & Bảo Hành</h4>
                    <p class="sw-step-desc">
                        Hỗ trợ thủ tục nghiệm thu với cơ quan Cảnh sát PCCC, bàn giao vận hành cho chủ cơ sở và duy trì dịch vụ bảo hành bảo trì định kỳ.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         5. CONSULTATION & CONTACT FORM SECTION
         ===================================================================== -->
    <section class="sw-section" id="khao-sat">
        <div class="sw-container">
            <div class="sw-cta-banner">
                <div class="sw-cta-content">
                    <div style="font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; opacity: 0.9; margin-bottom: 8px;">
                        TƯ VẤN & KHẢO SÁT MIỄN PHÍ TẬN NƠI
                    </div>
                    <h3 class="sw-cta-title">
                        Bảo Vệ Doanh Nghiệp Của Bạn Trước Nguy Cơ Hỏa Hoạn Ngay Hôm Nay
                    </h3>
                    <p class="sw-cta-desc">
                        Liên hệ với SANWAY JSC để nhận tư vấn kỹ thuật trực tiếp từ đội ngũ kỹ sư chuyên trách và nhận dự toán báo giá chi tiết trong vòng 24 giờ.
                    </p>
                </div>

                <div class="sw-cta-actions">
                    <a href="tel:0936543389" class="sw-btn sw-btn-white">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <span>Hotline: 0936 543 389</span>
                    </a>
                    <a href="mailto:sanway.pccc@gmail.com" class="sw-btn" style="background: rgba(255, 255, 255, 0.2); color: #FFFFFF; border: 1px solid rgba(255, 255, 255, 0.3);">
                        Gửi Email Yêu Cầu
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
