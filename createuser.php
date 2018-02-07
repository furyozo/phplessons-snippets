<?php
  include_once 'includes/dbh.inc.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="includes/signup.inc.php" method="post">
      <input type="text" name="first" placeholder="Firstname"><br>
      <input type="text" name="last" placeholder="Lastname"><br>
      <input type="text" name="email" placeholder="E-mail"><br>
      <input type="text" name="uid" placeholder="Username"><br>
      <input type="text" name="pwd" placeholder="Password"><br>
      <button type="submit" name="button">Sign up</button>
    </form>

  </body>
</html>
