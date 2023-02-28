<?php
   include('../../connection/connection.php');
	if (isset($_POST['submit']))
		{
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$code = mysqli_real_escape_string($conn, $_POST['code']);
			date_default_timezone_set('Asia/Manila');
			$date_today = date('Y-m-d');
         
			$query 		= mysqli_query($conn, "SELECT * FROM client_security WHERE  email='$email' and code='$code' and status = 'VALID'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
 
			if ($num_row > 0) 
				{		
				  $_SESSION['user_id']=$row['user_id'];	
					mysqli_query($conn,"UPDATE client_security SET status = 'USED' WHERE email = '$email' AND code = '$code'");  
					header('location: ../terms.php');
 
				}
			else
				{
					header('location: ../index.php?view=SECURITY&code='.$code.'&email='.$email.'&message=ERROR');
				}
		}
  ?>