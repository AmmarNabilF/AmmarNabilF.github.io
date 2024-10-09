<?php
    require "connection.php";

    $id = $_GET["id"];

    $result = mysqli_query($conn, "DELETE FROM surveycustomer WHERE id = $id");

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
            alert('Data berhasil dihapus')
            document.location.href = 'survey.php';
            </script>";

    } else {
        echo "<script>
            alert('Data gagal dihapus')
            document.location.href = 'survey.php';
            </script>";
    }
?>