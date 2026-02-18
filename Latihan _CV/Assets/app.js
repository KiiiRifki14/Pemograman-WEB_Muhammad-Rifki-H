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

// Dark Mode Toggle
var btnDarkMode = document.getElementById("btn-dark-mode");
var isDarkMode = false;

btnDarkMode.addEventListener("click", function () {
  isDarkMode = !isDarkMode;
  document.body.classList.toggle("dark-mode", isDarkMode);
  btnDarkMode.textContent = isDarkMode ? "☀️" : "🌙";
  btnDarkMode.title = isDarkMode ? "Light Mode" : "Dark Mode";
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

// Animasi Fade-In
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
