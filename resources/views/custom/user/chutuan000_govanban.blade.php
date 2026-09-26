<!DOCTYPE html>
<html lang="vi">
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
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet" />
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['"Be Vietnam Pro"', 'sans-serif'],
        },
        colors: {
          brand: {
            50: '#fff1f4',
            100: '#ffe1e9',
            200: '#ffc7d5',
            300: '#ff9bb8',
            400: '#ff6797',
            500: '#f43f75',
            600: '#e11d5f',
            700: '#be124f',
            800: '#9e1147',
            900: '#83123f',
            950: '#4d0523',
          },
          ink: {
            50: '#f7f7f8',
            100: '#eeeef0',
            200: '#d9d9de',
            400: '#8a8a95',
            600: '#4b4b56',
            800: '#26262e',
            900: '#17171d',
          },
        },
        boxShadow: {
          soft: '0 12px 40px -12px rgba(225, 29, 95, 0.16)',
          card: '0 2px 16px -4px rgba(23, 23, 29, 0.08)',
          lift: '0 20px 48px -16px rgba(225, 29, 95, 0.22)',
        },
      },
    },
  }
</script>
<style>
  html { scroll-behavior: smooth; }
  body { font-family: 'Be Vietnam Pro', sans-serif; }
  .section-tag {
    display: inline-flex; align-items: center; gap: .5rem;
    font-size: .75rem; font-weight: 700; letter-spacing: .18em; text-transform: uppercase;
    color: #e11d5f; background: #fff1f4; border: 1px solid #ffc7d5;
    padding: .4rem 1rem; border-radius: 999px;
  }
  .nav-link { position: relative; }
  .nav-link::after {
    content: ''; position: absolute; left: 0; bottom: -4px; height: 2px; width: 0;
    background: #e11d5f; border-radius: 2px; transition: width .25s ease;
  }
  .nav-link:hover::after { width: 100%; }
  .card-hover { transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease; }
  .card-hover:hover { transform: translateY(-6px); box-shadow: 0 20px 48px -16px rgba(225, 29, 95, 0.22); border-color: #ffc7d5; }
  .hero-grid-bg {
    background-image:
      radial-gradient(circle at 15% 20%, rgba(255, 103, 151, 0.14), transparent 40%),
      radial-gradient(circle at 85% 10%, rgba(255, 199, 213, 0.22), transparent 38%),
      radial-gradient(circle at 70% 90%, rgba(255, 155, 184, 0.12), transparent 42%),
      linear-gradient(180deg, #fff5f7 0%, #ffffff 100%);
  }
  .dot-pattern {
    background-image: radial-gradient(rgba(225, 29, 95, 0.16) 1px, transparent 1px);
    background-size: 18px 18px;
  }
  .step-line::before {
    content: ''; position: absolute; top: 2.75rem; left: 50%; transform: translateX(-50%);
    width: 2px; bottom: -1.5rem; background: linear-gradient(180deg, #ffc7d5, transparent);
  }
  .step-line:last-child::before { display: none; }
  .counter-num { font-variant-numeric: tabular-nums; }
  #mobileMenu { display: none; }
  #mobileMenu.open { display: block; }
</style>
</head>
<body class="bg-white text-ink-800 antialiased">

<!-- ============ NAVBAR ============ -->
<nav class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-ink-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between">
    <!-- Logo -->
    <a href="#top" class="flex items-center gap-2.5">
      <span class="w-9 h-9 rounded-xl bg-gradient-to-br from-brand-500 to-brand-600 text-white flex items-center justify-center font-extrabold shadow-soft">C</span>
      <span class="leading-tight">
        <span class="block font-extrabold text-ink-900 text-sm sm:text-base">Góc làm việc</span>
        <span class="block text-[10px] sm:text-[11px] font-medium tracking-widest uppercase text-brand-500">Online</span>
      </span>
    </a>

    <!-- Desktop menu -->
    <div class="hidden lg:flex items-center gap-8 text-sm font-medium text-ink-600">
      <a href="#ve-chung-toi" class="nav-link hover:text-brand-600">Về chúng tôi</a>
      <a href="#mo-ta-cong-viec" class="nav-link hover:text-brand-600">Công việc</a>
      <a href="#yeu-cau" class="nav-link hover:text-brand-600">Yêu cầu</a>
      <a href="#quyen-loi" class="nav-link hover:text-brand-600">Quyền lợi</a>
      <a href="#thoi-gian" class="nav-link hover:text-brand-600">Thời gian</a>
      <a href="#quy-trinh" class="nav-link hover:text-brand-600">Quy trình</a>
    </div>

    <div class="flex items-center gap-3">
      <a onclick="openPage()" href="javascript:void(0)" class="hidden sm:inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold px-5 py-2.5 rounded-full shadow-soft transition-colors">
        Ứng tuyển ngay
      </a>
      <!-- Mobile hamburger -->
      <button id="hamburger" aria-label="Mở menu" class="lg:hidden w-10 h-10 rounded-lg border border-ink-200 flex flex-col items-center justify-center gap-1">
        <span class="block w-4 h-0.5 bg-ink-800 rounded"></span>
        <span class="block w-4 h-0.5 bg-ink-800 rounded"></span>
        <span class="block w-4 h-0.5 bg-ink-800 rounded"></span>
      </button>
    </div>
  </div>
  <!-- Mobile menu -->
  <div id="mobileMenu" class="lg:hidden bg-white border-t border-ink-100 px-6 py-4 space-y-3 text-sm font-medium text-ink-600">
    <a href="#ve-chung-toi" class="block hover:text-brand-600">Về chúng tôi</a>
    <a href="#mo-ta-cong-viec" class="block hover:text-brand-600">Công việc</a>
    <a href="#yeu-cau" class="block hover:text-brand-600">Yêu cầu</a>
    <a href="#quyen-loi" class="block hover:text-brand-600">Quyền lợi</a>
    <a href="#thoi-gian" class="block hover:text-brand-600">Thời gian</a>
    <a href="#quy-trinh" class="block hover:text-brand-600">Quy trình</a>
    <a onclick="openPage()" href="javascript:void(0)" class="block bg-brand-600 text-white text-center font-semibold px-5 py-2.5 rounded-full">Ứng tuyển ngay</a>
  </div>
</nav>

<!-- ============ HEADER / HERO ============ -->
<header id="top" class="hero-grid-bg relative overflow-hidden">
  <div class="absolute inset-0 dot-pattern opacity-40 pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-16 lg:py-24 grid lg:grid-cols-2 gap-12 lg:gap-8 items-center relative">
    <!-- Left: copy -->
    <div>
      <span class="section-tag">Thông báo tuyển dụng · 2026</span>
      <h1 class="mt-5 text-4xl sm:text-5xl xl:text-6xl font-extrabold leading-[1.1] text-ink-900">
        Tuyển <span class="text-brand-600">nhân viên nữ</span><br class="hidden sm:block" />
        chốt đơn quần áo online
      </h1>
      <p class="mt-5 text-lg text-ink-600 leading-relaxed max-w-xl">
        Làm việc tại nhà, thời gian linh hoạt, không cần kinh nghiệm — được đào tạo bài bản từ A–Z. Thu nhập lên đến
        <strong class="text-brand-700">12 triệu/tháng</strong>.
      </p>
      <div class="mt-8 flex flex-wrap items-center gap-4">
        <a onclick="openPage()" href="javascript:void(0)" class="inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-700 text-white font-semibold px-7 py-3.5 rounded-full shadow-soft transition-all hover:shadow-lift">
          Ứng tuyển ngay
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
        </a>
        <a href="#mo-ta-cong-viec" class="inline-flex items-center gap-2 bg-white border border-ink-200 hover:border-brand-300 hover:text-brand-600 text-ink-800 font-semibold px-7 py-3.5 rounded-full transition-colors">
          Xem mô tả công việc
        </a>
      </div>
      <!-- Trust row -->
      <div class="mt-10 flex flex-wrap items-center gap-x-8 gap-y-3 text-sm text-ink-600">
        <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-brand-500"></span>Không cần kinh nghiệm</span>
        <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-brand-500"></span>Làm việc tại nhà</span>
        <span class="flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-brand-500"></span>Không cần vốn</span>
      </div>
    </div>

    <!-- Right: highlight card -->
    <div class="relative">
      <div class="absolute -top-6 -right-4 w-24 h-24 bg-brand-100 rounded-full blur-2xl opacity-70"></div>
      <div class="relative bg-white rounded-3xl shadow-soft border border-brand-100 p-8 max-w-md mx-auto">
        <div class="flex items-center gap-3">
          <span class="w-11 h-11 rounded-2xl bg-brand-50 border border-brand-100 flex items-center justify-center text-xl">🎀</span>
          <div>
            <p class="text-xs font-semibold uppercase tracking-widest text-ink-400">Đối tượng tuyển</p>
            <p class="font-bold text-ink-900">Nữ · 20 – 25 tuổi</p>
          </div>
        </div>
        <div class="mt-6 grid grid-cols-2 gap-3">
          <div class="rounded-2xl bg-brand-50 border border-brand-100 p-4">
            <p class="text-xs font-medium text-ink-600">Thu nhập</p>
            <p class="mt-1 font-extrabold text-brand-600 text-lg counter-num">5 – 12tr</p>
            <p class="text-xs text-ink-400">/ tháng</p>
          </div>
          <div class="rounded-2xl bg-ink-50 border border-ink-100 p-4">
            <p class="text-xs font-medium text-ink-600">Hình thức</p>
            <p class="mt-1 font-extrabold text-ink-900 text-lg">Online</p>
            <p class="text-xs text-ink-400">tại nhà</p>
          </div>
          <div class="rounded-2xl bg-ink-50 border border-ink-100 p-4">
            <p class="text-xs font-medium text-ink-600">Part-time</p>
            <p class="mt-1 font-extrabold text-ink-900 text-lg counter-num">3 – 4h</p>
            <p class="text-xs text-ink-400">/ ngày</p>
          </div>
          <div class="rounded-2xl bg-ink-50 border border-ink-100 p-4">
            <p class="text-xs font-medium text-ink-600">Kinh nghiệm</p>
            <p class="mt-1 font-extrabold text-ink-900 text-lg">Không</p>
            <p class="text-xs text-ink-400">yêu cầu</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<main>

<!-- ============ STATS BAR ============ -->
<section class="bg-ink-900">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-10 grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
    <div>
      <p class="text-3xl sm:text-4xl font-extrabold text-brand-400 counter-num">5 – 12tr</p>
      <p class="mt-1 text-sm text-ink-200/80">Thu nhập / tháng</p>
    </div>
    <div>
      <p class="text-3xl sm:text-4xl font-extrabold text-white counter-num">100%</p>
      <p class="mt-1 text-sm text-ink-200/80">Làm việc online</p>
    </div>
    <div>
      <p class="text-3xl sm:text-4xl font-extrabold text-white counter-num">0đ</p>
      <p class="mt-1 text-sm text-ink-200/80">Chi phí tham gia</p>
    </div>
    <div>
      <p class="text-3xl sm:text-4xl font-extrabold text-white counter-num">A – Z</p>
      <p class="mt-1 text-sm text-ink-200/80">Đào tạo tận tình</p>
    </div>
  </div>
</section>

<!-- ============ SECTION 1: VỀ CHÚNG TÔI ============ -->
<section id="ve-chung-toi" class="max-w-7xl mx-auto px-4 sm:px-6 py-16 lg:py-24">
  <div class="grid lg:grid-cols-2 gap-12 items-center">
    <div>
      <span class="section-tag">01 · Về chúng tôi</span>
      <h2 class="mt-4 text-3xl sm:text-4xl font-extrabold text-ink-900 leading-tight">Hệ thống bán lẻ thời trang online đang phát triển mạnh</h2>
      <p class="mt-5 text-ink-600 leading-relaxed">
        Chúng tôi là đơn vị kinh doanh quần áo online với hàng ngàn đơn mỗi tuần trên Fanpage, TikTok Shop và Shopee.
        Chúng tôi đang mở rộng đội ngũ sale — những bạn trẻ năng động, yêu thích thời trang và muốn có thu nhập ổn định
        ngay tại nhà.
      </p>
      <div class="mt-8 space-y-4">
        <div class="flex items-start gap-4">
          <span class="w-10 h-10 shrink-0 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-600 text-lg">👗</span>
          <div>
            <p class="font-semibold text-ink-900">Sản phẩm rõ ràng, có sẵn</p>
            <p class="text-sm text-ink-600 mt-0.5">Nguồn hàng thời trang nữ cập nhật liên tục, bạn chỉ cần tư vấn và chốt đơn.</p>
          </div>
        </div>
        <div class="flex items-start gap-4">
          <span class="w-10 h-10 shrink-0 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-600 text-lg">🤝</span>
          <div>
            <p class="font-semibold text-ink-900">Đồng hành cùng người mới</p>
            <p class="text-sm text-ink-600 mt-0.5">Mentor kèm cặp 1-1 trong 2 tuần đầu, script tư vấn có sẵn.</p>
          </div>
        </div>
        <div class="flex items-start gap-4">
          <span class="w-10 h-10 shrink-0 rounded-xl bg-brand-50 border border-brand-100 flex items-center justify-center text-brand-600 text-lg">📈</span>
          <div>
            <p class="font-semibold text-ink-900">Lộ trình thăng tiến rõ ràng</p>
            <p class="text-sm text-ink-600 mt-0.5">Từ nhân viên sale → trưởng nhóm sale, thu nhập tăng theo năng lực.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Illustration panel -->
    <div class="relative">
      <div class="rounded-3xl bg-gradient-to-br from-brand-500 to-brand-700 p-10 sm:p-14 text-white shadow-lift relative overflow-hidden">
        <div class="absolute inset-0 dot-pattern opacity-20"></div>
        <span class="absolute -top-4 -right-2 text-8xl opacity-15">💌</span>
        <p class="text-sm font-semibold uppercase tracking-widest text-brand-200 relative">Tầm nhìn của chúng tôi</p>
        <p class="mt-4 text-2xl sm:text-3xl font-bold leading-snug relative">
          "Mang việc làm online đáng tin cậy đến mọi bạn trẻ Việt Nam."
        </p>
        <div class="mt-8 flex items-center gap-3 relative">
          <span class="flex -space-x-2">
            <span class="w-9 h-9 rounded-full bg-brand-300 border-2 border-brand-600 flex items-center justify-center text-sm">👩</span>
            <span class="w-9 h-9 rounded-full bg-brand-200 border-2 border-brand-600 flex items-center justify-center text-sm">👧</span>
            <span class="w-9 h-9 rounded-full bg-brand-100 border-2 border-brand-600 flex items-center justify-center text-sm">👩‍💻</span>
          </span>
          <p class="text-sm text-brand-100">Cùng đội ngũ sale đang lớn mạnh mỗi ngày</p>
        </div>
      </div>
      <div class="absolute -bottom-5 -left-5 w-20 h-20 bg-brand-100 rounded-3xl dot-pattern -z-10"></div>
    </div>
  </div>
</section>

<!-- ============ SECTION 2: MÔ TẢ CÔNG VIỆC ============ -->
<section id="mo-ta-cong-viec" class="bg-brand-50/60 border-y border-brand-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-16 lg:py-24">
    <div class="text-center max-w-2xl mx-auto">
      <span class="section-tag">02 · Mô tả công việc</span>
      <h2 class="mt-4 text-3xl sm:text-4xl font-extrabold text-ink-900">Bạn sẽ làm những gì?</h2>
      <p class="mt-3 text-ink-600">Không yêu cầu kinh nghiệm — được hướng dẫn tận tình từ những ngày đầu tiên.</p>
    </div>
    <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
      <div class="bg-white rounded-2xl shadow-card border border-brand-100 p-7 card-hover">
        <div class="flex items-center justify-between">
          <span class="text-3xl">💬</span>
          <span class="font-extrabold text-brand-200 text-2xl">01</span>
        </div>
        <h3 class="mt-4 font-bold text-ink-900">Trả lời tin nhắn khách</h3>
        <p class="mt-2 text-sm text-ink-600 leading-relaxed">Phản hồi và tư vấn khách trên Fanpage, Zalo một cách nhiệt tình, nhanh chóng.</p>
      </div>
      <div class="bg-white rounded-2xl shadow-card border border-brand-100 p-7 card-hover">
        <div class="flex items-center justify-between">
          <span class="text-3xl">👗</span>
          <span class="font-extrabold text-brand-200 text-2xl">02</span>
        </div>
        <h3 class="mt-4 font-bold text-ink-900">Tư vấn mẫu mã &amp; size</h3>
        <p class="mt-2 text-sm text-ink-600 leading-relaxed">Giúp khách chọn được sản phẩm ưng ý nhất về mẫu mã, size và giá cả.</p>
      </div>
      <div class="bg-white rounded-2xl shadow-card border border-brand-100 p-7 card-hover">
        <div class="flex items-center justify-between">
          <span class="text-3xl">📦</span>
          <span class="font-extrabold text-brand-200 text-2xl">03</span>
        </div>
        <h3 class="mt-4 font-bold text-ink-900">Lên đơn &amp; theo dõi giao hàng</h3>
        <p class="mt-2 text-sm text-ink-600 leading-relaxed">Xác nhận đơn hàng, cập nhật tình trạng vận chuyển đến tận khi khách nhận hàng.</p>
      </div>
      <div class="bg-white rounded-2xl shadow-card border border-brand-100 p-7 card-hover">
        <div class="flex items-center justify-between">
          <span class="text-3xl">🥰</span>
          <span class="font-extrabold text-brand-200 text-2xl">04</span>
        </div>
        <h3 class="mt-4 font-bold text-ink-900">Chăm sóc khách sau bán</h3>
        <p class="mt-2 text-sm text-ink-600 leading-relaxed">Giữ chân khách hàng cũ, xây dựng mối quan hệ lâu dài và tái đơn hàng.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ SECTION 3: YÊU CẦU ============ -->
<section id="yeu-cau" class="max-w-7xl mx-auto px-4 sm:px-6 py-16 lg:py-24">
  <div class="grid lg:grid-cols-5 gap-10 items-center">
    <div class="lg:col-span-2">
      <span class="section-tag">03 · Yêu cầu ứng viên</span>
      <h2 class="mt-4 text-3xl sm:text-4xl font-extrabold text-ink-900 leading-tight">Ai có thể ứng tuyển?</h2>
      <p class="mt-4 text-ink-600 leading-relaxed">
        Chỉ cần bạn đáp ứng 3 tiêu chí cơ bản dưới đây — phần còn lại chúng tôi sẽ đào tạo.
        Biết cơ bản về bán hàng online là một lợi thế lớn.
      </p>
      <a href="#ung-tuyen" class="mt-7 inline-flex items-center gap-2 text-brand-600 font-semibold hover:gap-3 transition-all">
        Tôi phù hợp — ứng tuyển ngay
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
      </a>
    </div>
    <div class="lg:col-span-3 grid sm:grid-cols-2 gap-4">
      <div class="sm:col-span-2 bg-gradient-to-r from-brand-600 to-brand-500 text-white rounded-2xl p-6 flex items-center gap-4 shadow-soft">
        <span class="w-12 h-12 shrink-0 rounded-xl bg-white/15 flex items-center justify-center text-2xl">🎀</span>
        <div>
          <p class="font-bold text-lg">Nữ, từ 20 – 25 tuổi</p>
          <p class="text-sm text-brand-100">Đối tượng tuyển chính của đợt tuyển dụng này.</p>
        </div>
      </div>
      <div class="bg-white rounded-2xl border border-ink-100 shadow-card p-6 card-hover">
        <span class="w-11 h-11 rounded-xl bg-ink-50 flex items-center justify-center text-xl">📱</span>
        <p class="mt-3 font-bold text-ink-900">Có điện thoại hoặc laptop</p>
        <p class="mt-1 text-sm text-ink-600">Thiết bị kết nối internet ổn định để làm việc online.</p>
      </div>
      <div class="bg-white rounded-2xl border border-ink-100 shadow-card p-6 card-hover">
        <span class="w-11 h-11 rounded-xl bg-ink-50 flex items-center justify-center text-xl">⚡</span>
        <p class="mt-3 font-bold text-ink-900">Giao tiếp tốt, nhanh nhẹn</p>
        <p class="mt-1 text-sm text-ink-600">Chăm chỉ, chịu khó và tinh thần cầu tiến.</p>
      </div>
      <div class="sm:col-span-2 bg-white rounded-2xl border border-dashed border-brand-300 bg-brand-50/50 p-6 flex items-center gap-4">
        <span class="w-11 h-11 shrink-0 rounded-xl bg-brand-100 flex items-center justify-center text-xl">✨</span>
        <p class="text-sm text-ink-600"><strong class="text-ink-900">Lợi thế (không bắt buộc):</strong> biết cơ bản về bán hàng online, từng tư vấn hoặc chăm sóc khách hàng.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ SECTION 4: QUYỀN LỢI ============ -->
<section id="quyen-loi" class="bg-ink-900 relative overflow-hidden">
  <div class="absolute -top-24 -right-24 w-72 h-72 bg-brand-600/20 rounded-full blur-3xl"></div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-16 lg:py-24 relative">
    <div class="text-center max-w-2xl mx-auto">
      <span class="section-tag !bg-brand-600/15 !border-brand-500/30">04 · Quyền lợi</span>
      <h2 class="mt-4 text-3xl sm:text-4xl font-extrabold text-white">Điều bạn nhận được</h2>
      <p class="mt-3 text-ink-200/80">Thu nhập hấp dẫn — Linh hoạt thời gian — Cơ hội phát triển lâu dài.</p>
    </div>

    <!-- Salary highlight -->
    <div class="mt-12 bg-gradient-to-r from-brand-600 to-brand-400 rounded-3xl p-8 sm:p-10 flex flex-col md:flex-row items-center justify-between gap-6 shadow-lift">
      <div class="text-center md:text-left">
        <p class="text-sm font-semibold uppercase tracking-widest text-brand-100">Thu nhập trung bình</p>
        <p class="mt-2 text-4xl sm:text-5xl font-extrabold text-white counter-num">5 – 12 triệu</p>
        <p class="mt-1 text-brand-100 font-medium">/ tháng — lương cứng + % hoa hồng theo đơn</p>
      </div>
      <div class="grid grid-cols-2 gap-3 text-center">
        <div class="bg-white/10 backdrop-blur rounded-2xl px-6 py-4 border border-white/15">
          <p class="font-bold text-white text-lg">Lương cứng</p>
          <p class="text-xs text-brand-100 mt-1">Ổn định hàng tháng</p>
        </div>
        <div class="bg-white/10 backdrop-blur rounded-2xl px-6 py-4 border border-white/15">
          <p class="font-bold text-white text-lg">Hoa hồng</p>
          <p class="text-xs text-brand-100 mt-1">Theo từng đơn chốt</p>
        </div>
      </div>
    </div>

    <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <div class="bg-ink-800/80 border border-ink-600/50 rounded-2xl p-7 card-hover !hover:border-brand-500/50">
        <span class="text-3xl">🕰️</span>
        <h3 class="mt-3 font-bold text-white text-lg">Làm việc linh hoạt</h3>
        <p class="mt-2 text-sm text-ink-200/70 leading-relaxed">Xoay ca thoải mái, phù hợp sinh viên và người bận rộn.</p>
      </div>
      <div class="bg-ink-800/80 border border-ink-600/50 rounded-2xl p-7 card-hover !hover:border-brand-500/50">
        <span class="text-3xl">🎓</span>
        <h3 class="mt-3 font-bold text-white text-lg">Được đào tạo bài bản</h3>
        <p class="mt-2 text-sm text-ink-200/70 leading-relaxed">Kỹ năng tư vấn &amp; chốt sale từ A–Z, kèm cặp 1-1.</p>
      </div>
      <div class="bg-ink-800/80 border border-ink-600/50 rounded-2xl p-7 card-hover !hover:border-brand-500/50">
        <span class="text-3xl">🚀</span>
        <h3 class="mt-3 font-bold text-white text-lg">Thu nhập không giới hạn</h3>
        <p class="mt-2 text-sm text-ink-200/70 leading-relaxed">Càng cố gắng, hoa hồng càng cao — tăng thu nhập theo hiệu suất.</p>
      </div>
      <div class="bg-ink-800/80 border border-ink-600/50 rounded-2xl p-7 card-hover !hover:border-brand-500/50">
        <span class="text-3xl">🏠</span>
        <h3 class="mt-3 font-bold text-white text-lg">Làm việc tại nhà</h3>
        <p class="mt-2 text-sm text-ink-200/70 leading-relaxed">Hoàn toàn online, tiết kiệm chi phí đi lại, ăn trưa.</p>
      </div>
      <div class="bg-ink-800/80 border border-ink-600/50 rounded-2xl p-7 card-hover !hover:border-brand-500/50">
        <span class="text-3xl">🏆</span>
        <h3 class="mt-3 font-bold text-white text-lg">Thưởng &amp; thi đua</h3>
        <p class="mt-2 text-sm text-ink-200/70 leading-relaxed">Thưởng tháng, thưởng top sale xuất sắc hàng quý.</p>
      </div>
      <div class="bg-ink-800/80 border border-ink-600/50 rounded-2xl p-7 card-hover !hover:border-brand-500/50">
        <span class="text-3xl">💼</span>
        <h3 class="mt-3 font-bold text-white text-lg">Việc lâu dài</h3>
        <p class="mt-2 text-sm text-ink-200/70 leading-relaxed">Lộ trình thăng tiến rõ ràng cho bạn gắn bó và phát triển.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ SECTION 5: THỜI GIAN LÀM VIỆC ============ -->
<section id="thoi-gian" class="max-w-7xl mx-auto px-4 sm:px-6 py-16 lg:py-24">
  <div class="text-center max-w-2xl mx-auto">
    <span class="section-tag">05 · Thời gian &amp; hình thức</span>
    <h2 class="mt-4 text-3xl sm:text-4xl font-extrabold text-ink-900">Chọn ca phù hợp với bạn</h2>
    <p class="mt-3 text-ink-600">Chỉ cần bạn có đam mê và tinh thần cầu tiến là đủ.</p>
  </div>
  <div class="mt-12 grid md:grid-cols-3 gap-5 max-w-4xl mx-auto">
    <div class="bg-white rounded-2xl border border-ink-100 shadow-card p-8 text-center card-hover">
      <span class="text-3xl">🌤️</span>
      <p class="mt-3 text-xs font-semibold uppercase tracking-widest text-ink-400">Part-time</p>
      <p class="mt-1 font-extrabold text-2xl text-ink-900 counter-num">3 – 4h / ngày</p>
      <p class="mt-2 text-sm text-ink-600">Phù hợp sinh viên, người có việc khác ban ngày.</p>
    </div>
    <div class="bg-brand-600 rounded-2xl shadow-lift p-8 text-center relative overflow-hidden">
      <span class="absolute top-4 right-4 bg-white text-brand-600 text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full">Phổ biến</span>
      <span class="text-3xl">☀️</span>
      <p class="mt-3 text-xs font-semibold uppercase tracking-widest text-brand-200">Full-time</p>
      <p class="mt-1 font-extrabold text-2xl text-white">Cả ngày</p>
      <p class="mt-2 text-sm text-brand-100">Thu nhập cao hơn, cơ hội thăng tiến nhanh.</p>
    </div>
    <div class="bg-white rounded-2xl border border-ink-100 shadow-card p-8 text-center card-hover">
      <span class="text-3xl">🏠</span>
      <p class="mt-3 text-xs font-semibold uppercase tracking-widest text-ink-400">Địa điểm</p>
      <p class="mt-1 font-extrabold text-2xl text-ink-900">Tại nhà</p>
      <p class="mt-2 text-sm text-ink-600">Làm việc hoàn toàn online trên điện thoại / laptop.</p>
    </div>
  </div>
</section>

<!-- ============ SECTION 6: QUY TRÌNH TUYỂN DỤNG ============ -->
<section id="quy-trinh" class="bg-brand-50/60 border-y border-brand-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-16 lg:py-24">
    <div class="text-center max-w-2xl mx-auto">
      <span class="section-tag">06 · Quy trình tuyển dụng</span>
      <h2 class="mt-4 text-3xl sm:text-4xl font-extrabold text-ink-900">Chỉ 4 bước để bắt đầu</h2>
    </div>
    <div class="mt-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-6">
      <div class="step-line relative text-center">
        <div class="w-16 h-16 mx-auto rounded-2xl bg-white border border-brand-100 shadow-card flex items-center justify-center text-2xl">📝</div>
        <p class="mt-4 text-xs font-bold uppercase tracking-widest text-brand-600">Bước 1</p>
        <h3 class="mt-1 font-bold text-ink-900">Ứng tuyển</h3>
        <p class="mt-2 text-sm text-ink-600">Comment "ỨNG TUYỂN" hoặc inbox trực tiếp fanpage.</p>
      </div>
      <div class="step-line relative text-center">
        <div class="w-16 h-16 mx-auto rounded-2xl bg-white border border-brand-100 shadow-card flex items-center justify-center text-2xl">📞</div>
        <p class="mt-4 text-xs font-bold uppercase tracking-widest text-brand-600">Bước 2</p>
        <h3 class="mt-1 font-bold text-ink-900">Nhận lịch phỏng vấn</h3>
        <p class="mt-2 text-sm text-ink-600">Trao đổi online qua Zalo, nhanh gọn trong 15 phút.</p>
      </div>
      <div class="step-line relative text-center">
        <div class="w-16 h-16 mx-auto rounded-2xl bg-white border border-brand-100 shadow-card flex items-center justify-center text-2xl">🎓</div>
        <p class="mt-4 text-xs font-bold uppercase tracking-widest text-brand-600">Bước 3</p>
        <h3 class="mt-1 font-bold text-ink-900">Đào tạo hội nhập</h3>
        <p class="mt-2 text-sm text-ink-600">Hướng dẫn sản phẩm, kịch bản tư vấn, kèm cặp 1-1.</p>
      </div>
      <div class="relative text-center">
        <div class="w-16 h-16 mx-auto rounded-2xl bg-brand-600 shadow-soft flex items-center justify-center text-2xl">🎉</div>
        <p class="mt-4 text-xs font-bold uppercase tracking-widest text-brand-600">Bước 4</p>
        <h3 class="mt-1 font-bold text-ink-900">Bắt đầu chốt đơn</h3>
        <p class="mt-2 text-sm text-ink-600">Nhận khách, chốt đơn đầu tiên và nhận hoa hồng.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ SECTION 7: CTA ỨNG TUYỂN ============ -->
<section id="ung-tuyen" class="max-w-7xl mx-auto px-4 sm:px-6 py-16 lg:py-24">
  <div class="relative bg-gradient-to-br from-brand-600 via-brand-500 to-brand-400 rounded-3xl shadow-lift p-10 sm:p-14 text-center text-white overflow-hidden">
    <div class="absolute inset-0 dot-pattern opacity-20"></div>
    <span class="absolute -top-8 -left-6 text-9xl opacity-10">💌</span>
    <span class="absolute -bottom-10 -right-4 text-9xl opacity-10">💗</span>
    <div class="relative">
      <span class="inline-block bg-white/15 border border-white/25 backdrop-blur text-white text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full">Số lượng có hạn — ứng tuyển sớm</span>
      <h2 class="mt-5 text-3xl sm:text-5xl font-extrabold">Sẵn sàng bắt đầu?</h2>
      <p class="mt-4 text-lg font-medium text-brand-50 max-w-xl mx-auto">
        Comment <span class="inline-block bg-white text-brand-600 font-bold px-3 py-0.5 rounded-lg mx-1">"ỨNG TUYỂN"</span>
        hoặc inbox trực tiếp để nhận lịch phỏng vấn trong hôm nay.
      </p>
      <div class="mt-9 flex flex-col sm:flex-row items-center justify-center gap-4">
        <a onclick="openPage()" href="javascript:void(0)" class="inline-flex items-center gap-2 bg-white text-brand-600 font-bold text-lg px-9 py-4 rounded-full shadow-soft hover:scale-105 active:scale-95 transition-transform">
          💌 Ứng tuyển ngay
        </a>
      </div>
      <p class="mt-6 text-sm text-brand-100">Hàng ngàn cơ hội đang chờ bạn — đừng ngần ngại thử sức!</p>
    </div>
  </div>
</section>

</main>

<!-- ============ FOOTER ============ -->
<footer class="bg-ink-900 text-ink-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-14 grid sm:grid-cols-2 lg:grid-cols-4 gap-10">
    <!-- Brand -->
    <div>
      <a href="#top" class="flex items-center gap-2.5">
        <span class="w-9 h-9 rounded-xl bg-gradient-to-br from-brand-500 to-brand-600 text-white flex items-center justify-center font-extrabold">C</span>
        <span class="leading-tight">
          <span class="block font-extrabold text-white text-base">Góc làm việc</span>
          <span class="block text-[11px] tracking-widest uppercase text-brand-400">Online</span>
        </span>
      </a>
      <p class="mt-4 text-sm text-ink-400 leading-relaxed">
        Đơn vị kinh doanh quần áo online uy tín — mang đến việc làm linh hoạt và thu nhập ổn định cho bạn trẻ.
      </p>
      <!-- <div class="mt-5 flex gap-3">
        <a href="#" aria-label="Facebook" class="w-9 h-9 rounded-lg bg-ink-800 hover:bg-brand-600 flex items-center justify-center transition-colors">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M13.5 21v-7h2.5l.5-3h-3V9.2c0-.9.3-1.5 1.6-1.5H16.6V5.1C16.3 5.1 15.3 5 14.2 5c-2.4 0-4 1.4-4 4v2H7.5v3h2.7v7h3.3z"/></svg>
        </a>
        <a href="#" aria-label="TikTok" class="w-9 h-9 rounded-lg bg-ink-800 hover:bg-brand-600 flex items-center justify-center transition-colors">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M16.6 5.82A4.28 4.28 0 0 1 15.54 3h-3.09v12.4a2.59 2.59 0 1 1-2.59-2.59c.27 0 .53.04.78.12V9.77a5.76 5.76 0 0 0-.78-.05 5.66 5.66 0 1 0 5.66 5.66V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3a4.28 4.28 0 0 1-3.22-1.48z"/></svg>
        </a>
        <a href="#" aria-label="Zalo" class="w-9 h-9 rounded-lg bg-ink-800 hover:bg-brand-600 flex items-center justify-center text-xs font-bold transition-colors">Z</a>
      </div> -->
    </div>
    <!-- Links -->
    <div>
      <h4 class="font-bold text-white text-sm uppercase tracking-widest">Tuyển dụng</h4>
      <ul class="mt-4 space-y-2.5 text-sm">
        <li><a href="#mo-ta-cong-viec" class="hover:text-brand-400 transition-colors">Mô tả công việc</a></li>
        <li><a href="#yeu-cau" class="hover:text-brand-400 transition-colors">Yêu cầu ứng viên</a></li>
        <li><a href="#quyen-loi" class="hover:text-brand-400 transition-colors">Quyền lợi</a></li>
        <li><a href="#thoi-gian" class="hover:text-brand-400 transition-colors">Thời gian làm việc</a></li>
        <li><a href="#quy-trinh" class="hover:text-brand-400 transition-colors">Quy trình tuyển dụng</a></li>
      </ul>
    </div>
    <div>
      <h4 class="font-bold text-white text-sm uppercase tracking-widest">Ứng tuyển nhanh</h4>
      <p class="mt-4 text-sm text-ink-400">Để lại thông tin, bộ phận nhân sự sẽ liên hệ bạn trong 24 giờ.</p>
      <a onclick="openPage()" href="javascript:void(0)" class="mt-4 inline-flex items-center gap-2 bg-brand-600 hover:bg-brand-500 text-white text-sm font-semibold px-6 py-3 rounded-full transition-colors">
        Ứng tuyển ngay →
      </a>
    </div>
  </div>
  <div class="border-t border-ink-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-ink-400">
      <p>© 2026 Góc làm việc Online. All rights reserved.</p>
      <div class="flex gap-6">
        <a href="#" class="hover:text-brand-400 transition-colors">Điều khoản</a>
        <a href="#" class="hover:text-brand-400 transition-colors">Bảo mật</a>
        <a href="#" class="hover:text-brand-400 transition-colors">Chính sách tuyển dụng</a>
      </div>
    </div>
  </div>
</footer>

<script>
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');
  hamburger.addEventListener('click', () => mobileMenu.classList.toggle('open'));
  mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => mobileMenu.classList.remove('open')));
  
  function openPage() {
    window.location.href = '{!!getParamsLink()!!}';
  }
</script>

</body>
</html>
