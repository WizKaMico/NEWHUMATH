<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['add'])){
		date_default_timezone_set('Asia/Manila'); 
		$title = $_POST['title']; 
		$tag = $_POST['tag'];
		$link = $_POST['link'];
		$description = $_POST['description'];
		$date = date('Y-m-d'); 
		$sql = "INSERT INTO home_content (tag, title, link, description, date_created) VALUES ('$tag', '$title', '$link', '$description', '$date')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'added successfully';
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

	header('location: index.php');
?>