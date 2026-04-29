<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pegawai</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <div class="page-wrapper page-wrapper-sm">

    <a href="/pegawai" class="page-back">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"/></svg>
      Kembali ke Daftar Pegawai
    </a>

    <div class="page-header">
      <h1 class="page-title">Tambah Pegawai Baru</h1>
      <p class="page-subtitle">Isi data pegawai dengan lengkap dan benar</p>
    </div>

    <div class="card">
      <div class="form-section">
        <form action="/pegawai/store" method="post">
          {{ csrf_field() }}

          <div class="form-group">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required placeholder="Masukkan nama lengkap pegawai" autocomplete="off">
          </div>

          <div class="form-group">
            <label class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" required placeholder="Contoh: Web Developer" autocomplete="off">
          </div>

          <div class="form-group">
            <label class="form-label">Umur</label>
            <input type="number" name="umur" class="form-control" required placeholder="25" min="17" max="70">
          </div>

          <div class="form-group">
            <label class="form-label">Alamat Lengkap</label>
            <textarea name="alamat" class="form-control" required rows="3" placeholder="Masukkan alamat domisili..."></textarea>
          </div>

          <div class="form-divider"></div>

          <div class="form-actions">
            <a href="/pegawai" class="btn btn-ghost" style="flex:1; justify-content:center; padding:11px;">Batal</a>
            <button type="submit" class="btn btn-primary btn-submit" style="flex:2;">Simpan Data Pegawai</button>
          </div>

        </form>
      </div>
    </div>

  </div>

</body>
</html>
