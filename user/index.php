
<?php

        include('../connection/connection.php');
        include('../connection/session.php'); 
         
        $result=mysqli_query($conn, "select * from users where user_id='$session_id'")or die('Error In Session');
        $row=mysqli_fetch_array($result);
        $userid = $row['user_id'];


?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /><link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&amp;family=Poppins:wght@400;500;600&amp;display=swap'><link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" type="text/css" href="../ADMIN/pages/admin/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../ADMIN/pages/admin/datatable/dataTable.bootstrap.min.css">
  <style>
    .height10{
      height:10px;
    }
    .mtop10{
      margin-top:10px;
    }
    .modal-label{
      position:relative;
      top:7px
    }
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<!-- wrapper -->
<div class="wrapper">
  <!-- search starts -->
  <div class="search">
    <form class="search-form d-flex">
      <label>
        <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
        <input type="search" id="site-search" class="search-input" placeholder="Global Search" autocomplete="on" />
      </label>

      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19.5 18.2071V18.5H4.5V18.2071L6.35355 16.3536L6.5 16.2071V16V11C6.5 8.09437 8.02219 5.78092 10.6153 5.16653L11 5.07538V4.68V4C11 3.44614 11.4461 3 12 3C12.5539 3 13 3.44614 13 4V4.68V5.07506L13.3843 5.16644C15.9681 5.78076 17.5 8.10482 17.5 11V16V16.2071L17.6464 16.3536L19.5 18.2071ZM13.4135 20.5C13.2061 21.0806 12.6488 21.5 12 21.5C11.3443 21.5 10.7907 21.0813 10.5854 20.5H13.4135Z" fill="white" stroke="#C2CFE0" />
        <circle cx="17" cy="6" r="4.5" fill="#F7685B" stroke="white" />
      </svg>
    </form>
  </div>
  <!-- search ends -->

  <!-- sidebar starts -->
  <aside class="sidebar">
    <!-- saas header -->
    <div class="header">

      <h1 style="color:#1ddd9f;">HUMATHINIK</h1>
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
                <span class="nav-label">RESOURCES</span>
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
            <a href="index.php?view=GAME">
              <div class="menu-icon">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-controller" viewBox="0 0 20 20">
                <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
                <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
              </svg>

                <span class="nav-label">GAME</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?view=PROFILE">
              <div class="menu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people" viewBox="0 0 20 20">
                  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                </svg>
                <span class="nav-label">PROFILE</span>
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
    <?php if(!empty($_GET['view'])) { ?>
    <?php if($_GET['view'] == 'HOME'){ ?>
    <?php include('pages/home.php'); ?>
    <?php } else if($_GET['view'] == 'RESOURCE'){?>
    <?php include('pages/resource.php'); ?>
    <?php } else if($_GET['view'] == 'TOPIC'){?>
    <?php include('pages/topic.php'); ?>
    <?php } else if($_GET['view'] == 'ASSESMENT'){?>
    <?php include('pages/assesment.php'); ?>
    <?php } else if($_GET['view'] == 'QUIZ'){?>
    <?php include('pages/quiz.php'); ?>
    <?php } else if($_GET['view'] == 'PROFILE'){?>
    <?php include('pages/profile.php'); ?>
    <?php } else if($_GET['view'] == 'SETTINGS'){?>
    <?php include('pages/settings.php'); ?>
  <?php } else if($_GET['view'] == 'GAME'){?>
    <?php include('pages/game.php'); ?>
    <?php } else { ?>

    <?php } ?>
    <?php } else { ?>
    <?php include('pages/home.php'); ?>
    <?php } ?>
  </div>
  <!--      main ends -->
</div>
<!-- wrapper -->
<!-- partial -->
  <script src='https://kit.fontawesome.com/d8ab0e903f.js'></script><script  src="style/script.js"></script>
 
 <script src="../ADMIN/pages/admin/jquery/jquery.min.js"></script>
<script src="../ADMIN/pages/admin/bootstrap/js/bootstrap.min.js"></script>
<script src="../ADMIN/pages/admin/datatable/jquery.dataTables.min.js"></script>
<script src="../ADMIN/pages/admin/datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
 var table = $('#myTable').DataTable({
    pageLength : 2,
    lengthMenu: [[2, 10, 20, -1], [2, 10, 20, 'Todos']],
     "dom": 'rtip'
  })

</script>
</body>
</html>
