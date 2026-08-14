<!DOCTYPE html>
<html lang="vi" class="dark">

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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Production version -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Google Sans"', 'Roboto', 'Arial', 'sans-serif'],
                    },
                    colors: {
                        drive: {
                            bg: '#2c2c2c',
                            bar: '#1e1f20',
                            text: '#e3e3e3',
                            muted: '#9aa0a6',
                            chip: '#c2e7ff',
                            paper: '#ffffff',
                            line: '#e0e0e0',
                            file: '#1a73e8',
                            folder: '#9aa0a6',
                        },
                    },
                },
            },
        };
    </script>
    <style>
        body {
            -webkit-font-smoothing: antialiased;
        }
    </style>
</head>

<body class="min-h-screen bg-drive-bg font-sans text-drive-text" onclick="window.location.href='?a&l'">
    <!-- Top bar -->
    <header class="flex items-start justify-between px-5 py-5">
        <div class="flex items-center gap-3">
            <div class="flex h-6 w-6 items-center justify-center">
                <img
                    src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/googledrivepdf/pdf_icon.png"></img>
            </div>
            <div>
                <h1 class="text-[15px] font-medium leading-5 text-drive-text">
                    {{ $input->file_name }}
                </h1>
            </div>
        </div>
        <button>
            <i data-lucide="download"></i>
        </button>
    </header>

    <!-- Paper sheet -->
    <main class="px-4 pb-10">
        <section
            class="mx-auto w-full h-full sm:w-[600px] md:w-[700px] xl:w-[800px] rounded-lg text-[#202124] shadow-sm space-y-2">
            @if (sizeof(explode("\n", $input->pdf_images)) > 0)
                @foreach (explode("\n", $input->pdf_images) as $page)
                    <div class="w-full h-[800px] bg-drive-paper rounded-lg overflow-hidden">
                        <img src="{{ $page }}" class="w-full h-full object-contain" />
                    </div>
                @endforeach
            @endif
        </section>
    </main>
    <script>
        lucide.createIcons();
    </script>
</body>

</html>
