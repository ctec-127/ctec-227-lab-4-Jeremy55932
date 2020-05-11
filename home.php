<?php
// home.php
session_start();
$pageTitle = 'Home';
require 'inc/header.inc.php';
// require 'inc/display.php'
?>
<header>
	<h1><?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : '' ?> File Uploads</h1>
</header>
<ul>
    <li>
        <a href="register.php">Register</a>
    </li>
    <li>
        <a href="login.php" id="login">Login</a>
    </li>
    <li>
        <a href="" id="logout">Logout</a>
    </li>
</ul>

<h1 class="welcome">Welcome to our great site <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'New User!' ?></h1>
<!-- <div id="message"></div> -->

<?php
	require 'inc/footer.inc.php';
	include "inc/error.inc.php";
	include "inc/form.inc.php";
	include "inc/delete.inc.php";
	display_images();
	?>
<!-- <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script defer src="js/script.js"></script>

<?php require 'inc/footer.inc.php' ?>