<?php

include_once('../../../connection/connection.php');
$user_id = $_GET['user_id'];
$rresult=mysqli_query($conn, "SELECT * FROM `users` WHERE user_id = '$user_id'");
$rrow=mysqli_fetch_array($rresult);

$email = $rrow['email'];

if(isset($_POST['submit'])){
   
$user_id = $_POST['user_id'];
$student_no =  $_POST['student_no'];
$fname  = $_POST['fname'];
$lname = $_POST['lname'];

 mysqli_query($conn,"UPDATE users SET student_no = '$student_no', fname = '$fname', lname = '$lname' WHERE user_id = '$user_id'");  

}


if(isset($_POST['update'])){
   
$user_id = $_POST['user_id'];
$email =  $_POST['email'];
$password  = md5($_POST['password']);


 mysqli_query($conn,"UPDATE users SET email = '$email', password = '$password' WHERE user_id = '$user_id'");  

}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

</head>
<body>
<!-- partial:index.partial.html -->


<div class="container-fluid">
  <h1 class="p-3"><?php echo strtoupper($rrow['fname']); echo ' '; echo strtoupper($rrow['lname']); ?></h1>
  <div class="row">
    <div class="col-md-3 col-sm-12">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="true">PROFILE</a>
        <a class="nav-link" id="history-tab" data-toggle="pill" href="#history" role="tab" aria-controls="history" aria-selected="false">PASS. AND SEC.</a>
      </div>
    </div>
    <div class="col-md-9 col-sm-12 mb-5">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labbelledby="profile-tab">
          <div class="row">
            <div class="col"></div>
            <div class="col-lg-8 col-md-10 col-sm-12">
              <h4> PROFILE INFORMATION </h4>
              <hr/>
              <form action="#" method="POST">
                <input type="hidden" id="userId" name="user_id" value="<?php echo $rrow['user_id']; ?>">
               <div class="form-group col-lg-6 col-md-12">
                  <label for="firstname">Student No</label>
                  <input class="form-control" id="firstname" name="student_no" value="<?php echo $rrow['student_no']; ?>" required="">
                </div>
                <div class="form-group col-lg-6 col-md-12">
                  <label for="firstname">First Name</label>
                  <input class="form-control" id="firstname" name="fname" value="<?php echo $rrow['fname']; ?>" required="">
                </div>
                <div class="form-group col-lg-6 col-md-12">
                  <label for="lastname">Last Name</label>
                  <input class="form-control" id="lastname" name="lname" value="<?php echo $rrow['lname']; ?>" required="">
                </div>
           
                <input type="submit"  class="btn btn-primary"  name="submit" value="UPDATE" style="width:100%;">
              
              </form>
            </div>
            <div class="col"></div>
          </div>
        </div>
      
        <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
          <div class="row">
            <div class="col"></div>
            <div class="col-lg-8 col-md-10 col-sm-12 pt-4">
              <h4> PASSWORD AND SECURITY </h4>
              <hr>
               <form action="#" method="POST">
                <input type="hidden" id="userId" name="user_id" value="<?php echo $rrow['user_id']; ?>">
               <div class="form-group col-lg-6 col-md-12">
                  <label for="phone">Email</label>
                  <input class="form-control" id="phone" name="email" value="<?php echo $rrow['email']; ?>" required="">
                </div>
                <div class="form-group col-lg-6 col-md-12">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" required="">
                </div> 
            
                <input type="submit"  class="btn btn-primary"  name="update" value="UPDATE" style="width:100%;">
              
              </form>
            </div>
            <div class="col"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js'></script><script  src="./script.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</body>
</html>
