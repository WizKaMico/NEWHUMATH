<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_GET['id'])){
		$rid = $_GET['rid'];


		$sql = "DELETE FROM resource_topic WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: topic.php?rid='.$rid);
?>