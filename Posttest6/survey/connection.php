<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_nama = "survey" ;

    $conn = mysqli_connect($server, $user, $password, $db_nama);

    if (!$conn) {
        die("Koneksi Gagal : " . mysqli_connect_error());
    }

?>