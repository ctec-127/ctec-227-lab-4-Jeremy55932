<?php
// home.php
session_start();
$pageTitle = 'Home';
require 'inc/header.inc.php';
require 'inc/display.inc.php';

?>
<header>
    <ul class="homepage">
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
<ul class="home">
      <li>
        <a href="home.php" id="home">Home</a>
      </li>
    </ul>
</header>

<h1 class="welcome">Welcome to our great site <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'where you can upload all your images into your own personal online account' ?></h1>

<?php
	include "inc/error.inc.php";
    include "inc/delete.inc.php";
    include 'inc/logged-in-form.inc.php';
	display_images();
	require 'inc/footer.inc.php';
	?>
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="js/script.js"></script>

