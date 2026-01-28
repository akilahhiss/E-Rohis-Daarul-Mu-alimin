<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/profil.css">
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
    <section class="content-box profil-section">
  <div class="profil-content">
    <h2>About</h2>
    <p>
      Rohis Daarul Mu’allimin merupakan organisasi keislaman yang menjadi wadah
      bagi siswa untuk memperdalam ilmu agama, mempererat ukhuwah, dan menumbuhkan
      semangat berdakwah di lingkungan sekolah.
    </p>

    <h2>Visi</h2>
    <p>
      Mewujudkan generasi muda yang berakidah mulia, beriman, berilmu dan berakhlak islami.
    </p>

    <h2>Misi</h2>
    <ul>
      <li>Meningkatkan keimanan dan ketakwaan kepada Allah SWT.</li>
      <li>Menjadi organisasi dakwah yang kreatif dan bermanfaat untuk seluruh civitas sekolah.</li>
      <li>Membentuk kepribadian muslim yang berakhlak syar’i.</li>
      <li>Memperkuat ukhuwah islamiyah antar sesama.</li>
      <li>Menumbuhkan semangat berdakwah di jalan Allah.</li>
      <li>Mewujudkan suasana kehidupan islami di sekolah.</li>
    </ul>
  </div>

  <div class="struktur-container">
    <div class="struktur-title">Struktur Kepengurusan Rohis</div>

    <div class="box">
      <img src="./foto/icon 1.png" alt="Pembina">
      <h3>Pembina</h3>
      <p>wjhbxwjb</p>
    </div>

    <div class="box">
      <img src="./foto/icon 1.png" alt="Ketua">
      <h3>Ketua</h3>
      <p>wdjwkxwnk</p>
    </div>

    <div class="row">
      <div class="box">
        <img src="./foto/icon 1.png" alt="Sekretaris">
        <h3>Sekretaris</h3>
        <p>1. wjiw</p>
        <p>2. wxsxws</p>
      </div>
      <div class="box">
        <img src="./foto/icon 1.png" alt="Wakil Ketua">
        <h3>Wakil Ketua</h3>
        <p>1. wxwxw</p>
        <p>2. jdwie</p>
      </div>
      <div class="box">
        <img src="./foto/icon 1.png" alt="Bendahara">
        <h3>Bendahara</h3>
        <p>1. jfie</p>
        <p>2. ejfek</p>
      </div>
    </div>

    <div class="struktur-title">Departemen</div>

    <div class="departemen-container">
      <div class="row">
        <div class="dept-box">
          <img src="./foto/sje.png" alt="Departemen SJE">
          <h3>Departemen SJE (Seni Islam, Jasmani, dan Ekonomi)</h3>
          <button class="btn-detail" onclick="openDept('deptsje')">Detail</button>
        </div>

        <div class="dept-box">
          <img src="./foto/bph.png" alt="Departemen BPH">
          <h3>Departemen BPH (Badan Pengurus Harian)</h3>
          <button class="btn-detail" onclick="openDept('deptbph')">Detail</button>
        </div>

        <div class="dept-box">
          <img src="./foto/dkm.png" alt="Departemen DKM">
          <h3>Departemen DKM (Dewan Kemakmuran Masjid)</h3>
          <button class="btn-detail" onclick="openDept('deptdkm')">Detail</button>
        </div>
      </div>

      <div class="row">
        <div class="dept-box">
          <img src="./foto/kader.png" alt="Departemen Kaderisasi">
          <h3>Departemen Kaderisasi</h3>
          <button class="btn-detail" onclick="openDept('deptkader')">Detail</button>
        </div>

        <div class="dept-box">
          <img src="./foto/syiar.png" alt="Departemen Syiar">
          <h3>Departemen Syiar</h3>
          <button class="btn-detail" onclick="openDept('deptsyiar')">Detail</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Departemen 1 -->
<div id="deptsje" class="dept-modal">
  <div class="dept-modal-content">
    <span class="close" onclick="closeDept('deptsje')">&times;</span>
    <h3>Departemen Seni Jasmani & Ekonomi</h3>
    <p> <br> Departemen Seni Jasmani dan Ekonomi (SJE) memiliki program seperti fokus pada pengembangan kegiatan fisik dan jasmani melalui aktivitas senam, dan olahraga pilihan. ada juga membuat kesenian seperti kaligrafi dan terakhir mempelajari ekonomi dengan cara berwirausaha.</p>
    <div class="dept-leaders">
      <div class="leader-card">
        <img src="./foto/icon 1.png" alt="Ketua 1A">
        <p>Keiyla<br>Kelas: XI RPL 1</p>
      </div>
      <div class="leader-card">
        <img src="./foto/icon 2.png" alt="Ketua 1B">
        <p>Adya<br>Kelas: XI RPL 1</p>
      </div>
    </div>
  </div>
</div>

<!-- Departemen 2 -->
<div id="deptbph" class="dept-modal">
  <div class="dept-modal-content">
    <span class="close" onclick="closeDept('deptbph')">&times;</span>
    <h3>Departemen Badan Pengurus Harian</h3>
    <p> <br> Badan Pengurus Harian (BPH) ialah struktur kepengurusan yang bertanggung jawab untuk menjalankan kegiatan sehari-hari organisasi, baik seputar program kerja, maupun event Rohis lainnya. BPH terdiri dari beberapa posisi, yaitu ketua umum, koordinator akhwat, sekretaris, dan bendahara.</p>
    <div class="dept-leaders">
      <div class="leader-card">
        <img src="./foto/icon 1.png" alt="Ketua 2A">
        <p>Akilah<br>Kelas: XI RPL 1</p>
      </div>
      <div class="leader-card">
        <img src="./foto/icon 2.png" alt="Ketua 2B">
        <p>Isnaini<br>Kelas: XI RPL 1</p>
      </div>
    </div>
  </div>
</div>

<!-- Departemen 3 -->
<div id="deptdkm" class="dept-modal">
  <div class="dept-modal-content">
    <span class="close" onclick="closeDept('deptdkm')">&times;</span>
    <h3>Departemen Dewan Kemakmuran Masjid</h3>
    <p><br>Departemen Dewan Kemakmuran Masjid (DKM) yaitu biasanya fokus pada pengelolaan dan pengembangan kegiatan di masjid sekolah. seperti Pemeliharaan masjid dan Program keagamaan. DKM juga bertanggungjawab dalam menjaga kenyamanan dan kebersihan masjid agar siapapun dapat menikmati fasilitas masjid dengan nyaman.</p>
    <div class="dept-leaders">
      <div class="leader-card">
        <img src="./foto/icon 1.png" alt="Ketua 3A">
        <p>Syahrul<br>Kelas: XI RPL 1</p>
      </div>
      <div class="leader-card">
        <img src="./foto/icon 2.png" alt="Ketua 3B">
        <p>Haqqin<br>Kelas: XI RPL 1</p>
      </div>
    </div>
  </div>
</div>

<!-- Departemen 4 -->
<div id="deptkader" class="dept-modal">
  <div class="dept-modal-content">
    <span class="close" onclick="closeDept('deptkader')">&times;</span>
    <h3>Departemen Kaderisasi</h3>
    <p><br>Kalian tau ga? Departemen Kaderisasi adalah departemen yang berfungsi untuk mengembangkan dan membina anggota agar memiliki pemahaman, pengetahuan dan keterampilan yang baik dalam beragama yang dapat mengembangkan jiwa kepemimpinan dengan memantau perkembangan anggota.</p>
    <div class="dept-leaders">
      <div class="leader-card">
        <img src="./foto/icon 1.png" alt="Ketua 4A">
        <p>Azzani<br>Kelas: XI RPL 1</p>
      </div>
      <div class="leader-card">
        <img src="./foto/icon 2.png" alt="Ketua 4B">
        <p>Nazil<br>Kelas: XI RPL 1</p>
      </div>
    </div>
  </div>
</div>

<!-- Departemen 5 -->
<div id="deptsyiar" class="dept-modal">
  <div class="dept-modal-content">
    <span class="close" onclick="closeDept('deptsyiar')">&times;</span>
    <h3>Departemen Syiar Kreatif</h3>
    <p><br>Departemen Syiar Kreatif yaitu bagian yang bertanggung jawab untuk menyebarkan informasi berupa pengetahuan atau nilai-nilai islam melalui media Offline dan Online. Apasih aktivitas yang ada di syiar? ada desain grafis, fotografi, videografi, dan media sosial lho!</p>
    <div class="dept-leaders">
      <div class="leader-card">
        <img src="./foto/icon 1.png" alt="Ketua 5A">
        <p>Siti<br>Kelas: XI RPL 1</p>
      </div>
      <div class="leader-card">
        <img src="./foto/icon 2.png" alt="Ketua 5B">
        <p>Sopo<br>Kelas: XI RPL 1</p>
      </div>
    </div>
  </div>
</div>
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



function openDept(id) {
  // sembunyikan semua modal dulu
  const modals = document.querySelectorAll('.dept-modal');
  modals.forEach(modal => modal.style.display = 'none');

  // tampilkan modal yang dipilih
  const modal = document.getElementById(id);
  if (modal) modal.style.display = 'block';
}

function closeDept(id) {
  const modal = document.getElementById(id);
  if (modal) modal.style.display = 'none';
}

// klik di luar modal juga bisa tutup
window.onclick = function(event) {
  const modals = document.querySelectorAll('.dept-modal');
  modals.forEach(modal => {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });
};

</script>
</body>
</html>