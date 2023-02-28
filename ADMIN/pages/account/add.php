<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['add'])){
		date_default_timezone_set('Asia/Manila'); 

		$student_no =  $_POST['student_no'];
		$fname  = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$gender = $_POST['gender'];
		$code = rand(6666,9999);
		$status = 'VALID';
		$date_created = date('Y-m-d');

		$sql = "INSERT INTO users (student_no, fname, lname, email, password, gender, code, status, date_created) VALUES ('$student_no', '$fname', '$lname', '$email', '$password', '$gender', '$code', '$status', '$date_created')";

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