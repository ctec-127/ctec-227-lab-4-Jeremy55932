<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Document</title>
  </head>
  <body class="form">
    <header>
    <h1>
      <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] . "'s File Uploads": 'Online File Uploader'?>
    </h1>
    <ul>
      <li>
          <a href="register.php" id="register">Register</a>
      </li>
      <li>
        <a href="home.php" id="home">Home</a>
      </li>
      <li>
        <a href="login.php" id="login">Login</a>
      </li>
    </ul>
    </header>
    
    <form action="login.php" method="POST" class="login">
      <label for="email">Email</label>
      <br />
      <input type="email" name="email" id="email" required />
      <br /><br />
      <label for="password">Password</label>
      <span id="showPassword" onclick="showPassword();">Show Password</span>
      <br />
      <input type="password" name="password" id="password" required />
      <br /><br />
      <input type="submit" value="Login" />
    </form>
  </body>
</html>
