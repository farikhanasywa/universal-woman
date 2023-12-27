<!DOCTYPE html>
<html>

<head>
    <title>Login Gagal</title>
    <style>
        body {
            background-color: #FFFFFF;
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
            color: #333333;
        }

        .container {
            background-color: #F2F2F2;
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .message {
            color: #333333;
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .button {
            background-color: #FF6969;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            margin: 10px;
        }

        .button:hover {
            background-color: #B31312;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login Gagal</h1>
        <p class="message">Silakan coba lagi.</p>
        <div class="button-container">
            <a href="login.php" class="button">Login Ulang</a>
        </div>
    </div>
</body>
<footer>
    <p>&copy; 2023 Universal Woman.</p>
</footer>

</html>