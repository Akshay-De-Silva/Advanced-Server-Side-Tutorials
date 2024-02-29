<h1>Cat Ranking</h1>
<ol>
	<?php foreach ($cats as $i => $cat): ?>
		<li><?php echo $i + 1; ?>. <?php echo $cat['name']; ?> (<?php echo $cat['votes']; ?> votes)</li>
	<?php endforeach; ?>
</ol>
