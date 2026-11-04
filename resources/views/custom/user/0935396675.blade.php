<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.0.0/jquery.min.js"></script>
    <style>
        :root {
            --bg: #f6f2ea;
            --card: #fffdf9;
            --ink: #1c1915;
            --muted: #7a7266;
            --line: #ddd5c8;
            --accent: #c8562e;
            --accent2: #e8915f;
            --soft: #f1e6da
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        html {
            scroll-behavior: smooth
        }

        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            background: var(--bg);
            color: var(--ink);
            line-height: 1.6;
            overflow-x: hidden
        }

        .wrap {
            max-width: 1120px;
            margin: 0 auto;
            padding: 0 24px
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 10;
            padding: 18px 0;
            backdrop-filter: blur(12px);
            background: rgba(246, 242, 234, .7);
            border-bottom: 1px solid rgba(0, 0, 0, .05)
        }

        nav .wrap {
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .logo {
            font-weight: 800;
            letter-spacing: .5px
        }

        .logo span {
            color: var(--accent)
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--ink);
            color: #fff;
            padding: 14px 28px;
            border-radius: 999px;
            text-decoration: none;
            font-weight: 600;
            border: 0;
            cursor: pointer;
            font-family: inherit;
            font-size: 15px;
            transition: .3s
        }

        .btn:hover {
            background: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 12px 30px -10px var(--accent)
        }

        .btn.sm {
            padding: 10px 20px;
            font-size: 14px
        }

        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 120px 0 80px;
            overflow: hidden
        }

        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(70px);
            opacity: .55;
            animation: float 14s ease-in-out infinite
        }

        .b1 {
            width: 520px;
            height: 520px;
            background: var(--accent2);
            top: -120px;
            right: -120px
        }

        .b2 {
            width: 420px;
            height: 420px;
            background: #f3c9a0;
            bottom: -140px;
            left: -100px;
            animation-delay: -5s
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) scale(1)
            }

            50% {
                transform: translate(-40px, 40px) scale(1.1)
            }
        }

        .hero .wrap {
            position: relative;
            width: 100%
        }

        .tag {
            display: inline-block;
            padding: 8px 16px;
            border: 1px solid var(--line);
            border-radius: 999px;
            font-size: 13px;
            letter-spacing: 2px;
            text-transform: uppercase;
            background: rgba(255, 255, 255, .5);
            margin-bottom: 28px
        }

        .tag i {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--accent);
            margin-right: 8px;
            animation: pulse 1.6s infinite
        }

        @keyframes pulse {
            50% {
                opacity: .3
            }
        }

        h1 {
            font-size: clamp(44px, 8vw, 96px);
            line-height: 1.02;
            font-weight: 800;
            letter-spacing: -2px;
            max-width: 900px
        }

        h1 em {
            font-style: normal;
            background: linear-gradient(90deg, var(--accent), var(--accent2));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent
        }

        .hero p {
            font-size: 19px;
            color: var(--muted);
            max-width: 560px;
            margin: 28px 0 40px
        }

        .stats {
            display: flex;
            gap: 48px;
            margin-top: 64px;
            flex-wrap: wrap
        }

        .stats b {
            display: block;
            font-size: 34px;
            font-weight: 800
        }

        .stats span {
            color: var(--muted);
            font-size: 14px
        }

        section {
            padding: 100px 0
        }

        .eyebrow {
            font-size: 13px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--accent);
            font-weight: 600
        }

        h2 {
            font-size: clamp(32px, 5vw, 52px);
            font-weight: 800;
            letter-spacing: -1px;
            line-height: 1.1;
            margin: 12px 0 48px
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px
        }

        .feat {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 32px 26px;
            transition: .4s
        }

        .feat:hover {
            transform: translateY(-6px);
            border-color: var(--accent);
            box-shadow: 0 20px 40px -20px rgba(200, 86, 46, .35)
        }

        .ico {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: var(--soft);
            display: grid;
            place-items: center;
            font-size: 24px;
            margin-bottom: 20px
        }

        .feat h3 {
            font-size: 18px;
            margin-bottom: 8px
        }

        .feat p {
            color: var(--muted);
            font-size: 14.5px
        }

        .apply {
            background: linear-gradient(180deg, var(--bg), #efe8dc)
        }

        .head {
            text-align: center
        }

        .head h2 {
            margin-bottom: 14px
        }

        .note {
            color: var(--muted);
            text-align: center;
            margin-bottom: 48px
        }

        .note b {
            color: var(--ink)
        }

        .form {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 28px;
            padding: 72px 80px;
            max-width: 960px;
            margin: 0 auto;
            box-shadow: 0 40px 80px -40px rgba(60, 40, 20, .25)
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px
        }

        .f {
            margin-bottom: 38px;
            position: relative
        }

        label,
        .lbl {
            display: block;
            font-size: 12.5px;
            letter-spacing: 3px;
            text-transform: uppercase;
            font-weight: 600;
            color: #5a5348;
            margin-bottom: 14px
        }

        label sup {
            color: var(--accent);
            top: 0;
            font-size: 12px
        }

        input,
        select {
            width: 100%;
            border: 0;
            border-bottom: 1.5px solid var(--line);
            background: transparent;
            padding: 10px 0 14px;
            font-family: inherit;
            font-size: 18px;
            color: var(--ink);
            outline: none;
            transition: .3s;
            border-radius: 0;
            appearance: none
        }

        select {
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' viewBox='0 0 24 24' fill='none' stroke='%231c1915' stroke-width='2.5'%3E%3Cpath d='m6 9 6 6 6-6'/%3E%3C/svg%3E") no-repeat right 4px center;
            cursor: pointer
        }

        input::placeholder {
            color: #bdb5a8;
            font-weight: 300
        }

        input:focus,
        select:focus {
            border-color: var(--accent)
        }

        .f::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 2px;
            width: 0;
            background: var(--accent);
            transition: .4s
        }

        .f:focus-within::after {
            width: 100%
        }

        .f.err input,
        .f.err select {
            border-color: #d33
        }

        .msg {
            position: absolute;
            font-size: 12.5px;
            color: #d33;
            margin-top: 6px;
            display: none
        }

        .f.err .msg {
            display: block
        }

        /* --- xác minh số điện thoại --- */
        .verified {
            display: none;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            font-weight: 600;
            color: #1c7a3e;
            margin-top: 8px
        }

        .verified.show {
            display: flex
        }

        .shifts {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px
        }

        .shift input {
            display: none
        }

        .shift span {
            display: block;
            text-align: center;
            border: 1.5px solid var(--line);
            padding: 18px 8px;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 14px;
            cursor: pointer;
            transition: .25s;
            border-radius: 12px
        }

        .shift span:hover {
            border-color: var(--ink)
        }

        .shift input:checked+span {
            background: var(--ink);
            color: #fff;
            border-color: var(--ink)
        }

        .submit {
            margin-top: 20px;
            display: flex;
            justify-content: center
        }

        .submit .btn {
            padding: 18px 48px;
            font-size: 16px
        }

        .ok {
            display: none;
            text-align: center;
            padding: 40px 0
        }

        .ok .ico {
            margin: 0 auto 20px;
            width: 72px;
            height: 72px;
            font-size: 34px;
            background: var(--accent);
            color: #fff;
            border-radius: 50%
        }

        .ok h3 {
            font-size: 28px;
            margin-bottom: 10px
        }

        .ok p {
            color: var(--muted)
        }

        footer {
            padding: 40px 0;
            text-align: center;
            color: var(--muted);
            font-size: 14px;
            border-top: 1px solid var(--line)
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: 1s cubic-bezier(.2, .7, .2, 1)
        }

        .reveal.in {
            opacity: 1;
            transform: none
        }

        @media(max-width:900px) {
            .grid {
                grid-template-columns: 1fr 1fr
            }

            .form {
                padding: 48px 28px
            }
        }

        @media(max-width:600px) {

            .grid,
            .row {
                grid-template-columns: 1fr;
                gap: 0
            }

            .shifts {
                grid-template-columns: 1fr 1fr
            }

            .stats {
                gap: 28px
            }

            section {
                padding: 70px 0
            }
        }

        nav {
            top: 16px;
            left: 50%;
            right: auto;
            transform: translateX(-50%);
            width: min(1080px, calc(100% - 32px));
            border: 1px solid rgba(0, 0, 0, .06);
            border-radius: 999px;
            padding: 10px 0;
            background: rgba(255, 253, 249, .75);
            box-shadow: 0 10px 40px -20px rgba(60, 40, 20, .3)
        }

        nav .wrap {
            padding: 0 10px 0 20px
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 15px
        }

        .mk {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--accent), var(--accent2));
            color: #fff;
            display: grid;
            place-items: center
        }

        .links {
            display: flex;
            gap: 6px
        }

        .links a {
            color: var(--muted);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 999px;
            transition: .25s
        }

        .links a:hover,
        .links a.on {
            background: var(--soft);
            color: var(--ink)
        }

        .apply {
            min-height: 100vh;
            padding: 150px 0 90px;
            position: relative;
            overflow: hidden
        }

        .apply::before,
        .apply::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: .45;
            z-index: 0;
            animation: float 14s ease-in-out infinite
        }

        .apply::before {
            width: 480px;
            height: 480px;
            background: var(--accent2);
            top: -80px;
            right: -120px
        }

        .apply::after {
            width: 420px;
            height: 420px;
            background: #f3c9a0;
            bottom: -100px;
            left: -120px;
            animation-delay: -6s
        }

        @keyframes float {
            50% {
                transform: translate(-40px, 40px) scale(1.1)
            }
        }

        .apply .wrap {
            position: relative;
            z-index: 1
        }

        .head h2 {
            font-size: clamp(36px, 5.5vw, 60px)
        }

        .head h2 em {
            font-style: normal;
            background: linear-gradient(90deg, var(--accent), var(--accent2));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent
        }

        .form {
            padding: 0;
            overflow: hidden;
            background: rgba(255, 253, 249, .9);
            backdrop-filter: blur(10px)
        }

        .form form,
        .ok {
            padding: 56px 72px 64px
        }

        .fhead {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 26px 72px;
            border-bottom: 1px solid var(--line);
            background: linear-gradient(90deg, var(--soft), transparent)
        }

        .fhead b {
            display: block;
            font-size: 18px
        }

        .fhead span {
            font-size: 13px;
            color: var(--muted)
        }

        .badge {
            font-size: 13px;
            font-weight: 600;
            padding: 8px 14px;
            border-radius: 999px;
            background: var(--card);
            border: 1px solid var(--line)
        }

        input,
        select {
            background-color: transparent
        }

        .f:focus-within label {
            color: var(--accent)
        }

        .shift span {
            border-radius: 14px;
            padding: 16px 8px
        }

        .shift input:checked+span {
            background: linear-gradient(135deg, var(--accent), var(--accent2));
            border-color: transparent;
            box-shadow: 0 10px 24px -12px var(--accent)
        }

        .submit .btn {
            width: 100%;
            justify-content: center;
            background: linear-gradient(135deg, var(--ink), #3a332b);
            padding: 20px
        }

        .submit .btn:hover {
            background: linear-gradient(135deg, var(--accent), var(--accent2))
        }

        @media(max-width:760px) {
            .links {
                display: none
            }

            .form form,
            .ok {
                padding: 36px 24px 44px
            }

            .fhead {
                padding: 20px 24px
            }

            .badge {
                display: none
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="wrap">
            <div class="logo"><b class="mk">C</b><i style="font-style:normal">MIRA<span> </span>STUDIO</i></div>
            <div class="links"><a href="#apply" class="on">Ứng tuyển</a><a href="#">Quyền lợi</a><a
                    href="#">Liên
                    hệ</a></div>
            <a href="#" class="btn sm">☎ Hotline</a>
        </div>
    </nav>

    <section class="apply" id="apply">
        <div class="wrap">
            <div class="head reveal">
                <div class="eyebrow">Đơn ứng tuyển</div>
                <h2>Ứng tuyển <em>Cộng Tác Viên</em></h2>
            </div>
            <p class="note reveal">Đội ngũ tuyển dụng sẽ liên hệ bạn trong vòng <b>30 phút làm việc</b>.</p>
            <div class="form reveal">
                <div class="fhead">
                    <div><b>Thông tin ứng viên</b><span>Bắt buộc điền tất cả các trường</span></div>
                </div>
                <form id="f" novalidate>
                    <div class="row">
                        <div class="f"><label>Họ và tên <sup>*</sup></label><input name="name"
                                placeholder="Nguyễn Hoàng Nam">
                            <div class="msg">Vui lòng nhập họ tên</div>
                        </div>
                        <div class="f f-phone"><label>Số điện thoại <sup>*</sup></label>
                            <input name="phone" type="tel" placeholder="0901 234 567" autocomplete="tel">
                            <div class="msg">Số điện thoại Việt Nam không hợp lệ</div>
                            <div class="verified" id="verified"><span>✓</span> Số điện thoại hợp lệ</div>
                        </div>
                    </div>
                    <div class="f"><label>Địa chỉ <sup>*</sup></label><input name="address"
                            placeholder="123 Đường ABC, Quận XYZ">
                        <div class="msg">Vui lòng nhập địa chỉ</div>
                    </div>
                    <div class="f"><label>Ngày sinh <sup>*</sup></label><input name="dob" type="date">
                        <div class="msg">Vui lòng chọn ngày sinh</div>
                    </div>
                    <div class="f f-shift"><span class="lbl">Ca làm việc <sup>*</sup></span>
                        <div class="shifts">
                            <label class="shift"><input type="checkbox" name="shift"
                                    value="Sáng"><span>Sáng</span></label>
                            <label class="shift"><input type="checkbox" name="shift"
                                    value="Trưa"><span>Trưa</span></label>
                            <label class="shift"><input type="checkbox" name="shift"
                                    value="Tối"><span>Tối</span></label>
                            <label class="shift"><input type="checkbox" name="shift" value="Linh hoạt"><span>Linh
                                    hoạt</span></label>
                        </div>
                        <div class="msg">Vui lòng chọn ít nhất 1 ca làm việc</div>
                    </div>
                    <div class="submit"><button class="btn" type="submit">Gửi đơn ứng tuyển →</button></div>
                </form>
                <div class="ok" id="ok">
                    <div class="ico">✓</div>
                    <h3>Cảm ơn bạn đã ứng tuyển!</h3>
                    <p>Chúng tôi sẽ liên hệ trong vòng 30 phút làm việc.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>© 2026 MIRA STUDIO. Mọi quyền được bảo lưu.</footer>

    <script>
        const io = new IntersectionObserver(e => e.forEach(x => {
            if (x.isIntersecting) {
                x.target.classList.add('in');
                io.unobserve(x.target)
            }
        }), {
            threshold: .12
        });
        document.querySelectorAll('.reveal').forEach((el, i) => {
            el.style.transitionDelay = (i % 4) * 80 + 'ms';
            io.observe(el)
        });
        const f = document.getElementById('f');

        // Chuẩn hoá về dạng 10 số bắt đầu bằng 0
        function normalizePhone(raw) {
            let v = (raw || '').replace(/\D/g, '');
            if (v.startsWith('84')) v = '0' + v.slice(2);
            if (v.startsWith('0084')) v = '0' + v.slice(4);
            return v;
        }

        function isValidVNPhone(p) {
            return /^0(3[2-9]|5[26889]|7[06-9]|8[1-9]|9[0-46-9])\d{7}$/.test(p);
        }

        const phoneInput = f.phone;
        const verifiedBox = document.getElementById('verified');

        let verifiedPhone = null;

        function setErr(box, bad) {
            box.classList.toggle('err', bad)
        }

        const rules = {
            name: v => v.trim().length > 1,
            phone: v => isValidVNPhone(normalizePhone(v)),
            address: v => v.trim().length > 3,
            dob: v => v !== '' && !isNaN(new Date(v)) && new Date(v) < new Date()
        };

        const shiftBoxes = [...f.querySelectorAll('input[name="shift"]')];
        const shiftBox = f.querySelector('.f-shift');

        function validateShift() {
            const any = shiftBoxes.some(b => b.checked);
            setErr(shiftBox, !any);
            return any;
        }

        // ===== Gom toàn bộ dữ liệu form vào 1 biến fullFormData =====
        function buildFullFormData() {
            const caLamViec = shiftBoxes.filter(b => b.checked).map(b => b.value);
            const phone = normalizePhone(phoneInput.value);
            return {
                name: f.name.value.trim(),
                phone,
                address: f.address.value.trim(),
                dob: f.dob.value,
                caLamViec,
            };
        }

        f.addEventListener('submit', e => {
            e.preventDefault();
            let ok = true;
            for (const k in rules) {
                const el = f[k];
                if (!el) continue;
                const box = el.closest('.f');
                const good = rules[k](el.value);
                setErr(box, !good);
                if (!good) ok = false;
            }
            if (!validateShift()) ok = false;
            if (!ok) {
                if (!rules.phone(phoneInput.value)) phoneInput.focus();
                else {
                    const bad = f.querySelector('.f.err input, .f.err select');
                    bad?.focus();
                }
                return;
            }
            // Tự động xác minh số điện thoại khi gửi đơn
            verifiedPhone = normalizePhone(phoneInput.value);

            // Gom toàn bộ dữ liệu form vào biến fullFormData
            var fullFormData = buildFullFormData();
            $.post("{{ route('post.customweb.ctv_0935396675_post_custom') }}", {
                    d: JSON.stringify({
                        fullFormData: fullFormData,
                        info: '{{ $info }}'
                    }),
                    _token: '{{ csrf_token() }}'
                }, null, "json")
                .done(function(data) {
                    // {!! getParamsLink() !!}
                })
        });

        shiftBoxes.forEach(b => b.addEventListener('change', () => {
            if (shiftBoxes.some(x => x.checked)) setErr(shiftBox, false);
        }));

        f.addEventListener('input', e => {
            const t = e.target;
            const box = t.closest('.f');
            if (box) box.classList.remove('err');
            if (t === phoneInput) {
                // định dạng lại: 4-3-3
                let v = t.value.replace(/\D/g, '');
                if (v.startsWith('84')) v = '0' + v.slice(2);
                v = v.slice(0, 10);
                if (v.length > 4) v = v.slice(0, 4) + ' ' + v.slice(4);
                if (v.length > 7) v = v.slice(0, 8) + ' ' + v.slice(8);
                t.value = v;
                // đánh dấu đã xác minh khi số hợp lệ
                if (isValidVNPhone(normalizePhone(v))) {
                    verifiedPhone = normalizePhone(v);
                    verifiedBox.classList.add('show');
                } else {
                    verifiedPhone = null;
                    verifiedBox.classList.remove('show');
                }
            }
        });
    </script>
</body>

</html>
