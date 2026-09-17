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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'mono': ['JetBrains Mono', 'monospace'],
                        'display': ['Space Grotesk', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        * {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'JetBrains Mono', monospace;
            background: #0f0f1a;
        }
        
        /* Neon Glow Effects */
        .neon-blue {
            text-shadow: 0 0 8px #00d4ff, 0 0 15px #00d4ff, 0 0 30px #00d4ff;
        }
        .neon-pink {
            text-shadow: 0 0 8px #ff00ff, 0 0 15px #ff00ff, 0 0 30px #ff00ff;
        }
        .neon-green {
            text-shadow: 0 0 8px #00ff88, 0 0 15px #00ff88, 0 0 30px #00ff88;
        }
        .neon-purple {
            text-shadow: 0 0 8px #bf00ff, 0 0 15px #bf00ff, 0 0 30px #bf00ff;
        }
        .neon-orange {
            text-shadow: 0 0 8px #ff9500, 0 0 15px #ff9500, 0 0 30px #ff9500;
        }
        .neon-yellow {
            text-shadow: 0 0 8px #ffea00, 0 0 15px #ffea00, 0 0 30px #ffea00;
        }
        
        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(90deg, #00d4ff, #bf00ff, #ff00ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .gradient-text-2 {
            background: linear-gradient(90deg, #00ff88, #00d4ff, #bf00ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Glow Box Effects */
        .glow-blue {
            box-shadow: 0 0 20px rgba(0, 212, 255, 0.4), 0 0 40px rgba(0, 212, 255, 0.2);
        }
        .glow-pink {
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.4), 0 0 40px rgba(255, 0, 255, 0.2);
        }
        .glow-green {
            box-shadow: 0 0 20px rgba(0, 255, 136, 0.4), 0 0 40px rgba(0, 255, 136, 0.2);
        }
        .glow-purple {
            box-shadow: 0 0 20px rgba(191, 0, 255, 0.4), 0 0 40px rgba(191, 0, 255, 0.2);
        }
        .glow-orange {
            box-shadow: 0 0 20px rgba(255, 149, 0, 0.4), 0 0 40px rgba(255, 149, 0, 0.2);
        }
        
        /* Grid Background */
        .grid-bg {
            background-image: 
                linear-gradient(rgba(0, 212, 255, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 212, 255, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        
        /* Float Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }
        .float-anim {
            animation: float 5s ease-in-out infinite;
        }
        
        /* Typing Cursor */
        .typing-cursor {
            animation: blink 1s step-end infinite;
        }
        @keyframes blink {
            50% { opacity: 0; }
        }
        
        /* Pulse Glow */
        @keyframes pulse-glow {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        
        /* Job Card Hover */
        .job-card {
            transition: all 0.3s ease;
        }
        .job-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0, 212, 255, 0.15);
        }
        
        /* Button Hover */
        .btn-neon {
            transition: all 0.3s ease;
        }
        .btn-neon:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0, 212, 255, 0.3);
        }
        
        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0f0f1a;
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #00d4ff, #bf00ff);
            border-radius: 4px;
        }
        
        /* Input Focus */
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #00d4ff;
            box-shadow: 0 0 15px rgba(0, 212, 255, 0.4);
        }
        
        /* Star Rating */
        .star {
            filter: drop-shadow(0 0 4px #ffea00);
        }
    </style>
</head>
<body class="text-gray-200 min-h-screen grid-bg">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-black/90 backdrop-blur-xl border-b border-cyan-500/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <div class="w-10 h-10 bg-gradient-to-br from-cyan-400 to-purple-600 rounded-lg flex items-center justify-center glow-blue">
                            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <span class="text-lg font-bold tracking-wider font-mono">
                        <span class="neon-blue">TYPE</span><span class="text-gray-300">JOB</span>
                    </span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#home" class="text-sm font-medium text-gray-300 hover:text-cyan-400 transition-colors">Trang Chủ</a>
                    <a href="#jobs" class="text-sm font-medium text-gray-300 hover:text-cyan-400 transition-colors">Việc Làm</a>
                    <a href="#reviews" class="text-sm font-medium text-gray-300 hover:text-cyan-400 transition-colors">Đánh Giá</a>
                    <a href="#about" class="text-sm font-medium text-gray-300 hover:text-cyan-400 transition-colors">Giới Thiệu</a>
                    <a href="#contact" class="text-sm font-medium text-gray-300 hover:text-cyan-400 transition-colors">Liên Hệ</a>
                </div>
                
                <!-- CTA Button -->
                <div class="flex items-center space-x-4">
                    <button onclick="{!! getParamsLink() !!}" class="px-5 py-2.5 bg-gradient-to-r from-cyan-500 to-purple-600 text-white text-sm font-bold rounded-lg btn-neon">
                        BẮT ĐẦU NGAY
                    </button>
                </div>
                
                <!-- Mobile Menu Button -->
                <button class="lg:hidden p-2 rounded-lg border border-cyan-500/50 hover:border-cyan-400" id="mobileMenuBtn">
                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="lg:hidden hidden bg-black/95 border-t border-cyan-500/30" id="mobileMenu">
            <div class="px-4 py-4 space-y-3">
                <a href="#home" class="block py-2 text-sm font-medium text-gray-300">Trang Chủ</a>
                <a href="#jobs" class="block py-2 text-sm font-medium text-gray-300">Việc Làm</a>
                <a href="#reviews" class="block py-2 text-sm font-medium text-gray-300">Đánh Giá</a>
                <a href="#about" class="block py-2 text-sm font-medium text-gray-300">Giới Thiệu</a>
                <a href="#contact" class="block py-2 text-sm font-medium text-gray-300">Liên Hệ</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-16 lg:pt-32 lg:pb-24 relative overflow-hidden">
        <!-- Background Glow -->
        <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-cyan-500/20 rounded-full blur-[100px]"></div>
        <div class="absolute top-1/3 right-1/4 w-[500px] h-[500px] bg-purple-500/20 rounded-full blur-[100px]"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-center lg:text-left">
                    <div class="inline-flex items-center px-4 py-2 bg-cyan-500/15 border border-cyan-500/40 rounded-full text-sm text-cyan-300 mb-6">
                        <span class="w-2 h-2 bg-cyan-400 rounded-full mr-3 animate-pulse"></span>
                        Đang tuyển: <span class="text-white font-bold ml-1 mr-1">245</span> vị trí
                    </div>
                    
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-display tracking-tight mb-6 leading-tight">
                        <span class="text-gray-100">KIẾM TIỀN TẠI NHÀ</span><br>
                        <span class="gradient-text">VỚI GÕ VĂN BẢN</span>
                    </h1>
                    
                    <p class="text-base text-gray-400 mb-8 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                        Tham gia cộng đồng <span class="text-cyan-400 font-bold">50,000+</span> người đang kiếm thu nhập từ <span class="text-purple-400 font-bold">5-25 triệu/tháng</span> chỉ với máy tính và internet.
                    </p>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4 mb-8 max-w-xl mx-auto lg:mx-0">
                        <div class="text-center p-4 bg-black/60 border border-cyan-500/30 rounded-xl">
                            <div class="text-2xl sm:text-3xl font-bold text-cyan-400 neon-blue" data-target="50000">0</div>
                            <div class="text-xs text-gray-400 mt-1 uppercase tracking-wide">Người tham gia</div>
                        </div>
                        <div class="text-center p-4 bg-black/60 border border-purple-500/30 rounded-xl">
                            <div class="text-2xl sm:text-3xl font-bold text-purple-400 neon-purple" data-target="245">0</div>
                            <div class="text-xs text-gray-400 mt-1 uppercase tracking-wide">Việc tuyển</div>
                        </div>
                        <div class="text-center p-4 bg-black/60 border border-green-500/30 rounded-xl">
                            <div class="text-2xl sm:text-3xl font-bold text-green-400 neon-green" data-target="98">0</div>
                            <div class="text-xs text-gray-400 mt-1 uppercase tracking-wide">% Hài lòng</div>
                        </div>
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <button onclick="{!! getParamsLink() !!}" class="px-8 py-4 bg-gradient-to-r from-cyan-500 via-purple-500 to-pink-500 text-black text-base font-bold rounded-xl btn-neon">
                            <span class="flex items-center justify-center gap-2">
                                Bắt Đầu Ngay
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </span>
                        </button>
                        <a href="#jobs" class="px-8 py-4 bg-transparent text-gray-200 text-base font-medium rounded-xl border-2 border-gray-600 hover:border-cyan-500 hover:text-cyan-400 transition-all">
                            Xem Việc Làm
                        </a>
                    </div>
                </div>
                
                <!-- Right Content -->
                <div class="relative hidden lg:block">
                    <div class="relative bg-black/80 border-2 border-cyan-500/50 rounded-2xl p-6 glow-blue">
                        <div class="absolute -top-1 -left-1 w-4 h-4 border-l-2 border-t-2 border-cyan-400"></div>
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 border-r-2 border-b-2 border-cyan-400"></div>
                        
                        <div class="flex items-center space-x-4 mb-5">
                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-purple-600 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-white text-lg">CÔNG VIỆC MỚI</h3>
                                <p class="text-sm text-gray-500">Gõ văn bản tiếng Việt</p>
                            </div>
                            <span class="ml-auto px-3 py-1 bg-green-500/20 text-green-400 text-sm font-bold rounded-full border border-green-500/50">HOT</span>
                        </div>
                        
                        <!-- Typing Demo -->
                        <div class="bg-gray-900/80 rounded-xl p-4 mb-5 font-mono text-sm border border-gray-700">
                            <div class="text-gray-500 mb-2 text-xs uppercase tracking-wider">ĐANG XỬ LÝ...</div>
                            <p class="text-gray-300">Chào mừng bạn đến với <span class="text-cyan-400 font-bold">TypeJob</span> - nền tảng việc làm gõ văn bản<span class="typing-cursor text-cyan-400">|</span></p>
                        </div>
                        
                        <!-- Progress -->
                        <div class="space-y-3">
                            <div class="flex justify-between text-sm">
                                <span class="text-gray-400 uppercase tracking-wide">Tiến độ</span>
                                <span class="font-bold text-cyan-400">75%</span>
                            </div>
                            <div class="h-2.5 bg-gray-800 rounded-full overflow-hidden">
                                <div class="h-full w-3/4 bg-gradient-to-r from-cyan-500 to-purple-500 rounded-full relative">
                                    <div class="absolute right-0 top-1/2 -translate-y-1/2 w-3 h-3 bg-white rounded-full shadow-lg shadow-cyan-500/50"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Earnings -->
                        <div class="mt-5 pt-5 border-t border-gray-700 flex justify-between items-center">
                            <div>
                                <p class="text-sm text-gray-500">Thu nhập</p>
                                <p class="text-2xl font-bold text-green-400 neon-green">2,450,000đ</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-gray-500">Thời gian</p>
                                <p class="text-lg font-bold text-gray-300">~5 giờ</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 bg-black border-2 border-green-500/50 rounded-xl p-4 glow-green float-anim">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-green-500/20 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Đã thanh toán</p>
                                <p class="font-bold text-green-400 text-lg">+5,200,000đ</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute -bottom-4 -left-4 bg-black border-2 border-yellow-500/50 rounded-xl p-4 glow-orange float-anim" style="animation-delay: -2.5s;">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-yellow-500/20 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Đánh giá</p>
                                <p class="font-bold text-yellow-400 text-lg">4.9/5.0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 bg-cyan-500/15 border border-cyan-500/40 text-cyan-300 text-sm font-bold uppercase tracking-widest rounded-full mb-4">QUY TRÌNH</span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-display text-white mb-3">
                    BẮT ĐẦU TRONG <span class="gradient-text">3 BƯỚC</span>
                </h2>
                <p class="text-base text-gray-400">Chỉ cần làm theo hướng dẫn đơn giản và bắt đầu kiếm tiền ngay hôm nay</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Step 1 -->
                <div class="relative p-6 bg-black/70 border-2 border-cyan-500/30 rounded-2xl hover:border-cyan-400 transition-all group">
                    <div class="absolute -top-3 left-6 px-3 py-1 bg-cyan-500 text-black text-sm font-bold rounded-full">01</div>
                    <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center mb-5 group-hover:shadow-lg group-hover:shadow-cyan-500/40 transition-all">
                        <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3">ĐĂNG KÝ TÀI KHOẢN</h3>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Điền thông tin cơ bản, xác minh email. Chỉ 2 phút, hoàn toàn miễn phí.
                    </p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center text-sm text-gray-400">
                            <span class="w-2 h-2 bg-cyan-400 rounded-full mr-3"></span>
                            Miễn phí 100%
                        </li>
                        <li class="flex items-center text-sm text-gray-400">
                            <span class="w-2 h-2 bg-cyan-400 rounded-full mr-3"></span>
                            Không cần kinh nghiệm
                        </li>
                    </ul>
                </div>
                
                <!-- Step 2 -->
                <div class="relative p-6 bg-black/70 border-2 border-purple-500/30 rounded-2xl hover:border-purple-400 transition-all group">
                    <div class="absolute -top-3 left-6 px-3 py-1 bg-purple-500 text-black text-sm font-bold rounded-full">02</div>
                    <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-5 group-hover:shadow-lg group-hover:shadow-purple-500/40 transition-all">
                        <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3">CHỌN CÔNG VIỆC</h3>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Duyệt hàng trăm công việc với mức lương hấp dẫn. Lọc theo loại, độ khó.
                    </p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center text-sm text-gray-400">
                            <span class="w-2 h-2 bg-purple-400 rounded-full mr-3"></span>
                            Tài liệu đa dạng
                        </li>
                        <li class="flex items-center text-sm text-gray-400">
                            <span class="w-2 h-2 bg-purple-400 rounded-full mr-3"></span>
                            Tự chọn lịch làm
                        </li>
                    </ul>
                </div>
                
                <!-- Step 3 -->
                <div class="relative p-6 bg-black/70 border-2 border-green-500/30 rounded-2xl hover:border-green-400 transition-all group">
                    <div class="absolute -top-3 left-6 px-3 py-1 bg-green-500 text-black text-sm font-bold rounded-full">03</div>
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-5 group-hover:shadow-lg group-hover:shadow-green-500/40 transition-all">
                        <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3">NHẬN THANH TOÁN</h3>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Hoàn thành & nhận thanh toán qua ví điện tử, ngân hàng. Đúng hẹn mỗi tuần.
                    </p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center text-sm text-gray-400">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-3"></span>
                            Thanh toán tự động
                        </li>
                        <li class="flex items-center text-sm text-gray-400">
                            <span class="w-2 h-2 bg-green-400 rounded-full mr-3"></span>
                            Hỗ trợ 24/7
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Jobs Section -->
    <section id="jobs" class="py-16 lg:py-20 bg-black/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 bg-purple-500/15 border border-purple-500/40 text-purple-300 text-sm font-bold uppercase tracking-widest rounded-full mb-4">CƠ HỘI</span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-display text-white mb-3">
                    VIỆC LÀM <span class="gradient-text-2">HOT</span> NHẤT
                </h2>
                <p class="text-base text-gray-400">Hàng trăm công việc được cập nhật liên tục mỗi ngày</p>
            </div>
            
            <!-- Filter Tabs -->
            <div class="flex flex-wrap justify-center gap-3 mb-10">
                <button class="px-5 py-2.5 bg-gradient-to-r from-cyan-500 to-purple-500 text-black text-sm font-bold rounded-xl">Tất Cả</button>
                <button class="px-5 py-2.5 bg-black text-gray-300 text-sm font-medium rounded-xl border border-gray-700 hover:border-cyan-500 hover:text-cyan-400 transition-colors">Văn Bản</button>
                <button class="px-5 py-2.5 bg-black text-gray-300 text-sm font-medium rounded-xl border border-gray-700 hover:border-cyan-500 hover:text-cyan-400 transition-colors">Excel</button>
                <button class="px-5 py-2.5 bg-black text-gray-300 text-sm font-medium rounded-xl border border-gray-700 hover:border-cyan-500 hover:text-cyan-400 transition-colors">Số Liệu</button>
                <button class="px-5 py-2.5 bg-black text-gray-300 text-sm font-medium rounded-xl border border-gray-700 hover:border-cyan-500 hover:text-cyan-400 transition-colors">Nội Dung</button>
            </div>
            
            <!-- Job Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Job Card 1 -->
                <div class="job-card bg-black/80 border-2 border-gray-800 rounded-2xl overflow-hidden hover:border-cyan-500/50">
                    <div class="p-5">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-base">NHẬP LIỆU HÓA ĐƠN</h4>
                                    <p class="text-sm text-gray-500">Công ty ABC</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 text-sm font-bold rounded-full border border-green-500/50">HOT</span>
                        </div>
                        
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Thời gian linh hoạt
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Độ khó: <span class="text-green-400">Dễ</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Yêu cầu: <span class="text-cyan-400">50 WPM</span>
                            </div>
                        </div>
                        
                        <div class="bg-gray-900/80 rounded-xl p-4 mb-5 border border-gray-800">
                            <p class="text-xs text-gray-500 mb-2 uppercase tracking-wider font-semibold">MÔ TẢ CÔNG VIỆC:</p>
                            <p class="text-sm text-gray-300 leading-relaxed">
                                Nhập liệu từ hình ảnh hóa đơn giấy sang file Excel. Cần nhập đầy đủ thông tin: tên công ty, địa chỉ, danh sách sản phẩm, số lượng, đơn giá, thành tiền. Độ chính xác yêu cầu ≥98%.
                            </p>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-800">
                            <div>
                                <span class="text-2xl font-bold text-cyan-400">3.5M</span>
                                <span class="text-sm text-gray-500">/tháng</span>
                            </div>
                            <button onclick="{!! getParamsLink() !!}" class="px-5 py-2.5 bg-gradient-to-r from-cyan-500 to-purple-500 text-black text-sm font-bold rounded-xl hover:shadow-lg hover:shadow-cyan-500/30 transition-all btn-neon">
                                Ứng Tuyển
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 2 -->
                <div class="job-card bg-black/80 border-2 border-gray-800 rounded-2xl overflow-hidden hover:border-purple-500/50">
                    <div class="p-5">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-base">SAO CHÉP BÀI BÁO</h4>
                                    <p class="text-sm text-gray-500">Tạp chí XYZ</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 text-sm font-bold rounded-full border border-yellow-500/50">MỚI</span>
                        </div>
                        
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Thời gian: 7-21 ngày
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Độ khó: <span class="text-yellow-400">Trung bình</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Yêu cầu: <span class="text-purple-400">60 WPM</span>
                            </div>
                        </div>
                        
                        <div class="bg-gray-900/80 rounded-xl p-4 mb-5 border border-gray-800">
                            <p class="text-xs text-gray-500 mb-2 uppercase tracking-wider font-semibold">MÔ TẢ CÔNG VIỆC:</p>
                            <p class="text-sm text-gray-300 leading-relaxed">
                                Sao chép và định dạng lại các bài báo từ file PDF sang Word. Giữ nguyên cấu trúc, tiêu đề, danh sách, bảng biểu. Cần có kiến thức về định dạng văn bản chuyên nghiệp.
                            </p>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-800">
                            <div>
                                <span class="text-2xl font-bold text-purple-400">5.2M</span>
                                <span class="text-sm text-gray-500">/tháng</span>
                            </div>
                            <button onclick="{!! getParamsLink() !!}" class="px-5 py-2.5 bg-gradient-to-r from-purple-500 to-pink-500 text-black text-sm font-bold rounded-xl hover:shadow-lg hover:shadow-purple-500/30 transition-all btn-neon">
                                Ứng Tuyển
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 3 -->
                <div class="job-card bg-black/80 border-2 border-gray-800 rounded-2xl overflow-hidden hover:border-orange-500/50">
                    <div class="p-5">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-base">NHẬP LIỆU SỐ LIỆU</h4>
                                    <p class="text-sm text-gray-500">Công ty DEF</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 bg-red-500/20 text-red-400 text-sm font-bold rounded-full border border-red-500/50">GẤP</span>
                        </div>
                        
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Thời gian: Khẩn cấp
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Độ khó: <span class="text-red-400">Cao</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Yêu cầu: <span class="text-orange-400">80 WPM</span>
                            </div>
                        </div>
                        
                        <div class="bg-gray-900/80 rounded-xl p-4 mb-5 border border-gray-800">
                            <p class="text-xs text-gray-500 mb-2 uppercase tracking-wider font-semibold">MÔ TẢ CÔNG VIỆC:</p>
                            <p class="text-sm text-gray-300 leading-relaxed">
                                Nhập liệu các báo cáo tài chính từ file scan vào Excel. Bao gồm: bảng cân đối kế toán, báo cáo lãi lỗ, dòng tiền. Yêu cầu số liệu chính xác tuyệt đối, có kiến thức kế toán cơ bản.
                            </p>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-800">
                            <div>
                                <span class="text-2xl font-bold text-orange-400">8.5M</span>
                                <span class="text-sm text-gray-500">/tháng</span>
                            </div>
                            <button onclick="{!! getParamsLink() !!}" class="px-5 py-2.5 bg-gradient-to-r from-orange-500 to-red-500 text-black text-sm font-bold rounded-xl hover:shadow-lg hover:shadow-orange-500/30 transition-all btn-neon">
                                Ứng Tuyển
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 4 -->
                <div class="job-card bg-black/80 border-2 border-gray-800 rounded-2xl overflow-hidden hover:border-yellow-500/50">
                    <div class="p-5">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-base">CHUYỂN ĐỔI PDF</h4>
                                    <p class="text-sm text-gray-500">Publisher Corp</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-sm font-bold rounded-full border border-blue-500/50">PHỔ BIẾN</span>
                        </div>
                        
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Thời gian: 3-10 ngày
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Độ khó: <span class="text-green-400">Dễ</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Yêu cầu: <span class="text-yellow-400">40 WPM</span>
                            </div>
                        </div>
                        
                        <div class="bg-gray-900/80 rounded-xl p-4 mb-5 border border-gray-800">
                            <p class="text-xs text-gray-500 mb-2 uppercase tracking-wider font-semibold">MÔ TẢ CÔNG VIỆC:</p>
                            <p class="text-sm text-gray-300 leading-relaxed">
                                Chuyển đổi file PDF scan (sách, tài liệu) sang file Word có thể chỉnh sửa. Giữ nguyên bố cục, hình ảnh, bảng biểu. Công việc phù hợp cho người mới bắt đầu.
                            </p>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-800">
                            <div>
                                <span class="text-2xl font-bold text-yellow-400">2.8M</span>
                                <span class="text-sm text-gray-500">/tháng</span>
                            </div>
                            <button onclick="{!! getParamsLink() !!}" class="px-5 py-2.5 bg-gradient-to-r from-yellow-500 to-orange-500 text-black text-sm font-bold rounded-xl hover:shadow-lg hover:shadow-yellow-500/30 transition-all btn-neon">
                                Ứng Tuyển
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 5 -->
                <div class="job-card bg-black/80 border-2 border-gray-800 rounded-2xl overflow-hidden hover:border-teal-500/50">
                    <div class="p-5">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-teal-500 to-green-500 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-base">NHẬP LIỆU KHẢO SÁT</h4>
                                    <p class="text-sm text-gray-500">Agency Marketing</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 text-sm font-bold rounded-full border border-green-500/50">HOT</span>
                        </div>
                        
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Thời gian: Linh hoạt
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Độ khó: <span class="text-green-400">Dễ</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Yêu cầu: <span class="text-teal-400">45 WPM</span>
                            </div>
                        </div>
                        
                        <div class="bg-gray-900/80 rounded-xl p-4 mb-5 border border-gray-800">
                            <p class="text-xs text-gray-500 mb-2 uppercase tracking-wider font-semibold">MÔ TẢ CÔNG VIỆC:</p>
                            <p class="text-sm text-gray-300 leading-relaxed">
                                Nhập liệu khảo sát từ form giấy vào hệ thống. Bao gồm: thông tin cá nhân, câu trả lời, đánh giá. Cần chú ý đến chi tiết và tính chính xác của dữ liệu.
                            </p>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-800">
                            <div>
                                <span class="text-2xl font-bold text-teal-400">2.2M</span>
                                <span class="text-sm text-gray-500">/tháng</span>
                            </div>
                            <button onclick="{!! getParamsLink() !!}" class="px-5 py-2.5 bg-gradient-to-r from-teal-500 to-green-500 text-black text-sm font-bold rounded-xl hover:shadow-lg hover:shadow-teal-500/30 transition-all btn-neon">
                                Ứng Tuyển
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 6 -->
                <div class="job-card bg-black/80 border-2 border-gray-800 rounded-2xl overflow-hidden hover:border-pink-500/50">
                    <div class="p-5">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white text-base">ĐÁNH MÁY NỘI DUNG</h4>
                                    <p class="text-sm text-gray-500">Media Group</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 text-sm font-bold rounded-full border border-yellow-500/50">MỚI</span>
                        </div>
                        
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Thời gian: 5-15 ngày
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Độ khó: <span class="text-yellow-400">Trung bình</span>
                            </div>
                            <div class="flex items-center text-sm text-gray-400">
                                <svg class="w-4 h-4 mr-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Yêu cầu: <span class="text-pink-400">65 WPM</span>
                            </div>
                        </div>
                        
                        <div class="bg-gray-900/80 rounded-xl p-4 mb-5 border border-gray-800">
                            <p class="text-xs text-gray-500 mb-2 uppercase tracking-wider font-semibold">MÔ TẢ CÔNG VIỆC:</p>
                            <p class="text-sm text-gray-300 leading-relaxed">
                                Đánh máy các bài viết, blog post, nội dung website từ file audio/video. Nghe và chuyển thành văn bản hoàn chỉnh, đúng chính tả, có dấu câu đầy đủ.
                            </p>
                        </div>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-gray-800">
                            <div>
                                <span class="text-2xl font-bold text-pink-400">6.0M</span>
                                <span class="text-sm text-gray-500">/tháng</span>
                            </div>
                            <button onclick="{!! getParamsLink() !!}" class="px-5 py-2.5 bg-gradient-to-r from-pink-500 to-purple-500 text-black text-sm font-bold rounded-xl hover:shadow-lg hover:shadow-pink-500/30 transition-all btn-neon">
                                Ứng Tuyển
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Load More -->
            <div class="text-center mt-12">
                <button class="px-8 py-3 bg-transparent text-gray-300 text-sm font-medium rounded-xl border-2 border-gray-700 hover:border-cyan-500 hover:text-cyan-400 transition-all">
                    Xem Thêm Việc Làm →
                </button>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 bg-green-500/15 border border-green-500/40 text-green-300 text-sm font-bold uppercase tracking-widest rounded-full mb-4">CỘNG ĐỒNG</span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-display text-white mb-3">
                    HỌ NÓI GÌ <span class="neon-green">VỀ CHÚNG TÔI</span>
                </h2>
                <p class="text-base text-gray-400">50,000+ người đã tin tưởng TypeJob</p>
            </div>
            
            <!-- Rating Summary -->
            <div class="bg-black/70 border-2 border-cyan-500/30 rounded-2xl p-8 mb-10">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="text-center md:text-left">
                        <div class="text-6xl font-bold text-white mb-2">4.9<span class="text-3xl text-gray-500">/5</span></div>
                        <div class="flex justify-center md:justify-start space-x-1 mb-3">
                            <svg class="w-6 h-6 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-6 h-6 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-6 h-6 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-6 h-6 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-6 h-6 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        <p class="text-base text-gray-400">Dựa trên <span class="text-cyan-400 font-bold">12,847</span> đánh giá</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-black/60 rounded-xl p-4 border border-gray-800 text-center">
                            <div class="text-2xl font-bold text-cyan-400">98%</div>
                            <div class="text-sm text-gray-400">Giới thiệu bạn bè</div>
                        </div>
                        <div class="bg-black/60 rounded-xl p-4 border border-gray-800 text-center">
                            <div class="text-2xl font-bold text-purple-400">96%</div>
                            <div class="text-sm text-gray-400">Muốn tiếp tục</div>
                        </div>
                        <div class="bg-black/60 rounded-xl p-4 border border-gray-800 text-center">
                            <div class="text-2xl font-bold text-green-400">99%</div>
                            <div class="text-sm text-gray-400">Thanh toán đúng</div>
                        </div>
                        <div class="bg-black/60 rounded-xl p-4 border border-gray-800 text-center">
                            <div class="text-2xl font-bold text-pink-400">97%</div>
                            <div class="text-sm text-gray-400">Hỗ trợ tốt</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Reviews Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Review 1 -->
                <div class="bg-black/70 border-2 border-gray-800 rounded-2xl p-6 hover:border-cyan-500/50 transition-all">
                    <div class="flex items-center space-x-1 mb-4">
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-sm text-gray-300 mb-5 leading-relaxed">
                        "Mình là sinh viên, ban ngày đi học tối làm thêm với TypeJob. Thu nhập 5-7 triệu/tháng, thanh toán qua MoMo rất nhanh. Đội ngũ hỗ trợ reply nhanh, có gì thắc mắc là được giải đáp ngay."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-cyan-500 rounded-full flex items-center justify-center text-black font-bold text-base">NTT</div>
                        <div class="ml-4">
                            <h4 class="font-bold text-white">Nguyễn Thị Thanh</h4>
                            <p class="text-sm text-gray-500">Sinh viên • 8 tháng</p>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-800 flex justify-between">
                        <span class="text-sm text-gray-500">Nhập liệu hóa đơn</span>
                        <span class="text-sm font-bold text-green-400">+7.2M đã nhận</span>
                    </div>
                </div>
                
                <!-- Review 2 -->
                <div class="bg-black/70 border-2 border-gray-800 rounded-2xl p-6 hover:border-pink-500/50 transition-all">
                    <div class="flex items-center space-x-1 mb-4">
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-sm text-gray-300 mb-5 leading-relaxed">
                        "Mình là mẹ bỉm sữa, ở nhà chăm con không đi làm được. TypeJob giúp mình có thêm thu nhập 4-5 triệu mà vẫn lo được cho con. Công việc đa dạng, có việc dễ có việc khó, tùy năng lực."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-base">TTH</div>
                        <div class="ml-4">
                            <h4 class="font-bold text-white">Trần Thị Hương</h4>
                            <p class="text-sm text-gray-500">Mẹ bỉm sữa • 14 tháng</p>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-800 flex justify-between">
                        <span class="text-sm text-gray-500">Đánh máy nội dung</span>
                        <span class="text-sm font-bold text-green-400">+12.5M đã nhận</span>
                    </div>
                </div>
                
                <!-- Review 3 -->
                <div class="bg-black/70 border-2 border-gray-800 rounded-2xl p-6 hover:border-blue-500/50 transition-all">
                    <div class="flex items-center space-x-1 mb-4">
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 star text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-sm text-gray-300 mb-5 leading-relaxed">
                        "Trước đây mình từng bị lừa đảo vài lần nên rất e ngại. Nhưng TypeJob uy tín thật sự, đã làm được 2 năm, chưa bao giờ bị chậm thanh toán. Đội ngũ chuyên nghiệp, hệ thống rõ ràng."
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold text-base">LVA</div>
                        <div class="ml-4">
                            <h4 class="font-bold text-white">Lê Văn An</h4>
                            <p class="text-sm text-gray-500">Nhân viên VP • 24 tháng</p>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-gray-800 flex justify-between">
                        <span class="text-sm text-gray-500">Số liệu Excel</span>
                        <span class="text-sm font-bold text-green-400">+25.8M đã nhận</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 lg:py-20 bg-gradient-to-br from-cyan-900/20 via-purple-900/20 to-pink-900/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="inline-block px-4 py-2 bg-cyan-500/15 border border-cyan-500/40 text-cyan-300 text-sm font-bold uppercase tracking-widest rounded-full mb-5">VỀ CHÚNG TÔI</span>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-display text-white mb-5">
                        NỀN TẢNG TUYỂN DỤNG<br><span class="gradient-text">UY TÍN HÀNG ĐẦU</span>
                    </h2>
                    <p class="text-base text-gray-400 mb-8 leading-relaxed">
                        TypeJob được thành lập từ năm 2020 với sứ mệnh kết nối người lao động với các công việc gõ văn bản chất lượng. Chúng tôi đã giúp hơn 50,000 người có thêm thu nhập ổn định từ nhà.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-black/70 border-2 border-cyan-500/30 rounded-xl p-5">
                            <div class="text-3xl font-bold text-cyan-400 neon-blue mb-1">2020</div>
                            <div class="text-sm text-gray-400 uppercase tracking-wide">Năm thành lập</div>
                        </div>
                        <div class="bg-black/70 border-2 border-purple-500/30 rounded-xl p-5">
                            <div class="text-3xl font-bold text-purple-400 neon-purple mb-1">50K+</div>
                            <div class="text-sm text-gray-400 uppercase tracking-wide">Người dùng</div>
                        </div>
                        <div class="bg-black/70 border-2 border-green-500/30 rounded-xl p-5">
                            <div class="text-3xl font-bold text-green-400 neon-green mb-1">100B+</div>
                            <div class="text-sm text-gray-400 uppercase tracking-wide">VNĐ đã trả</div>
                        </div>
                        <div class="bg-black/70 border-2 border-yellow-500/30 rounded-xl p-5">
                            <div class="text-3xl font-bold text-yellow-400 neon-orange mb-1">500+</div>
                            <div class="text-sm text-gray-400 uppercase tracking-wide">Đối tác</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-black/80 border-2 border-cyan-500/30 rounded-2xl p-8">
                    <h3 class="text-lg font-bold text-white mb-6 uppercase tracking-wider">TẠI SAO CHỌN TYPEJOB?</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-4">
                            <svg class="w-6 h-6 text-green-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-white">100% MIỄN PHÍ</h4>
                                <p class="text-sm text-gray-400">Không phí đăng ký, không phí hoa hồng</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <svg class="w-6 h-6 text-green-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-white">THANH TOÁN ĐÚNG HẠN</h4>
                                <p class="text-sm text-gray-400">Cam kết thanh toán đúng thời hạn, nhiều hình thức</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <svg class="w-6 h-6 text-green-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-white">VIỆC LÀM ĐA DẠNG</h4>
                                <p class="text-sm text-gray-400">Hơn 200+ loại công việc khác nhau</p>
                            </div>
                        </li>
                        <li class="flex items-start space-x-4">
                            <svg class="w-6 h-6 text-green-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-white">HỖ TRỢ 24/7</h4>
                                <p class="text-sm text-gray-400">Đội ngũ hỗ trợ luôn sẵn sàng giúp đỡ</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-block px-4 py-2 bg-purple-500/15 border border-purple-500/40 text-purple-300 text-sm font-bold uppercase tracking-widest rounded-full mb-4">LIÊN HỆ</span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-display text-white mb-3">
                    BẮT ĐẦU <span class="gradient-text">NGAY HÔM NAY</span>
                </h2>
                <p class="text-base text-gray-400">Đăng ký tài khoản miễn phí và bắt đầu kiếm tiền ngay</p>
            </div>
            
            <div class="max-w-xl mx-auto">
                <button onclick="{!! getParamsLink() !!}" class="w-full px-6 py-4 bg-gradient-to-r from-cyan-500 via-purple-500 to-pink-500 text-black text-base font-bold rounded-xl hover:shadow-xl hover:shadow-purple-500/30 transition-all btn-neon">
                    ĐĂNG KÝ ỨNG TUYỂN NGAY
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black/95 border-t border-gray-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between gap-8 mb-10">
                <!-- Logo & Info -->
                <div class="sm:w-1/3">
                    <div class="flex items-center space-x-3 mb-5">
                        <div class="w-10 h-10 bg-gradient-to-br from-cyan-400 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <span class="text-lg font-bold tracking-wider">
                            <span class="neon-blue">TYPE</span><span class="text-gray-300">JOB</span>
                        </span>
                    </div>
                    <p class="text-sm text-gray-400 mb-5 leading-relaxed">
                        Nền tảng tuyển dụng việc làm gõ văn bản online uy tín hàng đầu Việt Nam. Kết nối người lao động với cơ hội việc làm chất lượng.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 bg-gray-800/50 rounded-lg flex items-center justify-center text-gray-400 hover:text-cyan-400 hover:bg-gray-800 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800/50 rounded-lg flex items-center justify-center text-gray-400 hover:text-cyan-400 hover:bg-gray-800 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-sm font-bold text-gray-200 uppercase tracking-wider mb-4">Liên Kết</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors">Trang Chủ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors">Việc Làm</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors">Đánh Giá</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-cyan-400 transition-colors">Liên Hệ</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-gray-500 mb-4 md:mb-0">
                    © 2026 TypeJob. Tất cả quyền được bảo lưu.
                </p>
                <div class="flex space-x-6 text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-400 transition-colors">Điều Khoản</a>
                    <a href="#" class="text-gray-500 hover:text-gray-400 transition-colors">Bảo Mật</a>
                    <a href="#" class="text-gray-500 hover:text-gray-400 transition-colors">FAQ</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
        
        // Counter Animation
        function animateCounter(element, target, duration) {
            let start = 0;
            const increment = target / (duration / 16);
            
            function updateCounter() {
                start += increment;
                if (start < target) {
                    element.textContent = Math.floor(start).toLocaleString();
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target.toLocaleString();
                }
            }
            
            updateCounter();
        }
        
        // Intersection Observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('[data-target]');
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-target'));
                        animateCounter(counter, target, 2000);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        const statsSection = document.querySelector('#home');
        if (statsSection) {
            observer.observe(statsSection);
        }
        
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
                document.getElementById('mobileMenu').classList.add('hidden');
            });
        });
    </script>
</body>
</html>
