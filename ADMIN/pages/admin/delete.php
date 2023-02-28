<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_GET['admin_id'])){
		
		

		$sql1 = "DELETE FROM admin_credentials WHERE admin_id = '".$_GET['admin_id']."'";
	
		//use for MySQLi OOP
		if($conn->query($sql1)){
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