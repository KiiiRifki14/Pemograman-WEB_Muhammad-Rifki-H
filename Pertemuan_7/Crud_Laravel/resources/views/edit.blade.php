<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Pegawai</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="theme-orange">
 
  <div class="wrapper">
    <div class="header">
      <h2>Edit Data Pegawai</h2>
    </div>
    
    <div class="container">
      @foreach($pegawai as $p)
      <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        
        <label>Nama Lengkap</label>
        <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
        
        <label>Jabatan</label>
        <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
        
        <label>Umur (Tahun)</label>
        <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
        
        <label>Alamat Lengkap</label>
        <textarea required="required" name="alamat" rows="3">{{ $p->pegawai_alamat }}</textarea>
        
        <div class="btn-group">
          <a href="/pegawai" class="btn-kembali">Batal</a>
          <input type="submit" value="Simpan Perubahan">
        </div>
      </form>
      @endforeach
    </div>
  </div>
 
</body>
</html>
