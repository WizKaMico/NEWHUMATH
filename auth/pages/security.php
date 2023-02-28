  <?php
  
  $code = $_GET['code']; 
  $email = $_GET['email'];
  include('../connection/connection.php');
  include('../connection/session.php'); 

  

     $result=mysqli_query($conn, "select * from users where user_id='$session_id'")or die('Error In Session');
     $row=mysqli_fetch_array($result);
 

  ?>

   <div class="user signinBx">
        <div class="imgBx"><img src="style/img1.png" alt="" /></div>
        <div class="formBx">
          <form action="action/validate.php" method="POST">
            <h2>Hi! <?php echo $row['fname']; ?></h2>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" require="" readonly=""/>
            <input type="number" name="code" placeholder="ENTER 4-DIGIT SECURITY CODE"  require=""/>
            <input type="submit" name="submit" value="PROCEED" />
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form action="action/register.php" method="POST">
            <h2>Create an account</h2>
            <input type="text" name="firstname" placeholder="Firstname"  required=""/>
            <input type="text" name="lastname" placeholder="Lastname" required=""/>
            <input type="number" name="student_no" placeholder="Student No." required=""/>
            <input type="email" name="email" placeholder="Email Address" required=""/>
            <input type="password" name="password" placeholder="Create Password" required=""/>
            <input type="submit" name="submit" value="Sign Up" />
          </form>
        </div>
        <div class="imgBx"><img src="style/img1.png" alt="" /></div>
      </div>