<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$rid = $_POST['rid'];
		$topic_name = strtoupper($_POST['topic_name']);

		$sql = "UPDATE resource_topic SET topic_name = '$topic_name' WHERE id = '$id'";

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

	header('location: topic.php?rid='.$rid);

?>