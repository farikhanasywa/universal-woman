<?php
include 'config.php';

$query = $config->query("SELECT * FROM produk");

if ($query) {
    $nomor = 1;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Produk</title>
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

        .edit-button, .delete-button {
            background-color: #FF6969;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }

        .edit-button:hover, .delete-button:hover {
            background-color: #B31312;
            color: #FFFFFF;
        }

        .add-button-container {
            display: flex;
            justify-content: center;
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
    </style>
</head>

<body>
    <div class="table-container">
        <h1>Halaman Produk</h1>
        <div class="add-button-container">
        <a class="add-button" href="tambah_produk.php">[+] Tambah Produk</a>
        </div>
        <br>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Username</th>
                <th>Kelola</th>
            </tr>
            <?php while ($row = $query->fetch_assoc()) : ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $row['produk_nama']; ?></td>
                    <td><?php echo $row['produk_jenis']; ?></td>
                    <td><?php echo $row['produk_deskripsi']; ?></td>
                    <td><?php echo $row['produk_harga']; ?></td>
                    <td><img src="<?php echo $row['produk_foto']; ?>" width="100"></td>
                    <td><?php echo $row['user_nama']; ?></td>
                    <td>
                        <a href="edit_produk.php?produk_id=<?php echo $row['produk_id']; ?>" class="edit-button">Edit</a>
                        <br>
                        <br>
                        <a href="hapus_produk.php?produk_id=<?php echo $row['produk_id']; ?>" class="delete-button">Hapus</a>
                    </td>
                </tr>
                <?php $nomor++; ?>
            <?php endwhile; ?>
        </table>
    </div>
    <p>&copy; 2023 Universal Woman.</p>
</body>
</html>
<?php
} else {
    echo "Query error: " . $config->error;
}
?>
