<?php
include 'config.php';

if (!isset($_POST['review_id'])) {
    header('Location: halaman_review.php?message=' . urlencode("Review tidak ditemukan."));
    exit;
}

$review_id = $_POST['review_id'];
$review_deskripsi = $_POST['review'];
$review_rating = $_POST['rating'];
$review_rekomendasi = $_POST['rekomendasi'];
$review_tanggal = $_POST['tanggal_review'];

$query = $config->prepare("UPDATE review SET review_deskripsi = ?, review_rating = ?, 
review_rekomendasi = ?, review_tanggal = ? WHERE review_id = ?");
$query->bind_param("sissi", $review_deskripsi, $review_rating, $review_rekomendasi, $review_tanggal, $review_id);

if ($query->execute()) {
    header('Location: halaman_review.php?message=' . urlencode("Review berhasil diperbarui."));
} else {
    header('Location: edit_review.php?review_id=' . $review_id . '&message=' . 
    urlencode("Gagal memperbarui review. Silakan coba lagi."));
}
?>