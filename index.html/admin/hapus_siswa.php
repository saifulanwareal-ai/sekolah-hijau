<?php
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Simulasi hapus data
if ($id > 0) {
    // Biasanya di sini query DELETE dari database
    echo "<script>alert('Data siswa dengan ID $id berhasil dihapus!'); window.location='siswa.php';</script>";
} else {
    echo "<script>alert('ID tidak valid'); window.location='siswa.php';</script>";
}
