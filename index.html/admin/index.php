
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'koneksi.php';

// Ambil jumlah data
$jmlSiswa = $conn->query("SELECT COUNT(*) AS total FROM siswa")->fetch_assoc()['total'] ?? 0;
$jmlGuru  = $conn->query("SELECT COUNT(*) AS total FROM guru")->fetch_assoc()['total'] ?? 0;
$jmlKelas = $conn->query("SELECT COUNT(*) AS total FROM kelas")->fetch_assoc()['total'] ?? 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Panel Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
            display: flex;
            flex-direction: column;
        }
        /* Navbar atas (mobile) */
        .topbar {
            background-color: #207824ff;
            color: white;
            padding: 0.8rem 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .topbar .menu-btn {
            border: none;
            background: none;
            color: white;
            font-size: 1.5rem;
        }

        /* Sidebar */
        nav {
            background-color: #388e3c;
            color: white;
            width: 250px;
            min-height: 100vh;
            padding: 1.2rem;
            transition: transform 0.3s ease-in-out;
        }
        nav a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 0.6rem 0.8rem;
            border-radius: 0.4rem;
            margin-bottom: 0.4rem;
            transition: background 0.2s;
        }
        nav a:hover {
            background-color: rgba(255,255,255,0.2);
        }
        nav hr {
            border-color: rgba(255,255,255,0.2);
        }

        /* Sidebar sembunyi di mobile */
        @media (max-width: 992px) {
            nav {
                position: fixed;
                top: 0;
                left: 0;
                transform: translateX(-100%);
                z-index: 1050;
            }
            nav.show {
                transform: translateX(0);
            }
        }

        main {
            flex-grow: 1;
            padding: 1.5rem;
        }

        .welcome-box {
            background: white;
            border-left: 5px solid #409240ff;
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        h1 {
            font-weight: 700;
            color: #4bb151ff;
        }

        .card {
            border: none;
            border-radius: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            text-decoration: none;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }
        .icon-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 2rem;
            background: rgba(255, 255, 255, 0.3);
        }

        @media (max-width: 576px) {
            .icon-circle {
                width: 55px;
                height: 55px;
                font-size: 1.5rem;
            }
            h5.card-title {
                font-size: 1rem;
            }
            .card-text {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar atas untuk mobile -->
    <div class="topbar d-lg-none">
        <button class="menu-btn" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>
        <span class="fw-bold">Admin Sekolah</span>
    </div>

    <div class="d-flex">
        <!-- Sidebar -->
        <nav id="sidebar">
            <a href="index.php" class="fw-bold fs-5 d-block mb-3 text-white">Admin Sekolah</a>
            <hr>
            <a href="index.php"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            <a href="siswa.php"><i class="bi bi-people me-2"></i> Data Siswa</a>
            <a href="guru.php"><i class="bi bi-person-badge me-2"></i> Data Guru</a>
            <a href="kelas.php"><i class="bi bi-building me-2"></i> Data Kelas</a>
            <hr>
        </nav>

        <!-- Konten utama -->
        <main class="flex-grow-1">
            <div class="welcome-box mb-4">
                <h1><i class="bi bi-speedometer2"></i> Dashboard</h1>
                <p class="text-muted mb-0">Selamat datang di <strong>Admin Panel Sekolah</strong>. Kelola data siswa, guru, dan kelas dengan mudah.</p>
            </div>

            <div class="row g-4 mt-3">
                <div class="col-md-4 col-sm-6 col-12">
                    <a href="siswa.php" class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <div class="icon-circle bg-white bg-opacity-25">
                                <i class="bi bi-people"></i>
                            </div>
                            <h5 class="card-title">Jumlah Siswa</h5>
                            <p class="card-text fs-3 fw-bold"><?= $jmlSiswa ?></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <a href="guru.php" class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <div class="icon-circle bg-white bg-opacity-25">
                                <i class="bi bi-person-badge"></i>
                            </div>
                            <h5 class="card-title">Jumlah Guru</h5>
                            <p class="card-text fs-3 fw-bold"><?= $jmlGuru ?></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <a href="kelas.php" class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <div class="icon-circle bg-white bg-opacity-25">
                                <i class="bi bi-building"></i>
                            </div>
                            <h5 class="card-title">Jumlah Kelas</h5>
                            <p class="card-text fs-3 fw-bold"><?= $jmlKelas ?></p>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('show');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
