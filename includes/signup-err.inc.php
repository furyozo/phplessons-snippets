<?php

  if (!isset($_POST['submit'])) {
    header("Location: ../index.php?signup=error");
    exit();
  }

  include_once 'nullfile.inc.php';

  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  // check that all fileds are filled in
  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
    header("Location: ../index.php?signup=empty");
    exit();
  }
  // validate email
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../index.php?signup=invalidemail");
    exit();
  }

 ?>
