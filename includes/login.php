<?php

include 'dbh.php';
session_start();
$username = $_POST['username'];
$pwd = $_POST['password'];

$sql = "SELECT* FROM users WHERE username='$username' AND pwd='$pwd'";
$result=mysqli_query($conn,$sql);
if(!$row = mysqli_fetch_assoc($result))
{
  echo "<script language='javascript' type='text/javascript'>";
  echo "alert('Incorrect Username or Password.');";
  echo "</script>";
  $URL="../index.php";
  echo "<script>location.href='$URL'</script>";
}

else {
  $_SESSION["username"] = $_POST["username"];
  header("Location: ../welcome.php");
}

?>
