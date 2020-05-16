<?php
// register.php
$pageTitle = "Register";
require 'inc/header.inc.php';
require_once 'inc/db_connect.inc.php';
require 's.php';
// require 'inc/display.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $db->real_escape_string($_POST['email']);
    $first_name = $db->real_escape_string($_POST['first_name']);
    $last_name = $db->real_escape_string($_POST['last_name']);
    $password = hash('sha512', $db->real_escape_string($_POST['password']));
    $username = $db->real_escape_string($_POST['username']);

    $sql = "INSERT INTO user (email,first_name,last_name,password,username)
                    VALUES('$email','$first_name','$last_name','$password','$username')";

    // echo $sql;
    $result = $db->query($sql);

    if (!$result) {
        echo "<div class=\"register\">There is already an account with that name</div>";
    } else {
        if (mkdir($username, 0777, true)) {
            // echo 'Your picture folder has been created along with your login account.';
            echo "<div class=\"register\">You are now ready to go!</div>";
            echo '<a href="login.php" title="Login Page">Login</a>';
        } else {
            echo 'There is already an account with that name';
        }
    }
}
// if (!$result) {
//     echo "<div class=\"register\">There was a problem registering your account</div>";
// } else {
//     If (!is_dir(has_folder($username) == '$username'){
//         create_folder($username);

//     } else {
//         echo 'There is already an account with that name';
//     }

?>

<h1>Register</h1>
<form action="register.php" method="POST" class="register">
    <label for="username">Username</label>
    <input type="text" id="username" required name="username">
    <br><br>
    <label for="email">Email</label>
    <input type="email" id="email" required name="email">
    <br><br>
    <label for="password">Password</label>
    <input type="password" id="password" required name="password">
    <br><br>
    <label for="first_name">First Name</label>
    <input type="text" id="first_name" required name="first_name">
    <br><br>
    <label for="last_name">Last Name</label>
    <input type="text" id="last_name" required name="last_name">
    <br><br>
    <input type="submit" value="Register">
</form>
<?php require 'inc/footer.inc.php'; ?>