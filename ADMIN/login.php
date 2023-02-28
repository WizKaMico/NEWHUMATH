
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="adlog/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper" style="height:100%;">
	<div class="container" style="margin-top:200px;">
		<h1>HUMATHINIK</h1>
		<form class="form" action="#" method="POST">
			<input type="email" name="email" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" name="login" class="button">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="adlog/script.js"></script>

</body>
</html>


<?php
  session_start();


include('../connection/connection.php');

	if (isset($_POST['login']))
		{
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, md5($_POST['password']));
 
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
           header('location: index.php');

  		}
      else
      {
           header('location: login.php?view=ERROR');
      }
   }
  ?>