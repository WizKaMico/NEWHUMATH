<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['add'])){
		$answer = $_POST['answer'];
		$question_id = $_POST['question_id']; 
		$qid =  $_POST['qid']; 

		$sql = "INSERT INTO topic_assesment_answers (question_id, answer) VALUES ('$question_id', '$answer')";

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

	header('location: assesment_details.php?id='.$qid);
?>