<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php require 'views/layouts/meta.php' ?>
    <title>login Page</title>
    <?php require 'views/layouts/style.php' ?>
  </head>
  <body>
    <?php require 'views/layouts/nav.php' ?>
    <h1>Login Form</h1>
    <form action="login/login" method="post">
      <label for="login_email">Email:</label>
      <input type="text" name="login_email" value="" required><br>
      <label for="login_password">Password:</label>
      <input type="password" name="login_password" value="" required><br>
      <input type="submit" value="login">
    </form>
    <?php require 'views/layouts/footer.php' ?>
  </body>
</html>
