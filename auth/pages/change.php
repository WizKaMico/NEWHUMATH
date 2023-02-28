  <?php
  
  
  $email = $_GET['email'];
  include('../connection/connection.php');

  

     $result=mysqli_query($conn, "select * from users where email='$email'")or die('Error In Session');
     $row=mysqli_fetch_array($result);
 

  ?>

   <div class="user signinBx">
        <div class="imgBx"><img src="style/img1.png" alt="" /></div>
        <div class="formBx">
          <form action="action/newpassword.php" method="POST">
            <h2>Hi! <?php echo $row['fname']; ?></h2>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" require="" readonly=""/>
            <input type="password" name="password" placeholder="ENTER NEW PASSWORD"  require=""/>
            <input type="submit" name="submit" value="PROCEED" />
          </form>
        </div>
      </div>
      