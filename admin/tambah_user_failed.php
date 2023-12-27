<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Gagal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #FF6969;
        }

        p {
            color: #333;
            max-width: 400px;
            text-align: center;
        }

        div {
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #FF6969;
            color: #fff;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #B31312;
        }
    </style>
</head>

<body>
    <h1>Pendaftaran Gagal</h1>
    <p>
        <?php echo isset($_GET['message']) ? $_GET['message'] : "Terjadi kesalahan dalam proses pendaftaran." ?>
    </p>
    <div>
        <a href="tambah_user.php">Coba Daftar Ulang</a>
    </div>
    <footer>
        <p>&copy; 2023 Universal Woman.</p>
    </footer>
</body>

</html>