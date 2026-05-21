<?php
// program.php versi premium Sekolah Hijau
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Program Sekolah - Sekolah Hijau Premium</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #f4f9f4; }
    .header-section {
      background: linear-gradient(rgba(0,80,0,0.6), rgba(0,80,0,0.6)), url('assets/img/program.jpg') center/cover no-repeat;
      height: 50vh;
      display: flex; align-items: center; justify-content: center;
      color: #fff; text-align: center;
    }
    .header-section h1 { font-size: 3rem; font-weight: 700; }

    .program-card {
      background: #fff;
      border-radius: 18px;
      padding: 25px;
      box-shadow: 0 6px 25px rgba(0,0,0,0.1);
      transition: 0.3s;
    }

    .program-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.15);
    }

    .program-icon {
      font-size: 3rem;
      color: #1b5e20;
    }
  </style>
</head>
<body>

  <?php include 'partials/navbar.php'; ?>

  <!-- HEADER -->
  <div class="header-section" data-aos="fade-down">
    <h1>Program Unggulan</h1>
  </div>

  <!-- CONTENT -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mb-4" data-aos="fade-up">
        <h2 class="fw-bold text-success">Program Sekolah Hijau</h2>
        <p>Kami menyediakan berbagai program unggulan yang mendukung pengembangan karakter, akademik, dan kepedulian lingkungan.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="program-card text-center">
            <i class="bi bi-tree-fill program-icon"></i>
            <h4 class="mt-3 fw-bold">Program Lingkungan</h4>
            <p>Pelatihan daur ulang, penanaman pohon, dan kurikulum sadar lingkungan.</p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="program-card text-center">
            <i class="bi bi-mortarboard-fill program-icon"></i>
            <h4 class="mt-3 fw-bold">Program Akademik</h4>
            <p>Pembelajaran modern berbasis teknologi untuk meningkatkan kualitas akademik.</p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="program-card text-center">
            <i class="bi bi-people-fill program-icon"></i>
            <h4 class="mt-3 fw-bold">Program Karakter</h4>
            <p>Kegiatan pembentukan karakter seperti leadership, kerjasama, dan kejujuran.</p>
          </div>
        </div>
      </div>

      <div class="row g-4 mt-3">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
          <div class="program-card text-center">
            <i class="bi bi-globe program-icon"></i>
            <h4 class="mt-3 fw-bold">Program Digital</h4>
            <p>Pembelajaran digital, coding dasar, robotika, dan STEM untuk siswa.</p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
          <div class="program-card text-center">
            <i class="bi bi-heart-fill program-icon"></i>
            <h4 class="mt-3 fw-bold">Program Kesehatan</h4>
            <p>Senam sehat, edukasi gizi, dan pembiasaan hidup bersih.</p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
          <div class="program-card text-center">
            <i class="bi bi-brush-fill program-icon"></i>
            <h4 class="mt-3 fw-bold">Program Seni</h4>
            <p>Meliputi seni musik, tari, lukis, dan kegiatan ekstrakurikuler kreatif.</p>
          </div>
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
