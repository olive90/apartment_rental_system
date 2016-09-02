<?php include("header.php"); ?>

<?php
	include('dbconnect.php');
	session_start();
	if(isset($_POST['admin_signin'])){
		$admin_name=$_POST['admin_name'];
		$admin_pass=$_POST['admin_password'];
		
		$admin_query="SELECT * FROM admin WHERE admin_name='$admin_name' AND admin_password='$admin_pass'";
		$run_query=mysqli_query($link,$admin_query);
		$row = mysqli_fetch_array($run_query, MYSQLI_BOTH);
		if($row['admin_password']==$admin_pass){
			$_SESSION['admin_name'] = $row['id'];
			header("Location:view_users.php");
		}else{
			echo "<script>alert('admin details are incorrect...!')</script>";
		}
	}
?>
	<div class="container">
    <div class="row">
     <div class="col-sm-6 col-md-4 col-md-offset-4">
	<center><b style="color:red; font-size:18px;">Only ADMIN has the permission to Login<b></center><br/>
<form method="post" name="login" action="admin_login.php">
<div class="panel panel-warning">
	<div class="panel-heading">
		<center><b style="font-size:30px;">Admin Sign In</b></center>
	</div>
	<div class="panel-body">
	<input type="text" class="form-control" name="admin_name" id="userid" placeholder="Name" required="" autofocus="" />
	<input type="password" class="form-control" name="admin_password" id="passid" placeholder="Password" required="" />
	<button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_signin"><b>Sign In</b></button>
	</div></div>
</form>
</div></div></div>

<?php include("footer.php"); ?>