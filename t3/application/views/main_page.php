<!DOCTYPE html>
<html lang="en">
<head>
	<!-- head content -->
</head>
<body>
<h1>Dinosaurs Periods</h1>
<ul>
	<?php foreach ($periods as $period => $details): ?>
		<li><a href="<?= site_url("Dinosaurs/getinfo/$period") ?>"><?= $period ?></a></li>
	<?php endforeach; ?>
</ul>
</body>
</html>

