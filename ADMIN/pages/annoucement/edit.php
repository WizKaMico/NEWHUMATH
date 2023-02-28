<?php
	session_start();
	include_once('../../../connection/connection.php');


	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$announcement = $_POST['announcement']; 
		$status = $_POST['status'];
		$type = $_POST['type'];
		$sql = "UPDATE announcement SET announcement = '$announcement', status = '$status', type = '$type' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>