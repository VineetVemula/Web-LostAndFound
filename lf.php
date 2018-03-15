<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lost & Found | Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css"</link>

    <!--Custom CSS--->
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <?php include 'loginpages.php';?>
    <div class="container">
      <h1 class="display-2">Welcome to Web-LF, <?php echo("{$_SESSION['username']}");?>!</h1>
      <h2 class="display-4">Please select an option below.</h4>
    </div>

    <br>


    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a class="btn btn-outline-danger btn-block" href="lost.php" role="button">I Lost An Item</a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-outline-success btn-block" href="found.php" role="button">I Found An Item</a>
        </div>
        <div class="col-md-3">
          <a class="btn btn-outline-info btn-block" href="claim.php" role="button">View All Reported Items</a>
        </div>
      </div>
    </div>

    <?php include 'footer.php';?>

    </body>
    </html>
