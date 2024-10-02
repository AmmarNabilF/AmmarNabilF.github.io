<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Survey</title>
		<link rel="stylesheet" href="phpstyle.css">
	</head>
	<body>
		<div class="container">
			<h1 class="header">Survey</h1>
			<p class="description">A user has submitted a survey.</p>
			<h2 class="results-title">Survey Results</h2>
			<div class="survey-results">
				<table>
					<tbody>
						<tr>
							<td class="label">Email</td>
							<td class="value"><?= $email ?></td>
						</tr>
						<tr>
							<td class="label">Comments</td>
							<td class="value"><?= htmlspecialchars($comments, ENT_QUOTES) ?></td>
						</tr>
						<tr>
							<td class="label">How would you rate your experience with us?</td>
							<td class="value"><?= htmlspecialchars($rating, ENT_QUOTES) ?></td>
						</tr>
						<tr>
							<td class="label">Where did you hear about us?</td>
							<td class="value"><?= htmlspecialchars($hear_about_us, ENT_QUOTES) ?></td>
						</tr>
						<tr>
							<td class="label">How likely are you to recommend us?</td>
							<td class="value"><?= htmlspecialchars($recommend, ENT_QUOTES) ?></td>
						</tr>
						<tr>
							<td class="label">How would you like us to respond to you?</td>
							<td class="value"><?= htmlspecialchars($contact_pref, ENT_QUOTES) ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
