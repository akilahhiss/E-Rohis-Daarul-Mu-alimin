<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/konten.css">
    <link rel="stylesheet" href="../css/profil.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">

</head>
<body>
    <nav id="navbar">
  <ul>
    <li class="left">
      <span id="menuBtn" class="menu-btn">&#9776;</span> 
    </li>

    <div class="center">
      <li><a href="home.php">Beranda</a></li>
      <li><a href="profil.php">Profil</a></li>
      <li><a href="galeri.php">Galeri</a></li>
      <li><a href="konten.php">Konten</a></li>
    </div>
  </ul>
</nav>
<!-- SIDEBAR -->
  <div id="sidebar">
    <h2>Informasi Akun</h2>

    <div class="profile-info">
      <p><strong>Nama Lengkap:</strong> <span id="nama">Keiyla Adya Azzani</span></p>
      <p><strong>Username:</strong> <span id="username">keiyla01</span></p>
      <p><strong>Password:</strong> <span class="pw">ANGGOTA1</span></p>
      <p><strong>Jabatan:</strong> <span id="jabatan">Anggota</span></p>
      <p><strong>Angkatan:</strong> <span id="angkatan">2025-2026</span></p>
      <p><strong>Departemen:</strong> <span id="departemen">Kaderisasi</span></p>
    </div>

    <a href="./login.php" class="logout-btn">Logout</a>
  </div>

  <!-- OVERLAY -->
  <div id="overlay" onclick="toggleSidebar()"></div>
  <header class="hero-section" id="beranda">
    <img src="../foto/logo.png" alt="Logo Rohis" class="logo">
    <h4 class="sub-title">Assalamualaikum Sahabat</h4>
    <h1 class="main-title">Daarul Mu'allimin</h1>
    <p class="description">
      Bersama menuju cahaya Islam dengan semangat ukhuwah dan dakwah.
    </p>
  </header>
  <section class="content-box">
    <section class="youtube-section">
  <h2 class="youtube-title">
    <a href="https://youtube.com/@rohisdmcbn?si=Ayy9OYwnTLVqCdLt" target="_blank" class="youtube-link">
      <!-- Logo YouTube -->
      <svg class="youtube-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28" fill="#FF0000">
        <path d="M23.498 6.186a2.985 2.985 0 0 0-2.11-2.114C19.616 3.5 12 3.5 12 3.5s-7.615 0-9.388.572a2.985 2.985 0 0 0-2.11 2.114A31.18 31.18 0 0 0 0 12a31.18 31.18 0 0 0 .502 5.814 2.985 2.985 0 0 0 2.11 2.114C4.384 20.5 12 20.5 12 20.5s7.616 0 9.388-.572a2.985 2.985 0 0 0 2.11-2.114A31.18 31.18 0 0 0 24 12a31.18 31.18 0 0 0-.502-5.814zM9.75 15.5v-7l6 3.5-6 3.5z"/>
      </svg>
      <span class="channel-name">Rohis SMKN 1 Cibinong</span>
    </a>
  </h2>
  <div class="youtube-slider">
    <div class="slider-wrapper">
      <div class="slider">
        <a href="https://youtu.be/QXfwAP0xfM8" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/QXfwAP0xfM8/hqdefault.jpg" alt="Video 1">
          <p>MUHADARAH 4 - BERTEMA "ISRA MI'RAJ" Rohis SMKN 1 CIBINONG</p>
        </a>
        <a href="https://youtu.be/iExw3O7u1q0" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/iExw3O7u1q0/hqdefault.jpg" alt="Video 2">
          <p>MUHADARAH 3 - BERTEMA "BENCANA ALAM" Rohis SMKN 1 CIBINONG</p>
        </a>
        <a href="https://youtu.be/BXP1TKtnjOc" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/BXP1TKtnjOc/hqdefault.jpg" alt="Video 3">
          <p>Sorotan 17.20 - 22.20 dari MUHADHARAH 1 - BERTEMA "MAULID NABI" Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/2cIaP-fbFuI" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/2cIaP-fbFuI/hqdefault.jpg" alt="Video 4">
          <p>Open House x Mentoring Gabungan RDM | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/goxd_s3HW7E" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/goxd_s3HW7E/hqdefault.jpg" alt="Video 5">
          <p>[Short Video] Dokumentasi Ifthar x Mentoring Gabungan RDM 21 | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/Qn3TQL4zCtg" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/Qn3TQL4zCtg/hqdefault.jpg" alt="Video 6">
          <p>PHBI Isra Mi'raj 1442 H SMKN 1 Cibinong | Ust. Ramdhan Juniarsyah, M.Ag (Kang Radju Daway)</p>
        </a>
        <a href="https://youtu.be/_J-SGeJB_Co" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/_J-SGeJB_Co/hqdefault.jpg" alt="Video 7">
          <p>Rihlah: Ceria with Rohis (Ceriwis) 2013 | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/KB5dPATOOPc" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/KB5dPATOOPc/hqdefault.jpg" alt="Video 8">
          <p>MABIT (Malam Bina Iman & Takwa) 2014 | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/ewbkL4Mi3t4" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/ewbkL4Mi3t4/hqdefault.jpg" alt="Video 9">
          <p>Dokumenter RDM17 #sahabatbermanfaat | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/Qr2qA0sg_Zk" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/Qr2qA0sg_Zk/hqdefault.jpg" alt="Video 10">
          <p>Rihlah: Ceria with Rohis (Ceriwis) 2015 | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/xvJGMLiKiN8" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/xvJGMLiKiN8/hqdefault.jpg" alt="Video 11">
          <p>FILM PENDEK: Catatan Mikail (Ayo Mentoring) | Rohis SMKN 1 Cibinong</p>
        </a>
        <a href="https://youtu.be/swcshBH6F4s" target="_blank" class="video-card">
          <img src="https://img.youtube.com/vi/swcshBH6F4s/hqdefault.jpg" alt="Video 12">
          <p>Story of Rohis Daarul Mu'allimin 2013 | Rohis SMKN 1 Cibinong</p>
        </a>
      </div>
    </div>
  </div>
</section>
  <section class="konten-section">
  <div class="konten-container">
    <div class="konten-image">
      <img src="../foto/thn islam.webp" alt="Poster Tahun Baru Islam">
    </div>
    <div class="konten-text">
      <h2>Tahun Baru Islam 1447 H</h2>
      <p>
        Assalamu'alaikum warahmatullahi wabarakatuh 🙌🏻 <br><br>

🌙 Selamat Tahun Baru Islam 1 Muharram 1447 H <br>
Tahun baru hijriah bukan sekadar pergantian waktu, tapi momen muhasabah dan hijrah menuju kebaikan. <br>
Mari kita mulai lembaran baru dengan hati yang lebih bersih, niat yang lebih tulus, dan semangat memperbaiki diri. <br><br>

Semoga segala doa dan harapan kita di tahun ini diridhoi oleh-Nya, dan hidup kita selalu dipenuhi keberkahan. 🤲✨
      </p>
    </div>
  </div>
  </section>

  <hr class="konten-divider">

  <section class="konten-section">
  <div class="konten-container reverse">
    <div class="konten-image">
      <img src="../foto/adha.webp" alt="Poster Idul Adha">
    </div>
    <div class="konten-text">
      <h2>Idul Adha 1446 H</h2>
      <p>
       🌙🕋Selamat Hari Raya Idul Adha 1446 H!🌙 <br><br>

"Maka laksanakanlah salat karena Tuhanmu dan berkurbanlah!" <br>

(QS. Al-Kautsar: 2) <br><br>

Idul Adha bukan hanya tentang kurban, tapi juga tentang keikhlasan, pengorbanan, dan kepatuhan kepada Allah SWT.
      </p>
    </div>
  </div>
</section>

<hr class="konten-divider">

<section class="profil-section">
  <div class="profil-content">
    <h2>Apa itu Qurban?</h2>
    <p>
      Qurban berasal dari bahasa Arab قَرُبَ - يَقْرُبُ (qaruba - yaqrobu) yang berarti mendekat. Kata ini berkembang 
      menjadi قُربان (qurban), yang secara harfiah berarti sesuatu yang dipersembahkan untuk mendekatkan diri 
      kepada Allah. Secara istilah, qurban adalah ibadah menyembelih hewan (seperti sapi, kambing, domba, atau 
      unta) pada hari Idul Adha dan hari-hari tasyrik (11-13 Dzulhijjah) sebagai bentuk ketaatan, pengorbanan, 
      dan rasa syukur kepada Allah SWT.
    </p>

    <h2>Adapun dalil Qurban yaitu:</h2>
    <p>
      إِنَّا أَعْطَيْنَاكَ الْكَوْثَرَ فَصَلِّ لِرَبِّكَ وَانْحَرْ <br>
Sesungguhnya Kami telah memberikan kepadamu nikmat yang banyak. Maka dirikanlah salat karena Tuhanmu dan berqurbanlah.
    </p>

    <h2>Makna dan hikmah Qurban</h2>
    <ul>
      <li>Mendekatkan diri kepada Allah - Qurban adalah wujud ketaatan dan sarana mempererat hubungan spiritual dengan Allah. </li>
      <li>Meneladani Nabi Ibrahim - Mengikuti kisah kepatuhan dan keimanan Nabi Ibrahim yang bersedia mengorbankan putranya. </li>
      <li>Ungkapan rasa syukur - Qurban menjadi bentuk syukur atas nikmat dan rezeki dari Allah. </li>
      <li>Berbagi rezeki - Daging kurban dibagikan kepada diri sendiri, kerabat, dan orang yang membutuhkan, sebagai bentuk kepedulian sosial. </li>
      <li>Meningkatkan kepedulian - Momentum qurban mendorong empati terhadap kondisi masyarakat sekitar. </li>
      <li>Menumbuhkan keikhlasan dan pengorbanan - Qurban melatih ikhlas dan kesiapan berkorban demi ketaatan kepada Allah. </li>
    </ul>

    <h2>Syarat Qurban</h2>
    <ul>
      <li>Muslim, baligh, dan berakal - Pelaku qurban harus beragama Islam, sudah dewasa, dan sadar. </li>
      <li>Memiliki kelebihan harta - Qurban dilakukan jika memiliki harta lebih, tanpa mengorbankan kebutuhan pokok. </li>
      <li>Hewan sesuai syariat - Hanya domba, kambing, sapi, atau unta yang sehat, cukup umur, dan tidak cacat. </li>
      <li>Dilaksanakan pada waktunya -Qurban dilakukan pada 10-13 Dzulhijjah. </li>
      <li>Dengan niat yang ikhlas - Niat qurban harus murni karena Allah. </li>
      <li>Penyembelihan sesuai syariat -Dilakukan oleh orang yang ahli dan sesuai tata cara Islam. </li>
    </ul>

    <h2>Hewan yang dapat dijadikan sebagai hewan Qurban</h2>
    <ul>
      <li>Domba - Umum digunakan, minimal 1 tahun, sehat, dan tidak cacat. </li>
      <li>Kambing - Mirip domba, satu kambing untuk satu orang. </li>
      <li>Sapi - Bisa untuk 7 orang, usia minimal 2 tahun, sehat dan layak. </li>
      <li>Kerbau - Alternatif dari sapi di daerah tertentu, syaratnya sama. </li>
      <li>Unta - Jarang digunakan di Indonesia, bisa untuk 7 orang, usia minimal 5 tahun. </li>
    </ul>
  </div>
  </section>
<script>
      const menuBtn = document.getElementById("menuBtn");
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");

  menuBtn.addEventListener("click", () => {
    sidebar.classList.add("active");
    overlay.classList.add("show");
  });

  overlay.addEventListener("click", () => {
    sidebar.classList.remove("active");
    overlay.classList.remove("show");
  });

const slider = document.querySelector('.slider');
const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');

const cardWidth = 240; // lebar tiap video + gap

nextBtn.addEventListener('click', () => {
  slider.scrollLeft += cardWidth; // geser ke kanan
});

prevBtn.addEventListener('click', () => {
  slider.scrollLeft -= cardWidth; // geser ke kiri
});
</script>
</body>
</html>