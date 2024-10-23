<?php
require 'survey/connection.php';

if (isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpwd = $_POST["confirmpwd"];

    if ($password === $confirmpwd) {
        $checkQuery = "SELECT * FROM akun_pengguna WHERE email = '$email'";
        $checkEmail = mysqli_query($conn, $checkQuery);

        $password = password_hash($password, PASSWORD_DEFAULT);

        if (mysqli_num_rows($checkEmail) > 0) {
            echo "
            <script>
                alert('Email sudah terdaftar!');
                document.location.href = 'registrasi.php';
            </script>
            ";
        } else {
            $query = "INSERT INTO akun_pengguna VALUES ('$email', '$password')";
            if (mysqli_query($conn, $query)) {
                echo "
                <script>
                    alert('Berhasil registrasi!');
                    document.location.href = 'login.php';
                </script>
                ";
            }
             else {
                echo "
                <script>
                    alert('Gagal registrasi!');
                    document.location.href = 'registrasi.php';
                </script>
                ";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="login_register"> Registrasi Akun </h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="email" name="email" id="email"
                    placeholder="Masukkan Email" required>
                </td>
            </tr>
            <tr>
                <td> 
                    <label for="password">Password</label>
                </td>
                <td>
                    <input type="password" name="password" id="password"
                    placeholder="Masukkan Password" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="confirmpwd">Konfirmasi Password</label>
                </td>
                <td>
                    <input type="password" name="confirmpwd" id="confirmpwd"
                    placeholder="Konfirmasi Password" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit" value="Registrasi">Accept</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>