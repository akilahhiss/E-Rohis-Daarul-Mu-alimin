<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeri Kegiatan Rohis</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/galeri.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">
</head>
<body>
  <nav id="navbar">
    <ul>
      <li class="left"><a href="login.php">Login</a></li>
      <div class="center">
        <li><a href="home.php">Beranda</a></li>
        <li><a href="profil.php">Profil</a></li>
        <li><a href="galeri.php" class="active">Galeri</a></li>
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

  <div class="content-box" style="margin-top: 20px;"> 
    <section class="search-section">
      <input type="text" id="searchInput" placeholder="Cari kegiatan Rohis...">
    </section>

    <section class="gallery-section">
      <div class="activity-box">
        <img src="contoh.jpg" alt="Sanlat">
        <div class="activity-info">
          <h2>Sanlat Ramadan</h2>
          <p class="desc">Kegiatan pesantren kilat di bulan Ramadan untuk memperkuat iman dan ukhuwah antar siswa.</p>
          <p class="date">📅 25 Maret 2025</p>
          <button class="photo-btn">Lihat Foto</button>
        </div>
      </div>

      <div class="activity-box">
        <img src="contoh.jpg" alt="LDKR">
        <div class="activity-info">
          <h2>LDKR</h2>
          <p class="desc">Latihan Dasar Kepemimpinan Rohis untuk menumbuhkan jiwa pemimpin dan tanggung jawab anggota.</p>
          <p class="date">📅 10 Februari 2025</p>
          <button class="photo-btn">Lihat Foto</button>
        </div>
      </div>

      <div class="activity-box">
        <img src="contoh.jpg" alt="Isra Mi'raj">
        <div class="activity-info">
          <h2>Peringatan Isra Mi’raj</h2>
          <p class="desc">Acara memperingati perjalanan agung Nabi Muhammad SAW dan hikmah di baliknya.</p>
          <p class="date">📅 7 Februari 2025</p>
          <button class="photo-btn">Lihat Foto</button>
        </div>
      </div>

      <div class="activity-box">
        <img src="contoh.jpg" alt="Shalat Dhuha">
        <div class="activity-info">
          <h2>Kegiatan Shalat Dhuha</h2>
          <p class="desc">Kegiatan rutin untuk menumbuhkan semangat ibadah dan mendekatkan diri kepada Allah SWT.</p>
          <p class="date">📅 Setiap Hari Jumat</p>
          <button class="photo-btn">Lihat Foto</button>
        </div>
      </div>

      <div class="activity-box">
        <img src="contoh.jpg" alt="Maulid Nabi">
        <div class="activity-info">
          <h2>Peringatan Maulid Nabi</h2>
          <p class="desc">Memperingati kelahiran Nabi Muhammad SAW dengan tausiah dan sholawat bersama.</p>
          <p class="date">📅 15 Oktober 2025</p>
          <button class="photo-btn">Lihat Foto</button>
        </div>
      </div>

      <div class="activity-box">
        <img src="contoh.jpg" alt="Idul Adha">
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
  </script>
</body>
</html>
