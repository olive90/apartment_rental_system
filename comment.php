<?php
	include("dbconnect.php");
	
	if(isset($_POST['btn_comment'])){
		$name=mysqli_real_escape_string($link,$_POST['name']);
		$email=mysqli_real_escape_string($link,$_POST['email']);
		$comment=mysqli_real_escape_string($link,$_POST['comment']);
		$sql="INSERT INTO comments(name,email,comment) VALUES('$name','$email','$comment')";
		$result=mysqli_query($link,$sql);
		if($result){
			header("Location:index.php");
		}else{
			echo "<script>alert('Error in submission');</script>";
		}
	}
?>