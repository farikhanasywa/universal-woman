<?php
session_start(); // Mulai sesi

include 'config.php'; // Sertakan file konfigurasi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari pengguna berdasarkan username dan kata sandi
    $query = "SELECT * FROM user WHERE user_nama = '$username' AND user_pass = '$password'";
    $result = $config->query($query); // Menggunakan variabel $config dari config.php

    if ($result && $result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Login berhasil
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['user_nama'];
        header('Location: dashboard.php'); // Arahkan ke halaman dashboard
        exit();
    } else {
        echo "Login gagal. Kata sandi salah atau pengguna tidak ditemukan.";
    }
}
?>
