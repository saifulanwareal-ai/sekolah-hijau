<?php // index.php versi premium responsive ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Beranda - Sekolah Hijau </title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- ICON -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f4f9f4;
    }

    /* HERO */
    .hero {
      height: 100vh;
      background: linear-gradient(rgba(0, 60, 0, 0.55), rgba(0, 60, 0, 0.55)),
                  url("assets/img/sekolah.jpg") center/cover no-repeat;
      background-attachment: fixed;
      color: #fff;
      text-align: center;
    }
    @media (max-width: 768px) {
      .hero {
        background-attachment: scroll !important; /* mobile */
      }
      .hero h1 { font-size: 2.3rem; }
    }

    .hero h1 { font-size: 3.5rem; font-weight: 700; }

    /* CARD PREMIUM */
    .premium-card {
      border-radius: 18px;
      transition: 0.3s;
      background: #ffffff;
      border: none;
      box-shadow: 0 4px 18px rgba(0,0,0,0.08);
    }
    .premium-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 28px rgba(0,0,0,0.15);
    }

    .section-title {
      font-size: 2.3rem;
      font-weight: 700;
      color: #1b5e20;
    }

  </style>
</head>
<body>

  <?php include 'partials/navbar.php'; ?>

  <!-- HERO -->
  <section class="hero d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
      <h1 class="mb-3">Selamat Datang di Sekolah Hijau</h1>
      <p class="lead mb-4">Membangun Generasi Cerdas, Peduli Lingkungan, dan Berkarakter.</p>

      <div class="d-flex justify-content-center gap-2 flex-wrap">
        <a href="tentang.php" class="btn btn-light text-success px-4 py-2 fw-semibold shadow-lg rounded-pill">
          Pelajari Lebih Lanjut
        </a>

        <a href="login.php" class="btn btn-outline-light px-4 py-2 fw-semibold rounded-pill">
          Login Admin
        </a>
      </div>
    </div>
  </section>

  <!-- MENU PREMIUM -->
  <section class="py-5">
    <div class="container">
      <h2 class="section-title text-center mb-4" data-aos="fade-up">Eksplorasi</h2>

      <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <a href="tentang.php" class="text-decoration-none text-dark">
            <div class="p-4 premium-card text-center">
              <i class="bi bi-info-circle text-success" style="font-size: 3rem"></i>
              <h4 class="mt-3 fw-bold">Tentang Kami</h4>
              <p>Pelajari visi, misi, dan profil premium Sekolah Hijau.</p>
            </div>
          </a>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <a href="program.php" class="text-decoration-none text-dark">
            <div class="p-4 premium-card text-center">
              <i class="bi bi-journal-bookmark-fill text-success" style="font-size: 3rem"></i>
              <h4 class="mt-3 fw-bold">Program Sekolah</h4>
              <p>Program unggulan untuk mendukung pembelajaran dan lingkungan hijau.</p>
            </div>
          </a>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <a href="kontak.php" class="text-decoration-none text-dark">
            <div class="p-4 premium-card text-center">
              <i class="bi bi-telephone-forward-fill text-success" style="font-size: 3rem"></i>
              <h4 class="mt-3 fw-bold">Kontak</h4>
              <p>Hubungi kami untuk informasi atau kerjasama.</p>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <?php include 'partials/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init({ duration: 1100, once: true });</script>

</body>
</html>
