<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_kelas = $_POST['nama_kelas'];
    $wali_kelas = $_POST['wali_kelas'];

    $stmt = $conn->prepare("INSERT INTO kelas (nama_kelas, wali_kelas) VALUES (?, ?)");
    $stmt->bind_param("ss", $nama_kelas, $wali_kelas);
    $stmt->execute();

    header("Location: kelas.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Tambah Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body { min-height: 100vh; }
        main { padding: 2rem; flex-grow: 1; }
    </style>
</head>
<body>
<div class="d-flex">
    <?php include 'sidebar.php'; ?>

    <main>
        <h1>Tambah Kelas</h1>
        <form method="post" style="max-width:600px;">
            <div class="mb-3">
                <label>Nama Kelas</label>
                <input type="text" name="nama_kelas" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Wali Kelas</label>
                <input type="text" name="wali_kelas" class="form-control" required>
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="kelas.php" class="btn btn-secondary">Kembali</a>
        </form>
    </main>
</div>
</body>
</html>
