<?php
	session_start();
	include_once('../../../connection/connection.php');


	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$title = $_POST['title']; 
		$tag = $_POST['tag'];
		$link = $_POST['link'];
		$description = $_POST['description'];
		$sql = "UPDATE home_content SET title = '$title', tag = '$tag', link = '$link', description = '$description'  WHERE id = '$id'";

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