<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get coursework marks from the form
	$coursework1 = $_POST['coursework1'];
	$coursework2 = $_POST['coursework2'];

	// Calculate the weighted marks
	$weighted_coursework1 = $coursework1 *  0.4;
	$weighted_coursework2 = $coursework2 *  0.6;

	// Calculate the module mark
	$module_mark = $weighted_coursework1 + $weighted_coursework2;

	// Display the result
	echo "<p>Your Module Mark is: {$module_mark}</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Module Mark Calculator</title>
</head>
<body>
<form action="" method="post">
	<label for="coursework1">Coursework  1 Mark:</label>
	<input type="number" id="coursework1" name="coursework1" required min="0" max="100"><br>

	<label for="coursework2">Coursework  2 Mark:</label>
	<input type="number" id="coursework2" name="coursework2" required min="0" max="100"><br>

	<input type="submit" value="Calculate Module Mark">
</form>
</body>
</html>

