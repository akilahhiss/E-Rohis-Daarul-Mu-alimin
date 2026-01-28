<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Rohis</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/home.css">
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
    
<div class="vote-section">
    <h1 class="vote-title">PEMILU RAYA</h1>
    <div class="line"></div>
    <p class="sub-info">
        Pemilihan Ketua Periode 2026–2027 kini resmi dibuka.<br>
        Gunakan suaramu untuk menentukan pemimpin yang akan membawa<br>
        organisasi menuju arah yang lebih baik.
    </p>

    <div class="vote-container">

        <!-- Kandidat 01 -->
        <div class="kandidat-card">
            <h2>Kandidat 01</h2>
            <img src="../foto/icon 1.png" alt="Kandidat 01" class="kandidat-img">
            <p><strong>Ketua:</strong> Keiyla (XI RPL 1)
                <a href="https://instagram.com/aynwzan" target="_blank" class="ig-link">
                    <img src="../foto/iconig.png" alt="Instagram" class="ig-icon">@aynwzan
                </a>
            </p>
            <p><strong>Wakil:</strong> Syahrul (XI RPL 1)
                <a href="https://instagram.com/aynwzan" target="_blank" class="ig-link">
                    <img src="../foto/iconig.png" alt="Instagram" class="ig-icon">@syahrul
                </a>
            </p>
        </div>

        <!-- Kandidat 02 -->
        <div class="kandidat-card">
            <h2>Kandidat 02</h2>
            <img src="../foto/icon 2.png" alt="Kandidat 02" class="kandidat-img">
            <p><strong>Ketua:</strong> Nazil (XI RPL 1)
                <a href="https://instagram.com/aynwzan" target="_blank" class="ig-link">
                    <img src="../foto/iconig.png" alt="Instagram" class="ig-icon">@nazil
                </a>
            </p>
            <p><strong>Wakil:</strong> Akilah (XI RPL 1)
                <a href="https://instagram.com/aynwzan" target="_blank" class="ig-link">
                    <img src="../foto/iconig.png" alt="Instagram" class="ig-icon">@akilah
                </a>
            </p>
        </div>

    </div>

    <p class="ajak-bawah">
        Kenali setiap kandidat, pelajari visi dan misi mereka, <br>
        lalu pilih pemimpin yang menurutmu paling mampu membawa organisasi berkembang.
    </p>

    <p class="info-waktu-tempat">
        Waktu Pelaksanaan: 12 Desember 2025 <br>
        Tempat Pelaksanaan: Ruang 27
    </p>

    <!-- Tombol Voting -->
    <button class="btn-vote">Voting Sekarang</button>
</div>

<!-- ===== Open Departemen Section ===== -->
<section class="open-dept-section">
    <h2 class="open-dept-title">Open Departemen</h2>
    <p class="open-dept-info">
        Saatnya kamu bergabung dan berkontribusi di berbagai departemen Rohis Daarul Mu’allimin. <br>
        Pilih departemen yang sesuai minatmu dan kembangkan kemampuanmu!
    </p>

    <!-- Link ke profil bagian departemen -->
    <p class="lihat-detail">
    <a href="profil.php#departemen">→ Lihat Detail Departemen</a>
</p>


    <!-- Tombol daftar -->
    <button class="btn-daftar" onclick="window.location.href='./login.php'">Daftar Sekarang</button>
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
</script>

</body>
</html>
