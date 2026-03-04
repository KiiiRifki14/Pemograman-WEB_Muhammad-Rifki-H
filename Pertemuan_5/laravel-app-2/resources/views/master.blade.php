<!DOCTYPE html>
<html>
<head>
    <title>Master Blade</title>
</head>
<body>

    <header>

        <h2>Blog POLSUB</h2>
        <nav>
            <a href="/blog">HOME</a>
            |
            <a href="/blog/tentang">TENTANG</a>
            |
            <a href="/blog/kontak">KONTAK</a>
        </nav>
    </header>
    <hr/>
    <br/>
    <br/>

    <!-- bagian judul halaman blog -->
    <h3> @yield('judul_halaman') </h3>


    <!-- bagian konten blog -->
    @yield('konten')


    <br/>
    <br/>
    <hr/>
    <footer>
        <p>&copy; <a href="https://www.kakacenco.blogspot.com">www.kakacenco.blogspot.com</a>. 2025</p>
    </footer>

</body>
</html>
