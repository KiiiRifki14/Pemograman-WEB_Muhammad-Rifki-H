{{-- Halaman Tentang / Data Pribadi --}}
@extends('master')

@section('title', 'Tentang Saya - CV Muhammad Rifki Hermmaulana')

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

    .info-row {
        display: flex;
        align-items: flex-start;
        padding: 16px 0;
        border-bottom: 1px solid var(--cv-border);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .info-row:hover {
        background: rgba(79, 70, 229, 0.05);
        padding-left: 15px;
        border-radius: 12px;
        margin: 0 -15px;
        padding-right: 15px;
        border-bottom-color: transparent;
    }

    .info-row:last-child {
        border-bottom: none;
    }

    .info-icon {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: var(--cv-accent-soft);
        color: var(--cv-accent);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        flex-shrink: 0;
        margin-right: 14px;
    }

    .info-label {
        font-weight: 600;
        color: var(--cv-text-light);
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .info-value {
        font-weight: 500;
        color: var(--cv-primary);
        font-size: 0.95rem;
    }

    .hobby-chip {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 22px;
        border-radius: 12px;
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        border: 1px solid var(--cv-border);
        background: var(--cv-surface);
        color: var(--cv-text);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.02);
    }

    .hobby-chip:hover {
        border-color: var(--cv-accent);
        color: var(--cv-accent);
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(79, 70, 229, 0.12);
    }

    .profile-aside {
        border-radius: 24px;
        overflow: hidden;
        border: 5px solid var(--cv-surface);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .profile-aside:hover {
        transform: scale(1.03) rotate(1deg);
    }
</style>
@endpush

@section('konten')
<div class="page-header">
    <div class="container">
        <h1 class="fade-in-up"><i class="bi bi-person-circle me-2"></i>Tentang Saya</h1>
        <p class="mt-2 fade-in-up delay-1">Informasi Data Pribadi</p>
    </div>
</div>

<div class="container" style="max-width: 900px;">
    <div class="content-card fade-in-up delay-2">
        <h4 class="section-title">Data Pribadi</h4>

        <div class="row">
            <div class="col-lg-7">
                <div class="info-row">
                    <div class="info-icon"><i class="bi bi-person"></i></div>
                    <div>
                        <div class="info-label">Nama Lengkap</div>
                        <div class="info-value">Muhammad Rifki Hermmaulana</div>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-icon"><i class="bi bi-calendar-event"></i></div>
                    <div>
                        <div class="info-label">Tempat, Tanggal Lahir</div>
                        <div class="info-value">Subang, 14 Juni 2005</div>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-icon"><i class="bi bi-clock"></i></div>
                    <div>
                        <div class="info-label">Usia</div>
                        <div class="info-value" id="usia-display"></div>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-icon"><i class="bi bi-geo-alt"></i></div>
                    <div>
                        <div class="info-label">Alamat</div>
                        <div class="info-value">Desa Babakan Bandung, Kec. Kalijati</div>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-icon"><i class="bi bi-telephone"></i></div>
                    <div>
                        <div class="info-label">Nomor Telepon</div>
                        <div class="info-value">0882-2048-7058</div>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-icon"><i class="bi bi-gender-male"></i></div>
                    <div>
                        <div class="info-label">Jenis Kelamin</div>
                        <div class="info-value">Laki-laki</div>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-icon"><i class="bi bi-moon-stars"></i></div>
                    <div>
                        <div class="info-label">Agama</div>
                        <div class="info-value">Islam</div>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-icon"><i class="bi bi-flag"></i></div>
                    <div>
                        <div class="info-label">Kewarganegaraan</div>
                        <div class="info-value">Indonesia</div>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-icon"><i class="bi bi-envelope"></i></div>
                    <div>
                        <div class="info-label">Email</div>
                        <div class="info-value">muhammadrifki08t@Gmail.com</div>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-icon"><i class="bi bi-heart"></i></div>
                    <div>
                        <div class="info-label">Status</div>
                        <div class="info-value">Belum Menikah</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0 text-center d-flex align-items-center justify-content-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Prabowo_Subianto_2024_official_portrait.jpg/250px-Prabowo_Subianto_2024_official_portrait.jpg"
                    alt="Muhammad Rifki"
                    class="profile-aside shadow-sm"
                    style="width: 100%; max-width: 260px; object-fit: cover;">
            </div>
        </div>
    </div>

    {{-- Hobi --}}
    <div class="content-card mt-4 mb-5 fade-in-up delay-3" style="margin-top: 20px !important;">
        <h4 class="section-title">Hobi</h4>
        <div class="d-flex flex-wrap gap-3">
            <span class="hobby-chip">📖 Membaca Buku</span>
            <span class="hobby-chip">✈️ Travelling</span>
            <span class="hobby-chip">💻 Coding</span>
        </div>
    </div>
</div>
@endsection

@section('extra_js')
<script>
    const birthDate = new Date("2005-06-14");
    const today = new Date();
    let age = today.getFullYear() - birthDate.getFullYear();
    const m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) age--;
    document.getElementById("usia-display").textContent = age + " Tahun";
</script>
@endsection