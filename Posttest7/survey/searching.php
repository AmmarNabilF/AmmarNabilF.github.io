<?php
require 'connection.php'; // Menghubungkan ke database

if (isset($_GET['cari'])) {
    $searchQuery = $_GET['cari'];
    
    $sql = "SELECT * FROM surveycustomer WHERE email LIKE '%$searchQuery%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Search Results</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Email</th><th>Rating</th><th>Recommend</th><th>Comments</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['rating'] . "</td>";
            echo "<td>" . $row['recommend'] . "</td>";
            echo "<td>" . $row['comments'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No results found for '" . htmlspecialchars($searchQuery) . "'";
    }
} else {
    echo "Please enter a search query.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="surveydone.css">
</head>
<body>
</body>
</html>
