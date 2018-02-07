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

    <form class="" action="includes/signup-err.inc.php" method="post">
      <input type="text" name="first" placeholder="Firstname"><br>
      <input type="text" name="last" placeholder="Lastname"><br>
      <input type="text" name="email" placeholder="E-mail"><br>
      <input type="text" name="uid" placeholder="Username"><br>
      <input type="text" name="pwd" placeholder="Password"><br>
      <button type="submit" name="submit" value="submit">Sign up</button>
    </form>

    <?php

      $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

      if (strpos($fullURL, "signup=empty") == true) {
        echo '<p style="color: red">Nothing was inputted in the fields</p>';
        exit();
      }
      elseif (strpos($fullURL, "signup=empty") == true) {
        echo '<p style="color: red">Invalid email</p>';
        exit();
      }
      elseif (strpos($fullURL, "signup=success") == true) {
        echo '<p style="color: red">Success!</p>';
        exit();
      }

     ?>

  </body>
</html>
