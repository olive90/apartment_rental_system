<?php include("header.php"); ?>
<?php
	include("dbconnect.php");
	session_start();
	if(isset($_POST['btn_signup'])){
		$uname=mysqli_real_escape_string($link,$_POST["uname"]);
		$email=mysqli_real_escape_string($link,$_POST["email"]);
		$pass =md5(mysqli_real_escape_string($link,$_POST["pass"]));
		
		//check already exist user.................
		$check_user="select * from users WHERE username='$uname'";  
		$run_query=mysqli_query($link,$check_user);  
  
		if(mysqli_num_rows($run_query)>0)  
		{  
		echo "<script>alert('User $uname is already exist in our database, Please try another one!')</script>";   
		}  
		//.............................check complete
		
		//add user to the database...............................
		$sql="INSERT INTO users(username,email,password) VALUES('{$uname}','{$email}','{$pass}')";
		if(mysqli_query($link,$sql)){
			?>
			<script>alert('Successfully Registered');</script>
			<?php
		}else{
			?>
			<script>alert('Error while registering');</script>
			<?php
		}
		//.......................................adding complete
	}
	
?>
	<div class="container">
    <div class="row">
     <div class="col-sm-6 col-md-4 col-md-offset-4">
				<div id="login_form">
					<form method="post">
					<div class="panel panel-info">
						<div class="panel-heading">
						  <center><b style="font-size:30px;">Please Sign Up</b></center>
						  </div>
						  <div class="panel-body">
									<input type="text" class="form-control" name="uname" placeholder="User Name" required="" autofocus="" />
									<input type="email" class="form-control" name="email" placeholder="Email" required="" />
									<input type="password" class="form-control" name="pass" placeholder="Password" required="" />
									<button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_signup"><b>Sign Up</b></button>
									<button onclick="location.href='sign_in.php'" class="btn btn-lg btn-primary btn-block"><b>Sign In</b></button>
						</div></div>
					</form>
				</div>
				</div></div></div>

	
	<?php include("footer.php"); ?>