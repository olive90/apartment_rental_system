<?php include("header.php"); ?>

	<div class="container">
    <div class="row">
     <div class="col-sm-6 col-md-4 col-md-offset-4">
    <form method="post" name="login" action="login.php">       
	<div class="panel panel-info">
	<div class="panel-heading">
      <center><b style="font-size:30px;">Please Sign In</b></center>
	  </div>
	  <div class="panel-body">
      <input type="text" class="form-control" name="user" id="userid" placeholder="User Name" required="" autofocus="" />
      <input type="password" class="form-control" name="password" id="passid" placeholder="Password" required=""/>      
      <label class="checkbox" style="margin-left:25px;">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe" /> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_signin"><b>Sign In</b></button>
	  <button onclick="location.href='register.php'" class="btn btn-lg btn-primary btn-block"><b>Sign Up</b></button>
	  </div></div>
    </form>
</div>
</div></div>

<?php include("footer.php"); ?>