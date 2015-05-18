<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Genesis MK II</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src='http://localhost:7000/livereload.js'></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body>

	<?php 
	include 'partials/toc.php';
	?>

	<div id="main">
		
		<?php 

		$partials = array(
			"typography",
			"form",
			"helpers",
			"mixins",
			);

		foreach ($partials as $partial) { include "partials/$partial.php"; }

		?>

	</div>

</body>
</html>