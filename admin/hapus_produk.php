<?php
include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

if (isset($_GET['produk_id'])) {
    $produk_id = $_GET['produk_id'];

    $username = $_SESSION['username'];
    $check_query = $config->prepare("SELECT * FROM produk WHERE produk_id = ? AND user_nama = ?");
    $check_query->bind_param("is", $produk_id, $username);
    $check_query->execute();
    $check_result = $check_query->get_result();

    if ($check_result && $check_result->num_rows > 0) {
        $delete_query = $config->prepare("DELETE FROM produk WHERE produk_id = ?");
        $delete_query->bind_param("i", $produk_id);
        if ($delete_query->execute()) {
            header('Location: halaman_produk.php');
            exit;
        } else {
            header('Location: hapus_produk_failed.php?message=' . urlencode("Gagal menghapus produk: " . $delete_query->error));
            exit;
        }
    } else {
        header('Location: hapus_produk_failed.php?message=' . urlencode("Anda tidak memiliki izin untuk menghapus produk ini."));
        exit;
    }
} else {
    header('Location: halaman_produk.php');
    exit;
}
?>
