<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve the mark from the form
	$entered_mark = $_POST['mark'];

	// Student data stored in an associative array
	$students = array(
		"Samwise Gamgee" =>   88,
		"Frodo Baggins" =>   56,
		"Elrond Half-Elven" =>   92,
		"Gandalf Mithrandir" =>   35,
		"Merry Brandybuck" =>   41,
		"Pippin Took" =>   25,
		"Legolas Greenleaf" =>   67
	);

	// Filter the students array to get those with marks equal to or above the entered mark
	$passing_students = array_filter($students, function($mark) use ($entered_mark) {
		return $mark >= $entered_mark;
	});

	// Display the list of passing students
	echo "<h2>Students with marks equal to or above {$entered_mark}:</h2>";
	foreach ($passing_students as $student => $mark) {
		echo "<p>{$student}: {$mark}</p>";
	}
}
?>

<!-- HTML form goes here -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Higher Mark Student List</title>
</head>
<body>
<form action="" method="post">
	<label for="mark">Enter a mark:</label>
	<input type="number" id="mark" name="mark" required min="0" max="100"><br>
	<input type="submit" value="List Students">
</form>
</body>
</html>
