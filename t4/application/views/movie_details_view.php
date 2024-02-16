<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style>
		td {
			padding: 10px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-10" id="moviearea">
			<h2>Movie Details</h2>
			<?php if (!empty($movies)): ?>
				<?php foreach ($movies as $movie): ?>
					<p><b>Title:</b> <?= $movie['title'] ?></p>
					<p><b>Director:</b> <?= $movie['director'] ?></p>
					<p><b>Genre:</b> <?= $movie['genre'] ?></p>
					<p><b>IMDB Rating:</b> <?= $movie['imdb_rating'] ?></p>
					<p><b>Release Year:</b> <?= $movie['release_year'] ?></p>
					<?php if (!empty($movie['synopsis'])): ?>
						<p><b>Synopsis:</b> <?= $movie['synopsis'] ?></p>
					<?php endif; ?>
				<?php endforeach; ?>
			<?php else: ?>
				<p>No movie found with that search term.</p>
			<?php endif; ?>
		</div>
	</div>
</div>



</body>
</html>
