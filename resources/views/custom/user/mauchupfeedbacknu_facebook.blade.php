<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
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
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Iosevka+Charon+Mono:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <link rel="stylesheet"
        href="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedback/style.css" />
    <style>
        *,
        html,
        body {
            font-family: 'Iosevka Charon Mono', sans-serif !important;
        }

        i.fa-brands {
            font-family: "Font Awesome 7 Brands", sans-serif !important;
        }
    </style>
</head>

<body>
    <div id="root">
        <div role="region" aria-label="Notifications (F8)" tabindex="-1" style="pointer-events: none;">
            <ol tabindex="-1"
                class="fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse p-4 sm:bottom-0 sm:right-0 sm:top-auto sm:flex-col md:max-w-[420px]">
            </ol>
        </div>
        <section aria-label="Notifications alt+T" tabindex="-1" aria-live="polite" aria-relevant="additions text"
            aria-atomic="false"></section>
        <div class="min-h-screen bg-background text-foreground font-body">
            <nav class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-md border-b border-gold-subtle">
                <div class="container mx-auto px-6 py-4 flex items-center justify-between"><a href="#"
                        class="flex items-center gap-2 animate__animated animate__fadeInLeft"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-camera w-6 h-6 text-gold">
                            <path
                                d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z">
                            </path>
                            <circle cx="12" cy="13" r="3"></circle>
                        </svg><span class="font-display text-2xl text-gold tracking-wider">ERA<span
                                class="font-light text-cream ml-2">CLOTHING</span></span></a>
                    <div class="hidden md:flex items-center gap-8"><a href="#hero"
                            class="text-sm uppercase tracking-[0.2em] text-cream/70 hover:text-gold transition-colors duration-300">Trang
                            chủ</a><a href="#models"
                            class="text-sm uppercase tracking-[0.2em] text-cream/70 hover:text-gold transition-colors duration-300">Các
                            mẫu ảnh chụp</a><a href="#reviews"
                            class="text-sm uppercase tracking-[0.2em] text-cream/70 hover:text-gold transition-colors duration-300">Đánh
                            giá</a></div><a href="#models" class="btn-primary-hero !px-6 !py-2 text-xs">Đăng ký ngay</a>
                </div>
            </nav>
            <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url(https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedback/hero.jpg);">
                </div>
                <div class="absolute inset-0 bg-background/70"></div>
                <div class="absolute inset-0 bg-gradient-to-b from-background/30 via-transparent to-background"></div>
                <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
                    <div
                        class="animate__animated animate__fadeInDown animate__delay-1s inline-flex items-center gap-2 px-5 py-2 border border-gold-subtle rounded-full mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-camera w-4 h-4 text-gold">
                            <path
                                d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z">
                            </path>
                            <circle cx="12" cy="13" r="3"></circle>
                        </svg><span class="text-gold uppercase text-xs font-body">FEEDBACK MẪU ẢNH HÀNG ĐẦU VIỆT
                            NAM</span>
                    </div>
                    <h1
                        class="animate__animated animate__fadeInUp font-display text-4xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6">
                        <span class="text-cream">Tuyển mẫu chụp ảnh </span><br /><span
                            class="text-gold-gradient">Feedback </span><span class="text-cream">2026</span>
                    </h1>
                    <div class="animate__animated animate__fadeInUp animate__delay-2s"><a href="#models"
                            class="btn-primary-hero">Xem các mẫu chụp</a></div>
                    <div
                        class="animate__animated animate__fadeInUp animate__delay-3s mt-16 grid grid-cols-3 gap-8 max-w-lg mx-auto">
                        <div class="text-center">
                            <p class="font-display text-3xl md:text-4xl text-gold font-bold">500+</p>
                            <p class="text-xs uppercase tracking-[0.2em] text-cream/50 mt-1">Người mẫu</p>
                        </div>
                        <div class="text-center">
                            <p class="font-display text-3xl md:text-4xl text-gold font-bold">1000+</p>
                            <p class="text-xs uppercase tracking-[0.2em] text-cream/50 mt-1">Dự án</p>
                        </div>
                        <div class="text-center">
                            <p class="font-display text-3xl md:text-4xl text-gold font-bold">50+</p>
                            <p class="text-xs uppercase tracking-[0.2em] text-cream/50 mt-1">Đối tác</p>
                        </div>
                    </div>
                </div>
                <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
                    <div class="w-6 h-10 border-2 border-gold/40 rounded-full flex justify-center pt-2">
                        <div class="w-1 h-3 bg-gold rounded-full animate-float"></div>
                    </div>
                </div>
            </section>
            <section id="models" class="py-24 bg-background">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <p
                            class="animate__animated animate__fadeIn text-gold uppercase tracking-[0.4em] text-sm mb-4 font-body">
                            Portfolio</p>
                        <h2
                            class="animate__animated animate__fadeInUp font-display text-4xl md:text-5xl text-cream font-bold mb-4">
                            Các Mẫu Ảnh Chụp</h2>
                        <div class="section-divider mt-6"></div>
                        <p class="font-elegant text-lg text-cream/50 italic mt-6 max-w-xl mx-auto">Khám phá các vị trí
                            tuyển mẫu đang mở. Đăng ký ngay để nhận cơ hội chụp ảnh chuyên nghiệp.</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="model-card-v2 group animate__animated animate__fadeInUp"
                            style="animation-delay: 0s;">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedbacknu/model/anh1.jpg"
                                    alt="Linh Ngọc" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 bg-card border-t border-gold-subtle">
                                <h3 class="font-display text-lg text-cream mb-1">Mẫu 1</h3>
                                <p class="text-sm text-cream/50 font-body mb-4"><b>Mô tả mẫu</b>: slay, xinh đẹp, trẻ
                                    trung, quyến rũ</p>
                                <button onclick="goNow();" class="w-full btn-card-cta tracking-tight">
                                    Đăng ký mẫu ngay
                            </div>
                        </div>
                        <div class="model-card-v2 group animate__animated animate__fadeInUp"
                            style="animation-delay: 0s;">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedbacknu/model/anh2.jpg"
                                    alt="Linh Ngọc" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 bg-card border-t border-gold-subtle">
                                <h3 class="font-display text-lg text-cream mb-1">Mẫu 2</h3>
                                <p class="text-sm text-cream/50 font-body mb-4"><b>Mô tả mẫu</b>: nàng thơ, dễ thương,
                                    xinh đẹp, trẻ trung</p>
                                <button onclick="goNow();" class="w-full btn-card-cta tracking-tight">
                                    Đăng ký mẫu ngay
                            </div>
                        </div>
                        <div class="model-card-v2 group animate__animated animate__fadeInUp"
                            style="animation-delay: 0s;">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedbacknu/model/anh3.jpg"
                                    alt="Linh Ngọc" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 bg-card border-t border-gold-subtle">
                                <h3 class="font-display text-lg text-cream mb-1">Mẫu 3</h3>
                                <p class="text-sm text-cream/50 font-body mb-4"><b>Mô tả mẫu</b>: ưa nhìn, độc đáo, cá
                                    tính</p>
                                <button onclick="goNow();" class="w-full btn-card-cta tracking-tight">
                                    Đăng ký mẫu ngay
                            </div>
                        </div>
                        <div class="model-card-v2 group animate__animated animate__fadeInUp"
                            style="animation-delay: 0s;">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedbacknu/model/anh4.jpg"
                                    alt="Linh Ngọc" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 bg-card border-t border-gold-subtle">
                                <h3 class="font-display text-lg text-cream mb-1">Mẫu 4</h3>
                                <p class="text-sm text-cream/50 font-body mb-4"><b>Mô tả mẫu</b>: slay, quyến rũ, phong
                                    cách</p>
                                <button onclick="goNow();" class="w-full btn-card-cta tracking-tight">
                                    Đăng ký mẫu ngay
                            </div>
                        </div>
                        <div class="model-card-v2 group animate__animated animate__fadeInUp"
                            style="animation-delay: 0s;">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedbacknu/model/anh5.jpg"
                                    alt="Linh Ngọc" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 bg-card border-t border-gold-subtle">
                                <h3 class="font-display text-lg text-cream mb-1">Mẫu 5</h3>
                                <p class="text-sm text-cream/50 font-body mb-4"><b>Mô tả mẫu</b>: xinh đẹp, ưa nhìn</p>
                                <button onclick="goNow();" class="w-full btn-card-cta tracking-tight">
                                    Đăng ký mẫu ngay
                            </div>
                        </div>
                        <div class="model-card-v2 group animate__animated animate__fadeInUp"
                            style="animation-delay: 0s;">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedbacknu/model/anh6.jpg"
                                    alt="Linh Ngọc" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 bg-card border-t border-gold-subtle">
                                <h3 class="font-display text-lg text-cream mb-1">Mẫu 6</h3>
                                <p class="text-sm text-cream/50 font-body mb-4"><b>Mô tả mẫu</b>: slay, quyến rũ</p>
                                <button onclick="goNow();" class="w-full btn-card-cta tracking-tight">
                                    Đăng ký mẫu ngay
                            </div>
                        </div>
                        <div class="model-card-v2 group animate__animated animate__fadeInUp"
                            style="animation-delay: 0s;">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedbacknu/model/anh7.jpg"
                                    alt="Linh Ngọc" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 bg-card border-t border-gold-subtle">
                                <h3 class="font-display text-lg text-cream mb-1">Mẫu 7</h3>
                                <p class="text-sm text-cream/50 font-body mb-4"><b>Mô tả mẫu</b>: dễ thương, nàng thơ,
                                    phong cách</p>
                                <button onclick="goNow();" class="w-full btn-card-cta tracking-tight">
                                    Đăng ký mẫu ngay
                            </div>
                        </div>
                        <div class="model-card-v2 group animate__animated animate__fadeInUp"
                            style="animation-delay: 0s;">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedbacknu/model/anh8.jpg"
                                    alt="Linh Ngọc" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 bg-card border-t border-gold-subtle">
                                <h3 class="font-display text-lg text-cream mb-1">Mẫu 8</h3>
                                <p class="text-sm text-cream/50 font-body mb-4"><b>Mô tả mẫu</b>: slay, cute, xinh đẹp
                                </p>
                                <button onclick="goNow();" class="w-full btn-card-cta tracking-tight">
                                    Đăng ký mẫu ngay
                            </div>
                        </div>
                        <div class="model-card-v2 group animate__animated animate__fadeInUp"
                            style="animation-delay: 0s;">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedbacknu/model/anh9.jpg"
                                    alt="Linh Ngọc" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 bg-card border-t border-gold-subtle">
                                <h3 class="font-display text-lg text-cream mb-1">Mẫu 9</h3>
                                <p class="text-sm text-cream/50 font-body mb-4"><b>Mô tả mẫu</b>: phong cách, đậm chất
                                    nét đẹp</p>
                                <button onclick="goNow();" class="w-full btn-card-cta tracking-tight">
                                    Đăng ký mẫu ngay
                            </div>
                        </div>
                        <div class="model-card-v2 group animate__animated animate__fadeInUp"
                            style="animation-delay: 0s;">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedbacknu/model/anh10.jpg"
                                    alt="Linh Ngọc" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 bg-card border-t border-gold-subtle">
                                <h3 class="font-display text-lg text-cream mb-1">Mẫu 10</h3>
                                <p class="text-sm text-cream/50 font-body mb-4"><b>Mô tả mẫu</b>: tay chơi, phong cách,
                                    slay</p>
                                <button onclick="goNow();" class="w-full btn-card-cta tracking-tight">
                                    Đăng ký mẫu ngay
                            </div>
                        </div>
                        <div class="model-card-v2 group animate__animated animate__fadeInUp"
                            style="animation-delay: 0s;">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedbacknu/model/anh11.jpg"
                                    alt="Linh Ngọc" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 bg-card border-t border-gold-subtle">
                                <h3 class="font-display text-lg text-cream mb-1">Mẫu 11</h3>
                                <p class="text-sm text-cream/50 font-body mb-4"><b>Mô tả mẫu</b>: slay, quyến rũ</p>
                                <button onclick="goNow();" class="w-full btn-card-cta tracking-tight">
                                    Đăng ký mẫu ngay
                            </div>
                        </div>
                        <div class="model-card-v2 group animate__animated animate__fadeInUp"
                            style="animation-delay: 0s;">
                            <div class="aspect-[3/4] overflow-hidden">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/mauchupfeedbacknu/model/anh12.jpg"
                                    alt="Linh Ngọc" loading="lazy"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            </div>
                            <div class="p-5 bg-card border-t border-gold-subtle">
                                <h3 class="font-display text-lg text-cream mb-1">Mẫu 12</h3>
                                <p class="text-sm text-cream/50 font-body mb-4"><b>Mô tả mẫu</b>: slay, quyến rũ, party
                                </p>
                                <button onclick="goNow();" class="w-full btn-card-cta tracking-tight">
                                    Đăng ký mẫu ngay
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="reviews" class="py-24 bg-charcoal-light">
                <div class="container mx-auto px-6">
                    <div class="text-center mb-16">
                        <p class="text-gold uppercase tracking-[0.4em] text-sm mb-4 font-body">Phản hồi</p>
                        <h2
                            class="font-display text-4xl md:text-5xl text-cream font-bold mb-4 animate__animated animate__fadeInUp">
                            Đánh Giá Từ Khách Hàng</h2>
                        <div class="section-divider mt-6"></div>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                        <div class="bg-charcoal p-6 border border-gold-subtle hover:border-gold/40 transition-all duration-500 animate__animated animate__fadeInUp group hover:-translate-y-2 text-center"
                            style="animation-delay: 0s;"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-quote w-8 h-8 text-gold/30 mx-auto mb-3">
                                <path
                                    d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                </path>
                                <path
                                    d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                </path>
                            </svg>
                            <div class="flex gap-1 justify-center mb-3"><span class="star-gold text-sm">★</span><span
                                    class="star-gold text-sm">★</span><span class="star-gold text-sm">★</span><span
                                    class="star-gold text-sm">★</span><span class="star-gold text-sm">★</span></div>
                            <p class="font-elegant text-base text-cream/70 italic leading-relaxed mb-5">"Tôi đã tìm
                                được
                                rất nhiều cơ hội chụp ảnh tuyệt vời thông qua nền tảng này. Đội ngũ rất chuyên nghiệp và
                                hỗ trợ tận tình."</p>
                            <div class="border-t border-gold-subtle pt-4">
                                <p class="font-display text-cream text-base">Nguyễn Thị Mai</p>
                                <p class="text-xs uppercase tracking-[0.2em] text-gold/70 mt-1">Người mẫu tự do</p>
                            </div>
                        </div>
                        <div class="bg-charcoal p-6 border border-gold-subtle hover:border-gold/40 transition-all duration-500 animate__animated animate__fadeInUp group hover:-translate-y-2 text-center"
                            style="animation-delay: 0.15s;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-quote w-8 h-8 text-gold/30 mx-auto mb-3">
                                <path
                                    d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                </path>
                                <path
                                    d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                </path>
                            </svg>
                            <div class="flex gap-1 justify-center mb-3"><span class="star-gold text-sm">★</span><span
                                    class="star-gold text-sm">★</span><span class="star-gold text-sm">★</span><span
                                    class="star-gold text-sm">★</span><span class="star-gold text-sm">★</span></div>
                            <p class="font-elegant text-base text-cream/70 italic leading-relaxed mb-5">"Chất lượng
                                người mẫu ở đây rất cao. Mỗi buổi chụp đều mang lại kết quả vượt mong đợi."</p>
                            <div class="border-t border-gold-subtle pt-4">
                                <p class="font-display text-cream text-base">Trần Văn Hoàng</p>
                                <p class="text-xs uppercase tracking-[0.2em] text-gold/70 mt-1">Nhiếp ảnh gia</p>
                            </div>
                        </div>
                        <div class="bg-charcoal p-6 border border-gold-subtle hover:border-gold/40 transition-all duration-500 animate__animated animate__fadeInUp group hover:-translate-y-2 text-center"
                            style="animation-delay: 0.3s;"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-quote w-8 h-8 text-gold/30 mx-auto mb-3">
                                <path
                                    d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                </path>
                                <path
                                    d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                </path>
                            </svg>
                            <div class="flex gap-1 justify-center mb-3"><span class="star-gold text-sm">★</span><span
                                    class="star-gold text-sm">★</span><span class="star-gold text-sm">★</span><span
                                    class="star-gold text-sm">★</span><span class="text-cream/20 text-sm">★</span>
                            </div>
                            <p class="font-elegant text-base text-cream/70 italic leading-relaxed mb-5">"Nền tảng tuyệt
                                vời để tìm kiếm gương mặt mới cho các chiến dịch thương hiệu. Quy trình nhanh chóng và
                                hiệu quả."</p>
                            <div class="border-t border-gold-subtle pt-4">
                                <p class="font-display text-cream text-base">Lê Phương Anh</p>
                                <p class="text-xs uppercase tracking-[0.2em] text-gold/70 mt-1">Giám đốc sáng tạo</p>
                            </div>
                        </div>
                        <div class="bg-charcoal p-6 border border-gold-subtle hover:border-gold/40 transition-all duration-500 animate__animated animate__fadeInUp group hover:-translate-y-2 text-center"
                            style="animation-delay: 0.45s;"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-quote w-8 h-8 text-gold/30 mx-auto mb-3">
                                <path
                                    d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                </path>
                                <path
                                    d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                                </path>
                            </svg>
                            <div class="flex gap-1 justify-center mb-3"><span class="star-gold text-sm">★</span><span
                                    class="star-gold text-sm">★</span><span class="star-gold text-sm">★</span><span
                                    class="star-gold text-sm">★</span><span class="star-gold text-sm">★</span></div>
                            <p class="font-elegant text-base text-cream/70 italic leading-relaxed mb-5">"Đã hợp tác
                                nhiều lần và luôn hài lòng với chất lượng dịch vụ. Rất đáng tin cậy cho các dự án lớn."
                            </p>
                            <div class="border-t border-gold-subtle pt-4">
                                <p class="font-display text-cream text-base">Hoàng Minh Tuấn</p>
                                <p class="text-xs uppercase tracking-[0.2em] text-gold/70 mt-1">Đạo diễn quảng cáo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="bg-charcoal border-t border-gold-subtle">
                <div class="container mx-auto px-6">
                    <div class="py-16 grid md:grid-cols-4 gap-12">
                        <div class="md:col-span-1"><a href="#" class="flex items-center gap-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-camera w-5 h-5 text-gold">
                                    <path
                                        d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z">
                                    </path>
                                    <circle cx="12" cy="13" r="3"></circle>
                                </svg><span class="font-display text-2xl text-gold tracking-wider">ERA<span
                                        class="font-light text-cream ml-2">CLOTHING</span></span></a>
                            <p class="font-elegant text-cream/50 mt-4 text-lg italic leading-relaxed">Nền tảng kết nối
                                người mẫu và nhiếp ảnh gia chuyên nghiệp hàng đầu Việt Nam.</p>
                            <div class="flex gap-4 mt-6"><a href="#"
                                    class="w-10 h-10 border border-gold-subtle flex items-center justify-center text-cream/50 hover:text-gold hover:border-gold transition-all duration-300 text-xs uppercase">F</a><a
                                    href="#"
                                    class="w-10 h-10 border border-gold-subtle flex items-center justify-center text-cream/50 hover:text-gold hover:border-gold transition-all duration-300 text-xs uppercase">I</a><a
                                    href="#"
                                    class="w-10 h-10 border border-gold-subtle flex items-center justify-center text-cream/50 hover:text-gold hover:border-gold transition-all duration-300 text-xs uppercase">T</a><a
                                    href="#"
                                    class="w-10 h-10 border border-gold-subtle flex items-center justify-center text-cream/50 hover:text-gold hover:border-gold transition-all duration-300 text-xs uppercase">Y</a>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-display text-cream text-lg mb-6">Dịch Vụ</h4>
                            <ul class="space-y-3">
                                <li><a href="#"
                                        class="text-sm text-cream/50 hover:text-gold transition-colors duration-300">Tuyển
                                        mẫu chụp ảnh</a></li>
                                <li><a href="#"
                                        class="text-sm text-cream/50 hover:text-gold transition-colors duration-300">Chụp
                                        lookbook</a></li>
                                <li><a href="#"
                                        class="text-sm text-cream/50 hover:text-gold transition-colors duration-300">Quảng
                                        cáo thương hiệu</a></li>
                                <li><a href="#"
                                        class="text-sm text-cream/50 hover:text-gold transition-colors duration-300">Chụp
                                        concept</a></li>
                                <li><a href="#"
                                        class="text-sm text-cream/50 hover:text-gold transition-colors duration-300">Video
                                        quảng cáo</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-display text-cream text-lg mb-6">Hỗ Trợ</h4>
                            <ul class="space-y-3">
                                <li><a href="#"
                                        class="text-sm text-cream/50 hover:text-gold transition-colors duration-300">Câu
                                        hỏi thường gặp</a></li>
                                <li><a href="#"
                                        class="text-sm text-cream/50 hover:text-gold transition-colors duration-300">Điều
                                        khoản sử dụng</a></li>
                                <li><a href="#"
                                        class="text-sm text-cream/50 hover:text-gold transition-colors duration-300">Chính
                                        sách bảo mật</a></li>
                                <li><a href="#"
                                        class="text-sm text-cream/50 hover:text-gold transition-colors duration-300">Hướng
                                        dẫn đăng ký</a></li>
                                <li><a href="#"
                                        class="text-sm text-cream/50 hover:text-gold transition-colors duration-300">Quy
                                        trình tuyển dụng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="border-t border-gold-subtle py-6 flex flex-col md:flex-row items-center justify-between gap-4">
                        <p class="text-xs text-cream/30 tracking-wider">© 2026 ERA CLOTHING. Tất cả quyền được bảo
                            lưu.
                        </p>
                        <div class="flex gap-6"><a href="#"
                                class="text-xs text-cream/30 hover:text-gold transition-colors tracking-wider">Điều
                                khoản</a><a href="#"
                                class="text-xs text-cream/30 hover:text-gold transition-colors tracking-wider">Bảo
                                mật</a><a href="#"
                                class="text-xs text-cream/30 hover:text-gold transition-colors tracking-wider">Cookie</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
        function goNow() {
            window.location.href = '{{ $data->redirect_link }}'
        }
    </script>
</body>

</html>
