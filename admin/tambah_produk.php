<!DOCTYPE html>
<html>

<head>
    <title>Tambah Produk</title>
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
            height: 150vh;
        }

        .form-container {
            width: 40%;
            margin: 0 auto;
            background-color: #fff;
            padding: 50px;
            border-radius: 5px;
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
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        textarea {
            height: 120px;
        }

        .select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        .submit-button {
            background-color: #FF6969;
            color: #FFFFFF;
            padding: 7px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .submit-button:hover {
            background-color: #B31312;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Tambah Produk</h1>

        <form method="POST" action="tambah_produk_action.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="produk_nama">Nama Produk:</label>
                <input type="text" name="produk_nama" required>
            </div>
            <div class="form-group">
                <label for="produk_jenis">Jenis Produk:</label>
                <select name="produk_jenis" class="select">
                    <option value="Face Wash">Face Wash</option>
                    <option value="Toner">Toner</option>
                    <option value="Serum">Serum</option>
                    <option value="Moisturizer">Moisturizer</option>
                    <option value="Sunscreen">Sunscreen</option>
                </select>
            </div>
            <div class="form-group">
                <label for="produk_deskripsi">Deskripsi:</label>
                <textarea name="produk_deskripsi" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="produk_harga">Harga:</label>
                <input type="number" name="produk_harga" min="0" required>
            </div>
            <div class="form-group">
                <label for="produk_foto">Foto Produk:</label>
                <input type="file" name="produk_foto" accept="image/*" required>
            </div>
            <div class="form-group">
                <button type="submit" class="submit-button">Tambah Produk</button>
            </div>
        </form>
    </div>
    <p>&copy; 2023 Universal Woman.</p>
</body>

</html>