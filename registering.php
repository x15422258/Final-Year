<?php
  require "connection/connection.php";

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];

  if (empty($name)or empty($email) or empty($password) or empty($confirm_password)) {
    die("All fields must be filled out.");
  }

  if ($password != $confirm_password) {
    die("Passwords do not match, try again.");
  }
}
else {
  die('Error');
}


$insertQuery = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name','$email','$password')";
$result = mysqli_query($connection, $insertQuery);

header("location: index.php");

?>
