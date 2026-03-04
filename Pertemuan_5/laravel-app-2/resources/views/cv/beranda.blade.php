{{-- Halaman Beranda CV --}}
@extends('master')

@section('title', 'Beranda - CV Muhammad Rifki Hermmaulana')

@push('extra_css')
<style>
    .hero-section {
        min-height: 88vh;
        display: flex;
        align-items: center;
        padding: 80px 0 60px;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: -200px;
        right: -200px;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(99, 102, 241, 0.06) 0%, transparent 70%);
        border-radius: 50%;
    }

    .hero-section::after {
        content: '';
        position: absolute;
        bottom: -150px;
        left: -150px;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(139, 92, 246, 0.05) 0%, transparent 70%);
        border-radius: 50%;
    }

    .img-hero-container {
        position: relative;
        display: inline-block;
        padding: 10px;
    }

    .img-hero-container::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 50%;
        background: var(--cv-gradient);
        opacity: 0.15;
        animation: pulseRing 3s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
        z-index: -1;
    }

    .img-hero {
        width: 250px;
        height: 250px;
        object-fit: cover;
        border: 5px solid var(--cv-surface);
        box-shadow: 0 20px 60px rgba(79, 70, 229, 0.2);
        animation: floating 6s ease-in-out infinite;
        cursor: pointer;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .img-hero:hover {
        transform: scale(1.05) translateY(-5px) !important;
        box-shadow: 0 25px 70px rgba(79, 70, 229, 0.3);
        border-color: rgba(255, 255, 255, 0.9);
    }

    @keyframes floating {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-15px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @keyframes pulseRing {
        0% {
            transform: scale(0.9);
            opacity: 0.5;
        }

        100% {
            transform: scale(1.3);
            opacity: 0;
        }
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 18px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        background: var(--cv-surface);
        color: var(--cv-accent);
        border: 1px solid rgba(79, 70, 229, 0.2);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
        backdrop-filter: blur(10px);
    }

    .status-dot {
        width: 8px;
        height: 8px;
        background: #10b981;
        border-radius: 50%;
        display: inline-block;
        box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
        animation: pulseDot 2s infinite;
    }

    @keyframes pulseDot {
        0% {
            box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
        }

        70% {
            box-shadow: 0 0 0 8px rgba(16, 185, 129, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
        }
    }

    .hero-name {
        font-weight: 800;
        font-size: 3.5rem;
        color: var(--cv-primary);
        letter-spacing: -1.5px;
        line-height: 1.1;
    }

    .hero-subtitle {
        color: var(--cv-accent);
        font-weight: 600;
        font-size: 1.2rem;
        min-height: 30px;
    }

    .cursor-blink {
        display: inline-block;
        width: 2px;
        height: 1.1em;
        background-color: var(--cv-accent);
        margin-left: 2px;
        animation: blink 0.8s infinite;
        vertical-align: text-bottom;
    }

    @keyframes blink {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }
    }

    .hero-desc {
        font-size: 1.05rem;
        color: var(--cv-text-light);
        line-height: 1.7;
        max-width: 520px;
    }

    .btn-hero {
        padding: 14px 32px;
        font-weight: 700;
        border-radius: 14px;
        font-size: 1rem;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .btn-hero-primary {
        background: var(--cv-gradient);
        border: none;
        color: #fff;
        box-shadow: 0 10px 20px rgba(79, 70, 229, 0.25);
    }

    .btn-hero-primary:hover {
        transform: translateY(-4px);
        box-shadow: 0 15px 30px rgba(79, 70, 229, 0.4);
        color: #fff;
    }

    .btn-hero-outline {
        background: var(--cv-surface);
        border: 2px solid var(--cv-border);
        color: var(--cv-text);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.02);
    }

    .btn-hero-outline:hover {
        border-color: var(--cv-accent);
        color: var(--cv-accent);
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(79, 70, 229, 0.1);
    }

    .stat-section {
        padding: 40px 0;
    }

    .stat-item {
        text-align: center;
        padding: 35px 20px;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    [data-bs-theme="dark"] .stat-item {
        background: rgba(30, 41, 59, 0.6);
        border-color: rgba(255, 255, 255, 0.05);
    }

    .stat-item:hover {
        border-color: rgba(79, 70, 229, 0.3);
        box-shadow: 0 20px 40px rgba(79, 70, 229, 0.1);
        transform: translateY(-5px);
    }

    .stat-number {
        font-size: 2.2rem;
        font-weight: 800;
        background: var(--cv-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .stat-label {
        font-size: 0.8rem;
        color: var(--cv-text-light);
        text-transform: uppercase;
        letter-spacing: 1.5px;
        font-weight: 600;
        margin-top: 4px;
    }
</style>
@endpush

@section('konten')
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center mb-5 mb-lg-0 fade-in-up">
                <div class="img-hero-container">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Prabowo_Subianto_2024_official_portrait.jpg/250px-Prabowo_Subianto_2024_official_portrait.jpg"
                        alt="Foto Muhammad Rifki Hermmaulana"
                        class="rounded-circle img-hero"
                        id="profile-pic">
                </div>
            </div>
            <div class="col-lg-7 fade-in-up delay-2">
                <span class="hero-badge mb-4">
                    <span class="status-dot"></span>
                    Tersedia untuk kolaborasi
                </span>
                <h1 class="hero-name mt-3 mb-2">Muhammad Rifki<br>Hermmaulana</h1>
                <h3 class="hero-subtitle mb-3" id="job-title"></h3>
                <p class="hero-desc mb-4">
                    Saya adalah mahasiswa D3 Sistem Informasi di Politeknik Negeri Subang.
                    Saya memiliki minat yang besar dalam pengembangan web dan teknologi informasi.
                </p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ url('/cv/kontak') }}" class="btn btn-hero btn-hero-primary">
                        <i class="bi bi-envelope me-2"></i>Hubungi Saya
                    </a>
                    <a href="{{ url('/cv/tentang') }}" class="btn btn-hero btn-hero-outline">
                        <i class="bi bi-person me-2"></i>Tentang Saya
                    </a>
                </div>
            </div>
        </div>

        {{-- Statistik --}}
        <div class="row g-3 mt-5 stat-section fade-in-up delay-3">
            <div class="col-4">
                <div class="stat-item">
                    <div class="stat-number">6+</div>
                    <div class="stat-label">Keahlian</div>
                </div>
            </div>
            <div class="col-4">
                <div class="stat-item">
                    <div class="stat-number">2</div>
                    <div class="stat-label">Pendidikan</div>
                </div>
            </div>
            <div class="col-4">
                <div class="stat-item">
                    <div class="stat-number">2+</div>
                    <div class="stat-label">Pengalaman</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('extra_js')
<script>
    // Typing Effect
    const jobTitle = document.getElementById("job-title");
    const text = "Mahasiswa Sistem Informasi";
    let idx = 0;

    function typeText() {
        if (idx < text.length) {
            jobTitle.innerHTML = text.slice(0, idx + 1) + '<span class="cursor-blink"></span>';
            idx++;
            setTimeout(typeText, 80);
        } else {
            setTimeout(() => {
                jobTitle.textContent = text;
            }, 1500);
        }
    }
    setTimeout(typeText, 600);

    // Klik foto profil
    document.getElementById("profile-pic").addEventListener("click", function() {
        showToast("✨ Hai! Terima kasih sudah melihat CV saya!");
    });
</script>
@endsection