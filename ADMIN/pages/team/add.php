<?php
	include_once('../../../connection/connection.php');
	if(ISSET($_POST['add'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$photo_name = $_POST['name'];
		$role = $_POST['role'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "GIF", "jpg", "JPG", "jpeg", "JPEG", "png", "PNG");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `team_content` VALUES('', '$photo_name', '$role', '$path')") or die(mysqli_error());
				echo "<script>alert('content saved!')</script>";
				header("location: index.php");
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>