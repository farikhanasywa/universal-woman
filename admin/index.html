<!DOCTYPE html>
<html lang="en">

<head>
    <title>Universal Woman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
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
            background-color: #fff;
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
            max-height: 200px;
            object-fit: cover;
        }

        .card-title {
            font-weight: bold;
            font-size: 20px;
        }

        .card-text {
            color: #666;
        }

        .card .btn-primary {
            background-color: #FF6969;
            border: none;
            color: #fff;
            font-weight: bold;
            padding: 7px 15px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .card .btn-primary:hover {
            background-color: #B31312;
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

        .review-container {
            margin-top: 30px;
        }

        .review-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .review-card .review-text-produk {
            font-weight: bold;
            font-size: 24px;
        }

        .review-card .user-name {
            font-weight: bold;
        }

        .review-card .review-text {
            color: #333;
        }

        .review-card .review-text-rating {
            color: #333;
            font-size: 35px;
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
        <div class="jumbotron">
            <h1>Selamat Datang di Universal Woman</h1>
            <p>Kami siap merekomendasikan produk perawatan kecantikan terbaik untuk Anda.</p>
            <a class="btn btn-primary" href="login.php" role="button">Login</a>
            <a class="btn btn-primary mr-2" href="tambah_user.php" role="button">Daftar</a>
        </div>
    </div>

    <div class="container my-5">
        <h2>Produk</h2>
        <div class="row">
            <?php
            include 'config.php';

            $query = "SELECT * FROM produk";
            $result = $config->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="' . $row['produk_foto'] . '" class="card-img-top" alt="' . $row['produk_nama'] . '"
                                style="max-height: 200px; width: 100%; object-fit: contain;">
                            <div class="card-body">
                                <h5 class="card-title">' . $row['produk_nama'] . '</h5>
                                <p class="card-text">' . $row['produk_jenis'] . '</p>
                                <a href="detail_produk.php?produk_id=' . $row['produk_id'] . '" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo "Tidak ada produk yang tersedia.";
            }
            ?>
        </div>
    </div>

    <div class="container review-container">
        <h2>Review Produk</h2>
        <?php
        $query = "SELECT r.*, p.produk_nama, p.produk_jenis
                  FROM review r
                  INNER JOIN produk p ON r.produk_id = p.produk_id
                  ORDER BY r.review_tanggal DESC";
        $result = $config->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rating = str_repeat('&#9733;', $row['review_rating']);
                if ($row['review_rekomendasi'] == 'Ya') {
                    $icon = '<span>&#128077;</span>';
                    $rekomendasi_text = 'merekomendasikan';
                } else {
                    $icon = '<span>&#128078;</span>';
                    $rekomendasi_text = 'tidak merekomendasikan';
                }
                $username = $icon . ' ' . $row['user_nama'] . ' ' . $rekomendasi_text . ' produk ini';
                echo '
                <div class="card review-card">
                    <p class="review-text-produk">' . $row['produk_nama'] . '</p>
                    <p class="review-text-rating">' . $rating . '</p>
                    <p class="user-name">' . $username . '</p>
                    <p class="review-text">" ' . $row['review_deskripsi'] . ' "</p>
                    <p class="review-text">' . $row['review_tanggal'] . '</p>
                </div>';
            }
        } else {
            echo "Tidak ada review saat ini.";
        }
        ?>
    </div>

    <footer style="display: flex; justify-content: center; align-items: center; background-color: #fff; color: #333; height: 50px;">
        <p>&copy; 2023 Universal Woman</p>
    </footer>
</body>

</html>
