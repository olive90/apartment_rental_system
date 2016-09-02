<?php
	include('dbconnect.php');
	$delete_id=$_GET['del'];
	$delete_query="DELETE FROM users WHERE user_id='$delete_id'";
	$run_query=mysqli_query($link,$delete_query);
	if($run_query){
		echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";
		echo "<script>alert('Deleted Successfully')</script>";
		
	}
	
?>