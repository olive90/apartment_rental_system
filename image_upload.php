<?php include("header.php"); ?>

<div class="container">
	<div class="row">
	<div class="wrapper">
		<div class="col-sm-6 col-md-4 col-md-offset-4">
		
<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}
$res=mysqli_query($link,"SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res);
?>
<center>
		<h3 style="color:#04B4AE;"><i><b>Welcome to Apartment Rental System</b></i></h3>
         Logged in as -&nbsp;&nbsp;<?php echo "<b style='color:#FE2E64; font-size:18px;'>".$userRow['username']."</b>"; ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php?logout">Sign Out</a>
</center><br/>
</div>
<div class="col-sm-12 col-md-6" style="margin-top:40px;">
<b style="color:#B43104; font-size:17px;">Upload Your Apartment Images Here:</b><br/>
<form action="addimage.php" method="post" enctype="multipart/form-data" name="addroom">
<div class="form-group">
<label>User Name:<input type="text" class="form-control" name="user" placeholder="Your Login User ID" size="30" required="" autofocus="" /></label></div>
<div class="form-group">
 <label>Select Image:<input type="file" name="image" class="ed" required="" /></label></div>
 <div class="form-group">
 <label>Caption:<input name="caption" class="form-control" type="text" class="ed" id="brnu" /></label></div>
 <input type="submit" name="Submit" value="Upload" id="button1" />
 </form>
 </div>


<div class="col-sm-12 col-md-6" style="margin-top:60px;">
<p><b>Photo Archieve(100px*150px)</b></p>
<?php
include('dbconnect.php');
if($id=$userRow['username']){
$result = mysqli_query($link,"SELECT * FROM photos WHERE user_id='$id'");
while($row=mysqli_fetch_array($result)){
echo '<div id="imagelist">';
echo '<p id="img-up"><img src="'.$row['location'].'" height="100px" width="150px"></p>';
echo '<p id="caption">'.$row['caption'].' </p>';
echo '</div>';
}
}else{
	echo "No photos uploaded.";
}
?>
</div>

<br />
<br />
<br/><br/>
<div class="col-sm-24 col-md-12" style="margin-top:40px;">
<h2 style="color:blue;">------Confirmation------</h2>
<table align="left" width="100%" border="0">
<tr>

	<td style="background-color:#A9BCF5; padding:20px;"><p style="color:white; font-size:17px;"><b>Your details may published very soon.You will notified through email when your post will published.keep patience.You can delete or edit your post after publishing.But remember that you have to sign in first to access your post editing or deleting.</b><p></td>
	</tr>
	<tr>
		<td style="float:left;">
			<p style="float:left;"><b>Will you agree to our terms and conditions?<b></p>&nbsp;&nbsp;
			<input type="checkbox" value="confirm" name="confirm" required />Yes<br/>
		</td>
	</tr>
</table>
</div>
</div></div><br/><br/>
<form style="float:right;"> 
		<button type="submit" name="submit_prev" formaction="property.php" class="btn-nxt"><b>PREVIOUS</b></button>
		<button type="submit" name="finish" formaction="print.php" class="btn-nxt"><b>FINISH</b></button>
		</form>

</div>


<?php include("footer.php"); ?>