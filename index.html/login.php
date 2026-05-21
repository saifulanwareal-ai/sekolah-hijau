<?php
session_start();

// Jika sudah login, langsung redirect ke dashboard
if (isset($_SESSION['login'])) {
    header('Location: admin/index.php');
    exit;
}

// Proses login ketika tombol submit ditekan
$error = false;
if (isset($_POST['login'])) {
    
    // Username & Password valid (bisa diganti database)
    $valid_user = "admin";
    $valid_pass = "12345";

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_user && $password === $valid_pass) {
        $_SESSION['login'] = true;
        header("Location: admin/index.php");
        exit;
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Admin - Sekolah Hijau</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(rgba(0,60,0,0.55), rgba(0,60,0,0.55)), url('assets/img/sekolah.jpg') center/cover no-repeat;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .login-card {
      width: 100%;
      max-width: 420px;
      padding: 30px;
      background: rgba(255,255,255,0.92);
      border-radius: 18px;
      box-shadow: 0 4px 18px rgba(0,0,0,0.12);
      backdrop-filter: blur(4px);
    }
    .login-card h3 {
      font-weight: 700;
      color: #1b5e20;
    }
    .btn-login {
      background-color: #1b5e20;
      color: #fff;
      border-radius: 50px;
    }
    .btn-login:hover {
      background-color: #145017;
    }
  </style>
</head>
<body>

<div class="login-card" data-aos="zoom-in">
  <h3 class="text-center mb-3">Login Admin</h3>
  <p class="text-center mb-4">Silakan masuk menggunakan akun Anda</p>

  <?php if ($error): ?>
    <div class="alert alert-danger py-2">Username atau password salah.</div>
  <?php endif; ?>

  <form method="POST">
    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" name="username" class="form-control" required />
    </div>

    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" name="password" class="form-control" required />
    </div>

    <button type="submit" name="login" class="btn btn-login w-100 py-2 mt-2 fw-semibold">Login</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init({ duration: 1000 });</script>
</body>
</html>
