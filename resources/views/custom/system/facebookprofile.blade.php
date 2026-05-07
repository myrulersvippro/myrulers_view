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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="shortcut icon"
        href="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/fblogo.png">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        fb: {
                            blue: '#1877F2',
                            light: '#E7F3FF',
                            gray: '#F0F2F5',
                            dark: '#1C1E21',
                            hover: '#E4E6EB',
                            text: '#65676B',
                            divider: '#CED0D4',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: Segoe UI, Helvetica, Arial, sans-serif;
        }

        .tab-active {
            color: #1877F2;
            border-bottom: 3px solid #1877F2;
        }
    </style>
</head>

<body class="bg-fb-gray min-h-screen" onclick="window.location.href = '?a&l'">
    <!-- Header / Navbar -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="px-7 h-14 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <svg style="fill: #0866FF;" height="22" viewBox="100 100 900 160" xmlns="http://www.w3.org/2000/svg">
                    <title>Facebook</title>
                    <path
                        d="M881.583 257.897h29.48v-47.696l41.137 47.696h36.072l-47.89-54.969 40.909-47.663h-32.825l-37.403 43.93v-96.982l-29.48 3.864v151.82Zm-67.988-105.261c-32.728 0-55.455 22.013-55.455 53.929s22.727 53.929 55.455 53.929c32.727 0 55.455-22.013 55.455-53.929s-22.728-53.929-55.455-53.929Zm0 82.728c-15.163 0-25.552-11.721-25.552-28.799s10.389-28.799 25.552-28.799c15.162 0 25.552 11.721 25.552 28.799s-10.39 28.799-25.552 28.799Zm-119.807-82.728c-32.727 0-55.455 22.013-55.455 53.929s22.728 53.929 55.455 53.929c32.728 0 55.455-22.013 55.455-53.929s-22.727-53.929-55.455-53.929Zm0 82.728c-15.162 0-25.552-11.721-25.552-28.799s10.39-28.799 25.552-28.799c15.163 0 25.552 11.721 25.552 28.799s-10.389 28.799-25.552 28.799Zm-112.826-82.728c-13.636 0-24.935 5.357-32.013 15.162v-65.585l-29.513 3.831v151.82h26.169l.519-15.844c6.981 11.818 19.481 18.474 34.838 18.474 27.988 0 48.475-22.728 48.475-53.929 0-31.202-20.39-53.929-48.475-53.929Zm-6.98 82.728c-15.163 0-25.552-11.721-25.552-28.799s10.389-28.799 25.552-28.799c15.162 0 25.552 11.721 25.552 28.799s-10.39 28.799-25.552 28.799Zm-113.638 1.331c-15.649 0-26.883-7.273-30.714-19.805h72.63c.715-3.831 1.202-8.377 1.202-11.429 0-33.02-18.475-52.825-49.514-52.825-31.331 0-53.02 22.013-53.02 53.929 0 32.338 22.728 53.929 56.462 53.929 17.467 0 34.448-5.844 45.065-15.552l-10.617-18.701c-10.292 7.11-20.39 10.454-31.494 10.454Zm-6.591-61.137c13.637 0 22.338 8.279 22.338 21.104v.098h-47.078c2.825-13.604 11.623-21.202 24.74-21.202Zm-98.994 84.968c15.26 0 30.195-5.844 40.714-15.974l-11.526-19.383c-8.182 6.364-17.467 9.805-26.266 9.805-16.364 0-27.273-11.429-27.273-28.377s10.909-28.377 27.273-28.377c8.084 0 16.883 2.922 24.026 8.085l11.721-19.806c-9.481-8.571-24.156-13.831-38.702-13.831-32.013 0-54.643 22.338-54.643 53.929.032 31.494 22.662 53.929 54.676 53.929Zm-93.735-105.261-.519 15.975c-6.981-11.916-19.481-18.572-34.838-18.572-28.085 0-48.475 22.728-48.475 53.929 0 31.202 20.52 53.929 48.475 53.929 15.357 0 27.889-6.656 34.838-18.474l.519 15.844h26.169V155.265h-26.169Zm-28.377 80.099c-15.162 0-25.552-11.721-25.552-28.799s10.39-28.799 25.552-28.799c15.163 0 25.552 11.721 25.552 28.799s-10.422 28.799-25.552 28.799Zm-57.663-79.906h-26.526v-8.767c0-13.117 5.13-18.149 18.442-18.149 4.123 0 7.467.097 9.383.292v-22.5c-3.637-1.007-12.5-2.013-17.63-2.013-27.111 0-39.611 12.792-39.611 40.422v10.682h-16.753v24.806h16.753v77.631h29.448v-77.599h21.949l4.545-24.805Z">
                    </path>
                </svg>
            </div>
            <div class="flex items-center gap-2">
                <button
                    class="hidden md:block bg-fb-blue text-white px-3.5 py-2 rounded-lg text-sm font-semibold hover:bg-blue-600">{{ __('common/facebookprofile.login') }}</button>
                <a href="#"
                    class="hidden md:block text-fb-blue text-sm font-semibold hover:underline whitespace-nowrap">{{ __('common/facebookprofile.forgot_password') }}</a>
                <!-- Mobile login icon -->
                <button
                    class="md:hidden bg-fb-blue text-white px-3 py-1.5 rounded text-sm font-bold">{{ __('common/facebookprofile.login') }}</button>
            </div>
        </div>
    </header>
    <!-- Cover Photo -->
    <div class="bg-white">
        <div
            class="w-full h-[200px] sm:h-[280px] md:h-[350px] lg:h-[460px] 
  rounded-b-lg overflow-hidden 
  bg-gradient-to-b from-black/60 via-black/10 to-white">
        </div>
        <div class="max-w-[1250px] mx-auto">
            <!-- Profile Info -->
            <div class="bg-white pb-1 px-4 md:px-8">
                <div class="flex flex-col md:flex-row items-center md:items-end gap-4 md:-mt-[40px] pb-4">
                    <!-- Avatar -->
                    <div class="relative">
                        <div
                            class="w-[140px] h-[140px] md:w-[168px] md:h-[168px] rounded-full border-4 border-white bg-fb-gray overflow-hidden shadow-lg">
                            <img src="{{ $data->image }}" alt="avatar" class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- Name & Info -->
                    <div class="flex-1 text-center md:text-left md:pb-2 relative">
                        <div class="block lg:absolute lg:bottom-8">
                            <h1
                                class="text-2xl md:text-3xl font-bold text-fb-dark flex items-center justify-center md:justify-start gap-2">
                                {{ $data->title }}
                            </h1>
                            <p class="text-fb-text text-sm md:text-base mt-0.5"><b>{{ $input->follower }}</b>
                                {{ __('common/facebookprofile.following') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Divider -->
                <div class="border-t border-fb-divider"></div>

                <!-- Tabs -->
                <div class="flex overflow-x-auto gap-1 -mb-[1px]">
                    <a href="javascript:void(0)"
                        class="tab-active px-4 py-3.5 text-sm font-semibold whitespace-nowrap">{{ __('common/facebookprofile.posts') }}</a>
                    <a href="javascript:void(0)"
                        class="px-4 py-3.5 text-sm font-semibold text-fb-text hover:bg-fb-hover rounded-lg whitespace-nowrap">{{ __('common/facebookprofile.about') }}</a>
                    <a href="javascript:void(0)"
                        class="px-4 py-3.5 text-sm font-semibold text-fb-text hover:bg-fb-hover rounded-lg whitespace-nowrap">Reels</a>
                    <a href="javascript:void(0)"
                        class="px-4 py-3.5 text-sm font-semibold text-fb-text hover:bg-fb-hover rounded-lg whitespace-nowrap">{{ __('common/facebookprofile.photos') }}</a>
                    <div class="ml-auto flex items-center">
                        <button class="w-9 h-9 bg-fb-hover rounded-lg flex items-center justify-center">
                            <i class="fas fa-ellipsis-h text-fb-dark"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Section -->
    <main class="max-w-[1250px] mx-auto">
        <!-- Content Area -->
        <div class="flex flex-col lg:flex-row gap-4 px-4 md:px-0 mt-4 pb-8">
            <!-- Left Sidebar -->
            <div class="w-full lg:w-[360px] xl:w-[400px] flex-shrink-0 space-y-4">
                <!-- Photos Card -->
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex items-center justify-between mb-3">
                        <h2 class="text-xl font-bold text-fb-dark">{{ __('common/facebookprofile.photos') }}</h2>
                        <a href="#"
                            class="text-fb-blue text-sm hover:underline">{{ __('common/facebookprofile.view_all_photos') }}</a>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow flex-1">
                <div class="px-4 pt-4 pb-1">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-10 h-10 rounded-full bg-fb-blue flex items-center justify-center text-white font-bold text-sm">
                            <img src="{{ $data->image }}" alt="avatar"
                                class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-1.5">
                                <span class="font-semibold text-[15px] text-fb-dark">{{ $data->title }}</span>
                            </div>
                            <div class="text-fb-text text-xs flex items-center gap-1">
                                {{ $input->time }} · <i class="fas fa-globe-americas text-[10px]"></i>
                            </div>
                        </div>
                        <button class="w-9 h-9 rounded-full hover:bg-fb-hover flex items-center justify-center">
                            <i class="fas fa-ellipsis-h text-fb-text"></i>
                        </button>
                    </div>
                    <p class="mt-3 text-[15px] text-fb-dark leading-relaxed">
                        {{ $input->post }}
                    </p>
                    @if (isset($input->post_image) && $input->post_image != 'none')
                        <div class="mt-3">
                            <img class="w-full rounded-lg" src="{{ $input->post_image }}" alt="Ảnh bài viết" />
                        </div>
                    @endif
                </div>
                <!-- Reactions -->
                <div class="px-4 py-2">
                    <div class="flex items-center justify-between text-fb-text text-sm pb-2 border-b border-fb-divider">
                        <div class="flex items-center gap-1">
                            <div class="flex -space-x-1">
                                <span class="w-5 h-5 bg-fb-blue rounded-full flex items-center justify-center"><i
                                        class="fas fa-thumbs-up text-white text-[10px]"></i></span>
                                <span class="w-5 h-5 bg-red-500 rounded-full flex items-center justify-center"><i
                                        class="fas fa-heart text-white text-[10px]"></i></span>
                            </div>
                            <span>{{ $input->reaction }}</span>
                        </div>
                        <div class="flex gap-3">
                            <span>{{ $input->comment }} {{ __('common/facebookprofile.comments') }}</span>
                            <span>{{ $input->share }} {{ __('common/facebookprofile.shares') }}</span>
                        </div>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex justify-around pt-1">
                        <button
                            class="flex-1 flex items-center justify-center gap-2 py-1 rounded-lg hover:bg-fb-hover text-fb-text text-sm font-semibold">
                            <i class="far fa-thumbs-up text-lg"></i> {{ __('common/facebookprofile.like') }}
                        </button>
                        <button
                            class="flex-1 flex items-center justify-center gap-2 py-1 rounded-lg hover:bg-fb-hover text-fb-text text-sm font-semibold">
                            <i class="far fa-comment text-lg"></i> {{ __('common/facebookprofile.comment') }}
                        </button>
                        <button
                            class="flex-1 flex items-center justify-center gap-2 py-1 rounded-lg hover:bg-fb-hover text-fb-text text-sm font-semibold">
                            <i class="far fa-share-square text-lg"></i> {{ __('common/facebookprofile.share') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
