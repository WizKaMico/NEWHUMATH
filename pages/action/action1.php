<?php

	include_once('../../connection/connection.php');

	if(isset($_POST['add'])){
		date_default_timezone_set('Asia/Manila'); 


		$fname  = $_POST['fname'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$date_created = date('Y-m-d');

		$sql = "INSERT INTO site_inquiry (fname, email, subject, message, date_created) VALUES ('$fname', '$email', '$subject', '$message', '$date_created')";

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

	header('location: ../../index.php?view=HOME');
?>