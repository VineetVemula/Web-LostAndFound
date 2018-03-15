<?php

if(isset($_POST['submit'])){
  include_once 'dbh-inc.php';

  // Variables

  $username = mysql_escape_string($conn, $_POST['username']);
  $password = mysql_escape_string($conn, $_POST['password']);
  $email = mysql_escape_string($conn, $_POST['email']);

  // Error Handling - Check for empty fields

  if(empty($username) || empty($password) || empty($email)){
    header("Location: ../index.php?signup=empty");
    exit();
  }
  else{
    //Check if input characters are valid
    if(!preg_match("/^[a-zA-Z]*$/", $username) || !preg_match("/^[a-zA-Z]*$/", $password){
      header("Location: ../index.php?signup=invalid");
      exit();
    }
    else{
      //Check if email is valid
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../index.php?signup=invalidemail");
        exit();
      }
      else{
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($result > 0){
          header("Location: ../index.php?signup=usertaken");
          exit();
        }
        else{
          //Hashing the password
          $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
          // Insert data in the database

          $sql = "INSERT INTO users (username, password, email) VALUES('$username', '$hashedpassword', '$email')";
          mysqli_query($conn, $sql);
          header("Location: ../index.php?signup=success");
          exit();
        }
      }
    }

}
}

else{
  header("Location: ../index.php");
  exit();
}
