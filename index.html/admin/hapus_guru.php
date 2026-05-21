<?php
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    // Simulasi hapus data
    echo "<script>alert('Data guru dengan ID $id berhasil dihapus!'); window.location='guru.php';</script>";
} else {
    echo "<script>alert('ID tidak valid'); window.location='guru.php';</script>";
}
