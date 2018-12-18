<?php
include_once 'dbconfig.php';
include 'insert.php';
include 'insertbook_db.php';
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="#">
    <link rel="icon" type="image/png" href="#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Peek a Book | Home</title>

    <!-- Required meta tags -->
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- Material Kit CSS -->
    <link rel="stylesheet" href="css/material-kit.css">    
    <!-- Logo -->
    <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--End of Logo -->
  </head>

<body class="index-page sidebar-collapse">
    <!-- Navigation Bar -->
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="index.php">
          Peek-A-Book </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="fa fa-home"></i> Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="account.php">
              <i class="fa fa-user"></i> Account
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="material-icons">local_grocery_store</i> Cart
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-info"></i> About
            </a>
          </li>
          <button class="btn btn-round btn-rose" data-toggle="modal" data-target="#registerModal" id="btnReg" >
          <b>Register</b> or <b>Sign in</b>
          </button>
        </ul>
      </div>
    </div>
  </nav>

<!-- Page Header with Filter -->
<div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('img/books.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand">
          <h1>Peek-A-Book<h1>
          <h3>Bok Bok Bok Bok Bok Bok Bok Bok Bok Bok Bok Bok Bok Bok Bok Bok Bok Bok</h3>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Register Modal -->
<div class="modal fade col-md-12" id="registerModal" tabindex="-1" role="" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="card card-signup card-plain">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          <div class="card-header card-header-rose text-center">
            <h4 id="this"><b>Register</b> or <b>Sign in</b></h4>
          </div>
        </div>
          <div class="modal-body" >
            <div class="card-body">
              <form method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                  <label for="email" class="bmd-label-floating">Email address</label>
                  <input type="email" class="form-control" id="email" required name="email">
                  <span class="bmd-help">We'll never share your email with anyone else.</span>
                </div>
                <div class="form-group">
                  <label for="password" class="bmd-label-floating">Password</label>
                  <input type="password" class="form-control" id="password" required name="pass">
                  <span class="bmd-help">Use at least 8 characters including symbols, numbers and letters.</span>
                </div>
              </form>
            </div>
              <br>
                <div class="card-footer justify-content-center">
                  <button class="btn btn-rose" id="btnSignin" name="signinBtn">Sign in</button>
                </div>    
                  <div class="social-line">
                    <button class="btn btn-link btn-just-icon" id="btnFacebook">
                      <i class="fa fa-facebook"></i>
                    </button>
                    <button class="btn btn-link btn-just-icon" id="btnGoogle">
                      <i class="fa fa-google"></i>
                    </button>
                    <button class="btn btn-link btn-just-icon">
                      <i class="fa fa-phone"></i>
                    </button>
                  </div>
                  <div class="card-footer justify-content-center">
                    <p class="text-divider">Don't have an account?</p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="register.php" class="btn btn-link btn-rose btn-lg">Register Now</a>
                  </div>
            </div>
      </div>
    </div>
  </div>
</div>
<!--End of Register Modal -->

<div class="main main-raised">
  <div class="section section-basic">
    <div class="container-fluid">
      <div class="title">
        <h2>Lagyan ng Caption</h2>
      </div> 
    </div>
  </div>
</div>





    <!--   Core JS Files   -->
    <script src="js/core/jquery.min.js" type="text/javascript"></script>
    <script src="js/core/popper.min.js" type="text/javascript"></script>
    <script src="js/core/bootstrap-material-design.min.js" type="text/javascript"></script>

    <!-- Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="js/plugins/moment.min.js"></script>

    <!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
            <!-- Firebase -->
   <!--  <script src="js/app.js" type="text/javascript"></script> -->

    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="js/material-kit.js" type="text/javascript"></script>

 
   <!-- <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#"> LOGO </a></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <button type="button" class="btn btn-default">Contact us</button>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2016 Copyright Text </p>
        </div>
    </footer> -->




  </body>
</html>
