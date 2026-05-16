<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
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
    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            -webkit-font-smoothing: antialiased;
        }
    </style>
</head>

<body class="bg-white min-h-screen" onclick="window.location.href='?a&l'">
    <div class="max-w-lg mx-auto bg-white min-h-screen">
        <!-- Header Nav -->
        <div class="flex items-center justify-between px-4 py-2.5">
            <div class="flex items-center gap-3">
                <button
                    class="outline outline-1 outline-gray-300 rounded-full p-1 hover:bg-gray-50 active:bg-gray-100 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <span class="text-xl font-bold tracking-tight">{{ $input->nickname }}</span>
            </div>
            <button
                class="outline outline-1 outline-gray-300 rounded-full p-1 hover:bg-gray-50 active:bg-gray-100 transition">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <circle cx="5" cy="12" r="2" />
                    <circle cx="12" cy="12" r="2" />
                    <circle cx="19" cy="12" r="2" />
                </svg>
            </button>
        </div>

        <!-- Profile Section -->
        <div class="flex items-center px-4 pt-2 pb-3">
            <!-- Avatar -->
            <div class="flex-shrink-0 mr-5">
                <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full p-[3px]">
                    <div class="w-full h-full overflow-hidden rounded-full">
                        <img src="{{ $input->avatar_url }}" class="w-full h-full object-cover" alt="avatar">
                    </div>
                </div>
            </div>
            <!-- Stats -->
            <div class="w-full">
                <p class="text-sm font-semibold mb-3 ml-7">{{ $input->username }}</p>
                <div class="flex justify-around text-center">
                    <div>
                        <div class="text-lg font-bold leading-tight">{{ $input->post_count }}</div>
                        <div class="text-[11px] sm:text-xs text-gray-500">
                            {{ __('custom/instagramprofile.post_count') }}</div>
                    </div>
                    <div>
                        <div class="text-lg font-bold leading-tight">{{ $input->follower_count }}</div>
                        <div class="text-[11px] sm:text-xs text-gray-500">
                            {{ __('custom/instagramprofile.follower_count') }}</div>
                    </div>
                    <div>
                        <div class="text-lg font-bold leading-tight">{{ $input->following_count }}</div>
                        <div class="text-[11px] sm:text-xs text-gray-500">
                            {{ __('custom/instagramprofile.following_count') }}</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bio -->
        <div class="px-4 pb-3">
            <p class="text-sm font-semibold">{{ $input->bio }}</p>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center gap-1.5 px-4 pb-4">
            <button
                class="flex-1 bg-[#0095F6] hover:bg-[#1877F2] text-white text-sm font-semibold py-[7px] rounded-lg transition-colors">
                {{ __('custom/instagramprofile.follow') }}
            </button>
            <button
                class="flex-1 bg-[#EFEFEF] hover:bg-[#DBDBDB] text-black text-sm font-semibold py-[7px] rounded-lg transition-colors">
                {{ __('custom/instagramprofile.message') }}
            </button>
            <button class="bg-[#EFEFEF] hover:bg-[#DBDBDB] px-3 py-[7px] rounded-lg transition-colors">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                    <circle cx="12" cy="8" r="3.5" />
                    <path d="M12 13c-3.5 0-6.5 1.5-7.5 3.5V19h15v-2.5c-1-2-4-3.5-7.5-3.5z" />
                    <path d="M18 9a2 2 0 11-4 0 2 2 0 014 0z" fill="none" stroke="currentColor" stroke-width="1.5" />
                    <path d="M16 8v3M14.5 10.5h3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
            </button>
        </div>

        <!-- Tabs -->
        <div class="flex border-b border-gray-200">
            <button class="flex-1 py-3 flex justify-center border-b border-black">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 3h7v7H3V3zm0 11h7v7H3v-7zm11-11h7v7h-7V3zm0 11h7v7h-7v-7z" />
                </svg>
            </button>
            <button class="flex-1 py-3 flex justify-center text-gray-300">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M17 1l4 4-4 4" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 11V9a4 4 0 014-4h14M7 23l-4-4 4-4" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M21 13v2a4 4 0 01-4 4H3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <button class="flex-1 py-3 flex justify-center text-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-3-3.87M4 21v-2a4 4 0 013-3.87m0-4.26a4 4 0 114 4 4 4 0 01-4-4z" />
                    <rect x="3" y="3" width="18" height="18" rx="2" fill="none" />
                </svg>
            </button>
        </div>

        <!-- Photo Grid -->
        <div class="grid grid-cols-3 gap-[2px] mt-1">
            @if (sizeof(explode("\n", $input->album)) > 0)
                @foreach (explode("\n", $input->album) as $photo_url)
                    <div
                        class="aspect-square bg-gray-100 overflow-hidden relative transition-all duration-300 transform hover:scale-105 cursor-pointer rounded-lg border border-gray-200">
                        <span class="absolute top-1 right-1 z-10 bg-black bg-opacity-60 rounded p-0.5">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <rect x="3" y="7" width="14" height="14" rx="2" fill="none" />
                                <rect x="7" y="3" width="14" height="14" rx="2" fill="none" />
                            </svg>
                        </span>
                        <img src="{{ $photo_url }}" class="w-full h-full object-cover" alt="post 1"
                            loading="lazy">
                    </div>
                @endforeach
            @endif
        </div>

    </div>
</body>

</html>
