<?php
include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

if (isset($_GET['produk_id'])) {
    $produk_id = $_GET['produk_id'];
    $query = $config->prepare("SELECT * FROM produk WHERE produk_id = ?");
    $query->bind_param("i", $produk_id);
    $query->execute();
    $result = $query->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $produk_nama = $row['produk_nama'];
        $produk_jenis = $row['produk_jenis'];
        $produk_deskripsi = $row['produk_deskripsi'];
        $produk_harga = $row['produk_harga'];
        $produk_foto = $row['produk_foto'];


    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Produk</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 170vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-container {
            width: 40%;
            margin: 0 auto;
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }


        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        textarea {
            height: 150px;
        }

        input[type="submit"] {
            background-color: #FF6969;
            color: #FFFFFF;
            padding: 7px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #B31312;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Edit Produk</h1>
        <br>
        <form action="edit_produk_action.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="produk_id" value="<?php echo $produk_id; ?>">
            <label for="produk_nama">Nama Produk:</label>
            <input type="text" name="produk_nama" value="<?php echo $produk_nama; ?>" required>
            <br><br>
            <label for="produk_jenis">Jenis Produk:</label>
            <select name="produk_jenis" required
                style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 15px; width: 100%;">
                <option value="Face Wash" <?php echo ($produk_jenis === 'Face Wash') ? 'selected' : ''; ?>>Face Wash
                </option>
                <option value="Toner" <?php echo ($produk_jenis === 'Toner') ? 'selected' : ''; ?>>Toner</option>
                <option value="Serum" <?php echo ($produk_jenis === 'Serum') ? 'selected' : ''; ?>>Serum</option>
                <option value="Moisturizer" <?php echo ($produk_jenis === 'Moisturizer') ? 'selected' : ''; ?>>Moisturizer
                </option>
                <option value="Sunscreen" <?php echo ($produk_jenis === 'Sunscreen') ? 'selected' : ''; ?>>Sunscreen
                </option>
            </select>
            <br><br>
            <label for="produk_deskripsi">Deskripsi Produk:</label>
            <textarea name="produk_deskripsi" required><?php echo $produk_deskripsi; ?></textarea>
            <br><br>
            <label for="produk_harga">Harga Produk:</label>
            <input type="text" name="produk_harga" value="<?php echo $produk_harga; ?>" required>
            <br><br>
            <label for="produk_foto">Foto Produk Baru:</label>
            <input type="file" name="produk_foto" accept="image/*">
            <br><br>
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" disabled>
            <br><br>
            <input type="submit" value="Simpan Perubahan">
        </form>
    </div>
    <footer>
        <p>&copy; 2023 Universal Woman.</p>
    </footer>
</body>

</html>