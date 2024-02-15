<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search Movies</title>
</head>
<body>
<!-- Search form -->
<form action="<?php echo base_url('index.php/Movies/search'); ?>" method="post">
	<label for="genre">Genre:</label>
	<input type="text" id="genre" name="genre" placeholder="Enter genre...">
	<input type="submit" value="Search">
</form>

<!-- Link to view all movies -->
<a href="<?php echo base_url('index.php/Movies/allmovies'); ?>">View All Movies</a>
</body>
</html>

