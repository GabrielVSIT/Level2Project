<!DOCTYPE html>
<html>
<head>
	<title>task2</title>
</head>
<body>
	<h1>Time in Bulgaria/Sofia</h1>
	<?php
		echo date("l j M g:i:s A");
	?>
	<h2>Time  in Australia/Sydney</h2>
	<?php
		date_default_timezone_set('Australia/Sydney');
		echo date("l j M g:i:s A");
	?>
</body>
</html>