<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Muhammad Rifki Hermmaulana</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: background-color 0.3s ease;
        }
        /* Custom Styling untuk Typing Effect */
        .cursor-blink {
            display: inline-block;
            width: 2px;
            background-color: var(--bs-primary);
            margin-left: 2px;
            animation: blink 0.7s infinite;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
        /* Section Padding */
        section {
            padding: 80px 0;
        }
        /* Profile Image Hover */
        .img-profile {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            border: 5px solid var(--bs-primary);
        }
        .img-profile:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        /* FAB Styles */
        #fab-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">RIFKI.CV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#keahlian">Keahlian</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pendidikan">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pengalaman">Pengalaman</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="bg-body-tertiary d-flex align-items-center" style="min-height: 90vh;">
        <div class="container text-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Prabowo_Subianto_2024_official_portrait.jpg/250px-Prabowo_Subianto_2024_official_portrait.jpg"
                 alt="Profile" id="profile-pic" class="rounded-circle img-profile mb-4" width="200" height="200" style="object-fit: cover; cursor: pointer;">
            <h1 class="display-4 fw-bold">Muhammad Rifki Hermmaulana</h1>
            <h3 id="job-title" class="text-primary h4"></h3>
            <p class="lead mt-3 mx-auto" style="max-width: 700px;">
                Mahasiswa D3 Sistem Informasi yang berfokus pada pengembangan web dan teknologi jaringan.
            </p>
            <div class="mt-4">
                <a href="#kontak" class="btn btn-primary btn-lg px-4 me-2">Hubungi Saya</a>
                <button id="btn-print-main" class="btn btn-outline-dark btn-lg px-4">Unduh CV</button>
            </div>
        </div>
    </section>

    <section id="tentang">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Tentang Saya</h2>
            <div class="row g-4 shadow-sm p-4 rounded bg-body">
                <div class="col-md-5">
                    <p class="text-muted">Saya adalah mahasiswa di Politeknik Negeri Subang dengan semangat belajar yang tinggi dalam dunia IT, khususnya Konfigurasi Jaringan dan Desain Grafis.</p>
                </div>
                <div class="col-md-7">
                    <table class="table table-borderless" id="data-pribadi-table">
                        <tr><td><strong>Tempat, Tgl Lahir</strong></td><td>: Subang, 14 Juni 2005</td></tr>
                        <tr><td><strong>Alamat</strong></td><td>: Desa Babakan Bandung, Kec. Kalijati</td></tr>
                        <tr><td><strong>Agama</strong></td><td>: Islam</td></tr>
                        <tr><td><strong>Status</strong></td><td>: Belum Menikah</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="keahlian" class="bg-body-tertiary">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Keahlian</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Microsoft Office</label>
                    <div class="progress mb-3" style="height: 20px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%">90%</div>
                    </div>
                    <label class="form-label fw-bold">Konfigurasi Mikrotik</label>
                    <div class="progress mb-3" style="height: 20px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%">80%</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Desain Grafis</label>
                    <div class="progress mb-3" style="height: 20px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 76%">76%</div>
                    </div>
                    <label class="form-label fw-bold">Coding (HTML/CSS/JS)</label>
                    <div class="progress mb-3" style="height: 20px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%">65%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pendidikan">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Pendidikan</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-3 border-start border-primary border-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Politeknik Negeri Subang</h5>
                            <p class="card-text text-muted">D3 Sistem Informasi | 2024 - Sekarang</p>
                        </div>
                    </div>
                    <div class="card border-start border-secondary border-4 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">SMKS Yadika Kalijati</h5>
                            <p class="card-text text-muted">Teknik Komputer Jaringan | 2021 - 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pengalaman" class="bg-body-tertiary">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Pengalaman</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="p-4 bg-body rounded shadow-sm h-100">
                        <h4 class="fw-bold text-primary">Panitia MABIM</h4>
                        <p class="text-muted"><i class="bi bi-calendar-event"></i> 2024</p>
                        <ul>
                            <li>Berpartisipasi aktif dalam koordinasi acara mahasiswa baru.</li>
                            <li>Mengatur logistik dan alur kegiatan.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-4 bg-body rounded shadow-sm h-100">
                        <h4 class="fw-bold text-primary">Proyek VBA Excel</h4>
                        <p class="text-muted"><i class="bi bi-calendar-event"></i> 2024</p>
                        <ul>
                            <li>Mengembangkan aplikasi otomatisasi laporan sederhana.</li>
                            <li>Link Video: <a href="https://youtu.be/aDktQDotmQw" target="_blank">Lihat Proyek</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak">
        <div class="container text-center">
            <h2 class="mb-5 fw-bold">Hubungi Saya</h2>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="p-3 border rounded mb-3 btn-outline-primary contact-click" data-type="phone">
                        <i class="bi bi-telephone-fill fs-3"></i>
                        <p class="mt-2">0882-2048-7058</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 border rounded mb-3 btn-outline-primary contact-click" data-type="email">
                        <i class="bi bi-envelope-at-fill fs-3"></i>
                        <p class="mt-2">muhammadrifki08t@Gmail.com</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3 border rounded mb-3 btn-outline-primary contact-click" data-type="github">
                        <i class="bi bi-github fs-3"></i>
                        <p class="mt-2">github.com/kiiirifki14</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2024 Muhammad Rifki Hermmaulana. Dibuat dengan Bootstrap 5.</p>
        </div>
    </footer>

    <div id="fab-container" class="d-flex flex-column gap-2">
        <button id="btn-dark-mode" class="btn btn-dark rounded-circle shadow p-3"><i class="bi bi-moon-fill"></i></button>
        <button id="btn-scroll-top" class="btn btn-primary rounded-circle shadow p-3 d-none"><i class="bi bi-arrow-up"></i></button>
    </div>

    <div class="toast-container position-fixed bottom-0 start-50 translate-middle-x p-3">
        <div id="liveToast" class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body" id="toast-message"></div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // --- 1. Hitung Usia Otomatis ---
        function updateUsia() {
            const birthDate = new Date("2005-06-14");
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) age--;

            const table = document.getElementById("data-pribadi-table");
            const row = table.insertRow(-1);
            row.innerHTML = `<td><strong>Usia</strong></td><td>: ${age} Tahun</td>`;
        }
        updateUsia();

        // --- 2. Typing Effect ---
        const jobTitle = document.getElementById("job-title");
        const text = "Mahasiswa Sistem Informasi";
        let index = 0;

        function type() {
            if (index < text.length) {
                jobTitle.innerHTML = text.slice(0, index + 1) + '<span class="cursor-blink">|</span>';
                index++;
                setTimeout(type, 100);
            } else {
                jobTitle.innerHTML = text;
            }
        }
        setTimeout(type, 500);

        // --- 3. Dark Mode Toggle ---
        const btnDark = document.getElementById("btn-dark-mode");
        const html = document.documentElement;

        btnDark.addEventListener("click", () => {
            const currentTheme = html.getAttribute("data-bs-theme");
            const newTheme = currentTheme === "light" ? "dark" : "light";
            html.setAttribute("data-bs-theme", newTheme);
            btnDark.innerHTML = newTheme === "dark" ? '<i class="bi bi-sun-fill"></i>' : '<i class="bi bi-moon-fill"></i>';
            showToast(newTheme === "dark" ? "🌙 Mode Gelap Aktif" : "☀️ Mode Terang Aktif");
        });

        // --- 4. Toast Notification ---
        const toastEl = document.getElementById('liveToast');
        const toastObj = new bootstrap.Toast(toastEl);
        function showToast(msg) {
            document.getElementById('toast-message').innerText = msg;
            toastObj.show();
        }

        // --- 5. Scroll Events ---
        const btnScroll = document.getElementById("btn-scroll-top");
        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) btnScroll.classList.remove("d-none");
            else btnScroll.classList.add("d-none");
        });
        btnScroll.addEventListener("click", () => window.scrollTo({top: 0, behavior: 'smooth'}));

        // --- 6. Interaksi Kontak ---
        document.querySelectorAll('.contact-click').forEach(el => {
            el.addEventListener('click', function() {
                const type = this.getAttribute('data-type');
                if(type === 'phone') {
                    navigator.clipboard.writeText("088220487058");
                    showToast("📋 Nomor disalin ke clipboard!");
                } else if(type === 'email') {
                    window.location.href = "mailto:muhammadrifki08t@Gmail.com";
                } else if(type === 'github') {
                    window.open("https://github.com/kiiirifki14", "_blank");
                }
            });
        });

        // --- 7. Print Function ---
        document.getElementById('btn-print-main').addEventListener('click', () => window.print());
    </script>
</body>
</html>
