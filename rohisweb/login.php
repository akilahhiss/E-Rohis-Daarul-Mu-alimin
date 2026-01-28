<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Irish+Grover&display=swap" rel="stylesheet">

  <style>
    /* 🌿 Background lembut senada dengan header dan navbar */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(180deg, #d3efda 0%, #f2d8b5 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    /* 💫 Kotak form */
    .form-container {
      background-color: rgba(255, 255, 255, 0.85);
      padding: 40px 45px;
      border-radius: 20px;
      width: 400px;
      box-shadow: 0 0 25px rgba(97, 122, 104, 0.25); /* bayangan hijau lembut */
      backdrop-filter: blur(6px);
      text-align: center;
    }

    /* 🕊️ Judul form */
    .form-container h2 {
      font-family: 'Irish Grover', cursive;
      color: #2e5e48; /* hijau tua lembut */
      font-size: 32px;
      margin-bottom: 25px;
      letter-spacing: 1px;
    }

    /* Label */
    .form-container label {
      display: block;
      text-align: left;
      font-size: 15px;
      color: #2e5e48;
      margin-bottom: 5px;
      font-weight: 500;
    }

    /* Input */
    .form-container input {
      width: 100%;
      padding: 10px;
      border: 2px solid #cdbb97; /* beige lembut */
      border-radius: 8px;
      margin-bottom: 15px;
      font-size: 15px;
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-container input:focus {
      outline: none;
      border-color: #4b8065;
      box-shadow: 0 0 8px rgba(75, 128, 101, 0.3);
    }

    /* Tombol login */
    .submit-btn {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      font-weight: 600;
      background-color: #4b8065; /* hijau lembut */
      color: #fff;
      margin-top: 5px;
      transition: background-color 0.3s, transform 0.2s;
    }

    .submit-btn:hover {
      background-color: #5f967b;
      transform: scale(1.03);
    }

    /* Link kembali */
    .back-home {
      display: block;
      margin-top: 15px;
      text-decoration: none;
      color: #4b8065;
      font-weight: 600;
      transition: color 0.3s;
    }

    .back-home:hover {
      color: #cdbb97;
      text-decoration: underline;
    }
    /* 🌟 Logo di halaman Login */
.logo-login {
  width: 110px;            /* atur ukuran logo */
  height: auto;
  margin-bottom: 15px;     /* jarak ke teks Login */
  filter: drop-shadow(0 0 8px rgba(75,128,101,0.35)); /* glow lembut */
  transition: transform 0.3s;
}

.logo-login:hover {
  transform: scale(1.07);  /* efek membesar dikit saat hover */
}

  </style>
</head>

<body>
  <section class="login-page">
    <div class="form-container">
      <img src="./foto/logo.png" alt="Logo Rohis" class="logo-login">
      <h2>Login</h2>
      <form>
        <label for="username">Username</label>
        <input type="text" id="username" placeholder="Masukkan username" required>

        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Masukkan password" required>

        <button type="submit" class="submit-btn">Masuk</button>
      </form>
      <a href="home.php" class="back-home">← Kembali ke Beranda</a>
    </div>
  </section>
</body>
</html>
