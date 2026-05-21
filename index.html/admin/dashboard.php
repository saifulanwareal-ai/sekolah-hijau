<?php
session_start();

// Jika mendapat request POST dari halaman login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username & password wajib admin / 54321
    if ($username === "admin" && $password === "54321") {

        $_SESSION['login'] = true;
        header("Location: dashboard.php");
        exit;

    } else {

        header("Location: ../login.php?error=1");
        exit;
    }
}

// Jika belum login, kembalikan ke login
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}
?>
