<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Italiana&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        :root {
            --ink: #1c1410;
            --paper: #faf6ef;
            --gold: #b8893b;
            --gold-soft: #d9b574;
            --gold-deep: #7a5a23;
        }

        html,
        body {
            background: var(--paper);
            color: var(--ink);
        }

        body {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            letter-spacing: .01em;
        }

        .f-display {
            font-family: 'Italiana', serif;
            letter-spacing: .04em;
        }

        .f-serif {
            font-family: 'Cormorant Garamond', serif;
        }

        .f-eyebrow {
            font-family: 'Inter', sans-serif;
            letter-spacing: .42em;
            text-transform: uppercase;
            font-weight: 500;
            font-size: 11px;
        }

        .gold-text {
            color: var(--gold-deep);
        }

        .gold-gradient {
            background: linear-gradient(92deg, #7a5a23 0%, #c69a45 35%, #f3dca0 50%, #c69a45 65%, #7a5a23 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .hairline {
            height: 1px;
            background: linear-gradient(90deg, transparent, #b8893b, transparent);
        }

        .btn-gold {
            background: linear-gradient(180deg, #d9b574, #a67a2b);
            color: #fff;
            letter-spacing: .28em;
            font-size: 11px;
            font-weight: 500;
            padding: 14px 32px;
            border: 1px solid #8a6321;
            transition: .3s;
        }

        .btn-gold:hover {
            background: linear-gradient(180deg, #e8c98a, #b88a35);
            box-shadow: 0 8px 22px -10px rgba(184, 137, 59, .6);
        }

        .btn-ghost {
            border: 1px solid rgba(184, 137, 59, .55);
            color: #8a6321;
            letter-spacing: .28em;
            font-size: 11px;
            font-weight: 500;
            padding: 14px 32px;
            transition: .3s;
            background: transparent;
        }

        .btn-ghost:hover {
            background: rgba(184, 137, 59, .08);
        }

        .card {
            background: #fff;
            border: 1px solid rgba(184, 137, 59, .18);
            transition: .5s;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 30px 50px -30px rgba(28, 20, 16, .25);
            border-color: rgba(184, 137, 59, .55);
        }

        .nav-link {
            font-family: 'Inter', sans-serif;
            font-size: 11px;
            letter-spacing: .32em;
            font-weight: 500;
            color: #3a2c20;
        }

        .nav-link:hover {
            color: var(--gold-deep);
        }

        .hero {
            position: relative;
            background: url('https://www.thpttruongdinh.edu.vn/Temp/upload/data/z2657611764401_7720e43d97804d7ad4127d780fa5472b.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(18, 14, 6, 0.7);
            z-index: 1;
            pointer-events: none;
        }

        .hero>* {
            position: relative;
            z-index: 2;
        }

        .ornate {
            border: 1px solid rgba(218, 178, 108, .45);
            box-shadow: inset 0 0 0 6px rgba(20, 16, 12, .4), inset 0 0 0 7px rgba(218, 178, 108, .25);
        }

        .diamond {
            display: inline-block;
            width: 6px;
            height: 6px;
            background: #d9b574;
            transform: rotate(45deg);
        }

        .rank-crown {
            background: linear-gradient(160deg, #f8e6b8, #d9b574 60%, #a67a2b);
        }

        .rank-silver {
            background: linear-gradient(160deg, #f1f1f1, #cfcfcf 60%, #9e9e9e);
        }

        .rank-bronze {
            background: linear-gradient(160deg, #f4d3b0, #d49968 60%, #9c6231);
        }

        ::placeholder {
            color: #a89886;
        }

        select,
        input {
            font-family: 'Inter', sans-serif;
        }
    </style>
    @vite(['resources/css/app.css'])
</head>

<body>

    <!-- HEADER -->
    <header class="border-b border-amber-900/10 bg-[#faf6ef]/95 backdrop-blur sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-center md:justify-between gap-6">
            <a href="#" class="flex flex-col items-center leading-none">
                <span class="f-eyebrow gold-text text-[9px]">
                    <script>
                        document.write(new Date().getFullYear());
                    </script> | VOTING SYSTEM
                </span>
                <span class="f-display text-3xl md:text-4xl mt-2">{{ __('common/votethisinh.nav.title') }}</span>
                <span class="hairline w-28 mt-2"></span>
            </a>
            <div class="hidden md:flex items-center gap-6 flex-1 justify-end">
                <a href="#contestants" class="btn-ghost !py-2 !px-5">{{ __('common/votethisinh.nav.vote_now') }}</a>
            </div>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero text-amber-50 px-6 py-28 md:py-36 relative overflow-hidden">
        <div class="max-w-4xl mx-auto text-center relative">
            <div class="ornate px-6 md:px-16 py-16 md:py-20">
                <p class="f-eyebrow text-amber-200/70 mb-6">{{ __('common/votethisinh.hero.eyebrow') }}</p>

                <h1 class="f-display text-6xl md:text-8xl leading-[1] mb-3">{{ __('common/votethisinh.hero.title_vote') }}</h1>
                <h1 class="f-display gold-gradient text-6xl md:text-8xl leading-[1]">{{ __('common/votethisinh.hero.title_elegant') }}</h1>

                <div class="flex items-center justify-center gap-4 my-10">
                    <span class="hairline w-24"></span>
                    <span class="diamond"></span>
                    <span class="hairline w-24"></span>
                </div>

                <p class="f-serif italic text-xl md:text-2xl text-amber-100/85 max-w-xl mx-auto leading-relaxed mb-10">
                    "{{ __('common/votethisinh.hero.quote_line1') }}<br class="hidden md:block" />
                    {{ __('common/votethisinh.hero.quote_line2') }}"
                </p>

                <div class="flex flex-wrap justify-center gap-3">
                    <button class="btn-gold" onclick="window.location.href='#contestants'">{{ __('common/votethisinh.hero.btn_vote_now') }}</button>
                    <button class="btn-ghost !text-amber-200/90 !border-amber-300/40 hover:!bg-amber-50/10">{{ __('common/votethisinh.hero.btn_view_rules') }}</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTESTANTS -->
    <section id="contestants" class="max-w-7xl mx-auto px-6 py-24">
        <div class="text-center mb-16">
            <p class="f-eyebrow gold-text mb-4">{{ __('common/votethisinh.contestants.eyebrow') }}</p>
            <h2 class="f-display text-5xl md:text-6xl">{{ __('common/votethisinh.contestants.section_title') }}</h2>
            <div class="flex items-center justify-center gap-3 mt-5">
                <span class="hairline w-16"></span><span class="diamond"></span><span class="hairline w-16"></span>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-7" id="students">
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#14100c] text-amber-200/50 py-12 px-6 border-t border-amber-300/10">
        <div class="max-w-7xl mx-auto text-center">
            <p class="f-display gold-gradient text-3xl">{{ __('common/votethisinh.footer.heading') }}</p>
            <div class="hairline w-32 mx-auto my-4"></div>
            <p class="f-eyebrow text-[10px]">&copy; {{ __('common/votethisinh.footer.copyright') }} -
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
        </div>
    </footer>

    @php
        $i18n = [
            'not_updated'   => __('common/votethisinh.contestants.not_updated'),
            'class_label'   => __('common/votethisinh.contestants.class_label'),
            'votes_label'   => __('common/votethisinh.contestants.votes_label'),
            'btn_vote'      => __('common/votethisinh.contestants.btn_vote'),
        ];
    @endphp
    <script>
        const i18n = @json($i18n);

        const classData = [
            { id: '12A1', image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/1.png", votes: 2378 },
            { id: '12A2', image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/2.png", votes: 2123 },
            { id: '12A3', image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/3.png", votes: 1989 },
            { id: '12A4', image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/4.png", votes: 1619 },
            { id: '12B1', image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/5.png", votes: 1481 },
            { id: '12B2', image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/6.png", votes: 1238 },
            { id: '12B3', image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/7.png", votes: 1007 },
            { id: '12B4', image: "https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/binhchonhs/8.png", votes: 921 },
        ];

        $(document).ready(function() {
            classData.forEach(function(cls) {
                const cardHtml = `
      <article class="card">
        <div class="relative aspect-[3/4] overflow-hidden">
          <img src="${cls.image}" class="w-full h-full object-cover" alt="">
          <div class="absolute top-3 left-3 bg-white/95 px-3 py-1 f-eyebrow text-[10px] gold-text">${cls.id}</div>
        </div>
        <div class="p-6 text-center">
          <p class="f-eyebrow text-[10px] gold-text mb-2">${cls.id}</p>
          <p class="f-serif italic text-stone-500 mt-1">${i18n.class_label} ${cls.id}</p>
          <div class="hairline w-12 mx-auto my-4"></div>
          <div class="flex items-center justify-between">
            <span class="f-serif italic text-stone-600"><span class="gold-text font-medium">${cls.votes.toLocaleString()}</span> ${i18n.votes_label}</span>
            <a href="?a&l" class="btn-gold !py-2 !px-5 !text-[10px]">${i18n.btn_vote}</a>
          </div>
        </div>
      </article>`;
                $('#students').append(cardHtml);
            });
        });
    </script>

</body>

</html>
