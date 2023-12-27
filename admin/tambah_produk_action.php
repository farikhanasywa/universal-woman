<?php
include 'config.php';
session_start();

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $produk_nama = $_POST['produk_nama'];
        $produk_jenis = $_POST['produk_jenis'];
        $produk_deskripsi = $_POST['produk_deskripsi'];
        $produk_harga = $_POST['produk_harga'];

        $lokasifile = $_FILES['produk_foto']['tmp_name'];
        $namafile = $_FILES['produk_foto']['name'];

        $uploaddir = "uploads/";
        $uploadfile = $uploaddir . $namafile;

        $username = $_SESSION['username'];

        $insert_query = "INSERT INTO produk (produk_nama, produk_jenis, produk_deskripsi, 
        produk_harga, produk_foto, user_nama) VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $config->prepare($insert_query);

        if (!$stmt->bind_param("ssssss", $produk_nama, $produk_jenis, $produk_deskripsi, $produk_harga, 
        $uploadfile, $username)) {
            die("Binding parameters failed: " . $stmt->error);
        }

        if (move_uploaded_file($lokasifile, $uploadfile) && $stmt->execute()) {
            header('Location: halaman_produk.php');
            exit;
        } else {
            header('Location: tambah_produk_failed.php?message=' . urlencode("Gagal menambahkan produk: " . 
            $stmt->error));
            exit;
        }
    } else {
        header('Location: tambah_produk_failed.php?message=' . urlencode("Metode HTTP yang digunakan bukan POST."));
        exit;
    }
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>
