<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pegawai - Belajar CRUD</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <div class="wrapper wrapper-wide">
    <div class="header header-wide">
      <h2 class="title-wide">POLSUB Data Center</h2>
      <h3>Sistem Manajemen Pegawai</h3>
    </div>
    
    <div class="container container-glass">
      <div class="action-bar">
        <a href="/pegawai/tambah" class="btn-tambah">+ Tambah Pegawai Baru</a>
      </div>
      
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>Nama Pegawai</th>
              <th>Jabatan</th>
              <th>Umur</th>
              <th>Alamat</th>
              <th style="width: 160px; text-align: center;">Opsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pegawai as $p)
            <tr @if($loop->iteration > 10) class="hidden-row" style="display: none;" @endif>
              <td style="font-weight: 500;">{{ $p->pegawai_nama }}</td>
              <td><span style="color: var(--primary); background: #eef2ff; padding: 4px 10px; border-radius: 6px; font-size: 13px;">{{ $p->pegawai_jabatan }}</span></td>
              <td>{{ $p->pegawai_umur }}</td>
              <td>{{ $p->pegawai_alamat }}</td>
              <td style="text-align: center;">
                <a class="badge btn-edit" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                <a class="badge btn-hapus" href="javascript:void(0)" onclick="openConfirmModal('/pegawai/hapus/{{ $p->pegawai_id }}')">Hapus</a>
              </td>
            </tr>
            @endforeach
            @if(count($pegawai) == 0)
            <tr>
              <td colspan="5" style="text-align: center; padding: 30px; color: var(--text-muted);">Belum ada data pegawai.</td>
            </tr>
            @endif
          </tbody>
        </table>
        
        @if(count($pegawai) > 10)
        <div style="text-align: center; padding: 15px; background: #f8fafc; border-top: 1px solid #e5e7eb;">
          <button id="btn-lihat-lainnya" class="btn-lihat-lainnya" onclick="showAllRows()">
            Lihat lainnya ({{ count($pegawai) - 10 }} lagi)
          </button>
        </div>
        @endif
      </div>
    </div>
  </div>

  <!-- Custom Elements: Toast & Modal -->
  <div class="toast-container">
    <div id="customToast" class="toast">
      <span style="font-size: 22px; font-weight: bold;">✓</span>
      <span id="toastMessage">Berhasil!</span>
    </div>
  </div>

  <div id="customConfirmModal" class="modal-overlay">
    <div class="modal-box">
      <div class="modal-icon">!</div>
      <h3 class="modal-title">Yakin Mau Hapus?</h3>
      <p class="modal-text">Data yang sudah dihapus tidak bisa dikembalikan lagi, lho!</p>
      <div class="modal-actions">
        <button class="modal-btn modal-btn-cancel" onclick="closeConfirmModal()">Batal</button>
        <button id="confirmDeleteBtn" class="modal-btn modal-btn-confirm">Ya, Hapus Data</button>
      </div>
    </div>
  </div>

  <script>
    // Logika Tabel Lihat Lainnya
    function showAllRows() {
        const rows = document.querySelectorAll('.hidden-row');
        rows.forEach(row => row.style.display = 'table-row');
        const btn = document.getElementById('btn-lihat-lainnya');
        if (btn) btn.style.display = 'none';
    }

    // Logika Toast Notification
    function showToast(message) {
      const toast = document.getElementById('customToast');
      document.getElementById('toastMessage').innerText = message;
      toast.classList.add('show');
      setTimeout(() => {
        toast.classList.remove('show');
      }, 3500);
    }

    // Logika Custom Confirm Modal
    function openConfirmModal(url) {
      const modal = document.getElementById('customConfirmModal');
      const confirmBtn = document.getElementById('confirmDeleteBtn');
      confirmBtn.onclick = function() {
        window.location.href = url;
      };
      modal.classList.add('show');
    }

    function closeConfirmModal() {
      const modal = document.getElementById('customConfirmModal');
      modal.classList.remove('show');
    }
  </script>

  @if(session('success'))
  <script>
      // Jalankan toast otomatis saat halaman diload dan ada pesan sukses
      document.addEventListener("DOMContentLoaded", function() {
          showToast("{{ session('success') }}");
      });
  </script>
  @endif
 
</body>
</html>
