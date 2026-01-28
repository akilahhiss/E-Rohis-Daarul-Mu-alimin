<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Galeri - Admin</title>

    <style>
        * {margin:0; padding:0; box-sizing:border-box; font-family: 'Poppins', sans-serif;}
        body {background:#f5f7f5; display:flex;}
        .admin-container {display:flex; width:100%;}

        /* SIDEBAR */
        .sidebar {
            width:230px;
            background:#0f3d2e;
            color:white;
            min-height:100vh;
            padding:25px 20px;
            box-shadow:3px 0 12px rgba(0,0,0,0.15);
        }
        .logo {
            font-size:22px;
            font-weight:600;
            margin-bottom:25px;
            text-align:center;
        }
        .sidebar ul {list-style:none;}
        .sidebar ul li {margin:15px 0;}
        .sidebar ul li a {
            color:white;
            text-decoration:none;
            font-size:15px;
            padding:10px 15px;
            display:block;
            border-radius:8px;
            transition:0.3s;
        }
        .sidebar ul li a:hover,
        .sidebar ul li.active a {
            background:#4caf50;
        }

        /* CONTENT */
        .content {
            flex:1;
            padding:30px;
        }
        .page-title {
            font-size:26px;
            font-weight:600;
            color:#0f3d2e;
            margin-bottom:20px;
        }

        /* ADD BUTTON */
        .add-btn {
            background:#4caf50;
            color:white;
            padding:10px 18px;
            font-size:15px;
            border:none;
            border-radius:8px;
            cursor:pointer;
            transition:0.3s;
        }
        .add-btn:hover {
            background:#3d8b40;
            transform:scale(1.05);
        }

        /* GRID */
        .gallery-grid {
            margin-top:25px;
            display:grid;
            grid-template-columns:repeat(auto-fill, minmax(260px,1fr));
            gap:20px;
        }

        /* CARD */
        .gallery-card {
            background:white;
            border-radius:12px;
            box-shadow:0 4px 12px rgba(0,0,0,0.1);
            overflow:hidden;
            transition:0.3s;
        }
        .gallery-card:hover {
            transform:translateY(-6px);
            box-shadow:0 6px 18px rgba(0,0,0,0.15);
        }
        .gallery-card img {
            width:100%;
            height:170px;
            object-fit:cover;
        }

        /* TEXT */
        .text {
            padding:15px;
        }
        .text h3 {
            font-size:18px;
            font-weight:600;
            color:#0f3d2e;
            margin-bottom:5px;
        }
        .text p {
            font-size:14px;
            color:#345e4e;
        }

        /* ACTION BUTTONS */
        .actions {
            display:flex;
            justify-content:space-between;
            padding:12px 15px;
            border-top:1px solid #eee;
        }
        .actions button {
            padding:8px 14px;
            border:none;
            border-radius:6px;
            font-size:14px;
            cursor:pointer;
            transition:0.3s;
        }
        .edit {background:#ffc107; color:white;}
        .edit:hover {background:#e0a800;}
        .delete {background:#e63946; color:white;}
        .delete:hover {background:#cc2f3b;}
    </style>
</head>
<body>

    <div class="admin-container">
        <aside class="sidebar">
            <h2 class="logo">ROHIS Admin</h2>
            <ul>
                <li><a href="dashboard_admin.php">Dashboard</a></li>
                <li><a href="kelola_user.php">Kelola User</a></li>
                <li><a href="kelola_event.php">Kelola Event</a></li>
                <li><a href="kelola_konten.php">Kelola Konten</a></li>
                <li class="active"><a href="kelola_galeri.php">Kelola Galeri</a></li>
                <li><a href="logout.php" style="margin-top:90px; color:#ffb3b3;">Logout</a></li>
            </ul>
        </aside>

        <main class="content">
            <h1 class="page-title">Kelola Galeri</h1>

            <button class="add-btn">+ Tambah Foto</button>

            <div class="gallery-grid">
                
                <!-- CARD 1 -->
                <div class="gallery-card">
                    <img src="../foto/sanlat.jpg" alt="Sanlat">
                    <div class="text">
                        <h3>Sanlat Ramadan</h3>
                        <p>Dokumentasi kegiatan Sanlat 2025.</p>
                    </div>
                    <div class="actions">
                        <button class="edit">Edit</button>
                        <button class="delete">Hapus</button>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="gallery-card">
                    <img src="../foto/isra.jpg" alt="Isra Miraj">
                    <div class="text">
                        <h3>Isra Mi’raj</h3>
                        <p>Peringatan Isra Mi’raj 2025.</p>
                    </div>
                    <div class="actions">
                        <button class="edit">Edit</button>
                        <button class="delete">Hapus</button>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="gallery-card">
                    <img src="../foto/ldkr.jpg" alt="LDKR">
                    <div class="text">
                        <h3>LDKR</h3>
                        <p>Kegiatan Latihan Dasar Kepemimpinan Rohis.</p>
                    </div>
                    <div class="actions">
                        <button class="edit">Edit</button>
                        <button class="delete">Hapus</button>
                    </div>
                </div>

            </div>

        </main>
    </div>

</body>
</html>
