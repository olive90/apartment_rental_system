<?php
	session_start();
	if(!session_destroy()){
		header("Location:profile.php");
	}else{
		header("Location:sign_in.php");
	}
?>
