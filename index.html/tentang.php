<?php
// tentang.php versi premium Sekolah Hijau
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tentang Kami - Sekolah Hijau Premium</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #f4f9f4; }
    .header-section {
      background: linear-gradient(rgba(0,80,0,0.6), rgba(0,80,0,0.6)), url('assets/img/tentang.jpg') center/cover no-repeat;
      height: 50vh;
      display: flex; align-items: center; justify-content: center;
      color: #fff; text-align: center;
    }
    .header-section h1 { font-size: 3rem; font-weight: 700; }

    .content-box {
      background: #fff;
      border-radius: 18px;
      padding: 30px;
      box-shadow: 0 6px 25px rgba(0,0,0,0.1);
    }
    .icon-premium {
      font-size: 3rem;
      color: #1b5e20;
    }
  </style>
</head>
<body>

  <?php include 'partials/navbar.php'; ?>

  <!-- HEADER -->
  <div class="header-section" data-aos="fade-down">
    <h1>Tentang Sekolah Hijau</h1>
  </div>

  <!-- CONTENT -->
  <section class="py-5">
    <div class="container">
      <div class="content-box" data-aos="fade-up">
        <h2 class="fw-bold mb-3 text-success">Profil Sekolah</h2>
        <p>
          Sekolah Hijau adalah lembaga pendidikan yang berfokus pada pembentukan generasi yang cerdas,
          berkarakter, serta peduli lingkungan. Dengan suasana belajar yang nyaman dan fasilitas ramah lingkungan,
          kami berkomitmen menciptakan masa depan yang lebih baik.
        </p>
      </div>

      <div class="row mt-4 g-4">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="content-box text-center">
            <i class="bi bi-bullseye icon-premium"></i>
            <h4 class="mt-3 fw-bold">Visi</h4>
            <p>Mewujudkan sekolah unggul yang peduli lingkungan dan berdaya saing global.</p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="content-box text-center">
            <i class="bi bi-lightbulb-fill icon-premium"></i>
            <h4 class="mt-3 fw-bold">Misi</h4>
            <p>
              Mengembangkan potensi siswa melalui pembelajaran berkualitas, digital, dan berbasis lingkungan.
            </p>
          </div>
        </div>

        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="content-box text-center">
            <i class="bi bi-people-fill icon-premium"></i>
            <h4 class="mt-3 fw-bold">Nilai Utama</h4>
            <p>Integritas, kepedulian, kejujuran, kebersamaan, dan inovasi.</p>
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
