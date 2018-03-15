<?php

if(isset($_POST['submit'])){
  include_once 'dbh-inc.php';

  // Variables

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);

}
  //Hashing the password
  $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
  // Insert data in the database

  $sql = "INSERT INTO users (username, password, email) VALUES('$username', '$hashedpassword', '$email')";
  mysqli_query($conn, $sql);
  header("Location: ../index.php?signup=success");
  exit();

?>
