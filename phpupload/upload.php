<?php

if (!isset($_POST['submit'])) {
  exit();
}

$file = $_FILES['file'];

$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png', 'pdf');

if (!in_array($fileActualExt, $allowed)) {
  echo "You cannot upload files of this type!";
  exit();
}
if ($fileError != 0) {
  echo "There was an error uploading your file!";
  exit();
}
if ($fileSize > 5000000) {
  echo "Your file is too big!";
  exit();
}

$fileNameNew = uniqid('', true).".".$fileActualExt;
$fileDestination = 'uploads/'.$fileNameNew;
move_uploaded_file($fileTmpName, $fileDestination);

header("Location: index.php?uploadssuccess");
