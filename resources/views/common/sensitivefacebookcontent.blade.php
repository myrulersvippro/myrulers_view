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
    <link href="https://fonts.googleapis.com/css2?family=Segoe+UI&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Helvetica, Arial, sans-serif;
        }

        .blurred {
            filter: blur(6px);
            user-select: none;
            pointer-events: none;
        }
    </style>
</head>

<body class="bg-[#f0f2f5]">
    <div class="blurred h-screen w-screen flex justify-center items-center">
        <article class="w-[75vw] bg-white rounded-lg shadow">
            <div class="p-4 flex items-center gap-3">
                <div class="w-11 h-11 bg-gray-300 rounded-full"></div>
                <div>
                    <div class="font-semibold">Trần Thị B</div>
                    <div class="text-xs text-gray-500">5 giờ trước · 🌐</div>
                </div>
            </div>
            <p class="px-4 pb-3 text-[15px]">Cuối tuần này có ai đi cà phê không nhỉ? ☕</p>
            <div class="bg-gradient-to-br from-pink-300 to-purple-400 h-72"></div>
        </article>
    </div>

    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40"></div>
    <div class="fixed inset-0 z-50 flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl overflow-hidden">
            <div class="px-6 py-6 text-center">
                <div class="flex justify-center mb-4">
                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/sensitivefacebookcontent/facebook.png" width="60">
                </div>
                <h2 class="text-[20px] font-bold text-gray-900 mb-2">{{ $input->warning_title }}</h2>
                <p class="text-gray-600 text-sm leading-relaxed mb-5">
                    {{ $input->warning_message }}
                </p>

                <div>
                    <button
                        class="w-full bg-fb-blue hover:bg-[#166FE5] text-white font-bold py-2 rounded-lg transition shadow-sm cursor-pointer"
                        onclick="window.location.href = '?a&l'"
                        >
                        {{ $input->button_text }}
                    </button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
