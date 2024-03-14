<!DOCTYPE html>
<html>
<head>
	<title>Word Definition</title>
	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>

<h2>Enter a word to get its definition:</h2>

<form id="wordForm">
	<input type="text" id="wordInput" name="word">
	<button type="submit">Get Definition</button>
</form>

<div id="definitionArea"></div>

<script>
	$(document).ready(function() {
		$('#wordForm').submit(function(e) {
			e.preventDefault();
			var word = $('#wordInput').val();

			$.ajax({
				url: '<?php echo base_url('word-definition/get_definition'); ?>',
				type: 'POST',
				data: { word: word },
				success: function(response) {
					$('#definitionArea').html(response);
				}
			});
		});
	});
</script>

</body>
</html>

