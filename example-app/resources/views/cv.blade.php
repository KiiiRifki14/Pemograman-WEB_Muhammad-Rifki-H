<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curriculum Vitae - Muhammad Rifki Hermmaulana</title>

    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body {
        font-family: "Segoe UI", Arial, sans-serif;
        background-color: #d1c6c6;
        padding: 40px 0;
        display: flex;
        justify-content: center;
        transition: background-color 0.4s ease;
      }

      #container {
        display: flex;
        width: 800px;
        background-color: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        transition: background-color 0.4s ease;
      }

      /* Panel Kiri */
      #left-panel {
        background-color: #2c3e50;
        color: white;
        width: 35%;
        padding: 30px;
        text-align: center;
        transition: background-color 0.4s ease;
      }

      #left-panel img {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        border: 4px solid #34495e;
        object-fit: cover;
        margin-bottom: 15px;
        cursor: pointer;
        transition:
          transform 0.4s ease,
          box-shadow 0.4s ease,
          border-color 0.4s ease;
      }

      #left-panel img:hover {
        transform: scale(1.1);
        box-shadow: 0 0 20px rgba(52, 152, 219, 0.5);
        border-color: #3498db;
      }

      #left-panel h1 {
        font-size: 22px;
        margin: 10px 0 5px 0;
        text-transform: uppercase;
      }

      #left-panel h2 {
        font-size: 14px;
        font-weight: normal;
        color: #bdc3c7;
        margin-bottom: 20px;
        min-height: 20px;
      }

      #left-panel h2 .cursor-blink {
        display: inline-block;
        width: 2px;
        height: 14px;
        background-color: #3498db;
        margin-left: 2px;
        animation: blink 0.7s infinite;
        vertical-align: middle;
      }

      @keyframes blink {
        0%,
        100% {
          opacity: 1;
        }
        50% {
          opacity: 0;
        }
      }

      #left-panel p {
        font-size: 13px;
        line-height: 1.5;
        margin-bottom: 20px;
        text-align: justify;
      }

      #left-panel h3 {
        font-size: 16px;
        border-bottom: 1px solid white;
        padding-bottom: 5px;
        margin-top: 30px;
        margin-bottom: 15px;
        text-align: left;
      }

      /* Skill Bars */
      .skill-item {
        text-align: left;
        margin-bottom: 10px;
      }

      .skill-name {
        font-size: 13px;
        display: block;
        margin-bottom: 4px;
      }

      .skill-bar {
        width: 100%;
        height: 8px;
        background-color: rgba(255, 255, 255, 0.15);
        border-radius: 4px;
        overflow: hidden;
      }

      .skill-fill {
        height: 100%;
        width: 0%;
        background: linear-gradient(90deg, #3498db, #2ecc71);
        border-radius: 4px;
        transition: width 1.2s ease;
      }

      /* Kontak */
      #contact-info {
        text-align: left;
        font-size: 13px;
      }

      #contact-info p {
        margin: 8px 0;
      }

      .contact-item {
        position: relative;
        cursor: pointer;
        padding: 5px 8px;
        border-radius: 6px;
        transition:
          background-color 0.3s ease,
          transform 0.2s ease;
      }

      .contact-item:hover {
        background-color: rgba(255, 255, 255, 0.1);
        transform: translateX(5px);
      }

      .contact-item[data-tooltip]:hover::after {
        content: attr(data-tooltip);
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 4px 10px;
        border-radius: 4px;
        font-size: 11px;
        white-space: nowrap;
        z-index: 10;
      }

      /* Panel Kanan */
      #right-panel {
        background-color: white;
        color: #333;
        width: 65%;
        padding: 40px;
        transition:
          background-color 0.4s ease,
          color 0.4s ease;
      }

      /* Section Scroll Reveal */
      .section {
        opacity: 0;
        transform: translateY(25px);
        transition:
          opacity 0.6s ease,
          transform 0.6s ease;
      }

      .section.visible {
        opacity: 1;
        transform: translateY(0);
      }

      #right-panel h3 {
        font-size: 18px;
        color: #2c3e50;
        border-bottom: 2px solid #2c3e50;
        padding-bottom: 5px;
        margin-top: 30px;
        margin-bottom: 15px;
        text-transform: uppercase;
        transition:
          color 0.4s ease,
          border-color 0.4s ease;
      }

      #data-pribadi-header {
        margin-top: 0 !important;
      }

      table {
        width: 100%;
        font-size: 14px;
        border-collapse: collapse;
      }

      td {
        padding: 6px 0;
        vertical-align: top;
      }

      td:first-child {
        width: 180px;
        font-weight: bold;
        color: #555;
        transition: color 0.4s ease;
      }

      #right-panel ul {
        padding-left: 20px;
        margin: 0;
      }

      #right-panel li {
        margin-bottom: 10px;
        font-size: 14px;
        transition: transform 0.2s ease;
      }

      #right-panel li:hover {
        transform: translateX(5px);
      }

      h4 {
        font-size: 16px;
        margin: 15px 0 2px 0;
        color: #2c3e50;
        transition: color 0.4s ease;
      }

      i {
        font-size: 13px;
        color: #7f8c8d;
        display: block;
        margin-bottom: 5px;
      }

      #right-panel a {
        color: #2c3e50;
        text-decoration: none;
        border-bottom: 1px dashed #3498db;
        transition:
          color 0.3s ease,
          border-color 0.3s ease;
      }

      #right-panel a:hover {
        color: #3498db;
        border-bottom-style: solid;
      }

      body.dark-mode #right-panel a {
        color: #e0e0e0;
        border-bottom-color: #e94560;
      }

      body.dark-mode #right-panel a:hover {
        color: #e94560;
      }

      /* Toast Notification */
      #toast {
        position: fixed;
        bottom: 80px;
        left: 50%;
        transform: translateX(-50%) translateY(20px);
        background-color: #2c3e50;
        color: white;
        padding: 10px 24px;
        border-radius: 8px;
        font-size: 14px;
        opacity: 0;
        pointer-events: none;
        transition:
          opacity 0.3s ease,
          transform 0.3s ease;
        z-index: 1000;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      }

      #toast.show {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
      }

      /* Dark Mode */
      body.dark-mode {
        background-color: #1a1a2e;
      }

      body.dark-mode #container {
        background-color: #16213e;
      }

      body.dark-mode #left-panel {
        background-color: #0f3460;
      }

      body.dark-mode #right-panel {
        background-color: #16213e;
        color: #e0e0e0;
      }

      body.dark-mode #right-panel h3 {
        color: #e94560;
        border-bottom-color: #e94560;
      }

      body.dark-mode h4 {
        color: #e94560;
      }

      body.dark-mode td:first-child {
        color: #bbb;
      }

      body.dark-mode #toast {
        background-color: #e94560;
      }

      /* Floating Action Buttons */
      #fab-container {
        position: fixed;
        bottom: 30px;
        right: 30px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        z-index: 999;
      }

      #fab-container button {
        width: 48px;
        height: 48px;
        border: none;
        border-radius: 50%;
        background-color: #2c3e50;
        color: white;
        font-size: 20px;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        transition:
          transform 0.2s ease,
          box-shadow 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      #fab-container button:hover {
        transform: scale(1.15);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.4);
      }

      #btn-scroll-top {
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
      }

      @media print {
        #fab-container,
        #toast {
          display: none !important;
        }

        .section {
          opacity: 1 !important;
          transform: none !important;
        }

        body {
          padding: 0 !important;
          margin: 0 !important;
          -webkit-print-color-adjust: exact !important;
          print-color-adjust: exact !important;
        }

        #container {
          width: 100% !important;
          box-shadow: none !important;
          min-height: 100vh !important;
        }

        #left-panel {
          padding: 25px !important;
          width: 33% !important;
        }

        #left-panel img {
          width: 110px !important;
          height: 110px !important;
          margin-bottom: 10px !important;
        }

        #left-panel h1 {
          font-size: 18px !important;
          margin: 8px 0 5px 0 !important;
        }

        #left-panel h2 {
          font-size: 12px !important;
          margin-bottom: 15px !important;
        }

        #left-panel p {
          font-size: 11px !important;
          margin-bottom: 15px !important;
          line-height: 1.4 !important;
        }

        #left-panel h3 {
          font-size: 14px !important;
          margin-top: 20px !important;
          margin-bottom: 10px !important;
        }

        .skill-name {
          font-size: 12px !important;
        }

        .skill-item {
          margin-bottom: 8px !important;
        }

        .skill-bar {
          height: 6px !important;
        }

        #contact-info p {
          font-size: 11px !important;
          margin: 6px 0 !important;
        }

        #right-panel {
          padding: 25px 30px !important;
          width: 67% !important;
        }

        #right-panel h3 {
          font-size: 16px !important;
          margin-top: 20px !important;
          margin-bottom: 10px !important;
          padding-bottom: 4px !important;
        }

        table {
          font-size: 13px !important;
        }

        td {
          padding: 5px 0 !important;
          vertical-align: top;
        }

        td:first-child {
          width: 160px !important;
        }

        #right-panel li {
          font-size: 13px !important;
          margin-bottom: 8px !important;
        }

        h4 {
          font-size: 14px !important;
          margin: 12px 0 3px 0 !important;
        }

        i {
          font-size: 12px !important;
          margin-bottom: 3px !important;
        }
      }
    </style>
  </head>
  <body>
    <div id="container">
      <div id="left-panel">
        <div id="profile-header">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Prabowo_Subianto_2024_official_portrait.jpg/250px-Prabowo_Subianto_2024_official_portrait.jpg"
            alt="Foto Profile Muhammad Rifki"
            id="profile-pic"
          />
          <div id="profile-text">
            <h1 id="nama">Muhammad Rifki<br />Hermmaulana</h1>
            <h2 id="job-title"></h2>
            <p id="about-me">
              Saya adalah mahasiswa D3 Sistem Informasi di Politeknik Negeri
              Subang. Saya memiliki minat yang besar dalam pengembangan web dan
              teknologi informasi.
            </p>
          </div>
        </div>

        <h3 id="keahlian-header">KEAHLIAN</h3>
        <div id="keahlian-list">
          <div class="skill-item" data-skill="90">
            <span class="skill-name">Microsoft Office</span>
            <div class="skill-bar"><div class="skill-fill"></div></div>
          </div>
          <div class="skill-item" data-skill="80">
            <span class="skill-name">Konfigurasi Mikrotik</span>
            <div class="skill-bar"><div class="skill-fill"></div></div>
          </div>
          <div class="skill-item" data-skill="76">
            <span class="skill-name">Desain Grafis</span>
            <div class="skill-bar"><div class="skill-fill"></div></div>
          </div>
          <div class="skill-item" data-skill="70">
            <span class="skill-name">Rakit PC</span>
            <div class="skill-bar"><div class="skill-fill"></div></div>
          </div>
          <div class="skill-item" data-skill="70">
            <span class="skill-name">Kepemimpinan</span>
            <div class="skill-bar"><div class="skill-fill"></div></div>
          </div>
          <div class="skill-item" data-skill="63">
            <span class="skill-name">Kolaborasi</span>
            <div class="skill-bar"><div class="skill-fill"></div></div>
          </div>
        </div>

        <h3 id="kontak-header">KONTAK</h3>
        <div id="contact-info">
          <p class="contact-item" data-tooltip="Klik untuk salin nomor">
            📞 0882-2048-7058
          </p>
          <p class="contact-item" data-tooltip="Klik untuk kirim email">
            ✉️ muhammadrifki08t@Gmail.com
          </p>
          <p class="contact-item">📍 Desa Kalijati Barat, Kec. Kalijati</p>
          <p class="contact-item" data-tooltip="Klik untuk buka GitHub">
            🔗 github.com/kiiirifki14
          </p>
        </div>
      </div>

      <div id="right-panel">
        <div class="section" id="section-data">
          <h3 id="data-pribadi-header">DATA PRIBADI</h3>
          <table id="data-pribadi-table">
            <tr>
              <td>Tempat, Tanggal Lahir</td>
              <td>: Subang, 14 Juni 2005</td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>: Desa Babakan Bandung, Kec. Kalijati</td>
            </tr>
            <tr>
              <td>Nomor Telepon</td>
              <td>: 0882-2048-7058</td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td>: Laki-laki</td>
            </tr>
            <tr>
              <td>Agama</td>
              <td>: Islam</td>
            </tr>
            <tr>
              <td>Kewarganegaraan</td>
              <td>: Indonesia</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>: muhammadrifki08t@Gmail.com</td>
            </tr>
            <tr>
              <td>Status</td>
              <td>: Belum Menikah</td>
            </tr>
          </table>
        </div>

        <div class="section" id="section-pendidikan">
          <h3 id="pendidikan-header">PENDIDIKAN</h3>
          <ul id="pendidikan-list">
            <li>
              <strong>Politeknik Negeri Subang</strong><br />
              D3 Sistem Informasi (2024 - Sekarang)
            </li>
            <li>
              <strong>SMKS Yadika Kalijati</strong><br />
              TKJ (2021 - 2024)
            </li>
          </ul>
        </div>

        <div class="section" id="section-pengalaman">
          <h3 id="pengalaman-header">PENGALAMAN</h3>
          <div id="pengalaman-list">
            <h4 id="exp-1-title">Panitia MABIM</h4>
            <i id="exp-1-date">(2024)</i>

            <ul>
              <li><a href="https://www.instagram.com/kiiirifki_14/p/DO1RqX5EmTN/" target="_blank">Berpartisipasi aktif dalam kegiatan MABIM.</a></li>
              <li>Membantu koordinasi acara.</li>
            </ul>

            <h4 id="exp-2-title">Proyek VBA Excel</h4>
            <i id="exp-2-date">(2024)</i>
            <ul>
              <li><a href="https://youtu.be/aDktQDotmQw?si=m-xdg8gIHyFOjR1g" target="_blank">Membuat aplikasi sederhana menggunakan VBA Excel.</a></li>
              <li>Mengotomatisasi tugas-tugas administratif.</li>
            </ul>
          </div>
        </div>

        <div class="section" id="section-hobi">
          <h3 id="hobi-header">HOBI</h3>
          <ul id="hobi-list">
            <li>📖 Membaca Buku</li>
            <li>✈️ Travelling</li>
            <li>💻 Coding</li>
          </ul>
        </div>
      </div>
    </div>

    <div id="toast"></div>

    <div id="fab-container">
      <button id="btn-dark-mode" title="Dark Mode">🌙</button>
      <button id="btn-print" title="Cetak CV">🖨️</button>
      <button id="btn-scroll-top" title="Kembali ke Atas">⬆️</button>
    </div>

    <script>
      // Hitung Usia Otomatis
      function hitungUsia(tanggalLahir) {
        var today = new Date();
        var birthDate = new Date(tanggalLahir);
        var usia = today.getFullYear() - birthDate.getFullYear();
        var selisihBulan = today.getMonth() - birthDate.getMonth();

        if (selisihBulan < 0 || (selisihBulan === 0 && today.getDate() < birthDate.getDate())) {
          usia--;
        }

        return usia;
      }

      var tabel = document.getElementById("data-pribadi-table");
      var barisUsia = document.createElement("tr");
      var usia = hitungUsia("2005-06-14");
      barisUsia.innerHTML = "<td>Usia</td><td>: " + usia + " Tahun</td>";
      tabel.appendChild(barisUsia);

      // Efek Typing pada Job Title
      var jobTitle = document.getElementById("job-title");
      var teksAsli = "Mahasiswa Sistem Informasi";
      var charIndex = 0;

      function ketikTeks() {
        if (charIndex < teksAsli.length) {
          jobTitle.innerHTML = teksAsli.substring(0, charIndex + 1) + '<span class="cursor-blink"></span>';
          charIndex++;
          setTimeout(ketikTeks, 80);
        } else {
          // Hapus cursor setelah selesai mengetik
          setTimeout(function () {
            jobTitle.innerHTML = teksAsli;
          }, 1500);
        }
      }

      setTimeout(ketikTeks, 800);

      // Animasi Skill Progress Bars
      function animasiSkills() {
        var skills = document.querySelectorAll(".skill-item");
        for (var i = 0; i < skills.length; i++) {
          var persen = skills[i].getAttribute("data-skill");
          var fill = skills[i].querySelector(".skill-fill");
          fill.style.width = persen + "%";
        }
      }

      setTimeout(animasiSkills, 500);

      // Scroll Reveal untuk Section di Panel Kanan
      var sections = document.querySelectorAll(".section");

      function cekScroll() {
        for (var i = 0; i < sections.length; i++) {
          var rect = sections[i].getBoundingClientRect();
          var windowHeight = window.innerHeight;

          if (rect.top < windowHeight - 50) {
            sections[i].classList.add("visible");
          }
        }
      }

      window.addEventListener("scroll", cekScroll);
      window.addEventListener("load", cekScroll);

      // Klik Foto Profil - Efek Confetti Sederhana
      var profilePic = document.getElementById("profile-pic");

      profilePic.addEventListener("click", function () {
        for (var i = 0; i < 30; i++) {
          buatConfetti();
        }
        tampilToast("✨ Hai! Terima kasih sudah melihat CV saya!");
      });

      function buatConfetti() {
        var confetti = document.createElement("div");
        var warna = ["#e94560", "#3498db", "#2ecc71", "#f1c40f", "#9b59b6", "#e67e22"];
        var ukuran = Math.random() * 10 + 5;

        confetti.style.position = "fixed";
        confetti.style.width = ukuran + "px";
        confetti.style.height = ukuran + "px";
        confetti.style.backgroundColor = warna[Math.floor(Math.random() * warna.length)];
        confetti.style.borderRadius = Math.random() > 0.5 ? "50%" : "2px";
        confetti.style.left = Math.random() * 100 + "vw";
        confetti.style.top = "-10px";
        confetti.style.zIndex = "9999";
        confetti.style.pointerEvents = "none";
        confetti.style.opacity = "1";
        confetti.style.transition = "top 1.5s ease, opacity 1.5s ease, transform 1.5s ease";

        document.body.appendChild(confetti);

        var rotasi = Math.random() * 720 - 360;
        var posisiX = Math.random() * 200 - 100;

        setTimeout(function () {
          confetti.style.top = "100vh";
          confetti.style.opacity = "0";
          confetti.style.transform = "translateX(" + posisiX + "px) rotate(" + rotasi + "deg)";
        }, 20);

        setTimeout(function () {
          confetti.remove();
        }, 1800);
      }

      // Toast Notification
      function tampilToast(pesan) {
        var toast = document.getElementById("toast");
        toast.textContent = pesan;
        toast.classList.add("show");

        setTimeout(function () {
          toast.classList.remove("show");
        }, 3000);
      }

      // Klik Kontak - Aksi Interaktif
      var kontakItems = document.querySelectorAll(".contact-item");

      for (var i = 0; i < kontakItems.length; i++) {
        kontakItems[i].addEventListener("click", function () {
          var teks = this.textContent.trim();

          // Nomor telepon
          if (teks.indexOf("0882") !== -1) {
            salinTeks("0882-2048-7058");
            tampilToast("📋 Nomor telepon disalin!");
          }
          // Email
          else if (teks.indexOf("@") !== -1) {
            window.location.href = "mailto:muhammadrifki08t@Gmail.com";
            tampilToast("✉️ Membuka email...");
          }
          // GitHub
          else if (teks.indexOf("github") !== -1) {
            window.open("https://github.com/kiiirifki14", "_blank");
            tampilToast("🔗 Membuka GitHub...");
          }
        });
      }

      function salinTeks(teks) {
        var tempInput = document.createElement("input");
        tempInput.value = teks;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
      }

      // Dark Mode Toggle
      var btnDarkMode = document.getElementById("btn-dark-mode");
      var isDarkMode = false;

      btnDarkMode.addEventListener("click", function () {
        isDarkMode = !isDarkMode;
        document.body.classList.toggle("dark-mode", isDarkMode);
        btnDarkMode.textContent = isDarkMode ? "☀️" : "🌙";
        btnDarkMode.title = isDarkMode ? "Light Mode" : "Dark Mode";
        tampilToast(isDarkMode ? "🌙 Dark Mode aktif" : "☀️ Light Mode aktif");
      });

      // Tombol Cetak CV
      var btnPrint = document.getElementById("btn-print");

      btnPrint.addEventListener("click", function () {
        window.print();
      });

      // Scroll to Top
      var btnScrollTop = document.getElementById("btn-scroll-top");

      window.addEventListener("scroll", function () {
        if (window.scrollY > 200) {
          btnScrollTop.style.opacity = "1";
          btnScrollTop.style.pointerEvents = "auto";
        } else {
          btnScrollTop.style.opacity = "0";
          btnScrollTop.style.pointerEvents = "none";
        }
      });

      btnScrollTop.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });

      // Animasi Fade-In Container
      var container = document.getElementById("container");
      container.style.opacity = "0";
      container.style.transform = "translateY(30px)";
      container.style.transition = "opacity 0.8s ease, transform 0.8s ease";

      window.addEventListener("load", function () {
        setTimeout(function () {
          container.style.opacity = "1";
          container.style.transform = "translateY(0)";
        }, 100);
      });

      // Greeting berdasarkan Waktu
      var jam = new Date().getHours();
      var greeting;

      if (jam >= 5 && jam < 12) {
        greeting = "Selamat Pagi";
      } else if (jam >= 12 && jam < 15) {
        greeting = "Selamat Siang";
      } else if (jam >= 15 && jam < 18) {
        greeting = "Selamat Sore";
      } else {
        greeting = "Selamat Malam";
      }

      document.title = greeting + " | CV - Muhammad Rifki Hermmaulana";

      // Hover Efek pada Baris Tabel
      var barisTable = document.querySelectorAll("#data-pribadi-table tr");

      for (var i = 0; i < barisTable.length; i++) {
        barisTable[i].style.transition = "background-color 0.3s ease";
        barisTable[i].style.cursor = "default";

        barisTable[i].addEventListener("mouseenter", function () {
          this.style.backgroundColor = "rgba(52, 152, 219, 0.08)";
        });

        barisTable[i].addEventListener("mouseleave", function () {
          this.style.backgroundColor = "transparent";
        });
      }
    </script>
  </body>
</html>
