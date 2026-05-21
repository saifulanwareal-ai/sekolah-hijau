<?php
include 'koneksi.php';
$id = $_GET['id'] ?? 0;

$res = $conn->query("SELECT * FROM siswa WHERE id = $id");
$data = $res->fetch_assoc();

if (!$data) {
    die("Data tidak ditemukan!");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $stmt = $conn->prepare("UPDATE siswa SET nama=?, jenis_kelamin=?, kelas=?, alamat=? WHERE id=?");
    $stmt->bind_param("ssssi", $nama, $jk, $kelas, $alamat, $id);
    $stmt->execute();

    header("Location: siswa.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
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
        <h1>Edit Data Siswa</h1>
        <form method="post" style="max-width:600px;">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-select" required>
                    <option value="Laki-laki" <?= $data['jenis_kelamin']=='Laki-laki'?'selected':'' ?>>Laki-laki</option>
                    <option value="Perempuan" <?= $data['jenis_kelamin']=='Perempuan'?'selected':'' ?>>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" value="<?= htmlspecialchars($data['kelas']) ?>" class="form-control">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control"><?= htmlspecialchars($data['alamat']) ?></textarea>
            </div>
            <button class="btn btn-primary">Simpan Perubahan</button>
            <a href="siswa.php" class="btn btn-secondary">Kembali</a>
        </form>
    </main>
</div>
</body>
</html>
