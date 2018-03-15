<?php

include 'dbh.php';

$email = $_POST['email'];
$username = $_POST['username'];
$pwd = $_POST['password'];


$sql = "SELECT* FROM users WHERE email='$email' OR username='$username'";
$result=mysqli_query($conn,$sql);

if($row = mysqli_fetch_assoc($result))
{
  echo "<script language='javascript' type='text/javascript'>";
  echo "alert('Username or E-Mail is already taken.');";
  echo "</script>";
  $sql = "SELECT* FROM users WHERE username='$username'";
  $URL="../index.php";
  echo "<script>location.href='$URL'</script>";
}

else {
  $sql = "INSERT INTO users (email,username,pwd) VALUES ('$email','$username','$pwd')";
  $result=mysqli_query($conn,$sql);
  echo "<script language='javascript' type='text/javascript'>";
  echo "alert('Sign Up success! You can now Log In.');";
  echo "</script>";
  $URL="../index.php";
  echo "<script>location.href='$URL'</script>";
}

 ?>
