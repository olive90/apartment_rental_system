<?php
	//include("dbconnect.php");
	session_start();
	$check=$_SESSION['login_username'];
	$sql = "SELECT * FROM users WHERE username='$check'";
	$row=mysqli_fetch_array($link,$sql);
	$login_session=$row['username'];
	if(!isset($login_session)){
		//header("Location:index.php");
	}
?>