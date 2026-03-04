{{-- Halaman Kontak --}}
@extends('master')

@section('title', 'Kontak - CV Muhammad Rifki Hermmaulana')

@push('extra_css')
<style>
    .page-header {
        padding: 40px 0 35px;
        text-align: center;
        background: linear-gradient(135deg, var(--cv-accent-soft) 0%, rgba(255, 255, 255, 0) 100%);
        border-bottom: none;
    }

    [data-bs-theme="dark"] .page-header {
        background: linear-gradient(135deg, rgba(79, 70, 229, 0.1) 0%, rgba(15, 23, 42, 0) 100%);
    }

    .page-header h1 {
        font-weight: 800;
        font-size: 2.5rem;
        color: var(--cv-primary);
        letter-spacing: -1px;
    }

    .page-header p {
        color: var(--cv-text-light);
        font-size: 1.1rem;
        margin-bottom: 0;
    }

    .contact-wrapper {
        margin-top: 0;
    }

    .contact-card {
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        padding: 40px 25px;
        text-align: center;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
    }

    [data-bs-theme="dark"] .contact-card {
        background: rgba(30, 41, 59, 0.8);
        border-color: rgba(255, 255, 255, 0.05);
    }

    .contact-card:hover {
        transform: translateY(-8px);
        border-color: rgba(79, 70, 229, 0.3);
        box-shadow: 0 20px 50px rgba(79, 70, 229, 0.1);
    }

    .contact-icon {
        width: 70px;
        height: 70px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6rem;
        color: #fff;
        margin: 0 auto 18px;
        transition: transform 0.3s ease;
    }

    .contact-card:hover .contact-icon {
        transform: scale(1.05) rotate(3deg);
    }

    .contact-label {
        font-weight: 700;
        font-size: 1rem;
        color: var(--cv-primary);
        margin-bottom: 6px;
    }

    .contact-value {
        color: var(--cv-text-light);
        font-size: 0.85rem;
        line-height: 1.4;
    }

    .contact-hint {
        font-size: 0.75rem;
        margin-top: 14px;
        padding: 4px 12px;
        border-radius: 8px;
        display: inline-block;
        font-weight: 500;
        background: var(--cv-accent-soft);
        color: var(--cv-accent);
    }
</style>
@endpush

@section('konten')
<div class="page-header">
    <div class="container">
        <h1 class="fade-in-up"><i class="bi bi-envelope me-2"></i>Hubungi Saya</h1>
        <p class="mt-2 fade-in-up delay-1">Jangan ragu untuk menghubungi saya</p>
    </div>
</div>

<div class="container" style="max-width: 950px;">
    <div class="contact-wrapper">
        <div class="row g-4 mb-5">

            <div class="col-md-6 col-lg-3 fade-in-up delay-1">
                <div class="contact-card" id="contact-phone">
                    <div class="contact-icon" style="background: linear-gradient(135deg, #6366f1, #818cf8);">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="contact-label">Telepon</div>
                    <div class="contact-value">0882-2048-7058</div>
                    <span class="contact-hint">📋 Klik untuk salin</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fade-in-up delay-2">
                <div class="contact-card" id="contact-email">
                    <div class="contact-icon" style="background: linear-gradient(135deg, #ec4899, #f472b6);">
                        <i class="bi bi-envelope-at-fill"></i>
                    </div>
                    <div class="contact-label">Email</div>
                    <div class="contact-value">muhammadrifki08t @Gmail.com</div>
                    <span class="contact-hint">✉️ Klik untuk kirim</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fade-in-up delay-3">
                <div class="contact-card" id="contact-github">
                    <div class="contact-icon" style="background: linear-gradient(135deg, #1e293b, #475569);">
                        <i class="bi bi-github"></i>
                    </div>
                    <div class="contact-label">GitHub</div>
                    <div class="contact-value">github.com /kiiirifki14</div>
                    <span class="contact-hint">🔗 Klik untuk buka</span>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 fade-in-up delay-4">
                <div class="contact-card">
                    <div class="contact-icon" style="background: linear-gradient(135deg, #10b981, #34d399);">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="contact-label">Alamat</div>
                    <div class="contact-value">Desa Kalijati Barat, Kec. Kalijati, Subang</div>
                    <span class="contact-hint">📍 Jawa Barat</span>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('extra_js')
<script>
    document.getElementById("contact-phone").addEventListener("click", function() {
        navigator.clipboard.writeText("088220487058").then(() => {
            showToast("📋 Nomor telepon disalin ke clipboard!");
        });
    });

    document.getElementById("contact-email").addEventListener("click", function() {
        window.location.href = "mailto:muhammadrifki08t@Gmail.com";
        showToast("✉️ Membuka email...");
    });

    document.getElementById("contact-github").addEventListener("click", function() {
        window.open("https://github.com/kiiirifki14", "_blank");
        showToast("🔗 Membuka GitHub...");
    });
</script>
@endsection