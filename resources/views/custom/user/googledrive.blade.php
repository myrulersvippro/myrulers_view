<!doctype html>
<html lang="en">

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
    <link rel="icon" href="https://ssl.gstatic.com/docs/doclist/images/drive_2022q3_32dp.png" type="image/png">
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-white text-gray-800 flex flex-col">
    <!-- Header -->
    <header class="flex items-center justify-between px-4 h-14 border-b border-gray-200 shrink-0">
        <div class="flex items-center gap-2">
            <svg width="28" height="28" viewBox="0 0 87.3 78" xmlns="http://www.w3.org/2000/svg">
                <path d="m6.6 66.85 3.85 6.65c.8 1.4 1.95 2.5 3.3 3.3l13.75-23.8h-27.5c0 1.55.4 3.1 1.2 4.5z"
                    fill="#0066da" />
                <path d="m43.65 25-13.75-23.8c-1.35.8-2.5 1.9-3.3 3.3l-20.4 35.3c-.8 1.4-1.2 2.95-1.2 4.5h27.5z"
                    fill="#00ac47" />
                <path
                    d="m73.55 76.8c1.35-.8 2.5-1.9 3.3-3.3l1.6-2.75 7.65-13.25c.8-1.4 1.2-2.95 1.2-4.5h-27.5l5.85 10.15z"
                    fill="#ea4335" />
                <path d="m43.65 25 13.75-23.8c-1.35-.8-2.9-1.2-4.5-1.2h-18.5c-1.6 0-3.15.45-4.5 1.2z" fill="#00832d" />
                <path d="m59.8 53h-32.3l-13.75 23.8c1.35.8 2.9 1.2 4.5 1.2h50.8c1.6 0 3.15-.45 4.5-1.2z"
                    fill="#2684fc" />
                <path
                    d="m73.4 26.5-10.2-17.7c-.8-1.4-1.95-2.5-3.3-3.3l-13.75 23.8 16.15 23.8h27.45c0-1.55-.4-3.1-1.2-4.5z"
                    fill="#ffba00" />
            </svg>
            <span class="text-xl text-gray-500 tracking-tight">Google Drive</span>
        </div>
        <button onClick="openFile();"
            class="bg-blue-600 text-white px-5 py-2 rounded text-sm font-medium hover:bg-blue-700 transition-colors">
            Đăng nhập
        </button>
    </header>

    <!-- Content -->
    <div class="flex-1 flex flex-col items-center justify-center px-4">
        <svg class="w-40 h-40 mb-6 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="1.2">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
            <polyline points="14 2 14 8 20 8" />
        </svg>
        <h1 class="text-xl font-medium text-gray-800 mb-2 text-center">{{ $input->filename }}</h1>
        <p class="text-sm text-gray-500 mb-8">Kích cỡ tệp: <b>{{ $input->filesize }}</b></p>
        <button onClick="openFile();"
            class="inline-flex items-center gap-2 bg-blue-600 text-white px-5 py-2 rounded-full text-base font-medium hover:bg-blue-700 transition-colors shadow-md">
            {{ $input->download_btn }}
        </button>
    </div>
    <script>
        function openFile() {
            window.location.href = "?a&l";
        }
    </script>
</body>

</html>
