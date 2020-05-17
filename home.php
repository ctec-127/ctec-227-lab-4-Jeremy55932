<?php
// home.php
session_start();
$pageTitle = 'Home';
require 'inc/header.inc.php';
// $_SESSION['folder'] = 'username';
require 'inc/display.inc.php';
// include 'register.php';

?>
<header>
    <ul>
        <li>
            <a href="register.php" id="register">Register</a>
        </li>
        <li>
            <a href="login.php" id="login">Login</a>
        </li>
        <li>
            <a href="" id="logout">Logout</a>
        </li>
    </ul>
	<h1><?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] . "'s File Uploads": 'Online File Uploader' ?></h1>
</header>

<h1 class="welcome">Welcome to our great site <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'where you can upload all your images into your own personal online account' ?></h1>
<!-- <div id="message"></div> -->

<?php
	require 'inc/footer.inc.php';
	include "inc/error.inc.php";
    include "inc/delete.inc.php";
    include 'inc/logged-in-form.inc.php';

	display_images();
	?>
<!-- <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script defer src="js/script.js"></script>

<?php require 'inc/footer.inc.php' ?>