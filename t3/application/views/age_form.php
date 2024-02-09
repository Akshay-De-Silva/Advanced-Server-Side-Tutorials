<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculate Age</title>
	<!-- Include your styles here -->
</head>
<body>
<form action="<?php echo base_url('index.php/AgeController/calculate'); ?>" method="post">
	<label for="dob">Date of Birth:</label>
	<input type="date" id="dob" name="date_of_birth" required>
	<input type="submit" value="Submit">
</form>
</body>
</html>
