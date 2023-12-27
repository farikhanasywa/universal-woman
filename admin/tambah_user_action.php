<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];

    $check_query = $config->prepare("SELECT user_nama FROM user WHERE user_nama = ? OR user_email = ?");
    if (!$check_query) {
        die("Error in query: " . $config->error);
    }
    $check_query->bind_param("ss", $username, $email);
    $check_query->execute();
    $check_result = $check_query->get_result();

    if ($check_result->num_rows > 0) {
        header('Location: tambah_user_failed.php?message=' . urlencode("Username atau email sudah digunakan. Silakan coba dengan informasi yang berbeda."));
        exit;
    }

    $query = $config->prepare("INSERT INTO user (user_nama, user_pass, user_namalengkap, user_email) VALUES (?, ?, ?, ?)");
    if (!$query) {
        die("Error in query: " . $config->error);
    }

    $query->bind_param("ssss", $username, $password, $nama_lengkap, $email);
    $result = $query->execute();

    if ($result) {
        header('Location: login.php?message=' . urlencode("Pendaftaran berhasil. Silakan login."));
        exit;
    } else {
        header('Location: tambah_user_failed.php?message=' . urlencode("Pendaftaran gagal. Silakan coba lagi."));
        exit;
    }
} else {
    header('Location: tambah_user.php?message=' . urlencode("Metode HTTP yang digunakan bukan POST."));
    exit;
}
?>
