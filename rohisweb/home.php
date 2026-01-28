<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Rohis</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/home.css">
</head>

<body>
  <nav id="navbar">
    <ul>
      <li class="left"><a href="login.php">Login</a></li>
      <div class="center">
        <li><a href="home.php">Beranda</a></li>
        <li><a href="profil.php">Profil</a></li>
        <li><a href="galeri.php">Galeri</a></li>
        <li><a href="konten.php">Konten</a></li>
      </div>
    </ul>
  </nav>
  <header class="hero-section" id="beranda">
    <img src="./foto/logo.png" alt="Logo Rohis" class="logo">
    <h4 class="sub-title">Assalamualaikum Sahabat</h4>
    <h1 class="main-title">Daarul Mu'allimin</h1>
    <p class="description">
      Bersama menuju cahaya Islam dengan semangat ukhuwah dan dakwah.
    </p>
  </header>
  <section class="content-box">
    <section class="open-rec-container">

  <!-- KIRI -->
  <div class="open-left">
    <h1 class="open-title">OPEN RECRUITMENT ROHIS !!</h1>

    <p class="open-invite">
      Yuk gabung bersama keluarga besar Rohis <br>  
      Ciptakan lingkungan positif, menambah pengalaman, dan memperkuat karakter Islami di sekolah! <br>
      Periode 2026-2027
    </p>
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSfmh8W5ha0c2rZhjSRAwzjRWjWZLhalTMUdLe8TMi1KzcGRPw/viewform" 
   class="btn-daftar" 
   target="_blank">
   Daftar Sekarang
</a>
  </div>

  <!-- KANAN -->
  <div class="open-right">

    <div class="open-card">
      <h2 class="section-heading">Jadwal Eskul</h2>
      <p class="info">Rabu & Jumat — Sepulang Sekolah</p>
    </div>

    <div class="open-card">
      <h2 class="section-heading">Manfaat Bergabung</h2>
      <ul class="benefit-list">
        <li>Meningkatkan keimanan & akhlak</li>
        <li>Lingkungan pertemanan positif</li>
        <li>Belajar public speaking & organisasi</li>
        <li>Pengalaman kegiatan sosial & dakwah</li>
      </ul>
    </div>

    <!-- Waktu + Kontak disatukan -->
    <div class="open-card">
      <h2 class="section-heading">Waktu Pendaftaran</h2>
      <p class="info">10 – 25 Januari 2026</p>

      <h2 class="section-heading" style="margin-top:18px;">Kontak Koordinator</h2>
      <p class="info">📞 0888-8888-8888 (Akilah)</p>
    </div>

  </div>

</section>
  </section>
<script>
  const recruitmentSection = document.getElementById("open-recruitment");

  window.addEventListener("scroll", () => {
    const sectionTop = recruitmentSection.getBoundingClientRect().top;
    const triggerHeight = window.innerHeight * 0.85;

    if (sectionTop < triggerHeight) {
      recruitmentSection.classList.add("show");
    }
  });
</script>

</body>
</html>
