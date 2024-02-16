<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-10" id="moviearea">
			<h2>All Movies</h2>
			<?php if (!empty($movies)): ?>
				<table>
					<thead>
					<tr>
						<th>Title</th>
						<th>Director</th>
						<th>Genre</th>
						<th>IMDB Rating</th>
						<th>Release Year</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($movies as $movie): ?>
						<tr>
							<td><?= $movie['title'] ?></td>
							<td><?= $movie['director'] ?></td>
							<td><?= $movie['genre'] ?></td>
							<td><?= $movie['imdb_rating'] ?></td>
							<td><?= $movie['release_year'] ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			<?php else: ?>
				<p>No movies found in the database.</p>
			<?php endif; ?>
	</div>
</div>



</body>
</html>
