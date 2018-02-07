<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPLessons</title>
  </head>
  <style media="screen">
    p {
      text-align: center;
      font-size: 120px;
      font-family: Arial;
      margin-top: 38vh;
    }
  </style>

  <body>

    <?php

      $dayofweek = date('w');

      switch ($dayofweek) {
        case 1:
          echo '<p>It is Monday</p>';
        break;
        case 2:
          echo '<p>It is Tuesday</p>';
        break;
        case 3:
          echo '<p>It is Wednesday</p>';
        break;
        case 4:
          echo '<p>It is Thursday</p>';
        break;
        case 5:
          echo '<p>It is Friday</p>';
        break;
        case 6:
          echo '<p>It is Saturday</p>';
        break;
        case 7:
          echo '<p>It is Sunday</p>';
        break;
        default:
          echo 'Error';
        break;
      }

     ?>

  </body>
</html>
