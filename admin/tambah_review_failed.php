<!DOCTYPE html>
<html>

<head>
    <title>Gagal Menambahkan Review</title>
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
            height: 100vh;
        }

        .error-container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: left;
            max-width: 600px;
        }

        h1 {
            color: #FF6969;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <h1>Gagal Menambahkan Review</h1>
        <p>
            Terjadi kesalahan saat mencoba menambahkan review.
            <br>
            <?php
            if (isset($_GET['message'])) {
                echo htmlspecialchars($_GET['message']);
            } else {
                echo "Kesalahan tidak dapat ditampilkan.";
            }
            ?>
        </p>
        <a href="tambah_review.php">Kembali ke Halaman Tambah Review</a>
    </div>
    <footer>
        <p>&copy; 2023 Universal Woman.</p>
    </footer>
</body>

</html>