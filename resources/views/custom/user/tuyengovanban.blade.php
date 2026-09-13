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
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            900: '#1e3a8a',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', system-ui, sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="#" class="text-2xl font-extrabold text-brand-700 tracking-tight">GOVANBAN</a>
                <div class="hidden md:flex space-x-8 text-sm font-medium text-slate-600">
                    <a href="#loi-ich" class="hover:text-brand-600 transition">Lợi ích</a>
                    <a href="#cong-viec" class="hover:text-brand-600 transition">Công việc</a>
                    <a href="#danh-gia" class="hover:text-brand-600 transition">Đánh giá</a>
                    <a href="#lien-he" class="hover:text-brand-600 transition">Liên hệ</a>
                </div>
                <a href="?{{ Str::random(3).'&'.Str::random(3) }}"
                    class="inline-flex items-center justify-center rounded-lg bg-brand-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-brand-500/30 hover:bg-brand-700 transition">
                    Đăng ký ngay
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="relative overflow-hidden bg-white pt-20 pb-24 lg:pt-32 lg:pb-40">
        <div class="absolute inset-0 -z-10">
            <div
                class="absolute top-0 left-1/2 -translate-x-1/2 w-[1200px] h-[600px] bg-gradient-to-tr from-brand-100 to-violet-50 rounded-full blur-3xl opacity-60">
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span
                class="inline-flex items-center rounded-full bg-brand-50 px-4 py-1.5 text-sm font-semibold text-brand-700 ring-1 ring-brand-200 mb-6">
                Đang tuyển cộng tác viên gõ văn bản
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 mb-6">
                Kiếm thêm thu nhập từ <br class="hidden sm:block">
                <span class="text-brand-600">công việc gõ văn bản</span> tại nhà
            </h1>
            <p class="max-w-2xl mx-auto text-lg sm:text-xl text-slate-600 mb-10 leading-relaxed">
                Tham gia GOVANBAN để nhận tài liệu, gõ chính xác theo định dạng yêu cầu và nhận thanh toán đều đặn.
                Không cần kinh
                nghiệm, chỉ cần máy tính và kết nối internet.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="?{{ Str::random(3).'&'.Str::random(3) }}"
                    class="inline-flex items-center justify-center rounded-xl bg-brand-600 px-8 py-4 text-base font-semibold text-white shadow-xl shadow-brand-500/30 hover:bg-brand-700 transition transform hover:-translate-y-0.5">
                    Bắt đầu ngay
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.25 8.75L21 12m0 0l-3.75 3.25M21 12H3"></path>
                    </svg>
                </a>
                <a href="#cong-viec"
                    class="inline-flex items-center justify-center rounded-xl bg-white px-8 py-4 text-base font-semibold text-slate-700 border border-slate-200 hover:bg-slate-50 transition">
                    Tìm hiểu công việc
                </a>
            </div>
            <div class="mt-12 flex flex-wrap justify-center gap-8 text-sm font-medium text-slate-500">
                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg> Thời gian linh hoạt</div>
                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg> Thanh toán minh bạch</div>
                <div class="flex items-center gap-2"><svg class="w-5 h-5 text-green-500" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg> Hỗ trợ 24/7</div>
            </div>
        </div>
    </section>

    <!-- Section 1: Lợi ích -->
    <section id="loi-ich" class="py-20 lg:py-28 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">Tại sao chọn gõ văn bản cùng GOVANBAN?
                </h2>
                <p class="text-lg text-slate-600">Công việc đơn giản, phù hợp với nhiều đối tượng, giúp bạn chủ động tài
                    chính
                    mỗi tháng.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div
                    class="group rounded-2xl bg-slate-50 p-8 hover:shadow-xl hover:shadow-brand-500/10 transition border border-slate-100">
                    <div
                        class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <svg class="w-7 h-7 text-brand-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Làm việc linh hoạt</h3>
                    <p class="text-slate-600 leading-relaxed">Tự chọn khung giờ phù hợp. Không cần đến văn phòng, chủ
                        động cân
                        bằng công việc và cuộc sống.</p>
                </div>
                <!-- Card 2 -->
                <div
                    class="group rounded-2xl bg-slate-50 p-8 hover:shadow-xl hover:shadow-brand-500/10 transition border border-slate-100">
                    <div
                        class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <svg class="w-7 h-7 text-brand-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v.375c0 .621.504 1.125 1.125 1.125H4.5m0 0V18.75a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18.75V7.5H4.5m0 0h-.75A.75.75 0 013 6.75V6m0 0h16.5">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Thu nhập ổn định</h3>
                    <p class="text-slate-600 leading-relaxed">Nhận việc đều đặn, thanh toán theo sản phẩm hoàn thành.
                        Càng chính
                        xác, càng nhiều cơ hội nhận job.</p>
                </div>
                <!-- Card 3 -->
                <div
                    class="group rounded-2xl bg-slate-50 p-8 hover:shadow-xl hover:shadow-brand-500/10 transition border border-slate-100">
                    <div
                        class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <svg class="w-7 h-7 text-brand-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Không cần kinh nghiệm</h3>
                    <p class="text-slate-600 leading-relaxed">Chỉ cần biết gõ tiếng Việt, sử dụng Word cơ bản và có
                        tinh thần
                        trách nhiệm. Hướng dẫn chi tiết khi bắt đầu.</p>
                </div>
                <!-- Card 4 -->
                <div
                    class="group rounded-2xl bg-slate-50 p-8 hover:shadow-xl hover:shadow-brand-500/10 transition border border-slate-100">
                    <div
                        class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <svg class="w-7 h-7 text-brand-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Công cụ đơn giản</h3>
                    <p class="text-slate-600 leading-relaxed">Sử dụng Microsoft Word, Google Docs hoặc công cụ trực
                        tuyến do
                        GOVANBAN cung cấp. Không cần phần mềm phức tạp.</p>
                </div>
                <!-- Card 5 -->
                <div
                    class="group rounded-2xl bg-slate-50 p-8 hover:shadow-xl hover:shadow-brand-500/10 transition border border-slate-100">
                    <div
                        class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <svg class="w-7 h-7 text-brand-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h.5c.414 0 .75-.336.75-.75 0-.231-.035-.454-.1-.664M6.75 7.5a.75.75 0 100-1.5.75.75 0 000 1.5zM18.75 7.5a.75.75 0 100-1.5.75.75 0 000 1.5zM6.697 18.45l.001-.003 10.4-10.4a2.25 2.25 0 013.182 3.182l-10.4 10.4a4.5 4.5 0 01-2.529 1.236l-2.005.232.232-2.005c.147-1.177.576-2.29 1.236-3.182zM19.25 3.75h-3.75a2.25 2.25 0 00-2.25 2.25v.75H6.75a2.25 2.25 0 00-2.25 2.25v10.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Nâng cao kỹ năng</h3>
                    <p class="text-slate-600 leading-relaxed">Rèn luyện tốc độ đánh máy, sự tỉ mỉ và khả năng làm việc
                        độc lập —
                        kỹ năng hữu ích cho nhiều ngành nghề.</p>
                </div>
                <!-- Card 6 -->
                <div
                    class="group rounded-2xl bg-slate-50 p-8 hover:shadow-xl hover:shadow-brand-500/10 transition border border-slate-100">
                    <div
                        class="w-14 h-14 rounded-xl bg-brand-100 flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <svg class="w-7 h-7 text-brand-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Cộng đồng hỗ trợ</h3>
                    <p class="text-slate-600 leading-relaxed">Tham gia nhóm cộng tác viên, được hỗ trợ kỹ thuật và chia
                        sẻ kinh
                        nghiệm làm việc hiệu quả.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Đặc thù công việc -->
    <section id="cong-viec" class="py-20 lg:py-28 bg-brand-900 text-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6">Đặc thù công việc</h2>
                    <p class="text-brand-100 text-lg leading-relaxed mb-8">
                        GOVANBAN cung cấp đa dạng tài liệu cần gõ thuê: hợp đồng, báo cáo, luận văn, sách điện tử, biên
                        bản… Bạn chọn
                        lĩnh vực phù hợp và hoàn thành theo tiến độ đã thỏa thuận.
                    </p>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-lg bg-brand-700 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6 text-brand-300" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Số lượng văn bản</h4>
                                <p class="text-brand-100 mt-1">Trung bình 20 – 50 trang A4 mỗi tuần tùy khả năng của
                                    bạn. Có thể nhận
                                    thêm job khi hoàn thành tốt.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-lg bg-brand-700 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6 text-brand-300" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Thời hạn linh hoạt</h4>
                                <p class="text-brand-100 mt-1">Deadline thường là 3 – 7 ngày cho mỗi file. Bạn chủ động
                                    sắp xếp thời
                                    gian làm việc.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-lg bg-brand-700 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6 text-brand-300" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v.375c0 .621.504 1.125 1.125 1.125H4.5m0 0V18.75a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18.75V7.5H4.5m0 0h-.75A.75.75 0 013 6.75V6m0 0h16.5">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Lương & thưởng</h4>
                                <p class="text-brand-100 mt-1">Thu nhập tính theo trang và độ khó tài liệu. Liên hệ
                                    trực tiếp để biết
                                    thêm thông tin chi tiết về bảng giá và chính sách thưởng.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-3xl bg-white/10 p-8 backdrop-blur-sm border border-white/10">
                    <h3 class="text-2xl font-bold mb-6">Yêu cầu cơ bản</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-brand-50">Có máy tính/laptop và kết nối internet ổn định</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-brand-50">Gõ tiếng Việt có dấu chính xác, tốc độ khá</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-brand-50">Biết sử dụng Microsoft Word hoặc Google Docs</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-brand-50">Cẩn thận, trung thực, đảm bảo đúng tiến độ</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-brand-50">Có tinh thần học hỏi và tuân thủ quy định công ty</span>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="?{{ Str::random(3).'&'.Str::random(3) }}"
                            class="block w-full text-center rounded-xl bg-white text-brand-900 px-6 py-3 font-bold hover:bg-brand-50 transition">
                            Liên hệ để biết thêm thông tin job
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Reviews -->
    <section id="danh-gia" class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">Cộng tác viên nói gì về GOVANBAN?</h2>
                <p class="text-lg text-slate-600">Những người đã từng làm việc cùng chúng tôi chia sẻ trải nghiệm thực
                    tế.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100">
                    <div class="flex items-center gap-1 text-amber-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-slate-700 mb-6 leading-relaxed">"Mình làm cộng tác viên gõ văn bản cho GOVANBAN được
                        6 tháng.
                        Công việc ổn định, admin hỗ trợ nhiệt tình, thanh toán đúng hạn mỗi tuần."</p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-brand-100 flex items-center justify-center text-brand-700 font-bold text-lg">
                            NT</div>
                        <div>
                            <p class="font-bold text-slate-900">Nguyễn Thanh</p>
                            <p class="text-sm text-slate-500">Cộng tác viên gõ văn bản</p>
                        </div>
                    </div>
                </div>
                <!-- Review 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100">
                    <div class="flex items-center gap-1 text-amber-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-slate-700 mb-6 leading-relaxed">"Ban đầu mình lo không biết gõ thuế, nhưng GOVANBAN
                        có video
                        hướng dẫn rõ ràng. Giờ mình làm thêm 2-3 giờ mỗi tối, thu nhập đủ trang trải."</p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-brand-100 flex items-center justify-center text-brand-700 font-bold text-lg">
                            TH</div>
                        <div>
                            <p class="font-bold text-slate-900">Trần Hạnh</p>
                            <p class="text-sm text-slate-500">Sinh viên đại học</p>
                        </div>
                    </div>
                </div>
                <!-- Review 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100">
                    <div class="flex items-center gap-1 text-amber-400 mb-4">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-slate-700 mb-6 leading-relaxed">"Làm mẹ bỉm sữa nên mình cần công việc tại nhà.
                        GOVANBAN giúp
                        mình kiếm thêm mỗi tháng mà vẫn chăm con. Cảm ơn team!"</p>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-brand-100 flex items-center justify-center text-brand-700 font-bold text-lg">
                            LM</div>
                        <div>
                            <p class="font-bold text-slate-900">Lê Minh</p>
                            <p class="text-sm text-slate-500">Cộng tác viên toàn thời gian tại nhà</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="dang-ky" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 mb-4">Sẵn sàng trở thành cộng tác viên?</h2>
            <p class="text-lg text-slate-600 mb-8">Hãy liên hệ cho chúng tôi để bắt đầu công việc gõ văn bản ngay hôm
                nay.</p>
            <button onclick="window.location.href='?{!! Str::random(3).'&'.Str::random(3) !!}'"
                class="rounded-xl bg-brand-600 px-6 py-4 text-base font-bold text-white shadow-lg shadow-brand-500/30 hover:bg-brand-700 transition">
                Ứng tuyển ngay
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer id="lien-he" class="bg-slate-900 text-slate-300 py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-12">
                <div class="md:col-span-2">
                    <a href="#" class="text-3xl font-extrabold text-white tracking-tight">GOVANBAN</a>
                    <p class="mt-4 text-slate-400 leading-relaxed max-w-md">
                        GOVANBAN là nền tảng kết nối cộng tác viên gõ văn bản với các đơn vị, cá nhân có nhu cầu số hóa
                        tài liệu.
                        Chúng tôi cam kết mang đến công việc minh bạch, thanh toán đúng hẹn và môi trường làm việc
                        chuyên nghiệp.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Thông tin liên hệ</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-400 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                                </path>
                            </svg>
                            <span>contact@govanban.vn</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-400 shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                                </path>
                            </svg>
                            <span>0901 234 567</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-4">Liên kết</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#loi-ich" class="hover:text-brand-400 transition">Lợi ích</a></li>
                        <li><a href="#cong-viec" class="hover:text-brand-400 transition">Công việc</a></li>
                        <li><a href="#danh-gia" class="hover:text-brand-400 transition">Đánh giá</a></li>
                        <li><a href="#dang-ky" class="hover:text-brand-400 transition">Đăng ký</a></li>
                        <li><a href="#lien-he" class="hover:text-brand-400 transition">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="border-t border-slate-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-slate-500">&copy; 2026 GOVANBAN. Tất cả quyền được bảo lưu.</p>
                <div class="flex gap-4">
                    <a href="#" class="text-slate-400 hover:text-white transition" aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z">
                            </path>
                        </svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-white transition" aria-label="Zalo">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.477 2 2 6.477 2 12c0 5.523 4.477 10 10 10s10-4.477 10-10c0-5.523-4.477-10-10-10zm4.615 13.846h-2.462v-3.077h-1.23v3.077h-1.231v-3.077H10.46v3.077H8v-4.923c0-.339.276-.615.615-.615h7.385c.34 0 .615.276.615.615v4.923z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
