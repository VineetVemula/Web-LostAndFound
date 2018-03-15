<?php
  // Start the session
  session_start();
?>

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
    <?php include 'allpages.php';?>
  <div id="stage">
    <div id="stage-caption">
      <h1 class="display-3">WEB-LF</h1>
      <p>A simple, easy to use Lost & Found system.</p>
      <a role="button" href="#" class="btn btn-success" data-toggle="modal" data-target="#signUpWindow">Sign Up Here</a>
    </div>
  </div>

  <br>

  <div class="container">
    <h3 class="display-4">Technologies Used</h3>
  </div>

  <br>

  <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <img src="./img/logo_bootstrap.png">
          <h2>Bootstrap 4</h2>
          <p>Bootstrap is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first web sites. Bootstrap is completely free to download and use!</p>
          <p>The entire website is designed using Bootstrap 4! Check it out by clicking on the learn more button below.</p>
          <p><a class="btn btn-secondary" href="https://getbootstrap.com" role="button">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img src="./img/logo_html.png">
          <h2>HTML5 Markup</h2>
          <p>HTML aka HyperText Markup Language, is the standard markup language for creating Web pages. It describes the structure of Web pages using markup.</p>
          <p>This website (or any website) couldn't be made without it! To learn more about it, click the button below.</p>
          <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/HTML5" role="button">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img src="./img/logo_css.png">
          <h2>CSS3 Styling</h2>
          <p>CSS, i.e. Cascading Style Sheet, is a language that describes the style of an HTML document. CSS describes how HTML elements should be displayed.</p>
          <p>CSS is used to control the style of a web document in a simple and easy way.</p>
          <p><a class="btn btn-secondary" href="https://en.wikipedia.org/wiki/Cascading_Style_Sheets" role="button">Learn More &raquo;</a></p>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-4">
          <img src="./img/logo_php.png">
          <h2>PHP Scripting</h2>
          <p>PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>
          <p> PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. It is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP. </p>
          <p><a class="btn btn-secondary" href="https://secure.php.net/manual/en/intro-whatis.php" role="button">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img src="./img/logo_mysql.png">
          <h2>MySQL Database</h2>
          <p>MySQL is the most popular Open Source Relational SQL Database Management System. MySQL is one of the best RDBMS being used for developing various web-based software applications.</p>
          <p>MySQL is developed, marketed and supported by MySQL AB, which is a Swedish company. MySQL is the most popular database system used with PHP, and we are using these two together as well!</p>
          <p><a class="btn btn-secondary" href="https://www.mysql.com/" role="button">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img src="./img/logo_atom.png">
          <h2>Atom Code Editor</h2>
          <p>Atom is a free and open-source text and source code editor for macOS, Linux, and Microsoft Windows with support for plug-ins written in Node.js, and embedded Git Control, developed by GitHub. Atom is a desktop application built using web technologies.</p>
          <p>It's an excellent code editor, and it has many useful plugins which made developing this website that much easier!</p>
          <p><a class="btn btn-secondary" href="https://atom.io/" role="button">Learn More &raquo;</a></p>
        </div>
      </div>

      <?php
        // Set session variables
        $_SESSION["username"] = "";
        $_SESSION["pwd"] = "";
        echo "Session variables are set.";
      ?>


          <!-- Sign In Modal -->

              <div class="container">
                <div class="modal fade" id="popUpWindow">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- header -->
                        <div class="modal-header">
                          <h3 class="modal-title">Sign In</h3>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- body (form) -->
                        <div class="modal-body">
                            <form role="form" action="includes/login.php" method="POST" id="valform2">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required>

                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>

                                </div>
                                <a href="#" data-toggle="modal" data-target="#forgotWindow" data-dismiss="modal">Forgot Password?</a>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-block" name="loginbtn" value="button">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
              </div>

          <!-- Sign Up Modal -->


          <div class="container">
            <div class="modal fade" id="signUpWindow">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- header -->
                    <div class="modal-header">
                      <h3 class="modal-title">Sign Up</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- body (form) -->
                    <div class="modal-body">
                        <form role="form" action="includes/signup.php" method="POST" id="valform">
                          <div class="form-group">
                              <input type="text" class="form-control" name="username" placeholder="Username" required>

                          </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>

                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>

                            </div>
                            <a href="#" data-toggle="modal" data-target="#popUpWindow" data-dismiss="modal">Already Registered?</a>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-block" name="signupbtn" value="submit">Sign Up</button>
                            </div>
                        </form>
                    </div>

                    <!-- button -->

                </div>
            </div>
        </div>
          </div>


          <!-- Forgot Password Modal -->

          <div class="container">
            <div class="modal fade" id="forgotWindow">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- header -->
                    <div class="modal-header">
                      <h3 class="modal-title">Forgot Password</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- body (form) -->
                    <div class="modal-body">
                        <form role="form" id="valform3" action="includes/forgot.php" method="POST" >
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Registered Email" required>
                            </div>
                            <!-- button -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-block" name="forgotbtn" data-toggle="modal" value="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
          </div>

          <!--Thanks Modal -->
<div id="thanksModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Forgot Password</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>We'll send you a link to change your password at your registered e-mail address.</p>
        <p>It should arrive within 24 hours.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



      <!-- /container -->

      <?php include 'footer.php';?>
</body>
</html>
