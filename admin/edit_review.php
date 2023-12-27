<?php
include 'config.php';

if (!isset($_GET['review_id'])) {
    header('Location: halaman_review.php?message=' . urlencode("Review tidak ditemukan."));
    exit;
}

$review_id = $_GET['review_id'];

$query = $config->prepare("SELECT produk.produk_nama, produk.produk_jenis, user.user_nama, review.review_deskripsi, review.review_rating, 
review.review_rekomendasi, review.review_tanggal FROM review INNER JOIN produk ON review.produk_id = produk.produk_id INNER JOIN user 
ON review.user_nama = user.user_nama WHERE review.review_id = ?");
if ($query === false) {
    die('Error in query preparation: ' . $config->error);
}

$query->bind_param("i", $review_id);
$query->execute();
$result = $query->get_result();

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $produk_nama = $row['produk_nama'];
    $produk_jenis = $row['produk_jenis'];
    $user_nama = $row['user_nama'];
    $review_deskripsi = $row['review_deskripsi'];
    $review_rating = $row['review_rating'];
    $review_rekomendasi = $row['review_rekomendasi'];
    $tanggal_review = $row['review_tanggal'];
} else {
    header('Location: halaman_review.php?message=' . urlencode("Review tidak ditemukan."));
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Review</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 160vh;
        }

        .form-container {
            width: 40%;
            margin: 0 auto;
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        textarea {
            height: 120px;
        }

        .radio-group {
            display: flex;
            align-items: center;
        }

        .radio-group input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #FF6969;
            color: #FFFFFF;
            padding: 7px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        input[type="submit"]:hover {
            background-color: #B31312;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Edit Review</h1>

        <form method="POST" action="edit_review_action.php">
            <input type="hidden" name="review_id" value="<?php echo $review_id; ?>">
            <div class="form-group">
                <label for="produk_nama">Nama Produk:</label>
                <input type="text" name="produk_nama" value="<?php echo $produk_nama; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="produk_jenis">Jenis Produk:</label>
                <input type="text" name="produk_jenis" value="<?php echo $produk_jenis; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="user_nama">Username:</label>
                <input type="text" name="user_nama" value="<?php echo $user_nama; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="review">Review:</label>
                <textarea name="review" rows="4" required><?php echo $review_deskripsi; ?></textarea>
            </div>
            <div class="form-group">
                <label for="rating">Rating:</label>
                <input type="number" name="rating" min="1" max="5" required value="<?php echo $review_rating; ?>">
            </div>
            <div class="form-group">
                <label for="rekomendasi">Apakah Anda merekomendasikan produk ini?</label>
                <div class="radio-group">
                    <input type="radio" name="rekomendasi" value="Ya" required <?php echo ($review_rekomendasi == 'Ya') ? 'checked' : ''; ?>> Ya
                    <input type="radio" name="rekomendasi" value="Tidak" required <?php echo ($review_rekomendasi == 'Tidak') ? 'checked' : ''; ?>> Tidak
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal_review">Tanggal Review:</label>
                <input type="date" name="tanggal_review" value="<?php echo $tanggal_review; ?>" required>
            </div>
            <input type="submit" value="Simpan Perubahan">
        </form>
    </div>
    <p>&copy; 2023 Universal Woman.</p>
</body>
</html>