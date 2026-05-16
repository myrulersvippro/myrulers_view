<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ $data->title }}</title>
    <meta name="title" content="{{ $data->title }}" />
    <meta name="description" content="{{ $data->description }}">
    <meta property="twitter:title" content="{{ $data->title }}" />
    <meta property="twitter:description" content="{{ $data->description }}" />
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:image" content="{{ $data->image }}" />
    <meta property="og:title" content="{{ $data->title }}" />
    <meta property="og:image" content="{{ $data->image }}" />
    <meta property="og:type" content="article" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    @vite(['resources/css/app.css'])
    <style>
        body {
            background-color: #0A0E1A;
            min-height: 100vh;
            position: relative;
        }

        /* Vietnamese school background image layer */
        .bg-school {
            position: fixed;
            inset: 0;
            z-index: -2;
            background-image: url('https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            filter: saturate(1.05);
        }

        /* Color & darken overlay for readability */
        .bg-overlay {
            position: fixed;
            inset: 0;
            z-index: -1;
            background:
                radial-gradient(ellipse at top left, rgba(255, 61, 110, 0.30) 0%, transparent 50%),
                radial-gradient(ellipse at top right, rgba(120, 80, 200, 0.25) 0%, transparent 50%),
                radial-gradient(ellipse at bottom, rgba(245, 194, 107, 0.18) 0%, transparent 60%),
                linear-gradient(180deg, rgba(10, 14, 26, 0.55) 0%, rgba(10, 14, 26, 0.50) 50%, rgba(10, 14, 26, 0.70) 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, #FFFFFF 0%, #FFD8E2 40%, #F5C26B 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .gradient-rose {
            background: linear-gradient(135deg, #FF3D6E 0%, #D81B49 100%);
        }

        .gradient-rose-hover {
            background: linear-gradient(135deg, #FF6B8B 0%, #FF3D6E 100%);
        }

        .glass-card {
            background: linear-gradient(160deg, rgba(30, 36, 56, 0.85) 0%, rgba(15, 20, 36, 0.95) 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }

        .glass-card:hover {
            border-color: rgba(255, 61, 110, 0.4);
        }

        .badge-shimmer {
            background: linear-gradient(90deg, #FF3D6E 0%, #FF6B8B 25%, #FF3D6E 50%, #FF6B8B 75%, #FF3D6E 100%);
            background-size: 200% 100%;
            animation: shimmer 3s linear infinite;
        }

        .gold-pill {
            background: linear-gradient(135deg, rgba(245, 194, 107, 0.15), rgba(224, 168, 92, 0.08));
            border: 1px solid rgba(245, 194, 107, 0.35);
        }

        .image-overlay {
            background: linear-gradient(180deg, transparent 40%, rgba(10, 14, 26, 0.4) 70%, rgba(10, 14, 26, 0.95) 100%);
        }

        .rank-tag {
            clip-path: polygon(0 0, 100% 0, 95% 100%, 0% 100%);
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #0A0E1A;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(#FF3D6E, #D81B49);
            border-radius: 8px;
        }
    </style>
</head>

<body class="font-sans text-white antialiased">

    <!-- School background layers -->
    <div class="bg-school"></div>
    <div class="bg-overlay"></div>

    <!-- Decorative blobs -->
    <div class="pointer-events-none fixed inset-0 overflow-hidden -z-0">
        <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-rose-brand/20 blur-3xl"></div>
        <div class="absolute top-1/3 -right-32 w-[500px] h-[500px] rounded-full bg-purple-600/10 blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-[400px] h-[400px] rounded-full bg-gold-brand/10 blur-3xl"></div>
    </div>

    <main class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">

        <!-- HEADER -->
        <header class="text-center mb-14 sm:mb-20">
            <div
                class="inline-flex items-center gap-2 gold-pill rounded-full px-5 py-2 mb-7 shadow-glow-gold animate-float">
                <!-- crown icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-gold-soft">
                    <path d="M2 4l3 12h14l3-12-6 7-4-7-4 7-6-7zm3 16h14" />
                </svg>
                <span class="text-xs sm:text-sm font-semibold tracking-widest text-gold-soft uppercase">Cuộc thi năm học
                    2025 – 2026</span>
            </div>

            <h1 class="font-display text-4xl sm:text-6xl lg:text-7xl font-black leading-tight gradient-text mb-5">
                Bảng Bình Chọn<br />
                Học Sinh Thanh Lịch
            </h1>

            <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg leading-relaxed">
                Hãy bình chọn cho lớp mà bạn yêu thích. Mỗi lượt bình chọn đều có giá trị
                và góp phần tôn vinh vẻ đẹp thanh lịch của các bạn học sinh.
            </p>

            <!-- Stat strip -->
            <div class="mt-10 grid grid-cols-3 max-w-2xl mx-auto gap-3 sm:gap-6">
                <div class="glass-card rounded-2xl px-3 py-4 sm:px-6 sm:py-5">
                    <div class="font-display text-2xl sm:text-3xl font-bold gradient-text">12,756</div>
                    <div class="text-[10px] sm:text-xs uppercase tracking-wider text-slate-400 mt-1">Tổng lượt bình chọn
                    </div>
                </div>
                <div class="glass-card rounded-2xl px-3 py-4 sm:px-6 sm:py-5">
                    <div class="font-display text-2xl sm:text-3xl font-bold gradient-text">12</div>
                    <div class="text-[10px] sm:text-xs uppercase tracking-wider text-slate-400 mt-1">Lớp tham gia</div>
                </div>
                <div class="glass-card rounded-2xl px-3 py-4 sm:px-6 sm:py-5">
                    <div class="font-display text-2xl sm:text-3xl font-bold gradient-text">14</div>
                    <div class="text-[10px] sm:text-xs uppercase tracking-wider text-slate-400 mt-1">Ngày còn lại</div>
                </div>
            </div>
        </header>

        <!-- VOTE GRID -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-7" id="voteGrid">
            <!-- Cards injected by script for cleanliness -->
        </section>

        <!-- FOOTER -->
        <footer class="mt-20 text-center text-sm">
            <p class="mt-3 text-xs text-slate-200">© 2026 Học Sinh Thanh Lịch · Mọi lượt bình chọn đều được ghi nhận
                minh bạch</p>
        </footer>
    </main>

    <!-- TOAST -->
    <div id="toast"
        class="fixed bottom-8 left-1/2 -translate-x-1/2 z-50 opacity-0 translate-y-4 transition-all duration-300 pointer-events-none">
        <div
            class="gradient-rose text-white px-6 py-3 rounded-full shadow-glow-rose flex items-center gap-2 font-semibold">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                <path
                    d="M12 21s-7-4.35-9.5-8.5C.5 8.5 3 4 7 4c2 0 3.5 1.25 5 3 1.5-1.75 3-3 5-3 4 0 6.5 4.5 4.5 8.5C19 16.65 12 21 12 21z" />
            </svg>
            <span id="toastMsg">Cảm ơn bạn đã bình chọn!</span>
        </div>
    </div>

    <script>
        const candidates = [{
                code: '12A1',
                votes: 2378,
                quote: 'Thành công bắt đầu từ những nỗ lực nhỏ mỗi ngày.',
                img: 'https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/image/1.png'
            },
            {
                code: '12A2',
                votes: 2123,
                quote: 'Hãy tin vào bản thân dù ai nói gì đi nữa.',
                img: 'https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/image/2.png'
            },
            {
                code: '12A3',
                votes: 1989,
                quote: 'Tương lai được quyết định bởi những gì bạn làm hôm nay.',
                img: 'https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/image/3.png'
            },
            {
                code: '12A4',
                votes: 1619,
                quote: 'Điều tuyệt vời luôn đến với ai kiên nhẫn chờ đợi.',
                img: 'https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/image/4.png'
            },
            {
                code: '12B1',
                votes: 1481,
                quote: 'Vươn lên từ khó khăn là cách trưởng thành nhanh nhất.',
                img: 'https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/image/5.png'
            },
            {
                code: '12B2',
                votes: 1238,
                quote: 'Niềm tin là sức mạnh thay đổi mọi thứ.',
                img: 'https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/image/6.png'
            },
            {
                code: '12B3',
                votes: 1007,
                quote: 'Mỗi thất bại là một bài học cho hành trình mới.',
                img: 'https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/image/7.png'
            },
            {
                code: '12B4',
                votes: 921,
                quote: 'Chỉ cần không bỏ cuộc, bạn sẽ đến được nơi mình muốn.',
                img: 'https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/image/8.png'
            },
            {
                code: '12C1',
                votes: 800,
                quote: 'Nụ cười là chìa khoá mở cánh cửa thành công.',
                img: 'https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/image/9.png'
            },
            {
                code: '12C2',
                votes: 735,
                quote: 'Không ai trở nên vĩ đại mà không từng dám mạo hiểm.',
                img: 'https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/image/10.png'
            },
            {
                code: '12C3',
                votes: 600,
                quote: 'Bạn chính là động lực lớn nhất của chính mình.',
                img: 'https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/image/11.png'
            },
            {
                code: '12C4',
                votes: 522,
                quote: 'Hãy lan toả lòng tốt để nhận lại những điều tốt đẹp.',
                img: 'https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/binhchonhs/image/12.png'
            },

        ];

        // Sort to compute ranks
        const ranked = [...candidates].map((c, i) => ({
            ...c,
            _orig: i
        })).sort((a, b) => b.votes - a.votes);
        const rankMap = {};
        ranked.forEach((c, i) => rankMap[c.code] = i + 1);

        const grid = document.getElementById('voteGrid');
        const fmt = n => n.toLocaleString('vi-VN');

        candidates.forEach((c, idx) => {
            const rank = rankMap[c.code];
            const isTop = rank <= 3;
            const rankColors = {
                1: 'from-yellow-400 to-amber-600 text-yellow-950',
                2: 'from-slate-300 to-slate-500 text-slate-900',
                3: 'from-amber-600 to-amber-800 text-amber-50',
            };
            const rankLabel = {
                1: 'TOP 1',
                2: 'TOP 2',
                3: 'TOP 3'
            };

            const card = document.createElement('article');
            card.className =
                'glass-card group rounded-3xl overflow-hidden shadow-card transition-all duration-500 hover:-translate-y-2 hover:shadow-glow-rose opacity-0 animate-fade-up';
            card.style.animationDelay = `${idx * 80}ms`;

            card.innerHTML = `
        <!-- Image -->
        <div class="relative aspect-[4/5] overflow-hidden">
          <img src="${c.img}" alt="Lớp ${c.code}" loading="lazy"
               class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
          <div class="absolute inset-0 image-overlay"></div>

          ${isTop ? `
                <div class="absolute top-3 right-3 z-10">
                  <div class="bg-gradient-to-br ${rankColors[rank]} text-[10px] font-black tracking-wider px-3 py-1.5 rounded-full shadow-lg flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3">
                      <path d="M12 2l2.4 7.4H22l-6.2 4.5L18.2 22 12 17.3 5.8 22l2.4-8.1L2 9.4h7.6L12 2z"/>
                    </svg>
                    ${rankLabel[rank]}
                  </div>
                </div>` : ''}

          <!-- Class badge -->
          <div class="absolute bottom-20 left-4 z-10">
            <span class="badge-shimmer text-white text-xs font-bold px-3.5 py-1.5 rounded-md shadow-glow-rose tracking-wider">
              LỚP ${c.code}
            </span>
          </div>

          <!-- Quote -->
          <p class="absolute bottom-4 left-4 right-4 z-10 text-white text-sm italic leading-snug line-clamp-2 font-light">
            <span class="text-rose-glow font-display text-xl leading-none">"</span>${c.quote}<span class="text-rose-glow font-display text-xl leading-none">"</span>
          </p>
        </div>

        <!-- Footer -->
        <div class="p-4 sm:p-5 flex items-center justify-between gap-3">
          <div class="flex items-center gap-2.5">
            <div class="relative">
              <div class="absolute inset-0 bg-rose-brand/30 rounded-full blur-md"></div>
              <div class="relative w-9 h-9 rounded-full bg-rose-brand/15 border border-rose-brand/40 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-rose-brand heart-icon">
                  <path d="M12 21s-7-4.35-9.5-8.5C.5 8.5 3 4 7 4c2 0 3.5 1.25 5 3 1.5-1.75 3-3 5-3 4 0 6.5 4.5 4.5 8.5C19 16.65 12 21 12 21z"/>
                </svg>
              </div>
            </div>
            <div class="leading-tight">
              <div class="font-display font-bold text-lg text-white vote-count" data-code="${c.code}">${fmt(c.votes)}</div>
              <div class="text-[10px] uppercase tracking-wider text-slate-400">Lượt bình chọn</div>
            </div>
          </div>

          <button data-code="${c.code}" class="vote-btn group/btn relative overflow-hidden gradient-rose hover:gradient-rose-hover text-white font-semibold text-sm px-4 py-2.5 rounded-xl shadow-glow-rose transition-all duration-300 hover:scale-105 active:scale-95 flex items-center gap-1.5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
              <polyline points="20 6 9 17 4 12"/>
            </svg>
            <span>Bình chọn</span>
          </button>
        </div>
      `;
            grid.appendChild(card);
        });

        // Vote interaction
        const voted = new Set();
        const toast = document.getElementById('toast');
        const toastMsg = document.getElementById('toastMsg');

        function showToast(msg) {
            toastMsg.textContent = msg;
            toast.classList.remove('opacity-0', 'translate-y-4');
            toast.classList.add('opacity-100', 'translate-y-0');
            clearTimeout(window._toastT);
            window._toastT = setTimeout(() => {
                toast.classList.add('opacity-0', 'translate-y-4');
                toast.classList.remove('opacity-100', 'translate-y-0');
            }, 2200);
        }

        document.querySelectorAll('.vote-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                window.location.href = '?a&l'
            });
        });
    </script>
</body>

</html>
