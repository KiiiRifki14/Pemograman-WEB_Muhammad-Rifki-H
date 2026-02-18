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
