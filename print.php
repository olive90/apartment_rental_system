<?php include("header.php"); ?>

<!DOCTYPE html>
<html>
<body>
<div class="container">
	<div class="row">
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

		

<?php
			//Owner Details.................
//$id=$userRow['username'];
if($id=$userRow['username']){
	
?>
<div class="col-sm-12 col-md-6" style="margin-top:40px;">
<?php
	
$result=mysqli_query($link,"SELECT * FROM owner WHERE user_id='$id'");

	echo "<b style='color:#B43104; font-size:17px;'>Owner Of The Apartment</b><br/>";
	
  
		while($row=mysqli_fetch_array($result)){
	
		$user_id=$row['user_id'];
		$fname=$row['first_name'];
		$lname=$row['last_name'];
		$email=$row['email'];
		$address=$row['address'];
		$city=$row['city'];
		$phone=$row['phone'];

		}
	echo "<table class='table table-hover table-striped' class='ergTable' id='mobileTable'>";
	echo "<div class='mobileErgDiv' ng-repeat='data in responseData | limitTo:limit'>";
	echo "<tr>";
		echo "<th>User Name: </th>";
		echo "<td>".$user_id."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>First Name: </th>";
		echo "<td>".$fname."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Last Name: </th>";
		echo "<td>".$lname."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Email: </th>";
		echo "<td>".$email."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Address: </th>";
		echo "<td>".$address."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>City: </th>";
		echo "<td>".$city."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Phone: </th>";
		echo "<td>".$phone."</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";
?>
</div>
<div class="col-sm-12 col-md-6" style="margin-top:40px;">

<?php
		
			//Apartment Details......

$result=mysqli_query($link,"SELECT * FROM property WHERE user_id='$id'");

	echo "<b style='color:#B43104; font-size:17px;'>Apartment Details</b><br/>";
	
  
		while($row=mysqli_fetch_array($result)){
	
		$atype=$row['apartment_type'];
		$afor=$row['apartment_for'];
		$aname=$row['apartment_name'];
		$alocation=$row['apartment_location'];
		$address=$row['address'];
		$city=$row['city'];
		$rent=$row['rent'];
		$description=$row['description'];
		$facilities=$row['facilities'];

		}

	echo "<table class='table table-hover table-striped' class='ergTable' id='mobileTable'>";
	echo "<div class='mobileErgDiv' ng-repeat='data in responseData | limitTo:limit'>";
	echo "<tr>";
		echo "<th>Apartment Type:</th>";
		echo "<td>".$atype."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>This Apartment Is For:</th>";
		echo "<td>".$afor."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Apartment Name:</th>";
		echo "<td>".$aname."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Apartment Location:</th>";
		echo "<td>".$alocation."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Address:</th>";
		echo "<td>".$address."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>City:</th>";
		echo "<td>".$city."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Apartment Rent:</th>";
		echo "<td>".$rent." &nbsp;&nbsp;&nbsp;TK/Month</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Apartment Description:</th>";
		echo "<td>".$description."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Facilities:</th>";
		echo "<td>".$facilities."</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";
		
		?>
			</div>
			<div class="col-sm-12 col-md-6" style="margin-top:40px;">
		<?php
		//Features
		$result=mysqli_query($link,"SELECT * FROM features WHERE user_id='$id'");
		echo "<b style='color:#B43104; font-size:17px;'>Features</b>";
		while($row=mysqli_fetch_array($result)){
	
		$asize=$row['apartment_size'];
		$bedroom=$row['bed_room'];
		$bathroom=$row['bath_room'];
		$garage=$row['garage'];
		$gsize=$row['garage_size'];
		$trooms=$row['total_rooms'];
		$floor=$row['floor'];
		$basement=$row['basement'];
		$buildingyear=$row['building_year'];

		}

	echo "<table class='table table-hover table-striped' class='ergTable' id='mobileTable'>";
	echo "<div class='mobileErgDiv' ng-repeat='data in responseData | limitTo:limit'>";
	echo "<tr>";
		echo "<th>Apartment Size:</th>";
		echo "<td>".$asize." &nbsp;&nbsp;&nbsp;sq.f</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Bed Room:</th>";
		echo "<td>".$bedroom."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Bath Room:</th>";
		echo "<td>".$bathroom."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Number Of Garage:</th>";
		echo "<td>".$garage."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Garage Size:</th>";
		echo "<td>".$gsize." &nbsp;&nbsp;&nbsp;sq.f</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Total Rooms:</th>";
		echo "<td>".$trooms."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Floor:</th>";
		echo "<td>".$floor."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Basement:</th>";
		echo "<td>".$basement."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>Building Year:</th>";
		echo "<td>".$buildingyear."</td>";
	echo "</tr>";
	echo "</div>";
	echo "</table>";
		?>
		</div>
		<div class="col-sm-12 col-md-6" style="margin-top:40px;">
		<?php
		
		
		//Photos
		$result=mysqli_query($link,"SELECT * FROM photos WHERE user_id='$id'");
		echo "<b style='color:#B43104; font-size:17px;'>Apartment Photos</b><br/>";
		while($row=mysqli_fetch_array($result)){
			echo '<div id="imagelist">';
			echo '<p><img id="img-up" src="'.$row['location'].'" height="100px" width="150px"></p>';
			echo '<p id="caption">'.$row['caption'].' </p>';
			echo '</div>';
		}
		?>
		</div>
		<?php
}else{
	echo "<p>No Entry</p>";
}
?>

</div></div>
<br/><br/><br/>
</body>
</html>


<?php include("footer.php"); ?>