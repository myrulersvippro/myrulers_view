<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.23.0/sweetalert2.min.js" integrity="sha512-pnPZhx5S+z5FSVwy62gcyG2Mun8h6R+PG01MidzU+NGF06/ytcm2r6+AaWMBXAnDHsdHWtsxS0dH8FBKA84FlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.23.0/sweetalert2.css" integrity="sha512-/j+6zx45kh/MDjnlYQL0wjxn+aPaSkaoTczyOGfw64OB2CHR7Uh5v1AML7VUybUnUTscY5ck/gbGygWYcpCA7w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css'])
    <style>
        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            background: hsl(45, 30%, 97%);
            color: hsl(220, 20%, 15%);
            -webkit-font-smoothing: antialiased;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(16px);
            filter: blur(4px);
            transition: all 0.7s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .scroll-reveal.visible {
            opacity: 1;
            transform: translateY(0);
            filter: blur(0);
        }

        .vote-card {
            background: #fff;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 4px 24px -4px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
        }

        .vote-card:hover {
            transform: translateY(-6px);
        }

        .vote-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.5rem;
            background: hsl(350, 65%, 52%);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.15s ease;
        }

        .hero-overlay {
            background: linear-gradient(180deg, rgba(30, 34, 44, 0.65) 0%, rgba(30, 34, 44, 0.82) 100%);
        }
    </style>
</head>

<body>
    {{-- Success Notification --}}
    @if (isset($_GET['success']))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Bình chọn thành công',
                text: 'Bạn đã bình chọn thành công, cảm ơn bạn đã bình chọn cho các thí sinh',
                confirmButtonText: 'Tôi đã hiểu'
            });
        </script>
    @endif
    <nav class="fixed top-0 z-50 w-full border-b bg-brand-bg/80 backdrop-blur-md"
        style="border-color: hsl(40,20%,88%);">
        <div class="container flex h-16 items-center justify-center mx-auto sm:justify-between">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand-primary" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="8" r="6" />
                    <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />
                </svg>
                <span
                    class="font-heading text-lg font-semibold text-brand-fg">{{ __('common/binhchonhs.nav.title') }}</span>
            </div>
            <div class="hidden sm:flex items-center gap-8 font-body text-sm font-medium text-brand-muted">
                <a href=""
                    class="transition-colors hover:text-brand-fg">{{ __('common/binhchonhs.nav.home') }}</a>
                <a href="#binhchonhs"
                    class="transition-colors hover:text-brand-fg">{{ __('common/binhchonhs.nav.vote_now') }}</a>
            </div>
        </div>
    </nav>

    <section class="relative flex min-h-[60vh] items-center justify-center overflow-hidden pt-16">
        <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/hero.jpg" alt=""
            class="absolute inset-0 h-full w-full object-cover" />
        <div class="hero-overlay absolute inset-0"></div>
        <div class="relative z-10 px-6 py-20 text-center">
            <div class="mx-auto max-w-2xl">
                <p class="mb-4 text-sm font-medium uppercase tracking-[0.2em] text-white/70 font-body">
                    {{ __('common/binhchonhs.hero.school_year') }} {{ date('Y') }} - {{ date('Y') + 1 }}
                </p>
                <h1 class="font-heading text-4xl font-bold text-white sm:text-5xl md:text-6xl" style="line-height:1.1;">
                    {{ __('common/binhchonhs.hero.title_part1') }}<br />
                    <span class="text-brand-accent">{{ __('common/binhchonhs.hero.title_part2') }}</span>
                </h1>
                <p class="mx-auto mt-6 max-w-lg text-base leading-relaxed text-white/80 font-body">
                    {{ __('common/binhchonhs.hero.description') }}
                </p>

                <div class="mt-10 flex items-center justify-center gap-8 sm:gap-12">
                    <div class="text-center">
                        <div class="flex items-center justify-center gap-1.5 text-brand-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                            <span id="totalVotes" class="text-2xl font-bold tabular-nums font-body"></span>
                        </div>
                        <p class="mt-1 text-xs text-white/60 font-body">
                            {{ __('common/binhchonhs.hero.stats_total_votes') }}</p>
                    </div>
                    <div class="h-8 w-px bg-white/20"></div>
                    <div class="text-center">
                        <div class="flex items-center justify-center gap-1.5 text-brand-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                            <span id="totalClasses" class="text-2xl font-bold tabular-nums font-body"></span>
                        </div>
                        <p class="mt-1 text-xs text-white/60 font-body">
                            {{ __('common/binhchonhs.hero.stats_classes') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-16 sm:py-24 mx-auto px-8">
        <div class="mb-12 text-center scroll-reveal">
            <h2 class="font-heading text-3xl font-bold text-brand-fg sm:text-4xl" id="binhchonhs">
                {{ __('common/binhchonhs.content.section_title') }}</h2>
            <p class="mx-auto mt-3 max-w-md text-brand-muted font-body">
                {{ __('common/binhchonhs.content.section_subtitle') }}</p>
        </div>
        <div id="classGrid" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4"></div>
    </section>

    <script>
        const lang = {
            vote_btn: "{{ __('common/binhchonhs.content.vote_button') }}",
            vote_unit: "{{ __('common/binhchonhs.content.vote_count_text') }}"
        };
        const localizedClasses = @json(__('common/binhchonhs.classes'));
        const classData = [{
                id: '12A1',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/1.png",
                votes: 2378
            },
            {
                id: '12A2',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/2.png",
                votes: 2123
            },
            {
                id: '12A3',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/3.png",
                votes: 1989
            },
            {
                id: '12A4',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/4.png",
                votes: 1619
            },
            {
                id: '12B1',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/5.png",
                votes: 1481
            },
            {
                id: '12B2',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/6.png",
                votes: 1238
            },
            {
                id: '12B3',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/7.png",
                votes: 1007
            },
            {
                id: '12B4',
                image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/8.png",
                votes: 921
            },
        ];

        const grid = document.getElementById('classGrid');

        classData.forEach((item, i) => {
            // Lấy tên và quote dựa trên id từ file ngôn ngữ
            const info = localizedClasses[item.id];

            const card = document.createElement('div');
            card.className = 'vote-card scroll-reveal';
            card.style.transitionDelay = `${i * 80}ms`;
            card.innerHTML = `
                <div class="relative aspect-square overflow-hidden">
                    <img src="${item.image}" alt="${info.name}" class="h-full w-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-3 left-3 right-3 text-xs font-semibold text-primary-foreground tabular-nums uppercase p-2 bg-primary rounded w-fit">
                        ${item.votes.toLocaleString()} ${lang.vote_unit}
                    </div>
                </div>
                <div class="flex flex-col gap-4 p-5">
                    <h3 class="font-heading text-lg font-semibold text-brand-fg">{{ $input->vote_type == 'tenlop' ? '${item.id}' : '${info.name}' }}</h3>
                    <p class="text-sm italic leading-relaxed text-brand-muted font-body min-h-[3.5rem]">
                        "${info.quote}"
                    </p>
                    <button class="vote-btn" onclick="window.location.href='?a&l'">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                        ${lang.vote_btn}
                    </button>
                </div>
            `;
            grid.appendChild(card);
        });

        // Cập nhật tổng số vote và số lớp
        document.getElementById('totalVotes').textContent = classData.reduce((sum, c) => sum + c.votes, 0).toLocaleString();
        document.getElementById('totalClasses').textContent = classData.length;
        // Observer cho scroll reveal
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('visible');
            });
        }, {
            threshold: 0.15
        });
        document.querySelectorAll('.scroll-reveal').forEach(el => observer.observe(el));
    </script>
</body>

</html>
