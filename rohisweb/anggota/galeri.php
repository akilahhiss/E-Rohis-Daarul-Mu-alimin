<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeri Kegiatan Rohis</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/galeri.css">
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

  <div class="content-box" style="margin-top: 20px;"> 
    <section class="search-section">
      <input type="text" id="searchInput" placeholder="Cari kegiatan Rohis...">
    </section>

    <section class="gallery-section">
      <div class="activity-box">
        <img src="../foto/galeri.jpg" alt="Sanlat">
        <div class="activity-info">
          <h2>Sanlat Ramadan</h2>
          <p class="desc">Kegiatan pesantren kilat di bulan Ramadan untuk memperkuat iman dan ukhuwah antar siswa.</p>
          <p class="date">📅 25 Maret 2025</p>
          <button class="photo-btn">Lihat Foto</button>
        </div>
      </div>

      <div class="activity-box">
        <img src="../foto/galeri.jpg" alt="LDKR">
        <div class="activity-info">
          <h2>LDKR</h2>
          <p class="desc">Latihan Dasar Kepemimpinan Rohis untuk menumbuhkan jiwa pemimpin dan tanggung jawab anggota.</p>
          <p class="date">📅 10 Februari 2025</p>
          <button class="photo-btn">Lihat Foto</button>
        </div>
      </div>

      <div class="activity-box">
        <img src="../foto/galeri.jpg" alt="Isra Mi'raj">
        <div class="activity-info">
          <h2>Peringatan Isra Mi’raj</h2>
          <p class="desc">Acara memperingati perjalanan agung Nabi Muhammad SAW dan hikmah di baliknya.</p>
          <p class="date">📅 7 Februari 2025</p>
          <button class="photo-btn">Lihat Foto</button>
        </div>
      </div>

      <div class="activity-box">
        <img src="../foto/galeri.jpg" alt="Shalat Dhuha">
        <div class="activity-info">
          <h2>Kegiatan Shalat Dhuha</h2>
          <p class="desc">Kegiatan rutin untuk menumbuhkan semangat ibadah dan mendekatkan diri kepada Allah SWT.</p>
          <p class="date">📅 Setiap Hari Jumat</p>
          <button class="photo-btn">Lihat Foto</button>
        </div>
      </div>

      <div class="activity-box">
        <img src="../foto/galeri.jpg" alt="Maulid Nabi">
        <div class="activity-info">
          <h2>Peringatan Maulid Nabi</h2>
          <p class="desc">Memperingati kelahiran Nabi Muhammad SAW dengan tausiah dan sholawat bersama.</p>
          <p class="date">📅 15 Oktober 2025</p>
          <button class="photo-btn">Lihat Foto</button>
        </div>
      </div>

      <div class="activity-box">
        <img src="../foto/galeri.jpg" alt="Idul Adha">
        <div class="activity-info">
          <h2>Perayaan Idul Adha</h2>
          <p class="desc">Pelaksanaan kurban dan berbagi daging kepada warga sekitar sekolah.</p>
          <p class="date">📅 17 Juni 2025</p>
          <button class="photo-btn">Lihat Foto</button>
        </div>
      </div>
    </section>
  </div>

  <script>
    const searchInput = document.getElementById("searchInput");
    const activityBoxes = document.querySelectorAll(".activity-box");

    searchInput.addEventListener("keyup", function () {
      const searchTerm = this.value.toLowerCase();

      activityBoxes.forEach((box) => {
        const title = box.querySelector("h2").textContent.toLowerCase();
        box.style.display = title.includes(searchTerm) ? "flex" : "none";
      });
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
