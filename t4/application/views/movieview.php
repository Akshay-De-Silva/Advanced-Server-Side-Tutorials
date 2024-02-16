<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-10" id="moviearea">
			<h2>Movie Search</h2>
			<form action="<?= base_url('movies/search') ?>" method="post">
				<label for="genre">Genre:</label>
				<input type="text" name="genre" id="genre" required>
				<br>
				<button type="submit">Search</button>
			</form>
			<br>
			<a href="<?= base_url('movies/allmovies') ?>">View All Movies</a>
		</div>
	</div>
</div>



</body>
</html>

