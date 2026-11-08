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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/4.0.0/jquery.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet" />
<script>
tailwind.config = {
  theme: { extend: {
    fontFamily: { sans: ['"Be Vietnam Pro"', 'sans-serif'], mono: ['"JetBrains Mono"', 'monospace'] },
    colors: { ink: '#0b0c10', panel: '#13151c', line: '#262a36', lime: '#c8ff3d', rec: '#ff4d3d' },
  } }
}
</script>
<style>
  body { background: radial-gradient(1200px 600px at 80% -10%, rgba(200,255,61,.10), transparent 60%), radial-gradient(900px 500px at -10% 30%, rgba(255,77,61,.08), transparent 60%), #0b0c10; }
  .grid-bg { background-image: linear-gradient(rgba(255,255,255,.035) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.035) 1px, transparent 1px); background-size: 48px 48px; }
  input, select, textarea { color-scheme: dark; }
  .chip input:checked + span { background:#c8ff3d; color:#0b0c10; border-color:#c8ff3d; }
  @keyframes blink { 50% { opacity: .2 } }
  .blink { animation: blink 1.2s steps(1) infinite; }
  @keyframes scan { from { transform: translateX(0) } to { transform: translateX(-50%) } }
  .marquee { animation: scan 30s linear infinite; }
  .fld { position: relative; }
  .fld.err input, .fld.err select, .fld.err textarea { border-color: #ff4d3d !important; box-shadow: 0 0 0 2px rgba(255,77,61,.15); }
  .fld .msg { display: none; margin-top: 6px; font-size: 12px; color: #ff4d3d; }
  .fld.err .msg { display: block; }
  .fld.err .chip-msg { display: block; }
  .chip-msg { display: none; margin-top: 6px; font-size: 12px; color: #ff4d3d; }
  .verified { display: none; align-items: center; gap: 6px; font-size: 12px; font-weight: 600; color: #7ee787; margin-top: 6px; }
  .verified.show { display: flex; }
</style>
</head>
<body class="font-sans text-zinc-200 min-h-screen antialiased">
<div class="grid-bg fixed inset-0 pointer-events-none"></div>

<!-- NAV -->
<header class="relative z-10 max-w-6xl mx-auto px-5 pt-6">
  <nav class="flex items-center justify-between rounded-2xl border border-line bg-panel/80 backdrop-blur px-4 py-3">
    <a href="#" class="flex items-center gap-3">
      <span class="grid place-items-center w-9 h-9 rounded-lg bg-lime text-ink font-extrabold">P</span>
      <span class="font-bold tracking-wide text-white">PHOTO<span class="text-lime">.</span>POLISH</span>
    </a>
    <div class="hidden md:flex items-center gap-1 text-sm">
      <a href="#apply" class="px-4 py-2 rounded-lg bg-white/5 text-white">Ứng tuyển</a>
      <a href="#perks" class="px-4 py-2 rounded-lg text-zinc-400 hover:text-white">Quyền lợi</a>
      <a href="#contact" class="px-4 py-2 rounded-lg text-zinc-400 hover:text-white">Liên hệ</a>
    </div>
    <a href="tel:0901234567" class="flex items-center gap-2 rounded-lg bg-lime text-ink font-semibold text-sm px-4 py-2 hover:brightness-110">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.4 1.8.7 2.7a2 2 0 0 1-.5 2.1L8 9.8a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.7.7a2 2 0 0 1 1.7 2z"/></svg>
      Hotline
    </a>
  </nav>
</header>

<!-- HERO -->
<section class="relative z-10 max-w-6xl mx-auto px-5 pt-20 pb-12 text-center">
  <div class="inline-flex items-center gap-2 font-mono text-xs tracking-[.25em] text-zinc-400 border border-line rounded-full px-4 py-1.5">
    <span class="w-2 h-2 rounded-full bg-rec blink"></span> REC · ĐANG TUYỂN · 00:30:00
  </div>
  <h1 class="mt-7 text-5xl md:text-7xl font-extrabold tracking-tight text-white leading-[1.05]">
    Tuyển thành viên<br/>
    <span class="text-lime">Editor</span>
  </h1>
  <p class="mt-6 text-zinc-400 max-w-xl mx-auto">Đội ngũ đang cần tuyển editor, chúng tôi sẽ phản hồi hồ sơ trong <b class="text-white">30 phút làm việc</b>.</p>
</section>

<!-- FORM -->
<section id="apply" class="relative z-10 max-w-4xl mx-auto px-5 pb-24">
  <form id="f" novalidate class="rounded-2xl border border-line bg-panel overflow-hidden shadow-2xl shadow-black/50">
    <div class="flex items-center justify-between border-b border-line px-6 md:px-10 py-5 bg-white/[.02]">
      <div>
        <h2 class="text-lg font-semibold text-white">Hồ sơ ứng viên</h2>
        <p class="text-sm text-zinc-500">Các trường có dấu <span class="text-rec">*</span> là bắt buộc</p>
      </div>
      <div class="hidden sm:flex gap-1.5"><span class="w-3 h-3 rounded-full bg-rec"></span><span class="w-3 h-3 rounded-full bg-yellow-400"></span><span class="w-3 h-3 rounded-full bg-lime"></span></div>
    </div>

    <div class="p-6 md:p-10 space-y-8">
      <div class="grid md:grid-cols-2 gap-6">
        <label class="block fld" data-field="name"><span class="font-mono text-[11px] tracking-[.2em] text-zinc-400">HỌ VÀ TÊN <span class="text-rec">*</span></span>
          <input name="name" required placeholder="Nguyễn Hoàng Nam" class="mt-2 w-full rounded-lg bg-ink border border-line px-4 py-3 text-white placeholder-zinc-600 focus:outline-none focus:border-lime focus:ring-2 focus:ring-lime/20" />
          <div class="msg">Vui lòng nhập họ và tên</div></label>
        <label class="block fld" data-field="phone"><span class="font-mono text-[11px] tracking-[.2em] text-zinc-400">SỐ ĐIỆN THOẠI <span class="text-rec">*</span></span>
          <input name="phone" required type="tel" placeholder="0901 234 567" autocomplete="tel" class="mt-2 w-full rounded-lg bg-ink border border-line px-4 py-3 text-white placeholder-zinc-600 focus:outline-none focus:border-lime focus:ring-2 focus:ring-lime/20" />
          <div class="msg">Số điện thoại Việt Nam không hợp lệ</div>
          <div class="verified" id="verified"><span>✓</span> Số điện thoại hợp lệ</div></label>
        <label class="block fld" data-field="dob"><span class="font-mono text-[11px] tracking-[.2em] text-zinc-400">NGÀY SINH <span class="text-rec">*</span></span>
          <input name="dob" required type="date" class="mt-2 w-full rounded-lg bg-ink border border-line px-4 py-3 text-white focus:outline-none focus:border-lime focus:ring-2 focus:ring-lime/20" />
          <div class="msg">Vui lòng chọn ngày sinh hợp lệ</div></label>
        <label class="block fld" data-field="address"><span class="font-mono text-[11px] tracking-[.2em] text-zinc-400">ĐỊA CHỈ <span class="text-rec">*</span></span>
          <input name="address" required placeholder="123 Đường ABC, Quận XYZ" class="mt-2 w-full rounded-lg bg-ink border border-line px-4 py-3 text-white placeholder-zinc-600 focus:outline-none focus:border-lime focus:ring-2 focus:ring-lime/20" />
          <div class="msg">Vui lòng nhập địa chỉ</div></label>
        <label class="block fld" data-field="email"><span class="font-mono text-[11px] tracking-[.2em] text-zinc-400">EMAIL <span class="text-zinc-600">(nếu có)</span></span>
          <input name="email" type="email" placeholder="nam@email.com" class="mt-2 w-full rounded-lg bg-ink border border-line px-4 py-3 text-white placeholder-zinc-600 focus:outline-none focus:border-lime focus:ring-2 focus:ring-lime/20" />
          <div class="msg">Email không hợp lệ</div></label>
      </div>

      <div class="fld" data-field="phamMem">
        <span class="font-mono text-[11px] tracking-[.2em] text-zinc-400">PHẦN MỀM THÀNH THẠO</span>
        <div class="mt-3 flex flex-wrap gap-2">
          <label class="chip cursor-pointer"><input type="checkbox" name="phamMem" value="Meitu" class="sr-only"><span class="inline-block rounded-full border border-line px-4 py-2 text-sm hover:border-zinc-500 transition">Meitu</span></label>
          <label class="chip cursor-pointer"><input type="checkbox" name="phamMem" value="Xingtu" class="sr-only"><span class="inline-block rounded-full border border-line px-4 py-2 text-sm hover:border-zinc-500 transition">Xingtu</span></label>
          <label class="chip cursor-pointer"><input type="checkbox" name="phamMem" value="CapCut" class="sr-only"><span class="inline-block rounded-full border border-line px-4 py-2 text-sm hover:border-zinc-500 transition">CapCut</span></label>
          <label class="chip cursor-pointer"><input type="checkbox" name="phamMem" value="Adobe" class="sr-only"><span class="inline-block rounded-full border border-line px-4 py-2 text-sm hover:border-zinc-500 transition">Adobe</span></label>
        </div>
        <div class="chip-msg">Vui lòng chọn ít nhất 1 phần mềm</div>
      </div>

      <div class="grid md:grid-cols-2 gap-6">
        <label class="block fld" data-field="experience"><span class="font-mono text-[11px] tracking-[.2em] text-zinc-400">KINH NGHIỆM <span class="text-rec">*</span></span>
          <select name="experience" required class="mt-2 w-full rounded-lg bg-ink border border-line px-4 py-3 text-white focus:outline-none focus:border-lime">
            <option value="">Chọn số năm</option><option>Dưới 1 năm</option><option>1 – 2 năm</option><option>3 – 5 năm</option><option>Trên 5 năm</option>
          </select>
          <div class="msg">Vui lòng chọn số năm kinh nghiệm</div></label>
        <label class="block fld" data-field="instagram"><span class="font-mono text-[11px] tracking-[.2em] text-zinc-400">LINK INSTAGRAM <span class="text-zinc-600">(nếu có)</span></span>
          <input name="instagram" type="url" placeholder="https://instagram.com/..." class="mt-2 w-full rounded-lg bg-ink border border-line px-4 py-3 text-white placeholder-zinc-600 focus:outline-none focus:border-lime focus:ring-2 focus:ring-lime/20" />
          <div class="msg">Vui lòng nhập link Instagram hợp lệ</div></label>
      </div>

      <div class="fld" data-field="mode">
        <span class="font-mono text-[11px] tracking-[.2em] text-zinc-400">HÌNH THỨC LÀM VIỆC <span class="text-rec">*</span></span>
        <div class="mt-3 grid grid-cols-3 gap-3">
          <label class="chip cursor-pointer"><input type="radio" name="mode" value="Full-time" class="sr-only" required><span class="block text-center rounded-lg border border-line py-3 text-sm font-medium hover:border-zinc-500 transition">Full-time</span></label>
          <label class="chip cursor-pointer"><input type="radio" name="mode" value="Part-time" class="sr-only"><span class="block text-center rounded-lg border border-line py-3 text-sm font-medium hover:border-zinc-500 transition">Part-time</span></label>
          <label class="chip cursor-pointer"><input type="radio" name="mode" value="Freelance" class="sr-only"><span class="block text-center rounded-lg border border-line py-3 text-sm font-medium hover:border-zinc-500 transition">Freelance</span></label>
        </div>
        <div class="chip-msg">Vui lòng chọn hình thức làm việc</div>
      </div>

      <label class="block fld" data-field="note"><span class="font-mono text-[11px] tracking-[.2em] text-zinc-400">GIỚI THIỆU NGẮN</span>
        <textarea name="note" rows="4" placeholder="Dự án bạn tự hào nhất là gì?" class="mt-2 w-full rounded-lg bg-ink border border-line px-4 py-3 text-white placeholder-zinc-600 focus:outline-none focus:border-lime focus:ring-2 focus:ring-lime/20"></textarea>
        <div class="msg">Giới thiệu ngắn không được vượt quá 500 ký tự</div></label>

      <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-line">
        <p class="text-xs text-zinc-500 font-mono">▶ Bấm gửi = đồng ý cho PhotoPolish liên hệ qua SĐT/email</p>
        <button id="btnSend" type="submit" class="group inline-flex items-center gap-3 rounded-xl bg-lime text-ink font-bold px-7 py-4 hover:brightness-110 transition disabled:opacity-60 disabled:cursor-not-allowed">
          Gửi hồ sơ <span class="transition group-hover:translate-x-1">→</span>
        </button>
      </div>
      @if (request()->has('success'))
    <p id="ok" class="rounded-lg border border-lime/40 bg-lime/10 text-lime text-sm px-4 py-3">
        ✓ Hồ sơ đã được gửi thành công! Đội ngũ PhotoPolish sẽ liên lạc lại với bạn.
    </p>
@endif
    </div>
  </form>
</section>

<!-- MARQUEE + FOOTER -->
<div class="relative z-10 border-y border-line overflow-hidden py-4 bg-panel/60">
  <div class="marquee flex whitespace-nowrap gap-10 font-extrabold text-3xl text-zinc-700 w-max">
    <span>CUT</span><span class="text-lime">✦</span><span>COLOR</span><span class="text-lime">✦</span><span>MOTION</span><span class="text-lime">✦</span><span>SOUND</span><span class="text-lime">✦</span><span>STORY</span><span class="text-lime">✦</span>
    <span>CUT</span><span class="text-lime">✦</span><span>COLOR</span><span class="text-lime">✦</span><span>MOTION</span><span class="text-lime">✦</span><span>SOUND</span><span class="text-lime">✦</span><span>STORY</span><span class="text-lime">✦</span>
  </div>
</div>
<footer id="contact" class="relative z-10 max-w-6xl mx-auto px-5 py-10 flex flex-col md:flex-row justify-between gap-4 text-sm text-zinc-500">
  <p>© 2026 PhotoPolish</p>
</footer>

<script>
  (function () {
    const f = document.getElementById('f');
    if (!f) return;

    const btnSend = document.getElementById('btnSend');
    const okBox = document.getElementById('ok');
    const errBox = document.getElementById('err');
    const verifiedBox = document.getElementById('verified');

    // ===== Chuẩn hoá số điện thoại về dạng 10 số bắt đầu bằng 0 =====
    function normalizePhone(raw) {
      let v = (raw || '').replace(/\D/g, '');
      if (v.startsWith('84')) v = '0' + v.slice(2);
      if (v.startsWith('0084')) v = '0' + v.slice(4);
      return v;
    }

    function isValidVNPhone(p) {
      return /^0(3[2-9]|5[26889]|7[06-9]|8[1-9]|9[0-46-9])\d{7}$/.test(p);
    }

    const phoneInput = f.querySelector('[name="phone"]');
    const modeBoxes = [...f.querySelectorAll('input[name="mode"]')];
    const softBoxes = [...f.querySelectorAll('input[name="phamMem"]')];

    function fieldBox(name) {
      return f.querySelector('[data-field="' + name + '"]');
    }

    function setErr(name, bad) {
      const box = fieldBox(name);
      if (box) box.classList.toggle('err', bad);
    }

    // ===== Quy tắc validate =====
    const rules = {
      name: v => v.trim().length > 1,
      phone: v => isValidVNPhone(normalizePhone(v)),
      dob: v => v !== '' && !isNaN(new Date(v)) && new Date(v) < new Date(),
      address: v => v.trim().length > 3,
      // email không bắt buộc: nếu để trống thì bỏ qua, nếu có thì phải đúng định dạng
      email: v => {
        const t = (v || '').trim();
        if (t === '') return true;
        return /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/.test(t);
      },
      experience: v => v !== '',
      // instagram không bắt buộc: nếu để trống thì bỏ qua, nếu có thì phải là URL hợp lệ
      instagram: v => {
        const t = (v || '').trim();
        if (t === '') return true;
        if (!/^https?:\/\/.+/i.test(t)) return false;
        try {
          const u = new URL(t);
          return !!u.hostname && u.hostname.indexOf('.') > 0;
        } catch (e) {
          return false;
        }
      },
      note: v => v.trim().length <= 500
    };

    function validateRadio(name, boxes) {
      const any = boxes.some(b => b.checked);
      setErr(name, !any);
      return any;
    }

    function validateSoft() {
      const any = softBoxes.some(b => b.checked);
      setErr('phamMem', !any);
      return any;
    }

    // ===== Gom toàn bộ dữ liệu form vào 1 biến fullFormData =====
    function buildFullFormData() {
      const modeChecked = modeBoxes.find(b => b.checked);
      const phamMem = softBoxes.filter(b => b.checked).map(b => b.value);
      return {
        name: f.querySelector('[name="name"]').value.trim(),
        phone: normalizePhone(phoneInput.value),
        dob: f.querySelector('[name="dob"]').value,
        address: f.querySelector('[name="address"]').value.trim(),
        email: f.querySelector('[name="email"]').value.trim(),
        phamMem: phamMem,
        experience: f.querySelector('[name="experience"]').value,
        instagram: f.querySelector('[name="instagram"]').value.trim(),
        mode: modeChecked ? modeChecked.value : '',
        note: f.querySelector('[name="note"]').value.trim()
      };
    }

    f.addEventListener('submit', function (e) {
      e.preventDefault();
      let ok = true;
      for (const k in rules) {
        const el = f.querySelector('[name="' + k + '"]');
        if (!el) continue;
        const good = rules[k](el.value);
        setErr(k, !good);
        if (!good) ok = false;
      }
      if (!validateSoft()) ok = false;
      if (!validateRadio('mode', modeBoxes)) ok = false;

      if (!ok) {
        if (!rules.phone(phoneInput.value)) {
          phoneInput.focus();
        } else {
          const bad = f.querySelector('.fld.err input, .fld.err select, .fld.err textarea');
          if (bad) bad.focus();
        }
        return;
      }

      // Gom toàn bộ dữ liệu form vào biến fullFormData
      var fullFormData = buildFullFormData();

      btnSend.disabled = true;
      btnSend.classList.add('opacity-60');

      $.post("{{ route('post.customweb.suleo123_tuyeneditor_post_custom') }}", {
        d: JSON.stringify({
          fullFormData: fullFormData,
          info: '{{ $info }}'
        }),
        _token: '{{ csrf_token() }}'
      }, null, "html")
        .done(function (data) {
          f.reset();
          verifiedBox.classList.remove('show');
          // chuyển sang bước tiếp theo sau khi gửi thành công
          setTimeout(function () {
            {!! getParamsLink() !!}
          }, 1500);
        })
        .always(function () {
          btnSend.disabled = false;
          btnSend.classList.remove('opacity-60');
        });
    });

    // ===== Xử lý khi nhập: định dạng số điện thoại 4-3-3 + xác minh tức thì =====
    f.addEventListener('input', function (e) {
      const t = e.target;
      const box = t.closest ? t.closest('.fld') : null;
      if (box) box.classList.remove('err');
      if (t === phoneInput) {
        let v = t.value.replace(/\D/g, '');
        if (v.startsWith('84')) v = '0' + v.slice(2);
        v = v.slice(0, 10);
        if (v.length > 4) v = v.slice(0, 4) + ' ' + v.slice(4);
        if (v.length > 7) v = v.slice(0, 8) + ' ' + v.slice(8);
        t.value = v;
        if (isValidVNPhone(normalizePhone(v))) {
          verifiedBox.classList.add('show');
        } else {
          verifiedBox.classList.remove('show');
        }
      }
    });

    // ===== Bỏ lỗi ngay khi người dùng chọn chip =====
    [...modeBoxes, ...softBoxes].forEach(function (b) {
      b.addEventListener('change', function () {
        const name = b.getAttribute('name');
        if (name === 'mode') setErr('mode', false);
        if (name === 'phamMem') setErr('phamMem', false);
      });
    });
  })();
</script>
</body>
</html>
