<?php
include 'koneksi.php';

// Hapus data jika ada parameter id hapus
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM kelas WHERE id = $id");
    header("Location: kelas.php");
    exit;
}

// Ambil semua data kelas dari database
$result = $conn->query("SELECT * FROM kelas ORDER BY id ASC");
$kelas = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Kelas - Admin Panel Sekolah</title>
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
            <h1>Data Kelas</h1>
            <p>Daftar kelas di sekolah.</p>

            <a href="tambah_kelas.php" class="btn btn-success mb-3">Tambah Kelas</a>

            <table class="table table-striped table-bordered">
                <thead class="table-success">
                    <tr>
                        <th>No.</th>
                        <th>Nama Kelas</th>
                        <th>Wali Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($kelas) > 0): ?>
                        <?php foreach($kelas as $index => $k): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($k['nama_kelas']) ?></td>
                            <td><?= htmlspecialchars($k['wali_kelas']) ?></td>
                            <td>
                                <a href="edit_kelas.php?id=<?= $k['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="kelas.php?id=<?= $k['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data kelas ini?');">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="4" class="text-center text-muted">Belum ada data kelas</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
