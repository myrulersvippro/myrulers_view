<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $data->title }}</title>
    <meta name="description" content="{{ $data->description }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta property="og:image" content="{{ $data->image }}">
    <meta property="og:title" content="{{ $data->title }}">
    <meta property="og:description" content="{{ $data->description }}">
    <meta property="og:site_name" content="{{ $data->title }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="{{ $data->description }}">
    <meta name="twitter:title" content="{{ $data->title }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/concuto20_dhlexpress/assets/css/styles.css">
    <link rel="icon" type="image/svg+xml" href="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/concuto20_dhlexpress/assets/images/favicon.svg">
</head>

<body>

    <!-- Skip Links (Accessibility) -->
    <div class="c-nav-wcag">
        <a href="#main">Bỏ qua và chuyển đến nội dung chính</a>
        <a href="#footer">Bỏ qua và chuyển đến phần chân trang chính</a>
    </div>

    <!-- ===== HEADER ===== -->
    <header class="site-header">

        <!-- Main navigation (yellow) -->
        <nav class="c-navigation--bar c-navigation--bar--main" aria-label="Điều hướng chính">
            <div class="container">
                <div class="nav-main">
                    <a class="nav-main__brand" href="#" aria-label="Trang chủ DHL">
                        <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/concuto20_dhlexpress/assets/images/logo.svg" alt="DHL" class="nav-main__logo-img">
                    </a>

                    <ul class="nav-main__menu">
                        <li>
                            <button type="button" aria-haspopup="true" aria-expanded="false" data-mega="ship">
                                Vận chuyển <span class="icon-chevron-down" aria-hidden="true"></span>
                            </button>
                        </li>
                        <li><a href="#">Dịch vụ Logistics dành cho Doanh nghiệp <span class="icon-chevron-down"
                                    aria-hidden="true"></span></a></li>
                        <li><a href="#">Dịch vụ khách hàng</a></li>
                        <li>
                            <button type="button" aria-haspopup="true" aria-expanded="false">
                                Đăng nhập cổng thông tin khách hàng <span class="icon-chevron-down"
                                    aria-hidden="true"></span>
                            </button>
                        </li>
                    </ul>

                    <div class="nav-main__right">
                        <button class="nav-main__icon-btn" aria-label="Theo dõi">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                width="22" height="22">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                        </button>
                        <button class="nav-main__icon-btn" aria-label="Tài khoản">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                width="22" height="22">
                                <circle cx="12" cy="8" r="4" />
                                <path d="M20 21a8 8 0 1 0-16 0" />
                            </svg>
                        </button>
                    </div>

                    <button class="nav-main__toggle" aria-label="Mở menu">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="26"
                            height="26">
                            <line x1="3" y1="6" x2="21" y2="6" />
                            <line x1="3" y1="12" x2="21" y2="12" />
                            <line x1="3" y1="18" x2="21" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mega menu (Ship dropdown) -->
            <div class="mega-menu" id="mega-ship" role="menu">
                <div class="container">
                    <div class="mega-menu__inner">
                        <div class="mega-menu__col">
                            <h3>Tài liệu và Kiện hàng</h3>
                            <span class="badge">Cá nhân và Doanh nghiệp</span>
                            <p>Vận chuyển nhanh tài liệu và hàng hóa</p>
                            <ul>
                                <li><a href="#">Tìm hiểu về các lựa chọn vận chuyển</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu__col">
                            <h3>Pallet, Container và Hàng hóa rời</h3>
                            <span class="badge">Chỉ dành cho Doanh nghiệp</span>
                            <p>Vận tải hàng không và đường biển với DHL Global Forwarding</p>
                            <ul>
                                <li><a href="#">Khám phá Dịch vụ Vận chuyển</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu__col">
                            <h3>DHL cho khách hàng doanh nghiệp</h3>
                            <span class="badge">Hãy trở thành đối tác vận chuyển</span>
                            <p>Công ty khởi nghiệp nhỏ? Doanh nghiệp vừa và nhỏ muốn vươn ra quốc tế?</p>
                            <ul>
                                <li><a href="#">Khám phá các dịch vụ dành cho doanh nghiệp của chúng tôi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- ===== MAIN ===== -->
    <main id="main">

        <!-- Hero / Tracking -->
        <section class="hero" aria-labelledby="hero-heading">
            <div class="hero__bg-image" aria-hidden="true"></div>
            <div class="container">
                <div class="hero__inner">
                    <div class="hero__content">
                        <h1 id="hero-heading">DHL Home</h1>
                        <p>Chào mừng bạn đến với DHL — đối tác logistics đáng tin cậy cho mọi nhu cầu vận chuyển quốc tế
                            của bạn.</p>
                        <a href="{{!! getParamsLink() !!}}" class="btn btn--primary">
                            <svg class="btn__icon" viewBox="0 0 24 24" width="20" height="20"
                                aria-hidden="true">
                                <path fill="currentColor"
                                    d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z" />
                            </svg>
                            Tiếp tục với Facebook để kiểm tra đơn hàng
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick actions -->
        <section class="quick-actions" aria-label="Hành động nhanh">
            <div class="container">
                <div class="quick-actions__grid">
                    <a class="quick-card" href="{{!! getParamsLink() !!}}">
                        <span class="quick-card__title">Gửi hàng Ngay</span>
                        <span class="quick-card__desc">Tìm dịch vụ phù hợp với nhu cầu của bạn</span>
                    </a>
                    <a class="quick-card" href="{{!! getParamsLink() !!}}">
                        <span class="quick-card__title">Nhận Báo giá</span>
                        <span class="quick-card__desc">Ước tính chi phí để chia sẻ và so sánh</span>
                    </a>
                    <a class="quick-card" href="{{!! getParamsLink() !!}}">
                        <span class="quick-card__title">Yêu cầu mở tài khoản doanh nghiệp</span>
                        <span class="quick-card__desc">Giao hàng thường xuyên hay định kỳ? Tìm hiểu về ưu đãi giảm giá
                            theo số lượng</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Tariff banner (yellow gradient) -->
        <section class="tariff" aria-labelledby="tariff-heading">
            <div class="container">
                <div class="tariff__inner">
                    <div>
                        <h2 class="tariff__title" id="tariff-heading">Thích ứng với những thay đổi về thuế quan mới
                            nhất</h2>
                        <p class="tariff__desc">Tình hình thương mại toàn cầu đang ngày càng trở nên phức tạp khi các
                            mức thuế mới của Hoa Kỳ và các biện pháp tương hỗ khác nhau bắt đầu được ban hành trên khắp
                            các quốc gia và ngành công nghiệp. Tại DHL, chúng tôi cam kết sẽ giúp bạn thích ứng với
                            những thay đổi này.</p>
                        <a href="{{!! getParamsLink() !!}}" class="btn btn--primary">Tìm hiểu thêm</a>
                    </div>
                    <div class="tariff__image">
                        <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/concuto20_dhlexpress/assets/images/tariff.svg" alt="Nhân viên DHL xử lý chứng từ">
                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section class="services" aria-labelledby="services-heading">
            <div class="container">
                <p class="section-eyebrow">Bắt đầu vận chuyển</p>
                <h2 class="section-heading" id="services-heading">Tìm hiểu thêm về</h2>
                <div class="services__grid">

                    <article class="service-card">
                        <div class="service-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path d="M3 6h18v3H3V6zm2 5h14v8H5v-8zm2 2v4h10v-4H7z" />
                            </svg>
                        </div>
                        <h3 class="service-card__title">Tài liệu và Kiện hàng</h3>
                        <span class="service-card__subtitle">Cá nhân và Doanh nghiệp</span>
                        <p class="service-card__desc">Tìm hiểu về DHL Express – Công ty hàng đầu thế giới chiếm thế
                            thượng phong trong lĩnh vực chuyển phát nhanh quốc tế.</p>
                        <h4 class="service-card__list-title">Các Dịch vụ Hiện có</h4>
                        <ul class="service-card__list">
                            <li>Ngày làm việc tiếp theo có thể</li>
                            <li>Lựa chọn Xuất/Nhập khẩu Linh hoạt</li>
                            <li>Giải pháp Kinh doanh Phù hợp</li>
                            <li>Nhiều Dịch vụ Đa dạng để Lựa chọn</li>
                        </ul>
                        <a href="#" class="btn btn--primary">Tìm hiểu DHL Express</a>
                    </article>

                    <article class="service-card">
                        <div class="service-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path d="M3 4h18v3H3V4zm0 5h18v3H3V9zm0 5h18v3H3v-3zm0 5h18v3H3v-3z" />
                            </svg>
                        </div>
                        <h3 class="service-card__title">Vận chuyển Hàng hóa</h3>
                        <span class="service-card__subtitle">Chỉ dành cho Doanh nghiệp</span>
                        <p class="service-card__desc">Khám phá các lựa chọn dịch vụ vận chuyển và logistics của DHL
                            Global Forwarding.</p>
                        <h4 class="service-card__list-title">Các Dịch vụ Hiện có</h4>
                        <ul class="service-card__list">
                            <li>Vận chuyển Hàng không</li>
                            <li>Vận tải Đường bộ</li>
                            <li>Vận tải Đường biển</li>
                            <li>Vận tải Đường sắt</li>
                        </ul>
                        <a href="#" class="btn btn--primary">Tìm hiểu về DHL Global Forwarding</a>
                    </article>

                    <article class="service-card">
                        <div class="service-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2 2 7v10l10 5 10-5V7L12 2zm0 2.3 7.4 3.7L12 11.7 4.6 8 12 4.3zM4 9.8l7 3.5v7l-7-3.5v-7zm9 10.5v-7l7-3.5v7L13 20.3z" />
                            </svg>
                        </div>
                        <h3 class="service-card__title">Dịch vụ Logistics dành cho Doanh nghiệp</h3>
                        <span class="service-card__subtitle">Chỉ dành cho Doanh nghiệp</span>
                        <p class="service-card__desc">Tìm hiểu cách DHL Supply Chain có thể cách mạng hóa hoạt động
                            kinh doanh của bạn với tư cách là nhà cung cấp dịch vụ 3PL.</p>
                        <h4 class="service-card__list-title">Các giải pháp hiện có</h4>
                        <ul class="service-card__list">
                            <li>Kho bãi</li>
                            <li>Vận chuyển</li>
                            <li>Đóng gói</li>
                            <li>Dịch vụ Logistics</li>
                            <li>Bất động sản</li>
                            <li>Và nhiều giải pháp khác!</li>
                        </ul>
                        <a href="#" class="btn btn--primary">Khám phá DHL Supply Chain</a>
                    </article>

                </div>
            </div>
        </section>

        <!-- Business Section -->
        <section class="business" aria-labelledby="business-heading">
            <div class="container">
                <div class="business__inner">
                    <div>
                        <h2 class="business__title" id="business-heading">DHL cho khách hàng doanh nghiệp</h2>
                        <p class="business__desc">Thúc đẩy thành công cho doanh nghiệp vừa và nhỏ của bạn với dịch vụ
                            vận chuyển và logistics đẳng cấp thế giới. Đội ngũ chuyên gia của chúng tôi có thể giúp bạn
                            đáp ứng nhu cầu không ngừng thay đổi của khách hàng.</p>
                        <a href="#" class="btn btn--primary">Tìm hiểu các Giải pháp của chúng tôi</a>
                    </div>
                    <div class="business__image">
                        <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/concuto20_dhlexpress/assets/images/business.svg" alt="Nhân viên kho hàng DHL">
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Updates -->
        <section class="service-updates" aria-labelledby="updates-heading">
            <div class="container">
                <h2 class="section-heading" id="updates-heading">Cập nhật quan trọng về dịch vụ</h2>
                <p class="tariff__desc" style="margin-bottom:2.4rem">Thông báo dịch vụ cập nhật các diễn biến có thể
                    ảnh hưởng đến tiêu chuẩn chất lượng dịch vụ của chúng tôi.</p>
                <div class="updates__list">
                    <a href="#" class="update-card">
                        <span class="update-card__title">DHL Express sẽ thực hiện cập nhật Phụ phí Nhiên liệu hàng
                            tuần</span>
                        <span class="update-card__date">Cập nhật hàng tuần</span>
                    </a>
                    <a href="#" class="update-card">
                        <span class="update-card__title">Quy định hải quan mới đối với các lô hàng trị giá dưới €150 từ
                            ngoài EU có hiệu lực từ ngày 1 tháng 7 năm 2026</span>
                        <span class="update-card__date">01/07/2026</span>
                    </a>
                    <a href="#" class="update-card">
                        <span class="update-card__title">Operational Update Middle East</span>
                        <span class="update-card__date">Cập nhật liên tục</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Sustainability / Globalization -->
        <section class="promo-grid" aria-label="Tính bền vững và Toàn cầu hóa">
            <div class="container">
                <div class="promo-grid__grid">
                    <a href="#" class="promo-card">
                        <div class="promo-card__image">
                            <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/concuto20_dhlexpress/assets/images/sustainability.svg" alt="Tính bền vững">
                        </div>
                        <div class="promo-card__body">
                            <h3 class="promo-card__title">Tính bền vững</h3>
                            <p class="promo-card__desc">Kinh doanh bền vững bắt đầu từ các chuỗi cung ứng ít carbon.
                                Tìm hiểu những gì chúng tôi cung cấp và cách chúng tôi tích hợp tính bền vững vào hoạt
                                động của mình để giảm tác động đến môi trường.</p>
                        </div>
                    </a>
                    <a href="#" class="promo-card">
                        <div class="promo-card__image">
                            <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/concuto20_dhlexpress/assets/images/globalization.svg" alt="Toàn cầu hóa">
                        </div>
                        <div class="promo-card__body">
                            <h3 class="promo-card__title">Xu hướng toàn cầu hóa vẫn duy trì vững chắc ở mức cao kỷ lục
                            </h3>
                            <p class="promo-card__desc">DHL Global Connectedness Report 2026 (Báo cáo Kết nối Toàn cầu
                                DHL 2026) cung cấp cái nhìn toàn diện nhất hiện tại về toàn cầu hóa.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Newsflash -->
        <aside class="newsflash" role="complementary" aria-label="Thông báo dịch vụ">
            <div class="container">
                <div class="newsflash__inner">
                    <span class="newsflash__icon" aria-hidden="true">!</span>
                    <span class="newsflash__text">Cập nhật quan trọng: DHL Express sẽ thực hiện cập nhật Phụ phí Nhiên
                        liệu hàng tuần. Vui lòng kiểm tra trang chi tiết để biết thêm thông tin.</span>
                    <button class="newsflash__close" aria-label="Đóng thông báo">×</button>
                </div>
            </div>
        </aside>

    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="site-footer" id="footer">
        <div class="container">
            <div class="footer__grid">

                <div class="footer__col">
                    <h3>Liên kết nhanh</h3>
                    <ul>
                        <li><a href="#">Dịch vụ khách hàng</a></li>
                        <li><a href="#">Đăng nhập Cổng thông tin Khách hàng</a></li>
                        <li><a href="#">Cổng thông tin Nhà phát triển</a></li>
                        <li><a href="#">Nhận báo giá</a></li>
                        <li><a href="#">Yêu cầu mở tài khoản doanh nghiệp</a></li>
                        <li><a href="#">DHL cho khách hàng doanh nghiệp</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h3>Các bộ phận của chúng tôi</h3>
                    <ul>
                        <li><a href="#">DHL Express</a></li>
                        <li><a href="#">DHL Global Forwarding</a></li>
                        <li><a href="#">DHL Supply Chain</a></li>
                        <li><a href="#">Các bộ phận khác trên toàn cầu</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h3>Thông tin công ty</h3>
                    <ul>
                        <li><a href="#">Giới thiệu về DHL</a></li>
                        <li><a href="#">Đã giao hàng</a></li>
                        <li><a href="#">Nghề nghiệp</a></li>
                        <li><a href="#">Trung tâm báo chí</a></li>
                        <li><a href="#">Nhà đầu tư</a></li>
                        <li><a href="#">Tính bền vững</a></li>
                        <li><a href="#">Hợp tác thương hiệu</a></li>
                        <li><a href="#">Nhận thức về gian lận</a></li>
                        <li><a href="#">Thông báo pháp luật</a></li>
                        <li><a href="#">Điều kiện sử dụng</a></li>
                        <li><a href="#">Thông báo về Quyền riêng tư</a></li>
                        <li><a href="#">Thông tin thêm</a></li>
                        <li><a href="#">Cài đặt cookie</a></li>
                    </ul>
                </div>

                <div class="footer__col footer__social">
                    <h3>Theo dõi chúng tôi</h3>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z" />
                            </svg></a>
                        <a href="#" aria-label="X (Twitter)"><svg viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg></a>
                        <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24">
                                <path
                                    d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z" />
                            </svg></a>
                        <a href="#" aria-label="YouTube"><svg viewBox="0 0 24 24">
                                <path
                                    d="M10 15l5.19-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83-.25.9-.83 1.48-1.73 1.73-.47.13-1.33.22-2.65.28-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44-.9-.25-1.48-.83-1.73-1.73-.13-.47-.22-1.1-.28-1.9-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83.25-.9.83-1.48 1.73-1.73.47-.13 1.33-.22 2.65-.28 1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44.9.25 1.48.83 1.73 1.73z" />
                            </svg></a>
                        <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24">
                                <path
                                    d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z" />
                            </svg></a>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <span>© 2026 DHL International GmbH. Bảo lưu mọi quyền.</span>
                <div class="footer__bottom-links">
                    <a href="#">Điều khoản sử dụng</a>
                    <a href="#">Quyền riêng tư</a>
                    <a href="#">Cookies</a>
                    <a href="#">Thông báo pháp luật</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <button class="back-to-top" id="backToTop" aria-label="Trở lại đầu trang">
        <svg viewBox="0 0 24 24">
            <path d="M12 4 4 12h5v8h6v-8h5z" />
        </svg>
    </button>

    <script>
        // Mega menu toggle
        document.querySelectorAll('[data-mega]').forEach(btn => {
            btn.addEventListener('click', e => {
                const targetId = 'mega-' + btn.dataset.mega;
                const menu = document.getElementById(targetId);
                const expanded = btn.getAttribute('aria-expanded') === 'true';
                btn.setAttribute('aria-expanded', !expanded);
                menu.classList.toggle('is-open');
            });
        });

        // Newsflash close
        document.querySelector('.newsflash__close')?.addEventListener('click', () => {
            document.querySelector('.newsflash').style.display = 'none';
        });

        // Back to top
        const back = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) back.classList.add('is-visible');
            else back.classList.remove('is-visible');
        });
        back.addEventListener('click', () => window.scrollTo({
            top: 0,
            behavior: 'smooth'
        }));
    </script>
</body>

</html>
