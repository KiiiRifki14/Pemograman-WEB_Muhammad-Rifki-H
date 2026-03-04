<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>INI HALAMAN MAHASISWA</h1>
    <a href="www.polsub.ac.id">web Polsub</a>
    <br>
    <p> Nama : {{ $nama }}</p>
     <p>Hobi Mahasiswa</p>
    <ul>
        @foreach($hobi as $h)
        <li>
            {{ $h }}
        </li>
	@endforeach
    </ul>
</body>
</html>
