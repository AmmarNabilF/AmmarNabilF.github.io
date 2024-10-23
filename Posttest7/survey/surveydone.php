<?php
    if (isset($_GET['id'])) {
        $survey_id = $_GET['id'];
    } else {
        echo "<script>alert('Tidak ada data survey yang tersedia.')</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Completed</title>
    <link rel="stylesheet" href="surveydone.css">
</head>
<body>
    <nav class="navbar">
        <nav class="nav-container">
            <ul class="navbar-extra">
                <a href="../index.html" id="home"><img src="../assets/house-fill.svg" alt="home"></a>
            </ul>
            <ul class="logo">
                <li>
                    <img src="../assets/MARTSA.png" alt="logo">
                </li>
            </ul>
            <ul class="menu">
                <li><form method="GET" action="searching.php">
                    <input type="text" name="cari" placeholder="search your response...">
                <button type="submit"><img src="../assets/search.svg" alt="search"></button>
                </form></li>
            </ul>
            <ul></ul>
            <ul class="survey">
                <a href="survey/survey.php" id="person"><img src ="../assets/clipboard.svg" alt="survey"></a>
            </ul>
        </nav>
    </nav>
    <main>
        <div class="container">
            <h1>Survey</h1>
            <p>Thank you for your response!</p>
            <p class="description">A user has submitted a survey.</p>
            <h2 class="results-title">Survey Results</h2>
            <div class="survey-done">
                <div class="opsi">
                    <a href="viewresponse.php?id=<?= $survey_id ?>" class="button">View Response</a>
                    <a href="updatesurvey.php?id=<?= $survey_id ?>" class="button">Edit Response</a>
                    <a href="deleteursurvey.php?id=<?= $survey_id ?>" class="button">Delete Response</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
