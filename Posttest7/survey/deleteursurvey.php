<?php
    require "connection.php";

    $id = $_GET["id"];

    $delfoto = mysqli_query($conn, "SELECT foto FROM surveycustomer WHERE id = $id");
    $row = mysqli_fetch_assoc($delfoto);
    $foto = $row['foto'];

    $result = mysqli_query($conn, "DELETE FROM surveycustomer WHERE id = $id");

    if (mysqli_affected_rows($conn) > 0) {
        if (file_exists("gambar/". $foto)){
            unlink("gambar/". $foto);
            echo "<script>
                alert('Data berhasil dihapus')
                document.location.href = 'survey.php';
                </script>";
        }

    } else {
        echo "<script>
            alert('Data gagal dihapus')
            document.location.href = 'survey.php';
            </script>";
    }
?>