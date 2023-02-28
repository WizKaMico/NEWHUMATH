<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['add'])){
		date_default_timezone_set('Asia/Manila'); 

	
		$fname  = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$status = 'VALID';
		$date_created = date('Y-m-d');

		$sql = "INSERT INTO admin_credentials (email, fname, lname, password, status) VALUES ('$email', '$fname', '$lname', '$password', '$status')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>