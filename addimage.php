<?php
include('dbconnect.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= mysqli_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= mysqli_real_escape_string($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$user_id=$_POST['user'];
			$location="photos/" . $_FILES["image"]["name"];
			$caption=$_POST['caption'];
			
			$save=mysqli_query($link,"INSERT INTO photos (user_id,location, caption) VALUES ('$user_id','$location','$caption')");
			header("location: image_upload.php");
			exit();					
	}
?>
