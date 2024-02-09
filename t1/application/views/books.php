<?php
if (!isset($_POST['submit'])) { // If the form has not been submitted yet
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Search Books</title>
	</head>
	<body>
	<form action="books.php" method="post">
		<label for="search">Search:</label>
		<input type="text" name="search" id="search">
		<input type="submit" name="submit" value="Submit">
	</form>
	</body>
	</html>
	<?php
} else { // If the form has been submitted
	// Connect to the database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "serverside";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Get the search string from the form
	$search = $_POST['search'];

	// Perform the search query
	$sql = "SELECT * FROM books WHERE title LIKE '%$search%' OR author LIKE '%$search%' OR year_of_publication LIKE '%$search%'";
	$result = $conn->query($sql);

	// Display the results
	echo "<h2>Results for '$search':</h2>";
	if ($result->num_rows >  0) {
		while($row = $result->fetch_assoc()) {
			echo "Title: " . $row["title"]. " - Author: " . $row["author"]. " - Year: " . $row["year_of_publication"]. " - Price: " . $row["price"]. "<br>";
		}
	} else {
		echo "No results found.";
	}

	// Close the connection
	$conn->close();
}
?>

