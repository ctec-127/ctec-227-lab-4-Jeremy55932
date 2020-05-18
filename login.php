<?php
// login.php
session_start();
$pageTitle = 'Login';
require 'inc/header.inc.php';
require_once 'inc/db_connect.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $db->real_escape_string($_POST['email']);
    $password = hash('sha512', $db->real_escape_string($_POST['password']));

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    //  echo $sql;

    $result = $db->query($sql);
    if ($result->num_rows == 1) {

        // $_SESSION['loggedin'] = 1;

        // $_SESSION['email'] = $email;

        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['first_name'] = $row['first_name'];

        header('location: home.php');
        include_once "inc/form.inc.php";

    } else {
        echo '<p>Please try again.</p>';
    }
}

?>

<?php
require 'inc/login_form.inc.php';
?>

<script src="js/script.js"></script>

<?php require 'inc/login.footer.inc.php'; ?>