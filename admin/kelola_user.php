<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kelola User - Admin ROHIS</title>

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body{
        background: #f4fff8;
        display: flex;
        height: 100vh;
    }

    /* SIDEBAR */
    .sidebar{
        width: 250px;
        background: #0f3d2e;
        padding: 25px 0;
        color: white;
        display: flex;
        flex-direction: column;
    }
    .sidebar h2{
        text-align: center;
        margin-bottom: 30px;
        font-size: 22px;
        font-weight: 600;
    }
    .sidebar a{
        padding: 15px 25px;
        text-decoration: none;
        color: white;
        display: block;
        font-size: 16px;
        transition: .2s;
    }
    .sidebar a:hover{
        background: #154734;
    }

    /* MAIN */
    .main{
        padding: 30px;
        flex: 1;
        overflow-y: auto;
    }

    h1{
        color: #0f3d2e;
        margin-bottom: 25px;
    }

    /* BUTTON TAMBAH */
    .add-btn{
        background: #4caf50;
        color: white;
        padding: 12px 22px;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        font-size: 15px;
        font-weight: 600;
        transition: .2s;
        box-shadow: 0 4px 12px rgba(0,128,0,0.25);
        margin-bottom: 18px;
    }
    .add-btn:hover{
        background: #3d8b40;
        transform: scale(1.03);
    }

    /* TABLE */
    table{
        width: 100%;
        background: white;
        border-radius: 15px;
        padding: 10px;
        border-collapse: collapse;
        box-shadow: 0 5px 18px rgba(0,0,0,0.1);
        animation: fadeUp .7s ease;
    }

    th{
        background: #0f3d2e;
        color: white;
        padding: 15px;
        text-align: left;
        font-size: 15px;
    }

    td{
        padding: 14px;
        border-bottom: 1px solid #e0e0e0;
        color: #0f3d2e;
        font-size: 15px;
    }

    tr:hover td{
        background: #f1fff4;
        transition: .2s;
    }

    /* ACTION BUTTONS */
    .aksi-btn{
        padding: 8px 14px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 14px;
        color: white;
        transition: .2s;
    }
    .edit{
        background: #2e5e48;
    }
    .edit:hover{
        background: #1f4634;
    }
    .hapus{
        background: #d9534f;
    }
    .hapus:hover{
        background: #b73430;
    }

    /* ANIMATION */
    @keyframes fadeUp{
        from{ opacity: 0; transform: translateY(20px); }
        to{ opacity: 1; transform: translateY(0); }
    }

</style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>ADMIN ROHIS</h2>
    <a href="dashboard_admin.php">Dashboard</a>
    <a href="kelola_user.php" style="background:#154734;">Kelola User</a>
    <a href="kelola_event.php">Kelola Event</a>
    <a href="kelola_konten.php">Kelola Konten</a>
    <a href="kelola_galeri.php">Kelola Galeri</a>
    <a href="logout.php" style="margin-top: auto; color: #ffb3b3;">Logout</a>
</div>

<!-- MAIN -->
<div class="main">
    <h1>Kelola User</h1>

    <button class="add-btn">+ Tambah User</button>

    <table>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <tr>
            <td>Akilah Isnaini</td>
            <td>akilah@example.com</td>
            <td>Admin</td>
            <td>Aktif</td>
            <td>
                <button class="aksi-btn edit">Edit</button>
                <button class="aksi-btn hapus">Hapus</button>
            </td>
        </tr>

        <tr>
            <td>Rohis Member</td>
            <td>member@example.com</td>
            <td>User</td>
            <td>Aktif</td>
            <td>
                <button class="aksi-btn edit">Edit</button>
                <button class="aksi-btn hapus">Hapus</button>
            </td>
        </tr>

    </table>
</div>

</body>
</html>
