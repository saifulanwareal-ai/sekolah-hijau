<?php
// kontak.php versi premium Sekolah Hijau
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kontak - Sekolah Hijau Premium</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #f4f9f4; }
    .header-section {
      background: linear-gradient(rgba(0,80,0,0.6), rgba(0,80,0,0.6)), url('assets/img/kontak.jpg') center/cover no-repeat;
      height: 45vh;
      display: flex; align-items: center; justify-content: center;
      color: #fff; text-align: center;
    }
    .header-section h1 { font-size: 3rem; font-weight: 700; }

    .contact-box {
      background: #fff;
      border-radius: 18px;
      padding: 30px;
      box-shadow: 0 6px 25px rgba(0,0,0,0.1);
    }
    .contact-icon {
      font-size: 2.7rem;
      color: #1b5e20;
    }
    .map-box iframe {
      width: 100%;
      height: 350px;
      border: none;
      border-radius: 18px;
      box-shadow: 0 6px 25px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <?php include 'partials/navbar.php'; ?>

  <div class="header-section" data-aos="fade-down">
    <h1>Kontak Kami</h1>
  </div>

  <section class="py-5">
    <div class="container">
      <div class="row g-4">

        <!-- Informasi Kontak -->
        <div class="col-md-5" data-aos="fade-right">
          <div class="contact-box">
            <h3 class="fw-bold text-success mb-3">Informasi Kontak</h3>

            <div class="d-flex mb-3">
              <i class="bi bi-geo-alt-fill contact-icon me-3"></i>
              <p class="mb-0">Jl. Hijau Lestari No. 21, Jakarta Selatan</p>
            </div>

            <div class="d-flex mb-3">
              <i class="bi bi-telephone-fill contact-icon me-3"></i>
              <p class="mb-0">(021) 555-1234</p>
            </div>

            <div class="d-flex mb-3">
              <i class="bi bi-envelope-fill contact-icon me-3"></i>
              <p class="mb-0">info@sekolahhijau.sch.id</p>
            </div>

            <div class="d-flex mb-3">
              <i class="bi bi-clock-fill contact-icon me-3"></i>
              <p class="mb-0">Senin - Jumat, 07.00 - 16.00</p>
            </div>
          </div>
        </div>

        <!-- Form Kontak -->
        <div class="col-md-7" data-aos="fade-left">
          <div class="contact-box">
            <h3 class="fw-bold text-success mb-3">Kirim Pesan</h3>

            <form>
              <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" placeholder="Masukkan nama Anda" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Email aktif Anda" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Pesan</label>
                <textarea class="form-control" rows="5" placeholder="Tulis pesan Anda"></textarea>
              </div>

              <button class="btn btn-success px-4 py-2 rounded-pill fw-semibold">
                <i class="bi bi-send-fill me-2"></i> Kirim Pesan
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- MAP -->
      <div class="map-box mt-5" data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.427679841976!2d106.80666297481004!3d-6.206575793782198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3ef7d92c79b%3A0x7b93a9f5a2c8c85b!2sJakarta!5e0!3m2!1sid!2sid!4v1696924485202!5m2!1sid!2sid" allowfullscreen=""></iframe>
      </div>

    </div>
  </section>

  <?php include 'partials/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init({ duration: 1100, once: true });</script>
</body>
</html>
