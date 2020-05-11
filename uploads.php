<?php
session_start();
$pageTitle = 'Home';
require 'inc/header.inc.php';session_start();
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
	<a href="register.php">Register</a>
	<a href="login.php" id="login">Login</a>
	<a href="" id="logout">Logout</a>
	<h1 class="welcome">Welcome to our great site <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'New User!' ?></h1>
	<div id="message"></div>
<!-- <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<script defer src="js/script.js"></script>
	<?php
	require 'inc/footer.inc.php';
	include "inc/error.inc.php";
	include "inc/form.inc.php";
	include "inc/delete.inc.php";
	display_images();
	?>

</body>
</html>