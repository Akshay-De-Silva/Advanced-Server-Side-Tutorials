<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
	$url = "https://";
else
	$url = "http://";
// Append the host(domain name, ip) to the URL.
$url.= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$url.= $_SERVER['REQUEST_URI'];
?>

<html>
<head>
	<title>Test Page</title>
</head>
<body>
	<br>
	<h1><?php echo $message; ?></h1>
	<h2><?php echo $url; ?></h2>
	<form action="<?php echo base_url('index.php/test/find'); ?>" method="get">

	<input type="text" name="name" placeholder="Enter your name">
		<input type="submit" value="Submit">
	</form>
</body>
</html>
