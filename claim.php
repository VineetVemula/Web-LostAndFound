<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lost & Found | Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!--Custom CSS--->
    <link rel="stylesheet" href="./css/style2.css">

  </head>
  <body>
  <?php
  include 'loginpages.php';
  include 'includes/dbh.php';
  ?>

  <div class="container">
    <h1 class="display-1">Reported Items</h1>
    <h6 class="text-muted display-4">You can view all the lost items that have been reported here.</h6>
    <hr>
  </div>

  <div class="container">
    <h6 class="display-4">Lost Items</h6>
  </div>

  <?php
  $sql = "SELECT id,type,company,model,location,status,user,img FROM lost";
  $result=mysqli_query($conn,$sql);

  echo"<div class='container'>";
  echo "<table class='table table-striped table-hover'>
  <thead class='thead-inverse'>
  <tr>
  <th>ID</th>
  <th>Type</th>
  <th>Company</th>
  <th>Model</th>
  <th>Location</th>
  <th>Status</th>
  <th>Reported By</th>
  <th>Image</th>
  </tr>
  </thead>";
  while($row = mysqli_fetch_array($result))
  {
    $imagename = $row['img'];
    //if($imagename=" "){
      //$imagename="none.jpg";
    //}
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['company'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
    echo "<td>" . $row['location'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td>" . $row['user'] . "</td>";
    echo"
    <td>
    <img src='pics/$imagename' style='width:70px; height:70px;'>
    </td>
    ";
    echo "</tr>";
  }
  echo "</table>";
  echo "</div>";
?>



  <div class="container">
    <hr>
    <h6 class="display-4">Found Items</h6>
  </div>

<?php
  $sql = "SELECT id,type,company,model,location,status,user,img FROM found";
  $result=mysqli_query($conn,$sql);

  echo"<div class='container'>";
  echo "<table class='table table-striped table-hover'>
  <thead class='thead-inverse'>
  <tr>
  <th>ID</th>
  <th>Type</th>
  <th>Company</th>
  <th>Model</th>
  <th>Location</th>
  <th>Status</th>
  <th>Reported By</th>
  <th>Image</th>
  </tr>
  </thead>";

  while($row = mysqli_fetch_array($result))
  {
    $imagename = $row['img'];
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['company'] . "</td>";
    echo "<td>" . $row['model'] . "</td>";
    echo "<td>" . $row['location'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td>" . $row['user'] . "</td>";
    echo"
    <td>
    <img src='pics/$imagename' style='width:70px; height:70px;'>
    </td>
    ";
    echo "</tr>";
  }
  echo "</table>";
  echo "</div>";

mysqli_close($conn);

  include 'footer.php';?>
    </body>
    </html>
