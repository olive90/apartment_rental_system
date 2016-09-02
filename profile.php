<?php include("header.php") ?>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4">

<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
	echo "<h3 style='color:red; text-align:center; margin-top:150px;'>Please <a href='sign_in.php'>Sign in</a> to continue.<br/> OR if you do not have any account then <a href='register.php'>Sign up</a> and complete your registration.</h3>";
	
}else{
$res=mysqli_query($link,"SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
?>
		<center>
		<h3 style="color:#04B4AE;"><i><b>Welcome to Apartment Rental System</b></i></h3>
         Logged in as -&nbsp;&nbsp;<?php echo "<b style='color:#FE2E64; font-size:18px;'>".$userRow['username']."</b>"; ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php?logout">Sign Out</a>
		 </center><br/>
<?php include("owner.php"); } ?>

</div></div></div>

<?php include("footer.php"); ?>
