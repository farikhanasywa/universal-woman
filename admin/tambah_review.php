<!DOCTYPE html>
<html>

<head>
    <title>Tambah Review</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: left;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-group {
            margin: 10px 0;
        }

        h1 {
            color: #333333;
            text-align: center;
        }

        label {
            display: block;
            font-size: 14px;
        }

        input[type="text"],
        textarea {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        select {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="radio"] {
            margin: 0 10px;
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

        .radio-group {
            font-size: 12px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <br>
    <div class="form-container">
        <h1>Tambah Review</h1>
        <form action="tambah_review_action.php" method="POST">
            <div class="form-group">
                <label for="nama_produk">Nama Produk:</label>
                <select name="nama_produk">
    <?php
    include 'config.php';

    $query = "SELECT produk_id, produk_nama FROM produk";
    $result = $config->query($query);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['produk_id'] . "'>" . $row['produk_nama'] . "</option>";
        }
    }
    ?>
</select>
            </div>
            <div class="form-group">
                <label for="review">Review:</label>
                <textarea name="review" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="rating">Rating:</label>
                <input type="number" name="rating" min="1" max="5" required>
            </div>
            <div class="form-group">
                <label for="rekomendasi">Apakah Goddess merekomendasikan produk ini?</label>
                <div class="radio-group">
                    <input type="radio" name="rekomendasi" value="Ya" id="ya-rekomendasi" required> Ya
                    <input type="radio" name="rekomendasi" value="Tidak" id="tidak-rekomendasi" required>Tidak
                </div>
            </div>
            <div class="form-group">
    <label for="tanggal">Tanggal Review:</label>
    <input type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required>
</div>
            <input type="submit" value="Submit">
        </form>
    </div>
    <p>&copy; 2023 Universal Woman.</p>
</body>

</html>
