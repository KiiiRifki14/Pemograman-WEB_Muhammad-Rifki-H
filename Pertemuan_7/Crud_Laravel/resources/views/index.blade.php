<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pegawai</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <div class="page-wrapper">

    {{-- Hero Banner --}}
    <div class="page-hero">
      <div class="hero-icon">👥</div>
      <h1 class="hero-title">Data Pegawai</h1>
      <p class="hero-subtitle">Kelola seluruh informasi pegawai perusahaan dengan mudah</p>
      <div class="hero-stats">
        <div class="stat-item">
          <span class="stat-dot"></span>
          <span>{{ count($pegawai) }} Total Pegawai</span>
        </div>
        <div class="stat-item" style="color: var(--clr-border-2)">|</div>
        <div class="stat-item">
          <span>Sistem Manajemen SDM</span>
        </div>
      </div>
    </div>

    {{-- Table Card --}}
    <div class="card">
      <div class="toolbar">
        <span class="toolbar-title">Daftar Pegawai &mdash; {{ count($pegawai) }} data</span>
        <a href="/pegawai/tambah" class="btn btn-primary">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          Tambah Pegawai
        </a>
      </div>

      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th style="width:40px">#</th>
              <th>Nama Pegawai</th>
              <th>Jabatan</th>
              <th>Umur</th>
              <th>Alamat</th>
              <th style="width:130px;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse($pegawai as $p)
            <tr @if($loop->iteration > 10) class="hidden-row" style="display:none" @endif>
              <td class="td-muted">{{ $loop->iteration }}</td>
              <td class="td-name">{{ $p->pegawai_nama }}</td>
              <td><span class="badge-jabatan">{{ $p->pegawai_jabatan }}</span></td>
              <td class="td-muted">{{ $p->pegawai_umur }}</td>
              <td class="td-muted">{{ $p->pegawai_alamat }}</td>
              <td class="td-actions">
                <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-ghost btn-sm">Edit</a>
                <button class="btn btn-ghost btn-sm" style="color:var(--clr-danger); border-color:rgba(248,81,73,.3);"
                  onclick="openModal('/pegawai/hapus/{{ $p->pegawai_id }}', '{{ addslashes($p->pegawai_nama) }}')">
                  Hapus
                </button>
              </td>
            </tr>
            @empty
            <tr class="empty-row">
              <td colspan="6">
                <span class="empty-icon">📋</span>
                Belum ada data pegawai.
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      @if(count($pegawai) > 10)
      <div class="load-more-bar">
        <button class="btn btn-ghost" onclick="showAll(this)" id="loadMoreBtn">
          Tampilkan semua ({{ count($pegawai) - 10 }} lainnya)
        </button>
      </div>
      @endif
    </div>

  </div>{{-- end page-wrapper --}}

  {{-- ── Toast Notification ── --}}
  <div class="toast-wrap">
    <div id="toast" class="toast">
      <div class="toast-icon">✓</div>
      <span id="toastMsg">Berhasil!</span>
    </div>
  </div>

  {{-- ── Confirm Delete Modal ── --}}
  <div id="modalBackdrop" class="modal-backdrop">
    <div class="modal">
      <div class="modal-danger-icon">🗑️</div>
      <h2 class="modal-title">Hapus Data Pegawai?</h2>
      <p class="modal-desc" id="modalDesc">Apakah Anda yakin ingin menghapus data ini? Tindakan ini tidak dapat dibatalkan.</p>
      <div class="modal-actions">
        <button class="btn btn-ghost" onclick="closeModal()">Tidak, Batal</button>
        <a id="modalConfirmBtn" href="#" class="btn btn-danger">Ya, Hapus</a>
      </div>
    </div>
  </div>

  <script>
    // Show All Rows
    function showAll(btn) {
      document.querySelectorAll('.hidden-row').forEach(r => r.style.display = '');
      btn.closest('.load-more-bar').style.display = 'none';
    }

    // Toast
    function showToast(msg) {
      const t = document.getElementById('toast');
      document.getElementById('toastMsg').textContent = msg;
      t.classList.add('show');
      setTimeout(() => t.classList.remove('show'), 3800);
    }

    // Modal
    function openModal(url, nama) {
      document.getElementById('modalConfirmBtn').href = url;
      document.getElementById('modalDesc').textContent = 'Apakah Anda yakin ingin menghapus data pegawai "' + nama + '"? Tindakan ini tidak dapat dibatalkan.';
      document.getElementById('modalBackdrop').classList.add('open');
    }
    function closeModal() {
      document.getElementById('modalBackdrop').classList.remove('open');
    }
    // Tutup modal jika klik backdrop
    document.getElementById('modalBackdrop').addEventListener('click', function(e) {
      if (e.target === this) closeModal();
    });
  </script>

  @if(session('success'))
  <script>
    document.addEventListener('DOMContentLoaded', () => showToast("{{ session('success') }}"));
  </script>
  @endif

</body>
</html>
