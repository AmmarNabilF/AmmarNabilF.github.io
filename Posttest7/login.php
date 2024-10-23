<?php
session_start();
require 'survey/connection.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $captcha_input = $_POST['captcha'];

    echo "Captcha Input: " . $captcha_input . "<br>";
    echo "Session Captcha: " . $_SESSION['code'] . "<br>";
    echo "password: " . $password . "<br>";

    if ($captcha_input !== $_SESSION['code']) {
        echo "<script>
            alert('Captcha salah');
            document.location.href = 'login.php';
            </script>";
        exit;
    }

    $result = mysqli_query($conn, "SELECT * FROM akun_pengguna WHERE email = '$email'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION['email'] = $email;
            $_SESSION['login'] = true;
            header('Location: index.html');
            exit;
        } else {
            echo "<script>
                alert('Password salah');
                </script>";
        }
    } else {
        echo "<script>
            alert('Email tidak terdaftar');
            </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="login_register"> Login </h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Masukkan Email..." required>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Masukkan Password..." required></td>
            </tr>
            <tr>
                <td>Captcha</td>
                <td><input type="text" name="captcha"></td>
            </tr>
            <tr>
                <td></td>
                <td><img src="captcha.php" alt="captcha"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <p>Belum punya akun? <a href="registrasi.php">Registrasi disini</a></p>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Login"></td>
            </tr>
    </form>
</body>
</html>