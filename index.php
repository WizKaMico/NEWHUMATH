<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HUMATHINIK | HOME</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Avilon - v4.9.0
  * Template URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <h1><a href="index.php?view=<?php echo 'HOME'; ?>">HUMATHINIK</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a> -->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <?php if(!empty($_GET['view'])){ ?>
          <?php if($_GET['view'] == 'HOME'){?>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#features">How it Works</a></li>
           <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.php?view=CALCULUS">CALCULUS</a></li>
               <li><a href="index.php?view=TEAM">TEAM</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
           <li> 
          <a  style="background: linear-gradient(45deg, #1de099, #1dc8cd);
                border: 0;
                border-radius: 20px;
                padding: 8px 30px;
                color: #fff;" href="auth/index.php?view=HOME">LOGIN</a>  
          </li>
          <?php } else if($_GET['view'] == 'HOW IT WORKS'){?>
           <li><a class="nav-link scrollto" href="index.php?view=HOME">Home</a></li>
           <li><a class="nav-link scrollto active" href="index.php?view=HOW IT WORKS">How it Works</a></li>
           <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
               <li><a href="index.php?view=CALCULUS">CALCULUS</a></li>
               <li><a href="index.php?view=TEAM">TEAM</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php?view=CONTACT">Contact</a></li>
           <li> 
          <a  style="background: linear-gradient(45deg, #1de099, #1dc8cd);
                border: 0;
                border-radius: 20px;
                padding: 8px 30px;
                color: #fff;" href="auth/index.php?view=HOME">LOGIN</a>  
          </li>
          <?php } else if($_GET['view'] == 'CALCULUS'){?>
           <li><a class="nav-link scrollto" href="index.php?view=HOME">Home</a></li>
           <li><a class="nav-link scrollto" href="index.php?view=HOW IT WORKS">How it Works</a></li>
           <li class="dropdown active"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
               <li><a href="index.php?view=CALCULUS">CALCULUS</a></li>
               <li><a href="index.php?view=TEAM">TEAM</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php?view=CONTACT">Contact</a></li>
           <li> 
          <a  style="background: linear-gradient(45deg, #1de099, #1dc8cd);
                border: 0;
                border-radius: 20px;
                padding: 8px 30px;
                color: #fff;" href="auth/index.php?view=HOME">LOGIN</a>  
          </li>
           <?php } else if($_GET['view'] == 'TEAM'){?>
           <li><a class="nav-link scrollto" href="index.php?view=HOME">Home</a></li>
           <li><a class="nav-link scrollto" href="index.php?view=HOW IT WORKS">How it Works</a></li>
           <li class="dropdown active"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                 <li><a href="index.php?view=CALCULUS">CALCULUS</a></li>
               <li><a href="index.php?view=TEAM">TEAM</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php?view=CONTACT">Contact</a></li>
          <li> 
          <a  style="background: linear-gradient(45deg, #1de099, #1dc8cd);
                border: 0;
                border-radius: 20px;
                padding: 8px 30px;
                color: #fff;" href="auth/index.php?view=HOME">LOGIN</a>  
          </li>
          <?php } else { ?>
           <li><a class="nav-link scrollto" href="index.php?view=HOME">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php?view=HOW IT WORKS">How it Works</a></li>
           <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.php?view=CALCULUS">CALCULUS</a></li>
               <li><a href="index.php?view=TEAM">TEAM</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php?view=CONTACT">Contact</a></li>
           <li> 
          <a  style="background: linear-gradient(45deg, #1de099, #1dc8cd);
                border: 0;
                border-radius: 20px;
                padding: 8px 30px;
                color: #fff;" href="auth/index.php?view=HOME">LOGIN</a>  
          </li>
          <?php } ?>
          <?php } else { ?>
          <li><a class="nav-link scrollto" href="index.php?view=HOME">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php?view=HOW IT WORKS">How it Works</a></li>
           <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.php?view=CALCULUS">CALCULUS</a></li>
               <li><a href="index.php?view=TEAM">TEAM</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php?view=CONTACT">Contact</a></li>
          <li> 
          <a  style="background: linear-gradient(45deg, #1de099, #1dc8cd);
                border: 0;
                border-radius: 20px;
                padding: 8px 30px;
                color: #fff;" href="auth/index.php?view=HOME">LOGIN</a>  
          </li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

 <?php 

  if(!empty($_GET['view'])){ 
  
    if($_GET['view'] == 'HOME')
    {
      include('pages/home.php');
    }
    else if($_GET['view'] == 'HOW IT WORKS')
    {
      include('pages/how.php');
    }
     else if($_GET['view'] == 'CALCULUS')
    {
      include('pages/calculus.php');
    }
    else if($_GET['view'] == 'TEAM')
    {
      include('pages/team.php');
    }
    //  else if($_GET['view'] == 'LOGIN')
    // {
    //   include('pages/login.php');
    // }
    else if($_GET['view'] == 'CONTACT')
    {
      include('pages/contact.php');
    }
    else
    {

    }

  } else {

     include('pages/home.php');

  }

  ?>


  <?php if(!empty($_GET['view']  == 'LOGIN')){ ?>


  <?php } else { ?>
  <!-- ======= Footer ======= -->
  
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-start text-center">
          <div class="copyright">
            &copy; Copyright <strong>HUMATHINIK</strong>. All Rights Reserved
          </div>
         
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <?php  }  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>