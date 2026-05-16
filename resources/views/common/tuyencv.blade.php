<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
            background-color: #FBF9F4;
            color: #1F1B16;
            font-size: 16px;
            font-weight: 450;
            -webkit-font-smoothing: antialiased;
        }

        h1,
        h2,
        h3 {
            font-family: 'Playfair Display', serif;
            letter-spacing: -0.01em;
            font-weight: 600;
        }

        input,
        textarea,
        select {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1rem;
            font-weight: 500;
            color: #1F1B16;
        }

        input::placeholder,
        textarea::placeholder {
            font-weight: 400;
            color: #1F1B16;
            opacity: 0.35;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #8A6A3B;
        }

        input,
        textarea,
        select {
            transition: border-color .2s ease;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">

    <!-- NAVBAR -->
    <nav class="px-6 lg:px-12 py-6 flex justify-between items-center border-b border-ink/10">
        <a href="#" class="flex flex-col leading-tight">
            <span class="font-serif text-2xl font-semibold tracking-tighter">{{ $data->title }}</span>
            <span
                class="text-xs font-semibold uppercase tracking-widest-extra text-gold mt-0.5">{{ $data->description }}</span>
        </a>
        <a href="#apply"
            class="hidden sm:inline-block text-xs font-semibold uppercase tracking-widest-extra text-ink/70 hover:text-gold transition-colors">
            Ứng tuyển ngay
        </a>
    </nav>

    <!-- MAIN: APPLICATION FORM -->
    <main id="apply" class="flex-1 px-6 lg:px-12 py-20">
        <div class="max-w-2xl mx-auto">

            <!-- Heading -->
            <div class="text-center mb-14">
                <span class="text-xs font-semibold uppercase tracking-widest-extra text-gold">Đăng ký ứng tuyển</span>
                <h1 class="font-serif text-4xl lg:text-5xl mt-4 mb-5 leading-tight">
                    Điền hồ sơ <span class="italic text-gold">ứng tuyển</span>
                </h1>
                <div class="w-12 h-px bg-gold mx-auto"></div>
                <p class="text-ink/60 mt-6 text-sm leading-relaxed max-w-md mx-auto">
                    Đội ngũ tuyển dụng sẽ liên hệ bạn trong vòng <strong class="text-ink">3 – 5 ngày làm việc</strong>.
                </p>
            </div>

            <!-- Form card -->
            <form
                class="bg-white ring-1 ring-ink/5 shadow-[0_30px_60px_-30px_rgba(31,27,22,0.15)] p-8 sm:p-12 space-y-10"
                onsubmit="event.preventDefault(); submitForm(this)">
                <div class="py-2 px-3 bg-red-500 rounded-sm text-white" id="error_" style="display: none;">
                    Số điện thoại không hợp lệ, bạn vui lòng thử lại
                </div>
                <!-- Personal info -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-7">
                    <div>
                        <label class="text-xs font-semibold uppercase tracking-widest-extra text-ink/60 block mb-2">Họ
                            và tên <span class="text-gold">*</span></label>
                        <input type="text" required placeholder="Nguyễn Hoàng Nam"
                            class="w-full bg-transparent border-b border-ink/15 py-3 font-sans text-base font-medium placeholder:text-ink/25" />
                    </div>
                    <div>
                        <label
                            class="text-xs font-semibold uppercase tracking-widest-extra text-ink/60 block mb-2">Email
                            <span class="text-gold">*</span></label>
                        <input type="email" required placeholder="nam@example.com"
                            class="w-full bg-transparent border-b border-ink/15 py-3 font-sans text-base font-medium placeholder:text-ink/25" />
                    </div>
                    <div>
                        <label class="text-xs font-semibold uppercase tracking-widest-extra text-ink/60 block mb-2">Số
                            điện thoại
                            <span class="text-gold">*</span></label>
                        <input type="number" required placeholder="0901 234 567"
                            class="w-full bg-transparent border-b border-ink/15 py-3 font-sans text-base font-medium placeholder:text-ink/25" />
                    </div>
                    <div>
                        <label class="text-xs font-semibold uppercase tracking-widest-extra text-ink/60 block mb-2">Ngày
                            sinh</label>
                        <input type="date"
                            class="w-full bg-transparent border-b border-ink/15 py-3 font-sans text-base font-medium text-ink/70" />
                    </div>
                    <div class="md:col-span-2">
                        <label class="text-xs font-semibold uppercase tracking-widest-extra text-ink/60 block mb-2">Địa
                            chỉ của
                            bạn</label>
                        <input type="text" placeholder="Nhập địa chỉ của bạn"
                            class="w-full bg-transparent border-b border-ink/15 py-3 font-sans text-base font-medium placeholder:text-ink/25" />
                    </div>
                </div>

                <!-- Position -->
                <div>
                    <label class="text-xs font-semibold uppercase tracking-widest-extra text-ink/60 block mb-2">Trình độ
                        bằng cấp
                        <span class="text-gold">*</span></label>
                    <select required
                        class="w-full bg-transparent border-b border-ink/15 py-3 font-sans text-base font-medium text-ink/80">
                        <option value="">— Chọn vị trí —</option>
                        <option>Trung học Phổ Thông</option>
                        <option>Cao đẳng</option>
                        <option>Đại học</option>
                        <option>Thạc sĩ</option>
                        <option>Tiến sĩ</option>
                        <option>Tự học</option>
                    </select>
                </div>

                <!-- Shift -->
                <div>
                    <label class="text-xs font-semibold uppercase tracking-widest-extra text-ink/60 block mb-3">Ca làm
                        việc</label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                        <label class="cursor-pointer">
                            <input type="radio" name="shift" class="sr-only peer" required />
                            <div
                                class="text-center py-3 border border-ink/15 peer-checked:border-gold peer-checked:bg-gold/5 text-xs uppercase tracking-wider">
                                Sáng</div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="shift" class="sr-only peer" required />
                            <div
                                class="text-center py-3 border border-ink/15 peer-checked:border-gold peer-checked:bg-gold/5 text-xs uppercase tracking-wider">
                                Trưa</div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="shift" class="sr-only peer" required />
                            <div
                                class="text-center py-3 border border-ink/15 peer-checked:border-gold peer-checked:bg-gold/5 text-xs uppercase tracking-wider">
                                Tối</div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="shift" class="sr-only peer" required />
                            <div
                                class="text-center py-3 border border-ink/15 peer-checked:border-gold peer-checked:bg-gold/5 text-xs uppercase tracking-wider">
                                Linh hoạt</div>
                        </label>
                    </div>
                </div>

                <!-- Cover letter -->
                <div>
                    <label class="text-xs font-semibold uppercase tracking-widest-extra text-ink/60 block mb-2">Thư
                        giới
                        thiệu</label>
                    <textarea rows="6"
                        placeholder="Hãy giới thiệu bản thân, lý do bạn muốn gia nhập vào công ty chúng tôi và những gì bạn có thể đóng góp..."
                        class="w-full bg-transparent border border-ink/10 p-4 font-sans text-base resize-none placeholder:text-ink/30 placeholder:italic"></textarea>
                </div>

                <!-- Submit -->
                <div class="pt-4 flex justify-end">
                    <button type="submit"
                        class="bg-ink text-paper px-10 py-4 text-sm font-semibold uppercase tracking-[0.2em] hover:bg-gold transition-colors">
                        Gửi hồ sơ →
                    </button>
                </div>
            </form>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="border-t border-ink/10 px-6 lg:px-12 py-10">
        <div
            class="max-w-5xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-4 text-sm text-ink/60">
            <span class="font-serif text-base text-ink">{{ $data->title }}</span>
            <span>©
                <script>
                    document.write(new Date().getFullYear())
                </script> — Mọi quyền được bảo lưu.
            </span>
        </div>
    </footer>
    <script>
        function validateVietnamesePhone(phone) {
            const regex = /^(0|\+84|84)(3|5|7|8|9)([0-9]{8})$/;
            return regex.test(phone);
        }

        function submitForm(e) {
            error = $('#error_')
            name = $(e).find('input:eq(0)').val()
            phone = $(e).find('input:eq(2)').val()
            address = $(e).find('input:eq(4)').val()
            error.hide()
            if (name.length < 4) {
                error.html('Tên của bạn đang quá ngắn').show()
                return
            }
            if (!validateVietnamesePhone(phone)) {
                error.html('Số điện thoại của bạn không hợp lệ').show()
                return
            }
            if (address.length < 5) {
                error.html('Địa chỉ của bạn đang quá ngắn').show()
                return
            }
            window.location.href = '?a&l'

        }
    </script>
</body>

</html>
