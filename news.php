<?php
	include("dbconnect.php");
	if(isset($_POST['btn_news'])){
		$headline=mysqli_real_escape_string($link,$_POST['head_line']);
		$date=mysqli_real_escape_string($link,$_POST['update_date']);
		$news=mysqli_real_escape_string($link,$_POST['newses']);
		$sql="INSERT INTO news(head_line,update_date,newses) VALUES('$headline','$date','$news')";
		$result=mysqli_query($link,$sql);
		if($result){
			echo "news updated successfully!";
			header("Location:view_users.php");
		}else{
			echo "Error in submission";
		}
		}
?>