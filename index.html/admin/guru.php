<?php
include 'koneksi.php';

// Hapus data jika ada parameter id
if (isset($_GET['hapus'])) {
    $id = intval($_GET['hapus']);
    $conn->query("DELETE FROM guru WHERE id = $id");
    header("Location: guru.php");
    exit;
}

// Ambil semua data guru
$result = $conn->query("SELECT * FROM guru ORDER BY id ASC");
$guru = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Guru - Admin Panel Sekolah</title>
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
            <h1>Data Guru</h1>
            <p>Daftar guru yang mengajar di sekolah.</p>

            <a href="tambah_guru.php" class="btn btn-success mb-3">Tambah Guru</a>

            <table class="table table-striped table-bordered">
                <thead class="table-success">
                    <tr>
                        <th>No.</th>
                        <th>Nama Guru</th>
                        <th>Mata Pelajaran</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($guru) > 0): ?>
                        <?php foreach($guru as $index => $g): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($g['nama']) ?></td>
                            <td><?= htmlspecialchars($g['mapel']) ?></td>
                            <td><?= htmlspecialchars($g['alamat']) ?></td>
                            <td>
                                <a href="edit_guru.php?id=<?= $g['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="guru.php?hapus=<?= $g['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data guru ini?');">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="5" class="text-center text-muted">Belum ada data guru</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
