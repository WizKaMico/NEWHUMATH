<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_GET['user_id'])){
		
		$email = $_GET['email']; 

		$sql1 = "DELETE FROM users WHERE user_id = '".$_GET['user_id']."'";
		$sql2 = "DELETE FROM topic_assesment_into WHERE uid = '".$_GET['user_id']."'";
		$sql3 = "DELETE FROM resource__topic_into WHERE userid = '".$_GET['user_id']."'";
		$sql4 = "DELETE FROM resource_into WHERE userid = '".$_GET['user_id']."'";
		$sql5 = "DELETE FROM client_security WHERE email = '$email'";
		$sql6 = "DELETE FROM recover WHERE email = '$email'";
		//use for MySQLi OOP
		if($conn->query($sql1) && $conn->query($sql2) && $conn->query($sql3) && $conn->query($sql4) && $conn->query($sql5) && $conn->query($sql6)){
			$_SESSION['success'] = 'Member deleted successfully';
		}
	
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: index.php');
?>