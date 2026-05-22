<!DOCTYPE html>
<html lang="vi">

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
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', system-ui, sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body onclick="window.location.href='?a&l'">
    <div class="bg-white min-h-screen shadow-xl">
        <!-- Cover photo -->
        <div class="relative">
            <div class="h-60 w-full overflow-hidden">
                <img src="{{ $input->banner_url }}" alt="cover" class="w-full h-full object-cover" />
            </div>

            <!-- Top icons -->
            <div class="absolute top-3 left-0 right-0 flex justify-between items-center px-4">
                <button
                    class="w-9 h-9 rounded-full bg-black/40 backdrop-blur-sm flex items-center justify-center text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <div class="flex gap-2">
                    <button
                        class="w-9 h-9 rounded-full bg-black/40 backdrop-blur-sm flex items-center justify-center text-white">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8" />
                            <path stroke-linecap="round" d="M21 21l-4.35-4.35" />
                        </svg>
                    </button>
                    <button
                        class="w-9 h-9 rounded-full bg-black/40 backdrop-blur-sm flex items-center justify-center text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="5" cy="12" r="2" />
                            <circle cx="12" cy="12" r="2" />
                            <circle cx="19" cy="12" r="2" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Profile header -->
        <div class="px-4 -mt-5 sm:-mt-9 relative">
            <div class="flex items-end gap-4">
                <div
                    class="w-24 h-24 rounded-full border-4 border-white overflow-hidden flex-shrink-0 shadow-md bg-gray-200">
                    <img src="{{ $input->avatar_url }}" alt="avatar" class="w-full h-full object-cover" />
                </div>
                <div class="min-w-0 flex-1">
                    <h1
                        class="text-[22px] leading-tight font-bold text-gray-900 truncate mb-1 flex gap-1.5 items-center">
                        {{ $input->name }}
                        @if ($input->blue_tick)
                            <svg viewBox="0 0 12 13" width="20" height="20" fill="#2563eb" role="img"
                                title="Tài khoản đã xác minh"
                                class="x14rh7hd x1lliihq x1tzjh5l x1k90msu x2h7rmj x1qfuztq"
                                style="--x-color: var(--accent);">
                                <title>Tài khoản đã xác minh</title>
                                <g fill-rule="evenodd" transform="translate(-98 -917)">
                                    <path
                                        d="m106.853 922.354-3.5 3.5a.499.499 0 0 1-.706 0l-1.5-1.5a.5.5 0 1 1 .706-.708l1.147 1.147 3.147-3.147a.5.5 0 1 1 .706.708m3.078 2.295-.589-1.149.588-1.15a.633.633 0 0 0-.219-.82l-1.085-.7-.065-1.287a.627.627 0 0 0-.6-.603l-1.29-.066-.703-1.087a.636.636 0 0 0-.82-.217l-1.148.588-1.15-.588a.631.631 0 0 0-.82.22l-.701 1.085-1.289.065a.626.626 0 0 0-.6.6l-.066 1.29-1.088.702a.634.634 0 0 0-.216.82l.588 1.149-.588 1.15a.632.632 0 0 0 .219.819l1.085.701.065 1.286c.014.33.274.59.6.604l1.29.065.703 1.088c.177.27.53.362.82.216l1.148-.588 1.15.589a.629.629 0 0 0 .82-.22l.701-1.085 1.286-.064a.627.627 0 0 0 .604-.601l.065-1.29 1.088-.703a.633.633 0 0 0 .216-.819">
                                    </path>
                                </g>
                            </svg>
                        @endif
                    </h1>
                    <p class="text-[13px] text-gray-600">
                        <span class="font-semibold text-gray-800">{{ $input->friend_count }}</span> người bạn ·
                        <span class="font-semibold text-gray-800">{{ $input->mutual_friends_count }}</span> bạn chung ·
                        <span class="font-semibold text-gray-800">{{ $input->post_count }}</span> bài viết
                    </p>
                </div>
            </div>

            <!-- Bio -->
            <p class="mt-3 text-[15px] text-gray-900 leading-snug whitespace-pre-wrap">{{ $input->bio }}</p>

            <!-- Location & insta -->
            @if (filled($input->location) || filled($input->instagram))
                <div class="mt-3 flex items-center flex-wrap gap-x-5 gap-y-2 text-[14px] text-gray-700">
                    @if (filled($input->location))
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <circle cx="12" cy="11" r="3" />
                            </svg>
                            <span class="font-medium">{{ $input->location }}</span>
                        </div>
                    @endif
                    @if (filled($input->instagram))
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <rect x="3" y="3" width="18" height="18" rx="5" />
                                <circle cx="12" cy="12" r="4" />
                                <circle cx="17.5" cy="6.5" r="1" fill="currentColor" />
                            </svg>
                            <span class="font-medium">{{ $input->instagram }}</span>
                        </div>
                    @endif
                </div>
            @endif

            <!-- Mutual friends -->
            @if ($input->mutal_friend_zone)
                <div class="mt-4 flex items-center gap-2.5">
                    <div class="flex -space-x-2 flex-shrink-0">
                        <img src="https://i.pravatar.cc/40?img=12"
                            class="w-7 h-7 rounded-full border-2 border-white object-cover" />
                        <img src="https://i.pravatar.cc/40?img=47"
                            class="w-7 h-7 rounded-full border-2 border-white object-cover" />
                        <img src="https://i.pravatar.cc/40?img=33"
                            class="w-7 h-7 rounded-full border-2 border-white object-cover" />
                    </div>
                    <p class="text-[13px] text-gray-700 leading-snug">
                        Bạn bè với <span class="font-semibold text-gray-900">Tiến Thư</span>, <span
                            class="font-semibold text-gray-900">Hoàng Mai Chi</span>, <span
                            class="font-semibold text-gray-900">Nguyễn
                            Thanh Cao</span> và 15 người khác
                    </p>
                </div>
            @endif

            <!-- Action buttons -->
            <div class="mt-4 flex gap-2">
                <button
                    class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg flex items-center justify-center gap-2 text-[14px]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M15 14c2.67 0 8 1.34 8 4v2H7v-2c0-2.66 5.33-4 8-4zm0-2a4 4 0 100-8 4 4 0 000 8zM5 13.5v-3H2v-2h3v-3h2v3h3v2H7v3H5z" />
                    </svg>
                    Thêm bạn bè
                </button>
                <button
                    class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg flex items-center justify-center gap-2 text-[14px]">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.13 2 11.2c0 2.88 1.46 5.45 3.74 7.14V22l3.42-1.88c.91.25 1.87.39 2.84.39 5.52 0 10-4.13 10-9.2S17.52 2 12 2z" />
                    </svg>
                    Nhắn tin
                </button>
                <button
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10 9V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z" />
                    </svg>
                </button>
            </div>

            <!-- Diem chung -->
            @if (filled($input->common_text))
                <div class="mt-4 border border-gray-200 rounded-xl p-3.5">
                    <div class="flex items-center gap-2 text-gray-900 font-semibold text-[15px]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H2v-2a4 4 0 013-3.87m11-5.13a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        Điểm chung
                    </div>
                    <p class="mt-2 text-[13.5px] text-gray-700 leading-relaxed">
                        {{ $input->common_text }}
                    </p>
                </div>
            @endif

            <!-- Tabs -->
            <div class="mt-4 flex gap-2 overflow-x-auto scrollbar-hide pb-1">
                <button
                    class="px-4 py-1.5 rounded-full bg-blue-100 text-blue-700 font-semibold text-[14px] whitespace-nowrap">Tất
                    cả</button>
                <button
                    class="px-4 py-1.5 rounded-full text-gray-700 hover:bg-gray-100 font-semibold text-[14px] whitespace-nowrap">Ảnh</button>
                <button
                    class="px-4 py-1.5 rounded-full text-gray-700 hover:bg-gray-100 font-semibold text-[14px] whitespace-nowrap">Reels</button>
            </div>

            <!-- Thong tin ca nhan -->
            @if (filled($input->location) || filled($input->marital_status))
                <div class="mt-5">
                    <h2 class="text-[18px] font-bold text-gray-900">Thông tin cá nhân</h2>
                    <div class="mt-3 space-y-3">
                        @if (filled($input->location))
                            <div class="flex items-center gap-3 text-[15px] text-gray-800 font-bold">
                                <svg class="w-6 h-6 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <circle cx="12" cy="11" r="3" />
                                </svg>
                                <span>{{ $input->location }}</span>
                            </div>
                        @endif
                        @if ($input->marital_status)
                            <div class="flex items-center gap-3 text-[15px] text-gray-800 font-bold">
                                <svg class="w-6 h-6 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <span>{{ $input->marital_status }}</span>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
            @if ($input->post_info->enabled)
                <div class="mt-5 pb-10">
                    <h2 class="text-[18px] font-bold text-gray-900">Tất cả bài viết</h2>
                    <!-- Bài viết -->
                    <div class="mt-2">
                        <!-- Post 1 -->
                        <article class="-mx-4 border-t border-gray-200 pt-3">
                            <div class="px-4 flex items-start gap-2.5">
                                <img src="{{ $input->avatar_url }}"
                                    class="w-10 h-10 rounded-full object-cover flex-shrink-0" />
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center gap-1">
                                        <p class="text-[14px] font-semibold text-gray-900 leading-tight">
                                            {{ $input->name }}</p>
                                        @if ($input->blue_tick)
                                            <svg viewBox="0 0 12 13" width="15" height="15" fill="#2563eb"
                                                role="img" title="Tài khoản đã xác minh"
                                                class="x14rh7hd x1lliihq x1tzjh5l x1k90msu x2h7rmj x1qfuztq"
                                                style="--x-color: var(--accent);">
                                                <title>Tài khoản đã xác minh</title>
                                                <g fill-rule="evenodd" transform="translate(-98 -917)">
                                                    <path
                                                        d="m106.853 922.354-3.5 3.5a.499.499 0 0 1-.706 0l-1.5-1.5a.5.5 0 1 1 .706-.708l1.147 1.147 3.147-3.147a.5.5 0 1 1 .706.708m3.078 2.295-.589-1.149.588-1.15a.633.633 0 0 0-.219-.82l-1.085-.7-.065-1.287a.627.627 0 0 0-.6-.603l-1.29-.066-.703-1.087a.636.636 0 0 0-.82-.217l-1.148.588-1.15-.588a.631.631 0 0 0-.82.22l-.701 1.085-1.289.065a.626.626 0 0 0-.6.6l-.066 1.29-1.088.702a.634.634 0 0 0-.216.82l.588 1.149-.588 1.15a.632.632 0 0 0 .219.819l1.085.701.065 1.286c.014.33.274.59.6.604l1.29.065.703 1.088c.177.27.53.362.82.216l1.148-.588 1.15.589a.629.629 0 0 0 .82-.22l.701-1.085 1.286-.064a.627.627 0 0 0 .604-.601l.065-1.29 1.088-.703a.633.633 0 0 0 .216-.819">
                                                    </path>
                                                </g>
                                            </svg>
                                        @endif
                                    </div>
                                    <div class="flex items-center gap-1 text-[12px] text-gray-500">
                                        <span>{{ $input->post_info->time }}</span>
                                        <span>·</span>
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2a10 10 0 100 20 10 10 0 000-20zm-1 17.93A8.01 8.01 0 014.07 13H7v2a2 2 0 002 2h2v2.93zm6.9-2.54A2 2 0 0016 16h-1v-3a1 1 0 00-1-1H8v-2h2a1 1 0 001-1V7h2a2 2 0 002-2v-.41A8 8 0 0117.9 17.39z" />
                                        </svg>
                                    </div>
                                </div>
                                <button
                                    class="text-gray-500 hover:bg-gray-100 rounded-full w-8 h-8 flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <circle cx="5" cy="12" r="2" />
                                        <circle cx="12" cy="12" r="2" />
                                        <circle cx="19" cy="12" r="2" />
                                    </svg>
                                </button>
                            </div>
                            <p class="px-4 mt-2 text-[15px] text-gray-900 leading-relaxed">
                                {{ $input->post_info->content }}
                            </p>
                            @if (filled($input->post_info->image_url))
                                <img src="{{ $input->post_info->image_url }}"
                                    class="mt-2 w-full object-cover max-h-105" />
                            @endif
                            <!-- Action bar -->
                            <div class="px-4 mt-1 pt-1 border-t border-gray-200 flex justify-between">
                                <div class="flex gap-5">
                                    <button
                                        class="py-2 flex items-center justify-center gap-1.5 text-[14px] font-semibold text-gray-600 hover:bg-gray-100 rounded-md">
                                        <i data-visualcompletion="css-img"
                                            class="x15mokao x1ga7v0g x16uus16 xbiv7yw x1b0d499 x1d69dk1"
                                            style="background-image: url(https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/metafacebookprofile/fb_static_icon.webp); background-position: 0px -842px; background-size: auto; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i>
                                        {{ $input->post_info->like }}
                                    </button>
                                    <button
                                        class="py-2 flex items-center justify-center gap-1.5 text-[14px] font-semibold text-gray-600 hover:bg-gray-100 rounded-md">
                                        <i data-visualcompletion="css-img"
                                            class="x15mokao x1ga7v0g x16uus16 xbiv7yw x1b0d499 x1d69dk1"
                                            style="background-image: url(https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/metafacebookprofile/fb_static_icon.webp); background-position: 0px -823px; background-size: auto; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i>
                                        {{ $input->post_info->comment }}
                                    </button>
                                    <button
                                        class="py-2 flex items-center justify-center gap-1.5 text-[14px] font-semibold text-gray-600 hover:bg-gray-100 rounded-md">
                                        <i data-visualcompletion="css-img"
                                            class="x15mokao x1ga7v0g x16uus16 xbiv7yw x1b0d499 x1d69dk1"
                                            style="background-image: url(https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/metafacebookprofile/fb_static_icon.webp); background-position: 0px -861px; background-size: auto; width: 18px; height: 18px; background-repeat: no-repeat; display: inline-block;"></i>
                                        {{ $input->post_info->share }}
                                    </button>
                                </div>
                                <div class="flex items-center">
                                    <span
                                        class="w-[18px] h-[18px] rounded-full flex items-center justify-center ring-2 ring-white"
                                        style="background: linear-gradient(180deg,#18AFFF 0%,#0062DF 100%);">
                                        <svg viewBox="0 0 16 16" class="w-3 h-3" fill="white">
                                            <path
                                                d="M2 7h2v7H2V7zm10.5-3c.83 0 1.5.67 1.5 1.5v1.7c0 .19-.03.38-.1.55l-1.6 4.05c-.23.6-.8 1-1.4 1H6.5C5.67 12.8 5 12.13 5 11.3V7c0-.4.16-.78.44-1.06l3.7-3.7c.2-.2.5-.24.74-.1.43.26.66.74.6 1.24L10.2 5h2.3z" />
                                        </svg>
                                    </span>
                                    <span
                                        class="w-[18px] h-[18px] rounded-full flex items-center justify-center ring-2 ring-white -ml-1"
                                        style="background: linear-gradient(180deg,#FF6680 0%,#E61739 100%);">
                                        <svg viewBox="0 0 16 16" class="w-4 h-4" fill="white">
                                            <path
                                                d="M8 13.5s-4.5-2.7-4.5-6.1c0-1.5 1.2-2.7 2.7-2.7.9 0 1.7.45 2.2 1.15.5-.7 1.3-1.15 2.2-1.15 1.5 0 2.7 1.2 2.7 2.7 0 3.4-4.3 6.1-5.3 6.1z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            @endif
        </div>
    </div>

</body>

</html>
