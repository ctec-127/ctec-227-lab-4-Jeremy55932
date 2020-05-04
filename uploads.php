<?php
include "inc/display.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/b4c92d5d70.js" crossorigin="anonymous"></script>
	<title>File Uploads</title>
</head>
<body>
	<header>
		<h1>Jeremy's File Uploads</h1>
	</header>

	<?php
	include "inc/error.inc.php";
	include "inc/form.inc.php";
	include "inc/delete.inc.php";
	display_images();
	?>

</body>
</html>