<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['edit'])){
		$admin_id  = $_POST['admin_id'];  
		$fname  = $_POST['fname']; 
		$lname = $_POST['lname']; 
		$email = $_POST['email']; 
	
		$sql = "UPDATE admin_credentials SET  fname = '$fname', lname = '$lname', email = '$email' WHERE admin_id = '$admin_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
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