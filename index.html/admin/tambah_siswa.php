<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $stmt = $conn->prepare("INSERT INTO siswa (nama, jenis_kelamin, kelas, alamat) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $jk, $kelas, $alamat);
    $stmt->execute();

    header("Location: siswa.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { min-height: 100vh; }
        main { padding: 2rem; flex-grow: 1; }
    </style>
</head>
<body>
<div class="d-flex">
    <?php include 'sidebar.php'; ?>

    <main>
        <h1>Tambah Data Siswa</h1>
        <form method="post" style="max-width:600px;">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select" required>
                    <option value="">-- Pilih --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control"></textarea>
            </div>
            <button class="btn btn-success">Simpan</button>
            <a href="siswa.php" class="btn btn-secondary">Kembali</a>
        </form>
    </main>
</div>
</body>
</html>
