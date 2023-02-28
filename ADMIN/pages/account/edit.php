<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['edit'])){
		$user_id  = $_POST['user_id'];  
		$student_no  = $_POST['student_no']; 
		$fname  = $_POST['fname']; 
		$lname = $_POST['lname']; 
		$email = $_POST['email']; 
		$gender = $_POST['gender']; 
		$sql = "UPDATE users SET student_no = '$student_no', fname = '$fname', lname = '$lname', email = '$email', gender = '$gender' WHERE user_id = '$user_id'";

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