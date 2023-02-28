<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['edit'])){
		$rid = $_POST['rid'];
		$resource_name = $_POST['resource_name'];
		$resource_description = $_POST['resource_description'];
		$sql = "UPDATE resources SET resource_name = '$resource_name', resource_description = '$resource_description' WHERE rid = '$rid'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Updated successfully';
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