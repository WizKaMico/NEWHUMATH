<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(ISSET($_POST['add'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$tid = $_POST['tid'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `topic_image` VALUES('', '$tid', '$path')") or die(mysqli_error());
				echo "<script>alert('User account saved!')</script>";
				header("location: topic_image.php?id=".$tid);
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>