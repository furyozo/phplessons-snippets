<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHPLessons</title>
  </head>
  <body>

    <form class="">
      <input type="text" name="num1" placeholder="Number 1">
      <input type="text" name="num2" placeholder="Number 2">
      <select class="" name="operator">
        <option value="none">None</option>
        <option value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
      </select>
      <br>
      <button type="submit" name="button" value="submit">Calculate</button>
    </form>

    <p>Result:</p>

    <?php

      if (isset($_GET['button'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        switch ($operator) {
          case 'add':
            echo $result1 + $result2;
          break;
          case 'sub':
            echo $result1 - $result2;
          break;
          case 'mul':
            echo $result1 * $result2;
          break;
          case 'div':
            echo $result1 / $result2;
          break;
          default:
            echo "You need to select a method";
          break;
        }

      }

     ?>


  </body>
</html>
