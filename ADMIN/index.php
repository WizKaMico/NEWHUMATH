
<?php

        include('../connection/connection.php');
        include('session.php'); 
         
        $result=mysqli_query($conn, "SELECT * FROM admin_credentials WHERE admin_id='$session_admin'")or die('Error In Session');
        $row=mysqli_fetch_array($result);



?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /><link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&amp;family=Poppins:wght@400;500;600&amp;display=swap'><link rel="stylesheet" href="style/style.css">
   <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css'>
</head>
<body>
<!-- partial:index.partial.html -->
<!-- wrapper -->
<div class="wrapper">
  <!-- search starts -->

        <div class="marquee">
          <div class="marquee__inner">
             <?php
              include_once('../connection/connection.php');
              $sql = "SELECT * FROM announcement WHERE status = 'ACTIVE' AND type = 'MARQUEE'";

              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
             ?>
            <h1>
             <?php echo strtoupper($row['announcement']); ?>
            </h1>
          <?php } ?>
          </div>
        </div>
  
  <!-- search ends -->



  <!-- sidebar starts -->
  <aside class="sidebar">
    <!-- saas header -->
    <div class="header">

      <h1 style="color:#1ddd9f; font-size:30px;">HUMATHINIK</h1>
    </div>
    <!-- sidebar inner -->
    <div class="sidebar_inner">
      <!-- person block-->
      <!-- navbar-->
      <nav class="navbar">
        <ul>
          <li class="nav-item">
            <a href="index.php?view=HOME">
              <div class="menu-icon">
               
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 20 20">
                  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                </svg>
                <span class="nav-label">HOME</span>
              </div>
            </a>
          </li>
            <li class="nav-item">
            <a href="index.php?view=ACCOUNT">
              <div class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people" viewBox="0 0 20 20">
                  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                </svg>
                <span class="nav-label">ACCOUNT</span>
              </div>
            </a>
          </li>

           <li class="nav-item">
            <a href="index.php?view=TOPIC">
              <div class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-card-list" viewBox="0 0 20 20">
                  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                </svg>

                <span class="nav-label">TOPIC</span>
              </div>
            </a>
          </li>  

          <li class="nav-item">
            <a href="index.php?view=ASSESMENT">
              <div class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-card-list" viewBox="0 0 20 20">
                  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                </svg>

                <span class="nav-label">ASSESMENT</span>
              </div>
            </a>
          </li>
        
         <li class="nav-item">
            <a href="index.php?view=CONTENT">
              <div class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
              </svg>
                <span class="nav-label">SITE</span>
              </div>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="index.php?view=SETTINGS">
              <div class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear" viewBox="0 0 20 20">
                  <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                  <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                </svg>
                <span class="nav-label">SETTINGS</span>
              </div>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="logout.php">
              <div class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg>
                <span class="nav-label">SIGN-OUT</span>
              </div>
            </a>
          </li>
        </ul>
      </nav>
      <!-- navbar ends -->
      <div class="toggle">
        <a href="">
          <div class="menu-icon">
            <img src="./img/toggle_sidebar.svg" alt="" />
          </div>
        </a>
      </div>
      <!-- toggle ends-->
    </div>
    <!-- inner ends -->
  </aside>
  <!-- sidebar ends -->

  <!-- mainBlock starts -->

  <div class="main">


     <?php 

    if(!empty($_GET['view'])){ 

    if($_GET['view'] == 'HOME')
    {
       include ('pages/home.php');
    }
    else if($_GET['view'] == 'ACCOUNT')
    {
       include ('pages/account.php');
    }
     else if($_GET['view'] == 'TOPIC')
    {
      include ('pages/topic.php');
    }
     else if($_GET['view'] == 'ASSESMENT')
    {
       include ('pages/assesment.php');
    }
     else if($_GET['view'] == 'CONTENT')
    {
      include ('pages/content.php');
    }
    else if($_GET['view'] == 'SETTINGS')
    {
     include ('pages/settings.php');
    }
    else
    {

    }

  } else {

     include ('pages/home.php');

  }

  ?>
  
  </div>
  <!--      main ends -->
</div>
<!-- wrapper -->
<!-- partial -->
  <script src='https://kit.fontawesome.com/d8ab0e903f.js'></script><script  src="style/script.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
<script src='https://demo.htmx.org'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/htmx/1.8.4/htmx.min.js'></script>
  <script>
    
    htmx.on("htmx:beforeRequest", function(evt) {
  if(evt.detail.target.hasChildNodes()){
    // prevent another request
    evt.preventDefault()
  }
});


  </script>
</body>
</html>


<style>

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.marquee {
  width: 100%;
  overflow: hidden;
  background-color: #1ddd9f;
}
.marquee__inner {
  display: flex;
}
.marquee__inner h1 {
  font-size: 2vw;
  white-space: nowrap;
  animation: kf-marquee 10s linear infinite;
  text-shadow: -1px -1px 0 #ccc, 1px -1px 0 #ccc, -1px 1px 0 #ccc, 1px 1px 0 #ccc;
  color: #141313;
  transition: color 0.40s linear;
}
.marquee__inner h1:hover {
  color: #fcfcfc;
}

@keyframes kf-marquee {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(-100%, 0);
  }
}

</style>