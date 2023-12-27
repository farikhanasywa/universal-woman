<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            height: 120vh;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            color: #333;
            font-weight: bold;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .nav-item {
            margin-right: 20px;
        }

        .nav-link {
            color: #333;
            font-weight: bold;
        }

        .jumbotron {
            background-color: #f8f8f8;
            text-align: center;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .jumbotron h1 {
            color: #333;
        }

        .jumbotron p {
            color: #666;
        }

        .jumbotron .btn-primary {
            background-color: #FF6969;
            border: none;
            color: #fff;
            font-weight: bold;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .jumbotron .btn-primary:hover {
            background-color: #B31312;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            max-height: 300px;
            object-fit: contain;
        }

        .card-title {
            font-weight: bold;
            font-size: 24px;
        }

        .card-text {
            color: #666;
            font-size: 16px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        @media (max-width: 768px) {
            .jumbotron {
                padding: 20px;
            }

            .jumbotron h1 {
                font-size: 24px;
            }

            .jumbotron p {
                font-size: 16px;
            }

            .navbar-nav {
                margin-top: 10px;
            }

            .navbar .nav-item {
                margin-right: 10px;
            }
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Universal Woman</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <?php
        include 'config.php';

        if (isset($_GET['produk_id'])) {
            $produk_id = $_GET['produk_id'];

            $query = $config->prepare("SELECT * FROM produk WHERE produk_id = ?");
            $query->bind_param("i", $produk_id);
            $query->execute();
            $result = $query->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo '
                <div class="card">
                    <div style="display: flex; align-items: center; justify-content: center; overflow: hidden;">
                        <img src="' . $row['produk_foto'] . '" style="max-width: 100%; max-height: 300px; object-fit: contain;" alt="' . $row['produk_nama'] . '">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">' . $row['produk_nama'] . '</h5>
                        <p class="card-text"><strong>Jenis Produk:</strong> ' . $row['produk_jenis'] . '</p>
                        <p class="card-text">' . $row['produk_deskripsi'] . '</p>
                        <p class="card-text">Harga: ' . number_format($row['produk_harga'], 2) . '</p>
                    </div>
                </div>';
            } else {
                echo "Produk tidak ditemukan.";
            }
        } else {
            echo "ID Produk tidak ditemukan.";
        }
        ?>
    </div>
    <footer
        style="display: flex; justify-content: center; align-items: center; background-color: #fff; color: #333; height: 50px;">
        <p>&copy; 2023 Universal Woman</p>
    </footer>

</body>

</html>