<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Pegawai</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
 
  <div class="wrapper">
    <div class="header">
      <h2>Tambah Data Pegawai</h2>
    </div>
    
    <div class="container">
      <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        
        <label>Nama Lengkap</label>
        <input type="text" name="nama" required="required" placeholder="Masukkan nama pegawai" autocomplete="off">
        
        <label>Jabatan</label>
        <input type="text" name="jabatan" required="required" placeholder="Contoh: Web Developer" autocomplete="off">
        
        <label>Umur (Tahun)</label>
        <input type="number" name="umur" required="required" placeholder="25">
        
        <label>Alamat Lengkap</label>
        <textarea name="alamat" required="required" rows="3" placeholder="Masukkan alamat domisili..."></textarea>
        
        <div class="btn-group">
          <a href="/pegawai" class="btn-kembali">Batal</a>
          <input type="submit" value="Simpan Pegawai">
        </div>
      </form>
    </div>
  </div>
 
</body>
</html>
