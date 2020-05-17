<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Document</title>
  </head>
  <body class="form">
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
