<?PHP include("header.php");?>


<div class="container">
	<div class="row">
		<div class="col-sm-12" style="background-color:#dedef8; box-shadow:inset 1px -1px 1px #444, inset -1ox 1px 1px #444;">

<?php
	include('dbconnect.php');
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 header("Location:all_apartments.php");
 $id = mysqli_real_escape_string($link,$_GET['id']);
 $sql="SELECT * FROM owner WHERE user_id='$id'";
 $result = mysqli_query($link,$sql); 
 if($result==false){
	echo "invalid";
 }else{
 $r=mysqli_fetch_array($result);
	echo "<br/>";
	echo "<h3>::::Owner of the Apartment::::</h3>";
	echo "<b>First Name::</b> ".$r['first_name']."<br/>";
	echo "<b>Last Name::</b> ".$r['last_name']."<br/>";
	echo "<b>Email::</b> ".$r['email']."<br/>";
	echo "<b>Address::</b> ".$r['address']."<br/>";
	echo "<b>City::</b> ".$r['city']."<br/>";
	echo "<b>Phone Number::</b> ".$r['phone']."<br/>";
 
 } 

$sql="SELECT * FROM features WHERE user_id='$id'";
$result = mysqli_query($link,$sql);
if($result==false){
	echo "invalid";
}else{
	$r=mysqli_fetch_array($result);
		echo "<br/>";
		echo "<h3>::::Some features of the Apartment::::</h3>";
		echo "<b>Apartment Size::</b> ".$r['apartment_size']."<br/>";
		echo "<b>Bed Room::</b> ".$r['bed_room']."<br/>";
		echo "<b>Bath Room::</b> ".$r['bath_room']."<br/>";
		echo "<b>Garage::</b> ".$r['garage_size']."<br/>";
		echo "<b>Total Rooms::</b> ".$r['total_rooms']."<br/>";
		echo "<b>Floor::</b> ".$r['floor']."<br/>";
		echo "<b>Basement::</b> ".$r['basement']."<br/>";
		echo "<b>Building Year::</b> ".$r['building_year']."<br/>";
}

$sql="SELECT * FROM photos WHERE user_id='$id'";
$result = mysqli_query($link,$sql);
if($result==false){
	echo "invalid";
}else{
	$r=mysqli_fetch_array($result);
		echo "<br/>";
		echo "<h3>::::Apartment Gallery::::</h3>";
		echo '<div id="imagelist">';
		echo '<p><img src="'.$r['location'].'" height="100px" width="150px"></p>';
		echo '<b><p id="caption">'.$r['caption'].' </p></b>';
		echo '</div>';
}
	?>
	
</div>
</div>
</div>

<?php include("footer.php");?>
