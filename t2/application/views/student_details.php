<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Details</title>
</head>
<body>
<h1><?php echo $name ?: 'No Name Provided'; ?></h1>
<img src="<?php echo $picture ?: '#'; ?>" alt="<?php echo $name ?: 'No Picture Provided'; ?>">
<p>Course: <?php echo $course ?: 'No Course Provided'; ?></p>
</body>
</html>




