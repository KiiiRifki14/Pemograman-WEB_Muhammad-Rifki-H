<!DOCTYPE html>
<html lang="id" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CV - Muhammad Rifki Hermmaulana')</title>

    {{-- Bootstrap 5 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Warna Dasar */
            --cv-primary: #0f172a;
            --cv-secondary: #475569;
            --cv-accent: #4f46e5;
            --cv-accent-light: #818cf8;
            --cv-accent-soft: #e0e7ff;
            --cv-surface: #ffffff;
            --cv-bg: #f8fafc;
            --cv-text: #334155;
            --cv-text-light: #64748b;
            --cv-border: #e2e8f0;
            --cv-gradient: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #8b5cf6 100%);
            --cv-gradient-dark: linear-gradient(135deg, #1e1b4b 0%, #312e81 100%);
            scroll-behavior: smooth;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--cv-bg);
            color: var(--cv-text);
            transition: all 0.3s ease;
        }

        /* ===== NAVBAR ===== */
        .navbar-cv {
            background: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.6);
            padding: 16px 0;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .navbar-cv.scrolled {
            padding: 12px 0;
            background: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            border-bottom-color: transparent;
        }

        .navbar-cv .navbar-brand {
            font-weight: 800;
            font-size: 1.4rem;
            color: var(--cv-primary) !important;
            letter-spacing: -0.5px;
        }

        .navbar-cv .navbar-brand span {
            background: var(--cv-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .navbar-cv .nav-link {
            color: var(--cv-secondary) !important;
            font-weight: 500;
            font-size: 0.9rem;
            padding: 8px 14px !important;
            border-radius: 10px;
            transition: all 0.25s ease;
        }

        .navbar-cv .nav-link:hover {
            color: var(--cv-accent) !important;
            background: rgba(79, 70, 229, 0.08);
            transform: translateY(-1px);
        }

        .navbar-cv .nav-link.active {
            color: #fff !important;
            background: var(--cv-gradient);
            box-shadow: 0 4px 15px rgba(79, 70, 229, 0.3);
        }

        .navbar-cv .navbar-toggler {
            border: none;
            padding: 6px 10px;
            background: var(--cv-accent-soft);
            color: var(--cv-accent);
            border-radius: 8px;
        }

        .navbar-cv .navbar-toggler:focus {
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }

        .navbar-cv .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%234f46e5' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* ===== KONTEN UTAMA ===== */
        .main-content {
            min-height: calc(100vh - 160px);
        }

        /* ===== SECTION TITLE ===== */
        .section-title {
            font-weight: 800;
            color: var(--cv-primary);
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
            letter-spacing: -0.5px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 4px;
            background: var(--cv-gradient);
            border-radius: 2px;
        }

        /* ===== CARD CUSTOM ===== */
        .cv-card {
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 24px;
            background: var(--cv-surface);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            overflow: hidden;
            position: relative;
        }

        .cv-card::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 24px;
            padding: 1px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.1));
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            z-index: 1;
            pointer-events: none;
        }

        .cv-card:hover {
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
            transform: translateY(-4px);
            border-color: rgba(79, 70, 229, 0.1);
        }

        /* ===== FOOTER ===== */
        .footer-cv {
            background: var(--cv-primary);
            color: rgba(255, 255, 255, 0.8);
            padding: 35px 0;
            margin-top: 60px;
        }

        .footer-cv a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-cv a:hover {
            color: var(--cv-accent-light);
        }

        /* ===== FAB BUTTON ===== */
        #fab-container {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1050;
        }

        .fab-btn {
            width: 50px;
            height: 50px;
            border: none;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: var(--cv-text);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .fab-btn:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 35px rgba(79, 70, 229, 0.15);
            color: var(--cv-accent);
            background: var(--cv-surface);
        }

        /* ===== ANIMASI FADE IN ===== */
        .fade-in-up {
            opacity: 0;
            transform: translateY(25px);
            animation: fadeInUp 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .delay-1 {
            animation-delay: 0.1s;
        }

        .delay-2 {
            animation-delay: 0.2s;
        }

        .delay-3 {
            animation-delay: 0.3s;
        }

        .delay-4 {
            animation-delay: 0.4s;
        }

        .delay-5 {
            animation-delay: 0.5s;
        }

        /* ===== DARK MODE ===== */
        [data-bs-theme="dark"] {
            --cv-primary: #f8fafc;
            --cv-secondary: #94a3b8;
            --cv-surface: #1e293b;
            --cv-bg: #0f172a;
            --cv-text: #e2e8f0;
            --cv-text-light: #94a3b8;
            --cv-border: #334155;
            --cv-accent-soft: rgba(79, 70, 229, 0.15);
        }

        [data-bs-theme="dark"] .navbar-cv {
            background: rgba(15, 23, 42, 0.85) !important;
            border-bottom-color: rgba(51, 65, 85, 0.6);
            box-shadow: none;
        }

        [data-bs-theme="dark"] .navbar-cv.scrolled {
            background: rgba(15, 23, 42, 0.98) !important;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
        }

        [data-bs-theme="dark"] .navbar-cv .navbar-toggler {
            background: rgba(255, 255, 255, 0.05);
            color: #cbd5e1;
        }

        [data-bs-theme="dark"] .navbar-cv .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23cbd5e1' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        [data-bs-theme="dark"] .footer-cv {
            background: #020617;
            border-top: 1px solid #1e293b;
        }

        [data-bs-theme="dark"] .fab-btn {
            background: rgba(30, 41, 59, 0.8);
            border-color: rgba(255, 255, 255, 0.05);
            color: #e2e8f0;
        }

        [data-bs-theme="dark"] .fab-btn:hover {
            background: #1e293b;
            color: var(--cv-accent-light);
        }

        [data-bs-theme="dark"] .cv-card {
            background: linear-gradient(145deg, #1e293b, #0f172a);
            border-color: #334155;
        }

        [data-bs-theme="dark"] .cv-card::before {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .navbar-cv .nav-link {
                padding: 10px 14px !important;
            }
        }
    </style>

    @stack('extra_css')
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-cv sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/cv') }}">
                Curriculum<span> Vitae</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCV">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCV">
                <ul class="navbar-nav ms-auto gap-1">
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('cv')) active @endif" href="{{ url('/cv') }}">
                            <i class="bi bi-house-door me-1"></i>Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('cv/tentang')) active @endif" href="{{ url('/cv/tentang') }}">
                            <i class="bi bi-person me-1"></i>Tentang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('cv/keahlian')) active @endif" href="{{ url('/cv/keahlian') }}">
                            <i class="bi bi-stars me-1"></i>Keahlian
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('cv/pendidikan')) active @endif" href="{{ url('/cv/pendidikan') }}">
                            <i class="bi bi-mortarboard me-1"></i>Pendidikan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('cv/pengalaman')) active @endif" href="{{ url('/cv/pengalaman') }}">
                            <i class="bi bi-briefcase me-1"></i>Pengalaman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('cv/kontak')) active @endif" href="{{ url('/cv/kontak') }}">
                            <i class="bi bi-envelope me-1"></i>Kontak
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Konten Utama --}}
    <main class="main-content">
        @yield('konten')
    </main>

    {{-- Footer --}}
    <footer class="footer-cv">
        <div class="container text-center">
            <p class="mb-1">
                <i class="bi bi-geo-alt me-1"></i> Desa Kalijati Barat, Kec. Kalijati, Subang
            </p>
            <p class="mb-2">
                <a href="mailto:muhammadrifki08t@Gmail.com" class="me-3"><i class="bi bi-envelope me-1"></i>muhammadrifki08t@Gmail.com</a>
                <a href="https://github.com/kiiirifki14" target="_blank"><i class="bi bi-github me-1"></i>kiiirifki14</a>
            </p>
            <hr style="border-color: rgba(255,255,255,0.1); margin: 15px 0;">
            <p class="mb-0 small opacity-50">&copy; {{ date('Y') }} Muhammad Rifki Hermmaulana. Dibuat dengan Laravel & Bootstrap 5.</p>
        </div>
    </footer>

    {{-- FAB Buttons --}}
    <div id="fab-container" class="d-flex flex-column gap-2">
        <button id="btn-dark-mode" class="fab-btn" title="Toggle Dark Mode">
            <i class="bi bi-moon-fill"></i>
        </button>
        <button id="btn-scroll-top" class="fab-btn" title="Kembali ke Atas" style="display: none;">
            <i class="bi bi-arrow-up"></i>
        </button>
    </div>

    {{-- Toast Notification --}}
    <div class="toast-container position-fixed bottom-0 start-50 translate-middle-x p-3">
        <div id="liveToast" class="toast align-items-center border-0 shadow-lg" role="alert"
            style="background: var(--cv-gradient); color: white; border-radius: 14px;">
            <div class="d-flex">
                <div class="toast-body fw-500" id="toast-message"></div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            document.querySelector('.navbar-cv').classList.toggle('scrolled', window.scrollY > 10);
        });

        // Dark Mode Toggle (tersimpan di localStorage)
        const btnDark = document.getElementById("btn-dark-mode");
        const htmlEl = document.documentElement;

        // Muat tema tersimpan saat halaman dibuka
        const savedTheme = localStorage.getItem("cv-theme") || "light";
        htmlEl.setAttribute("data-bs-theme", savedTheme);
        btnDark.innerHTML = savedTheme === "dark" ? '<i class="bi bi-sun-fill"></i>' : '<i class="bi bi-moon-fill"></i>';

        btnDark.addEventListener("click", () => {
            const current = htmlEl.getAttribute("data-bs-theme");
            const next = current === "light" ? "dark" : "light";
            htmlEl.setAttribute("data-bs-theme", next);
            localStorage.setItem("cv-theme", next);
            btnDark.innerHTML = next === "dark" ? '<i class="bi bi-sun-fill"></i>' : '<i class="bi bi-moon-fill"></i>';
            showToast(next === "dark" ? "🌙 Mode Gelap Aktif" : "☀️ Mode Terang Aktif");
        });

        // Toast
        const toastEl = document.getElementById('liveToast');
        const toastObj = new bootstrap.Toast(toastEl);

        function showToast(msg) {
            document.getElementById('toast-message').innerText = msg;
            toastObj.show();
        }

        // Scroll to Top
        const btnScroll = document.getElementById("btn-scroll-top");
        window.addEventListener("scroll", () => {
            btnScroll.style.display = window.scrollY > 300 ? "flex" : "none";
        });
        btnScroll.addEventListener("click", () => window.scrollTo({
            top: 0,
            behavior: "smooth"
        }));
    </script>

    @yield('extra_js')

</body>

</html>