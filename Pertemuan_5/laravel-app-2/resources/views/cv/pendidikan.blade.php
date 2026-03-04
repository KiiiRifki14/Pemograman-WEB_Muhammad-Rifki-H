{{-- Halaman Pendidikan --}}
@extends('master')

@section('title', 'Pendidikan - CV Muhammad Rifki Hermmaulana')

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

    .content-card {
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 24px;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        padding: 40px;
        margin-top: 0;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
    }

    [data-bs-theme="dark"] .content-card {
        background: rgba(30, 41, 59, 0.8);
        border-color: rgba(255, 255, 255, 0.05);
    }

    /* Timeline */
    .timeline {
        position: relative;
        padding-left: 50px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 18px;
        top: 10px;
        bottom: 10px;
        width: 3px;
        background: linear-gradient(to bottom, var(--cv-accent), rgba(99, 102, 241, 0.1));
        border-radius: 3px;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 40px;
        padding: 30px;
        background: var(--cv-bg);
        border: 1px solid var(--cv-border);
        border-radius: 20px;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .timeline-item:hover {
        border-color: rgba(79, 70, 229, 0.3);
        box-shadow: 0 10px 30px rgba(79, 70, 229, 0.08);
        transform: translateX(8px);
        background: var(--cv-surface);
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -42px;
        top: 36px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: var(--cv-accent);
        border: 4px solid var(--cv-surface);
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        transition: all 0.3s ease;
    }

    .timeline-item:hover::before {
        transform: scale(1.2);
        box-shadow: 0 0 0 5px rgba(79, 70, 229, 0.3);
    }

    .timeline-item:last-child {
        margin-bottom: 0;
    }

    .edu-icon {
        width: 50px;
        height: 50px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.3rem;
        flex-shrink: 0;
    }

    .edu-title {
        font-weight: 700;
        font-size: 1.15rem;
        color: var(--cv-primary);
    }

    .edu-program {
        color: var(--cv-accent);
        font-weight: 600;
        font-size: 0.9rem;
    }

    .edu-year {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        background: var(--cv-accent-soft);
        color: var(--cv-accent);
        padding: 4px 14px;
        border-radius: 8px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .edu-desc {
        color: var(--cv-text-light);
        font-size: 0.9rem;
        line-height: 1.6;
    }
</style>
@endpush

@section('konten')
<div class="page-header">
    <div class="container">
        <h1 class="fade-in-up"><i class="bi bi-mortarboard me-2"></i>Pendidikan</h1>
        <p class="mt-2 fade-in-up delay-1">Riwayat Pendidikan Formal</p>
    </div>
</div>

<div class="container" style="max-width: 800px;">
    <div class="content-card fade-in-up delay-2 mb-5">
        <div class="timeline">

            <div class="timeline-item fade-in-up delay-2">
                <div class="d-flex gap-3 align-items-start">
                    <div class="edu-icon" style="background: var(--cv-gradient);">
                        <i class="bi bi-building"></i>
                    </div>
                    <div>
                        <h5 class="edu-title mb-1">Politeknik Negeri Subang</h5>
                        <p class="edu-program mb-2">D3 Sistem Informasi</p>
                        <span class="edu-year mb-2">
                            <i class="bi bi-calendar3"></i> 2024 - Sekarang
                        </span>
                        <p class="edu-desc mt-3 mb-0">
                            Sedang menempuh pendidikan diploma di bidang Sistem Informasi,
                            mempelajari pengembangan web, basis data, dan teknologi informasi.
                        </p>
                    </div>
                </div>
            </div>

            <div class="timeline-item fade-in-up delay-3">
                <div class="d-flex gap-3 align-items-start">
                    <div class="edu-icon" style="background: linear-gradient(135deg, #10b981, #34d399);">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <div>
                        <h5 class="edu-title mb-1">SMKS Yadika Kalijati</h5>
                        <p class="edu-program mb-2" style="color: #10b981;">Teknik Komputer dan Jaringan (TKJ)</p>
                        <span class="edu-year mb-2" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
                            <i class="bi bi-calendar3"></i> 2021 - 2024
                        </span>
                        <p class="edu-desc mt-3 mb-0">
                            Mempelajari konfigurasi jaringan, perakitan komputer,
                            dan dasar-dasar teknologi informasi.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection