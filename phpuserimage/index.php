<?php
  session_start();
  include_once 'dbh.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP user image</title>
  </head>
  <body>

    <?php

      $sql = "SELECT * FROM user";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
          $resultImg = mysqli_query($conn, $sqlImg);
          while ($rowImg = mysqli_fetch_assoc($resultImg)) {
            echo "<div>";
              if ($rowImg['status'] == 0) {
                echo "<img src='uploads/profile".$id.".jpg'>";
              }
              else {
                echo "<img src='uploads/profiledefault.jpg'>";
              }
              echo $row['username'];
            echo "</div>";
          }
        }
      }
      else {
        echo "There are no users yet";
      }

      if (isset($_SESSION['id'])) {
        if ($_SESSION['id'] == 1) {
          echo "You are logged in as user #1";
        }
        echo "
        <form action='upload.php' method='post' enctype='multipart/form-data'>
          <input type='file' name='file'>
          <button type='submit' name='submit'>UPLOAD</button>
        </form>";
      }
      else {
        echo "You are not logged in!";
        echo "
        <form action='signup.php' method='post'>
          <input type='text' name='first' placeholder='First name'> <br>
          <input type='text' name='last' placeholder='Last name'> <br>
          <input type='text' name='uid' placeholder='User name'> <br>
          <input type='password' name='pwd' placeholder='Password'> <br>
          <button type='submit' name='submitSignup'>Sign up</button>
        </form>";
      }
     ?>

    <p>Login as user!</p>
    <form class="" action="login.php" method="post">
      <button type="submit" name="submitLogin">Login</button>
    </form>

    <p>Logout as user!</p>
    <form class="" action="logout.php" method="post">
      <button type="submit" name="submitLogout">Logout</button>
    </form>

  </body>
</html>
