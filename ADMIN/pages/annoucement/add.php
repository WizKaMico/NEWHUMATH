<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['add'])){
		date_default_timezone_set('Asia/Manila'); 
		$announcement = $_POST['announcement']; 
		$status = $_POST['status']; 
		$type = $_POST['type'];
		$date = date('Y-m-d'); 
		$sql = "INSERT INTO announcement (announcement, status, type, date_created) VALUES ('$announcement', '$status', '$type', '$date')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'added successfully';
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