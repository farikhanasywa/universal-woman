<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <style>
        body {
            background-color: #FFFFFF; /* Warna latar belakang utama */
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

        h1 {
            color: #333333; /* Warna teks dan ikon */
        }

        form {
            background-color: #F2F2F2; /* Warna latar belakang minimalis */
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            color: #333333; /* Warna aksen (tombol) */
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            max-width: 250px;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid #333333; /* Warna border (aksen) */
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #FFB6B9; /* Warna aksen (tombol) */
            color: #FFFFFF; /* Warna teks putih */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #FFE1E2; /* Warna aksen saat di-hover (sorotan halus) */
            color: #FFFFFF; /* Warna teks putih saat di-hover */
        }
        
    </style>
</head>

<body>
    <h1>Halaman Login</h1>
    <form action="login_action.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>

</html>
