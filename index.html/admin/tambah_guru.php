<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];
    $alamat = $_POST['alamat'];

    $stmt = $conn->prepare("INSERT INTO guru (nama, mapel, alamat) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama, $mapel, $alamat);
    $stmt->execute();

    header("Location: guru.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Tambah Guru</title>
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
        <h1>Tambah Guru</h1>
        <form method="post" style="max-width:600px;">
            <div class="mb-3">
                <label>Nama Guru</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Mata Pelajaran</label>
                <input type="text" name="mapel" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="guru.php" class="btn btn-secondary">Kembali</a>
        </form>
    </main>
</div>
</body>
</html>
