<?php
   include('../../connection/connection.php');
	if (isset($_POST['submit']))
		{
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, MD5($_POST['password']));

			
         
			$query 		= mysqli_query($conn, "SELECT * FROM users WHERE  email='$email'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
 
			if ($num_row > 0) 
				{		
					
					mysqli_query($conn,"UPDATE users SET password = '$password' WHERE email = '$email'"); 
					mysqli_query($conn,"UPDATE recover SET status = 'RECOVERED' WHERE email = '$email'");   
					header('location: ../index.php?view=HOME');
 
				}
			else
				{
					header('location: ../index.php?view=CHANGEPASS&email='.$email.'&message=ERROR');
				}
		}
  ?>