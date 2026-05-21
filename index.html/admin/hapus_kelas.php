<?php
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    // Simulasi hapus data kelas
    echo "<script>alert('Data kelas dengan ID $id berhasil dihapus!'); window.location='kelas.php';</script>";
} else {
    echo "<script>alert('ID tidak valid'); window.location='kelas.php';</script>";
}
