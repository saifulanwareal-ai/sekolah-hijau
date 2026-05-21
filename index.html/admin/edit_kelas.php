<?php
include 'koneksi.php';
$id = $_GET['id'] ?? 0;

$res = $conn->query("SELECT * FROM kelas WHERE id = $id");
$data = $res->fetch_assoc();

if (!$data) {
    die("Data tidak ditemukan!");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_kelas = $_POST['nama_kelas'];
    $wali_kelas = $_POST['wali_kelas'];

    $stmt = $conn->prepare("UPDATE kelas SET nama_kelas=?, wali_kelas=? WHERE id=?");
    $stmt->bind_param("ssi", $nama_kelas, $wali_kelas, $id);
    $stmt->execute();

    header("Location: kelas.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <title>Edit Kelas</title>
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
        <h1>Edit Data Kelas</h1>
        <form method="post" style="max-width:600px;">
            <div class="mb-3">
                <label>Nama Kelas</label>
                <input type="text" name="nama_kelas" value="<?= htmlspecialchars($data['nama_kelas']) ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Wali Kelas</label>
                <input type="text" name="wali_kelas" value="<?= htmlspecialchars($data['wali_kelas']) ?>" class="form-control" required>
            </div>
            <button class="btn btn-primary">Simpan Perubahan</button>
            <a href="kelas.php" class="btn btn-secondary">Kembali</a>
        </form>
    </main>
</div>
</body>
</html>
