<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<?php
		$name = $_GET['username'];

		if(!isset($name) || !strlen($name)) {
			echo "Seems you submitted a empty form.";
		} else {
			echo "Welcome $name";
		}
	?>
	<a href="form.php">FORM</a>
</body>
</html>