<?php
include 'koneksi.php';
$id = $_GET['id'] ?? 0;

$res = $conn->query("SELECT * FROM guru WHERE id = $id");
$data = $res->fetch_assoc();

if (!$data) {
    die("Data tidak ditemukan!");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];
    $alamat = $_POST['alamat'];

    $stmt = $conn->prepare("UPDATE guru SET nama=?, mapel=?, alamat=? WHERE id=?");
    $stmt->bind_param("sssi", $nama, $mapel, $alamat, $id);
    $stmt->execute();

    header("Location: guru.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Edit Guru</title>
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
        <h1>Edit Data Guru</h1>
        <form method="post" style="max-width:600px;">
            <div class="mb-3">
                <label>Nama Guru</label>
                <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Mata Pelajaran</label>
                <input type="text" name="mapel" value="<?= htmlspecialchars($data['mapel']) ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" name="alamat" value="<?= htmlspecialchars($data['alamat']) ?>" class="form-control" required>
            </div>
            <button class="btn btn-primary">Simpan Perubahan</button>
            <a href="guru.php" class="btn btn-secondary">Kembali</a>
        </form>
    </main>
</div>
</body>
</html>
