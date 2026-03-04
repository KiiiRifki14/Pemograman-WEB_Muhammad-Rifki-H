{{-- Halaman Keahlian --}}
@extends('master')

@section('title', 'Keahlian - CV Muhammad Rifki Hermmaulana')

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

    .skill-row {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 20px 0;
        border-bottom: 1px solid var(--cv-border);
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .skill-row:hover {
        background: rgba(79, 70, 229, 0.05);
        padding-left: 15px;
        border-radius: 16px;
        margin: 0 -15px;
        padding-right: 15px;
        border-bottom-color: transparent;
        transform: translateX(5px);
    }

    .skill-row:last-child {
        border-bottom: none;
    }

    .skill-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        color: #fff;
        flex-shrink: 0;
    }

    .skill-name {
        font-weight: 600;
        font-size: 0.95rem;
        color: var(--cv-primary);
        margin-bottom: 6px;
    }

    .progress {
        height: 10px;
        border-radius: 5px;
        background: var(--cv-border);
        overflow: hidden;
    }

    .progress-bar {
        border-radius: 5px;
        transition: width 1.5s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
        overflow: hidden;
    }

    .progress-bar::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0) 100%);
        animation: shimmer 2.5s infinite;
    }

    @keyframes shimmer {
        0% {
            transform: translateX(-150%) skewX(-20deg);
        }

        100% {
            transform: translateX(150%) skewX(-20deg);
        }
    }

    .skill-percent {
        font-weight: 700;
        font-size: 1rem;
        min-width: 45px;
        text-align: right;
        color: var(--cv-text-light);
    }
</style>
@endpush

@section('konten')
<div class="page-header">
    <div class="container">
        <h1 class="fade-in-up"><i class="bi bi-stars me-2"></i>Keahlian</h1>
        <p class="mt-2 fade-in-up delay-1">Kemampuan dan Kompetensi Saya</p>
    </div>
</div>

<div class="container" style="max-width: 800px;">
    <div class="content-card fade-in-up delay-2 mb-5">

        <div class="skill-row">
            <div class="skill-icon" style="background: linear-gradient(135deg, #6366f1, #818cf8);">
                <i class="bi bi-file-earmark-spreadsheet"></i>
            </div>
            <div class="flex-grow-1">
                <div class="skill-name">Microsoft Office</div>
                <div class="progress">
                    <div class="progress-bar" style="width: 0%; background: linear-gradient(90deg, #6366f1, #818cf8);" data-width="90"></div>
                </div>
            </div>
            <div class="skill-percent">90%</div>
        </div>

        <div class="skill-row">
            <div class="skill-icon" style="background: linear-gradient(135deg, #10b981, #34d399);">
                <i class="bi bi-router"></i>
            </div>
            <div class="flex-grow-1">
                <div class="skill-name">Konfigurasi Mikrotik</div>
                <div class="progress">
                    <div class="progress-bar" style="width: 0%; background: linear-gradient(90deg, #10b981, #34d399);" data-width="80"></div>
                </div>
            </div>
            <div class="skill-percent">80%</div>
        </div>

        <div class="skill-row">
            <div class="skill-icon" style="background: linear-gradient(135deg, #8b5cf6, #a78bfa);">
                <i class="bi bi-palette"></i>
            </div>
            <div class="flex-grow-1">
                <div class="skill-name">Desain Grafis</div>
                <div class="progress">
                    <div class="progress-bar" style="width: 0%; background: linear-gradient(90deg, #8b5cf6, #a78bfa);" data-width="76"></div>
                </div>
            </div>
            <div class="skill-percent">76%</div>
        </div>

        <div class="skill-row">
            <div class="skill-icon" style="background: linear-gradient(135deg, #f59e0b, #fbbf24);">
                <i class="bi bi-pc-display"></i>
            </div>
            <div class="flex-grow-1">
                <div class="skill-name">Rakit PC</div>
                <div class="progress">
                    <div class="progress-bar" style="width: 0%; background: linear-gradient(90deg, #f59e0b, #fbbf24);" data-width="70"></div>
                </div>
            </div>
            <div class="skill-percent">70%</div>
        </div>

        <div class="skill-row">
            <div class="skill-icon" style="background: linear-gradient(135deg, #3b82f6, #60a5fa);">
                <i class="bi bi-people"></i>
            </div>
            <div class="flex-grow-1">
                <div class="skill-name">Kepemimpinan</div>
                <div class="progress">
                    <div class="progress-bar" style="width: 0%; background: linear-gradient(90deg, #3b82f6, #60a5fa);" data-width="70"></div>
                </div>
            </div>
            <div class="skill-percent">70%</div>
        </div>

        <div class="skill-row">
            <div class="skill-icon" style="background: linear-gradient(135deg, #14b8a6, #2dd4bf);">
                <i class="bi bi-hand-thumbs-up"></i>
            </div>
            <div class="flex-grow-1">
                <div class="skill-name">Kolaborasi</div>
                <div class="progress">
                    <div class="progress-bar" style="width: 0%; background: linear-gradient(90deg, #14b8a6, #2dd4bf);" data-width="63"></div>
                </div>
            </div>
            <div class="skill-percent">63%</div>
        </div>

    </div>
</div>
@endsection

@section('extra_js')
<script>
    setTimeout(() => {
        document.querySelectorAll('.progress-bar').forEach(bar => {
            bar.style.width = bar.getAttribute('data-width') + '%';
        });
    }, 400);
</script>
@endsection