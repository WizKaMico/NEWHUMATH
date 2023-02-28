<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['add'])){
		$resource_name = strtoupper($_POST['resource_name']);
		$resource_description = strtoupper($_POST['resource_description']);
		
		$sql = "INSERT INTO resources (resource_name, resource_description) VALUES ('$resource_name', '$resource_description')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Added successfully';
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