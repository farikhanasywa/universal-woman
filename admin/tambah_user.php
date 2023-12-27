<!DOCTYPE html>
<html>

<head>
    <title>Daftar User</title>
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
            height: 120vh;
        }

        .container {
            background-color: #fff;
            width: 400px;
            margin: 0 auto;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #FF6969;
            border: none;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
            cursor: pointer;
            margin: 10px auto;
            display: block;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #B31312;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Daftar User Baru</h1>
        <form action="tambah_user_action.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <input type="submit" value="Daftar">
        </form>
    </div>
    <p>&copy; 2023 Universal Woman.</p>
</body>

</html>