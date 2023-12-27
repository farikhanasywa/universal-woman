<!DOCTYPE html>
<html>

<head>
    <title>Halaman Review</title>
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
        }

        .table-container {
            width: 80%;
            max-width: 1000px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
            text-align: center;
        }

        .add-button {
            background-color: #FF6969;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            padding: 7px 20px;
            cursor: pointer;
            text-align: center;
            font-size: 14px;
            text-decoration: none;
            display: inline-block;
        }

        .add-button:hover {
            background-color: #B31312;
            color: #FFFFFF;
        }

        .table-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .edit-button,
        .delete-button {
            background-color: #FF6969;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }

        .edit-button:hover,
        .delete-button:hover {
            background-color: #B31312;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <h1>Halaman Review</h1>
        <a class='add-button' href='tambah_review.php'>[+] Add Review</a>
        <br>
        <table>
            <tr>
                <th>Nomor</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Username</th>
                <th>Review</th>
                <th>Rating</th>
                <th>Rekomendasi</th>
                <th>Tanggal Review</th>
                <th>Kelola</th>
            </tr>

            <?php
            include 'config.php';

            $query = "SELECT review.review_id, 
            review.review_tanggal, 
            produk.produk_nama, 
            produk.produk_jenis, 
            user.user_nama, 
            review.review_deskripsi, 
            review.review_rating,
            review.review_rekomendasi
            FROM review
            INNER JOIN produk ON review.produk_id = produk.produk_id
            INNER JOIN user ON review.user_nama = user.user_nama;";
            $result = $config->query($query);
            if (!$result) {
                die("Error: " . $config->error);
            }

            if ($result && $result->num_rows > 0) {
                $nomor = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $nomor . "</td>";
                    echo "<td>" . $row['produk_nama'] . "</td>";
                    echo "<td>" . $row['produk_jenis'] . "</td>";
                    echo "<td>" . $row['user_nama'] . "</td>";
                    echo "<td>" . $row['review_deskripsi'] . "</td>";
                    echo "<td>" . $row['review_rating'] . "</td>";
                    echo "<td>" . $row['review_rekomendasi'] . "</td>";
                    echo "<td>" . $row['review_tanggal'] . "</td>";
                    echo "<td>  
                    <div>
                    <a class='edit-button' href='edit_review.php?review_id=" . $row['review_id'] . "'>Edit</a>
                </div>
                <br>
                <div>
                    <a class='delete-button' href='hapus_review.php?review_id=" . $row['review_id'] . "'>Hapus</a>
                </div>
                    </td>";
                    echo "</tr>";
                    $nomor++;
                }
            } else {
                echo "<tr><td colspan='8'>Tidak ada review yang ditemukan.</td></tr>";
            }
            ?>
        </table>
    </div>
    <p>&copy; 2023 Universal Woman.</p>
</body>

</html>