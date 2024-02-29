<h1>Cat Catalogue</h1>
<ul>
	<?php foreach ($cats as $cat): ?>
		<li>
			<a href="#"><?php echo $cat['name']; ?></a> (<?php echo $cat['votes']; ?> votes)
			<form action="<?php echo site_url('cat/vote/' . $cat['id']); ?>" method="post">
				<input type="hidden" name="cat_id" value="<?php echo $cat['id']; ?>">
				<input type="submit" name="vote" value="Up">
				<input type="submit" name="vote" value="Down">
			</form>
		</li>
	<?php endforeach; ?>
</ul>
<a href="<?php echo site_url('cat/catranking'); ?>">See ranking</a>

