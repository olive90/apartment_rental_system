<?php
	session_start();
	if(!session_destroy()){
		header("Location:view_users.php");
	}else{
		header("Location:admin_login.php");
	}
?>