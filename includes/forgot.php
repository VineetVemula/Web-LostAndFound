<?php

include 'dbh.php';
$email = $_POST['email'];

$sql = "SELECT email FROM users WHERE email='$email'";
$result=mysqli_query($conn,$sql);
if(!$row = mysqli_fetch_assoc($result))
{
  echo "<script language='javascript' type='text/javascript'>";
  echo "alert('This E-Mail is not registered.');";
  echo "</script>";
  $URL="../index.php";
  echo "<script>location.href='$URL'</script>";
}

else {
  echo "<script language='javascript' type='text/javascript'>";
  echo "alert('We will send a link to change your password to your registered e-mail address. It should arrive within a few minutes, please check your inbox.');";
  echo "</script>";
  $URL="../index.php";
  echo "<script>location.href='$URL'</script>";
}
?>
