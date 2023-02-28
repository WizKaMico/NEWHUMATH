<?php
  session_start();


include('../../connection/connection.php');

	if (isset($_POST['login']))
		{
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
 
			$query 		= mysqli_query($conn, "SELECT * FROM admin_credentials WHERE  password='$password' and email='$email'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
 
			if ($num_row > 0) 
				{		


           $_SESSION['admin_id']=$row['admin_id'];
					 $code = rand(6666,9999);
					 $status = 'VALID'; 
					 $attempt = date('Y-m-d');

					 mysqli_query($conn,"INSERT INTO client_admin_security (email, code, status, date) VALUES ('$email', '$code', '$status', '$attempt')");  
           header('location: ../index.php');

  		}
      else
      {
            header('location: ../login.php?view=ERROR');
      }
   }
  ?>