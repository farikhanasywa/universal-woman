<?php
include 'config.php';
session_start();

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $produk_id = $_POST['nama_produk'];
        $review = $_POST['review'];
        $rating = $_POST['rating'];

        $input_tanggal = $_POST['tanggal'];
        $timestamp = strtotime($input_tanggal);
        $tanggal = date('Y-m-d', $timestamp);

        $rekomendasi = $_POST['rekomendasi'];

        $username = $_SESSION['username'];

        $insert_query = $config->prepare("INSERT INTO review (produk_id, user_nama, review_deskripsi, review_rating, 
        review_tanggal, review_rekomendasi) VALUES (?, ?, ?, ?, STR_TO_DATE(?, '%Y-%m-%d'), ?)");

        $insert_query->bind_param("ississ", $produk_id, $username, $review, $rating, $tanggal, $rekomendasi);

        if ($insert_query->execute()) {
            header('Location: halaman_review.php?message=' . urlencode("Review berhasil ditambahkan!"));
            exit;
        } else {
            header('Location: tambah_review_failed.php?message=' . urlencode("Gagal menambahkan review: " . 
            $insert_query->error));
            exit;
        }
    } else {
        header('Location: tambah_review_failed.php?message=' . urlencode("Metode HTTP yang digunakan bukan POST."));
        exit;
    }
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>
