<?php
	include_once('../../../connection/connection.php');
 
	if(ISSET($_POST['add'])){
		if($_FILES['upload']['name'] != "") {
			$file = $_FILES['upload'];
     		$tid = $_POST['tid'];
			$file_name = $file['name'];
			$file_temp = $file['tmp_name'];
			$name = explode('.', $file_name);
			$path = "files/".$file_name;
 
			$conn->query("INSERT INTO `file` VALUES('', '$tid', '$name[0]', '$path')") or die(mysqli_error());
 
			move_uploaded_file($file_temp, $path);
			header("location:topic_image.php?id=".$tid);
 
		}else{
			echo "<script>alert('Required Field!')</script>";
			
		}
	}
?>