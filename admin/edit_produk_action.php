<?php
include 'config.php';

session_start();

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $produk_id = $_POST['produk_id'];
        $produk_nama = $_POST['produk_nama'];
        $produk_jenis = $_POST['produk_jenis'];
        $produk_deskripsi = $_POST['produk_deskripsi'];
        $produk_harga = $_POST['produk_harga'];

        $username = $_SESSION['username'];

        $uploaded_file = isset($_FILES['produk_foto']) ? $_FILES['produk_foto'] : null;

        if ($uploaded_file && $uploaded_file['error'] === UPLOAD_ERR_OK) {
            $namafile = $uploaded_file['name'];
            $lokasifile = $uploaded_file['tmp_name'];

            $uploaddir = "uploads/";
            $uploadfile = $uploaddir . $namafile;

            if (move_uploaded_file($lokasifile, $uploadfile)) {
                $update_query = $config->prepare("UPDATE produk SET produk_nama = ?, produk_jenis = ?, produk_deskripsi = ?, produk_harga = ?, produk_foto = ? WHERE produk_id = ?");
                $update_query->bind_param("sssssi", $produk_nama, $produk_jenis, $produk_deskripsi, $produk_harga, $uploadfile, $produk_id);
            } else {
                header('Location: edit_produk.php?produk_id=' . $produk_id . '&error=' . urlencode("Gagal mengunggah foto produk."));
                exit;
            }
        } else {
            $update_query = $config->prepare("UPDATE produk SET produk_nama = ?, produk_jenis = ?, produk_deskripsi = ?, produk_harga = ? WHERE produk_id = ?");
            $update_query->bind_param("ssssi", $produk_nama, $produk_jenis, $produk_deskripsi, $produk_harga, $produk_id);
        }

        if ($update_query) {
            if ($update_query->execute()) {
                header('Location: halaman_produk.php');
                exit;
            } else {
                header('Location: edit_produk.php?produk_id=' . $produk_id . '&error=' . urlencode("Gagal mengedit produk: " . $update_query->error));
                exit;
            }
        } else {
            header('Location: edit_produk.php?produk_id=' . $produk_id . '&error=' . urlencode("Gagal menyiapkan kueri SQL."));
            exit;
        }
    } else {
        header('Location: edit_produk.php?error=' . urlencode("Metode HTTP yang digunakan bukan POST."));
        exit;
    }
} catch (Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>