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

    <?php

      $sql = "SELECT * FROM users;";
      $result = mysqli_query($conn, $sql);
      $datas = array();

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $datas[] = $row;
        }
      }

      // print_r($datas);

      foreach ($datas[0] as $key => $data) {
        echo $data;
      }


     ?>

  </body>
</html>
