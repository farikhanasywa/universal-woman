<?php
include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['review_id'])) {
    $review_id = $_GET['review_id'];
    $username = $_SESSION['username'];

    $delete_query = $config->prepare("DELETE FROM review WHERE review_id = ? AND user_nama = ?");
    $delete_query->bind_param("is", $review_id, $username);

    if ($delete_query->execute()) {
        header('Location: halaman_review.php');
        exit;
    } else {
        header('Location: halaman_review.php?error=' . urlencode("Gagal menghapus review."));
        exit;
    }
} else {
    header('Location: halaman_review.php');
    exit;
}
?>
