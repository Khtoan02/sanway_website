<?php
/**
 * Template Name: Trang Liên Hệ - SANWAY
 * Chuẩn cấu trúc:
 * - Thông tin doanh nghiệp
 * - Form đăng ký tư vấn, báo giá
 * - Google Maps
 * - Hotline, Email, Zalo
 *
 * @package SANWAY
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- =====================================================================
         1. HERO BANNER
         ===================================================================== -->
    <section class="sw-pos-hero" style="min-height: 44vh; padding: 50px 0 60px 0;">
        <div class="sw-container">
            <!-- Brand Logo (Điều hướng về Trang Chủ) -->
            <div class="sw-hero-logo-row" style="margin-bottom: 44px;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sw-hero-logo-link" aria-label="SANWAY Homepage">
                    <img src="<?php echo esc_url( sanway_get_logo_url( 'horizontal' ) ); ?>" alt="CÔNG TY CỔ PHẦN SANWAY" class="sw-hero-logo-img">
                </a>
            </div>

            <div class="sw-pos-hero-content">
                <h1 class="sw-pos-hero-title" style="font-size: clamp(3rem, 6.5vw, 5.8rem);">
                    <span class="sw-line">LIÊN HỆ &</span>
                    <span class="sw-line sw-text-red">BÁO GIÁ KỸ THUẬT</span>
                </h1>

                <p class="sw-pos-desc" style="margin-bottom: 24px; text-wrap: pretty;">
                    Đội ngũ kỹ sư SANWAY sẵn sàng tiếp nhận thông tin, khảo sát hiện trường và tư vấn giải pháp tối ưu nhất cho quý doanh nghiệp.
                </p>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         2. HOTLINE, EMAIL, ZALO (3 THẺ TƯƠNG TÁC NHANH)
         ===================================================================== -->
    <section style="padding: 20px 0 60px 0;">
        <div class="sw-container">
            <div class="sw-quick-connect-grid">
                <!-- Hotline -->
                <a href="tel:0936543389" class="sw-connect-card">
                    <div class="sw-connect-icon">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <span class="sw-connect-label">ĐƯỜNG DÂY NÓNG 24/7</span>
                    <strong class="sw-connect-value">0936 543 389</strong>
                    <span class="sw-connect-sub">Giám Đốc: Đỗ Thị Bích Vân</span>
                </a>

                <!-- Zalo -->
                <a href="https://zalo.me/0936543389" target="_blank" rel="noopener noreferrer" class="sw-connect-card">
                    <div class="sw-connect-icon" style="background-color: #EFF6FF; color: #2563EB;">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <span class="sw-connect-label">KẾT NỐI NHANH QUA ZALO</span>
                    <strong class="sw-connect-value" style="color: #2563EB;">0936 543 389</strong>
                    <span class="sw-connect-sub">Tư vấn trực tiếp & gửi tài liệu</span>
                </a>

                <!-- Email -->
                <a href="mailto:sanway.pccc@gmail.com" class="sw-connect-card">
                    <div class="sw-connect-icon" style="background-color: #F0FDF4; color: #16A34A;">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <span class="sw-connect-label">HÒM THƯ DOANH NGHIỆP</span>
                    <strong class="sw-connect-value" style="font-size: 19px; color: var(--sw-dark);">sanway.pccc@gmail.com</strong>
                    <span class="sw-connect-sub">Phản hồi báo giá trong 24h</span>
                </a>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         3. THÔNG TIN DOANH NGHIỆP & FORM ĐĂNG KÝ TƯ VẤN BÁO GIÁ
         ===================================================================== -->
    <section class="sw-pos-section sw-bg-subtle" style="padding-top: 80px;">
        <div class="sw-container">
            <div class="sw-contact-split-grid">
                
                <!-- Cột 1: Thông tin doanh nghiệp -->
                <div class="sw-company-info-panel">
                    <span class="sw-pos-section-tag">THÔNG TIN PHÁP LÝ</span>
                    <h2 style="font-size: 26px; font-weight: 900; color: var(--sw-dark); margin-bottom: 20px; text-transform: uppercase;">
                        CÔNG TY CỔ PHẦN SANWAY
                    </h2>
                    
                    <div class="sw-info-item">
                        <div class="sw-info-icon">🏢</div>
                        <div>
                            <strong>Trụ sở chính:</strong>
                            <p>Số 35/51 Trung Lực, phường Hải An, TP. Hải Phòng, Việt Nam</p>
                        </div>
                    </div>

                    <div class="sw-info-item">
                        <div class="sw-info-icon">🏭</div>
                        <div>
                            <strong>Chi nhánh KCN:</strong>
                            <p>Khu Công Nghiệp Nomura, Huyện An Dương, TP. Hải Phòng</p>
                        </div>
                    </div>

                    <div class="sw-info-item">
                        <div class="sw-info-icon">👤</div>
                        <div>
                            <strong>Giám đốc điều hành:</strong>
                            <p style="color: var(--sw-red); font-weight: 800; font-size: 16px;">ĐỖ THỊ BÍCH VÂN</p>
                        </div>
                    </div>

                    <div class="sw-info-item">
                        <div class="sw-info-icon">📞</div>
                        <div>
                            <strong>Hotline:</strong>
                            <p><strong>0936 543 389</strong> • 0936 888 666</p>
                        </div>
                    </div>

                    <div class="sw-info-item">
                        <div class="sw-info-icon">🌐</div>
                        <div>
                            <strong>Website:</strong>
                            <p><a href="https://sanway.vn" target="_blank" style="color: var(--sw-red); font-weight: 700;">www.sanway.vn</a></p>
                        </div>
                    </div>

                    <div class="sw-info-item">
                        <div class="sw-info-icon">⏱️</div>
                        <div>
                            <strong>Giờ làm việc & trực ban:</strong>
                            <p>Thứ 2 – Thứ 7: 08:00 – 17:30 (Trực kỹ thuật khẩn cấp 24/7)</p>
                        </div>
                    </div>
                </div>

                <!-- Cột 2: Form đăng ký tư vấn, báo giá -->
                <div class="sw-contact-form-panel">
                    <span class="sw-pos-section-tag">GỬI YÊU CẦU</span>
                    <h2 style="font-size: 26px; font-weight: 900; color: var(--sw-dark); margin-bottom: 8px; text-transform: uppercase;">
                        ĐĂNG KÝ TƯ VẤN & BÁO GIÁ
                    </h2>
                    <p style="font-size: 14.5px; color: var(--sw-muted); margin-bottom: 24px;">
                        Điền thông tin bên dưới, kỹ sư SANWAY sẽ liên hệ trực tiếp trong vòng 15 phút.
                    </p>

                    <form id="sanwayQuoteForm" class="sw-quote-form" onsubmit="event.preventDefault(); document.getElementById('formSuccessAlert').style.display = 'block'; this.reset();">
                        <div class="sw-form-group">
                            <label class="sw-form-label">Họ và tên của bạn <span style="color: var(--sw-red);">*</span></label>
                            <input type="text" class="sw-form-input" placeholder="Ví dụ: Nguyễn Văn A" required>
                        </div>

                        <div class="sw-form-row">
                            <div class="sw-form-group">
                                <label class="sw-form-label">Số điện thoại <span style="color: var(--sw-red);">*</span></label>
                                <input type="tel" class="sw-form-input" placeholder="Ví dụ: 0912 345 678" required>
                            </div>
                            <div class="sw-form-group">
                                <label class="sw-form-label">Tên công ty / Cơ sở</label>
                                <input type="text" class="sw-form-input" placeholder="Tên nhà máy, công ty...">
                            </div>
                        </div>

                        <div class="sw-form-group">
                            <label class="sw-form-label">Hạng mục bạn quan tâm</label>
                            <select class="sw-form-select">
                                <option value="Báo cháy tự động">Hệ thống báo cháy tự động</option>
                                <option value="Chữa cháy Sprinkler">Hệ thống chữa cháy Sprinkler</option>
                                <option value="Trạm bơm PCCC">Trạm bơm chữa cháy công nghiệp</option>
                                <option value="Nạp sạc & Kiểm định bình">Kiểm định & nạp sạc bình PCCC</option>
                                <option value="Thẩm duyệt nghiệm thu">Tư vấn thẩm duyệt & nghiệm thu PCCC</option>
                                <option value="Bảo trì trọn gói KCN">Hợp đồng bảo trì định kỳ nhà máy FDI</option>
                            </select>
                        </div>

                        <div class="sw-form-group">
                            <label class="sw-form-label">Nội dung yêu cầu / Địa điểm công trình</label>
                            <textarea class="sw-form-textarea" rows="3" placeholder="Mô tả sơ lược về hiện trạng công trình hoặc khối lượng dự kiến..."></textarea>
                        </div>

                        <button type="submit" class="sw-btn-pos-primary" style="width: 100%; justify-content: center; border: none; cursor: pointer;">
                            GỬI YÊU CẦU KHẢO SÁT & BÁO GIÁ
                        </button>

                        <div id="formSuccessAlert" style="display: none; margin-top: 18px; padding: 14px 18px; background-color: #ECFDF5; border: 1px solid #A7F3D0; border-radius: 12px; color: #065F46; font-size: 14.5px; font-weight: 700;">
                            ✓ Cảm ơn bạn! Thông tin đã được gửi tới Giám đốc SANWAY. Chúng tôi sẽ liên hệ lại ngay!
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- =====================================================================
         4. GOOGLE MAPS
         ===================================================================== -->
    <section class="sw-pos-section" style="padding-bottom: 100px;">
        <div class="sw-container">
            <div class="sw-pos-section-head">
                <span class="sw-pos-section-tag">VỊ TRÍ ĐỊA LÝ</span>
                <h2 class="sw-pos-section-title">BẢN ĐỒ VỊ TRÍ SANWAY TẠI HẢI PHÒNG</h2>
                <p style="font-size: 16px; color: var(--sw-muted); margin-top: 8px;">
                    Trụ sở: Số 35/51 Trung Lực, P. Hải An, TP. Hải Phòng • Chi nhánh: KCN Nomura, An Dương, Hải Phòng.
                </p>
            </div>

            <!-- Responsive Google Maps Embed -->
            <div class="sw-maps-wrapper">
                <iframe 
                    title="SANWAY Hải Phòng Maps" 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14902.93774640488!2d106.695325!3d20.852445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7a8d5628b087%3A0xe21d42856f6ba3a6!2zVHJ1bmcgTOG7sWMsIEjhuqNpIEFuLCBI4bqjaSBQaMOybmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1700000000000!5m2!1svi!2s" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
