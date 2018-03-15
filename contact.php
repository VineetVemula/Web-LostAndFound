<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Lost & Found | Contact Us</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!--Custom CSS--->
    <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <?php include 'allpages.php';?>

    <div class="container">
      <div class="box">
        <div class="row">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center display-3">Contact Us</h2>
            <hr>
            <p>Have any questions? You can drop us a message by filling out this form, and we will get back to you as soon as possible.</p>
            <form onsubmit="return valname(name) && validate(phno)" action="includes/contactus.php" method="POST"><div class="row">
              <div class="form-group col-lg-4">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" required>
              </div>
              <div class="form-group col-lg-4">
                <label for="">E-Mail</label>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">@</span>
                  <input type="email" class="form-control" name="email" required>
                </div>
              </div>
              <div class="form-group col-lg-4">
                <label for="">Phone Number</label>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">+91</span>
                  <input type="tel" class="form-control" name="phno" required>
                </div>
              </div>
              <div class="form-group col-lg-12">
                <label for="">Message</label>
                <textarea class="form-control" rows="10" name="msg" required></textarea>
              </div>
              <div class="form-group col-lg-12">
                <input type="hidden" name="savebtn" value="contact">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div></form>
          </div>
        </div>
      </div>
    </div>

<?php include 'footer.php';?>
</body>
</html>

<script type="text/javascript">

function validate(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if(inputtxt.value.match(phoneno))
  {
      return true;
  }
  else
  {
     alert("Phone number must be 10 digits.");
     return false;
  }
}

</script>

<script type="text/javascript">

function valname(nametxt)
{
  var letters = /^[a-zA-Z]+$/;
  if(nametxt.value.match(letters))
   {
    return true;
   }
 else
   {
    alert("Name cannot contain numbers.");
    return false;
   }
}

</script>
