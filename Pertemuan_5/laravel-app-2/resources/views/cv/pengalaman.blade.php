{{-- Halaman Pengalaman --}}
@extends('master')

@section('title', 'Pengalaman - CV Muhammad Rifki Hermmaulana')

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

    .exp-wrapper {
        margin-top: 0;
    }

    .exp-card {
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
    }

    [data-bs-theme="dark"] .exp-card {
        background: rgba(30, 41, 59, 0.8);
        border-color: rgba(255, 255, 255, 0.05);
    }

    .exp-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
        border-color: rgba(79, 70, 229, 0.2);
    }

    .exp-card-top {
        padding: 24px 28px;
        display: flex;
        align-items: center;
        gap: 14px;
        border-bottom: 1px solid var(--cv-border);
    }

    .exp-emoji {
        width: 50px;
        height: 50px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        flex-shrink: 0;
    }

    .exp-title {
        font-weight: 700;
        font-size: 1.1rem;
        color: var(--cv-primary);
        margin-bottom: 2px;
    }

    .exp-year {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--cv-text-light);
    }

    .exp-card-body {
        padding: 24px 28px;
    }

    .exp-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .exp-list li {
        padding: 12px 0 12px 24px;
        position: relative;
        color: var(--cv-text);
        font-size: 0.95rem;
        line-height: 1.6;
        border-bottom: 1px solid var(--cv-border);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .exp-list li:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .exp-list li:hover {
        padding-left: 32px;
        background: rgba(79, 70, 229, 0.03);
        border-radius: 8px;
    }

    .exp-list li::before {
        content: '';
        position: absolute;
        left: 4px;
        top: 50%;
        transform: translateY(-50%);
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--cv-accent);
    }

    .exp-list li a {
        color: var(--cv-accent);
        text-decoration: none;
        font-weight: 500;
        transition: all 0.2s ease;
    }

    .exp-list li a:hover {
        text-decoration: underline;
    }
</style>
@endpush

@section('konten')
<div class="page-header">
    <div class="container">
        <h1 class="fade-in-up"><i class="bi bi-briefcase me-2"></i>Pengalaman</h1>
        <p class="mt-2 fade-in-up delay-1">Pengalaman Organisasi & Proyek</p>
    </div>
</div>

<div class="container" style="max-width: 900px;">
    <div class="exp-wrapper">
        <div class="row g-4 mb-5">

            <div class="col-md-6 fade-in-up delay-2">
                <div class="exp-card h-100">
                    <div class="exp-card-top">
                        <div class="exp-emoji" style="background: rgba(99, 102, 241, 0.1);">🎓</div>
                        <div>
                            <h5 class="exp-title">Panitia MABIM</h5>
                            <span class="exp-year"><i class="bi bi-calendar3"></i> 2024</span>
                        </div>
                    </div>
                    <div class="exp-card-body">
                        <ul class="exp-list">
                            <li>
                                <a href="https://www.instagram.com/kiiirifki_14/p/DO1RqX5EmTN/" target="_blank">
                                    Berpartisipasi aktif dalam kegiatan MABIM
                                </a>
                            </li>
                            <li>Membantu koordinasi acara mahasiswa baru</li>
                            <li>Mengatur logistik dan alur kegiatan</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 fade-in-up delay-3">
                <div class="exp-card h-100">
                    <div class="exp-card-top">
                        <div class="exp-emoji" style="background: rgba(16, 185, 129, 0.1);">💻</div>
                        <div>
                            <h5 class="exp-title">Proyek VBA Excel</h5>
                            <span class="exp-year"><i class="bi bi-calendar3"></i> 2024</span>
                        </div>
                    </div>
                    <div class="exp-card-body">
                        <ul class="exp-list">
                            <li>
                                <a href="https://youtu.be/aDktQDotmQw?si=m-xdg8gIHyFOjR1g" target="_blank">
                                    Membuat aplikasi sederhana menggunakan VBA Excel
                                </a>
                            </li>
                            <li>Mengotomatisasi tugas-tugas administratif</li>
                            <li>Mengembangkan aplikasi otomatisasi laporan sederhana</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection