<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama     = $_POST['nama'];
    $kelas    = $_POST['kelas'];
    $role     = $_POST['role'];

    $query = mysqli_query($koneksi, "
        INSERT INTO akun (username, password, nama, kelas, role)
        VALUES ('$username', '$password', '$nama', '$kelas', '$role')
    ");

    if ($query) {
        echo "<script>
            alert('User berhasil ditambahkan');
            window.location='kelola_user.php';
        </script>";
    } else {
        echo "Gagal menyimpan data";
    }
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah User - Admin ROHIS</title>

<style>
<style>
* {
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    margin: 0;
    background: #f1fbf5; /* hijau muda */
    padding: 30px;
}

/* Card form */
.form-container {
    max-width: 480px;
    margin: 30px auto;
    background: #ffffff;
    padding: 28px 32px;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

/* Judul */
.form-container h2 {
    margin-bottom: 22px;
    color: #0f3d2e; /* dark green */
    font-size: 22px;
}

/* Input group */
.form-group {
    margin-bottom: 16px;
}

.form-group label {
    display: block;
    margin-bottom: 6px;
    font-weight: 500;
    color: #0f3d2e;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 10px 12px;
    border-radius: 10px;
    border: 1px solid #cfe7db;
    font-size: 14px;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: #2ea44f;
    box-shadow: 0 0 0 2px rgba(46,164,79,0.2);
}

/* Button area */
.form-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 22px;
}

/* Simpan */
.btn-submit {
    background: #2ea44f;
    color: #fff;
    border: none;
    padding: 10px 22px;
    border-radius: 10px;
    font-weight: 500;
    cursor: pointer;
    transition: 0.3s;
}

.btn-submit:hover {
    background: #238636;
}

/* Batal */
.btn-cancel {
    background: #e74c3c;
    color: #fff;
    border: none;
    padding: 10px 22px;
    border-radius: 10px;
    font-weight: 500;
    cursor: pointer;
    transition: 0.3s;
}

.btn-cancel:hover {
    background: #c0392b;
}
</style>

</style>

</head>
<body>

<div class="form-container">
    <h2>Tambah User</h2>

    <form method="POST">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" required>
        </div>

        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kelas"   placeholder="Contoh : X RPL 1" required>
        </div>

        <div class="form-group">
            <label>Role</label>
            <select name="role" required>
                <option value="">-- Pilih Role --</option>
                <option value="admin">Admin</option>
                <option value="anggota">Anggota</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" name="simpan" class="btn-submit">
                Simpan
            </button>
            <button type="button" class="btn-cancel"
                onclick="window.location.href='kelola_user.php'">
                Batal
            </button>
        </div>
    </form>
</div>

</body>
</html>
