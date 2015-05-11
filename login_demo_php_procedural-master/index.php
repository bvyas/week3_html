<?php
 session_start();
 require_once('./include/connection.php');
?>
<html>
<head>
  <title>Login and Registration</title>
  <style type="text/css">
    .register{
      border: 1px solid black;
      display: inline-block;
    }
    .login{
      border: 1px solid black;
      display: inline-block;
      vertical-align: top;
    }
  </style>
</head>
<body>
  <?php
    if(isset($_SESSION['errors']))
    {
      foreach($_SESSION['errors'] as $error)
      {
        echo $error;
      }
      unset($_SESSION['errors']);
    }

    if(isset($_SESSION['success']))
    {
      echo $_SESSION['success'];
      unset($_SESSION['success']);
    }
  ?>
  <div class="register">
    <form action="process.php" method="post">
      <input type="hidden" name="action" value="register">
      <p>First Name:<input type="text" name="first_name"></p>
      <p>Last Name:<input type="text" name="last_name"></p>
      <p>Email:<input type="text" name="email"></p>
      <p>Password:<input type="text" name="password"></p>
      <p>Password Confirmation:<input type="text" name="confirm_password"></p>
      <input type="submit" value="Register">
    </form>
  </div>
  <div class="login">
    <form action="process.php" method="post">
      <input type="hidden" name="action" value="login">
      <p>Email: <input type="text" name="email"></p>
      <p>Password<input type="text" name="password"></p>
      <input type="submit" value="login">
    </form>
  </div>
</div>
</body>
</html>