<?php
require 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM surveycustomer WHERE id = $id");
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Data tidak ditemukan";
        exit;
    }
} else {
    echo "ID tidak ditemukan";
    exit;
}
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Survey</title>
		<link rel="stylesheet" href="phpstyle.css">
	</head>
	<body>
		<div class="container">
			<h1 class="header">Your Respond</h1>
			<div class="survey-results">
				<table>
					<tbody>
						<tr>
                            <td class="label">Email</td>
                            <td class="value"><?= htmlspecialchars($row['email'], ENT_QUOTES) ?></td>
                        </tr>
                        <tr>
                            <td class="label">Comments</td>
                            <td class="value"><?= htmlspecialchars($row['comments'], ENT_QUOTES) ?></td>
                        </tr>
                        <tr>
                            <td class="label">How would you rate your experience with us?</td>
                            <td class="value"><?= htmlspecialchars($row['rating'], ENT_QUOTES) ?></td>
                        </tr>
                        <tr>
                            <td class="label">Where did you hear about us?</td>
                            <td class="value"><?= htmlspecialchars($row['hear_about_us'], ENT_QUOTES) ?></td>
                        </tr>
                        <tr>
                            <td class="label">How likely are you to recommend us?</td>
                            <td class="value"><?= htmlspecialchars($row['recommend'], ENT_QUOTES) ?></td>
                        </tr>
                        <tr>
                            <td class="label">Contact Preferences</td>
                            <td class="value"><?= htmlspecialchars($row['contact_pref'], ENT_QUOTES) ?></td>
                        </tr>
                        <tr>
                            <td class="foto">Menu Favorit</td>
                            <td class="value"><?= $direktori = "gambar/" . $row["foto"];
                                if ($row["foto"] == "") {
                                    echo "foto belum ada";
                                } else {
                                    if (file_exists($direktori)) {
                                        echo "<img src='$direktori' alt='foto' width='50px' height='50px'>";
                                    } else {
                                        echo "foto tidak ditemukan";
                                    }
                                    echo "<img src='$direktori' alt='foto' width='50px' height='50px'>";
                                }
                                ?>
                        </tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
