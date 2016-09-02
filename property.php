<?php include("header.php"); ?>


<div class="container">
	<div class="row">
		<div class="col-sm-24 col-md-12">
		
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
</center>
</div><br/>

<?php
	include('dbconnect.php');
	if(isset($_POST['btn_submit'])){
		$user_id=$_POST['user'];
		$atype=$_POST['apartment_type'];
		$afor=$_POST['apartment_for'];
		$aname=$_POST['apartment_name'];
		$alocation=$_POST['location'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$rent=$_POST['rent'];
		$description=$_POST['description'];
		$facilities=implode(",",$_POST['facility']);
		$sql="INSERT INTO property(user_id,apartment_type,apartment_for,apartment_name,apartment_location,address,city,rent,description,facilities) VALUES('$user_id','$atype','$afor','$aname','$alocation','$address','$city','$rent','$description','$facilities')";
		$result=mysqli_query($link,$sql);

	//code for feature table.............
	$asize=$_POST['apartment_size'];
	$bed_room=$_POST['bed_room'];
	$bath_room=$_POST['bath_room'];
	$garage=$_POST['garage'];
	$gsize=$_POST['garage_size'];
	$troom=$_POST['total_rooms'];
	$floor=$_POST['floor'];
	$basement=$_POST['basement'];
	$ybuild=$_POST['year_build'];
	$sql_feature="INSERT INTO features(user_id,apartment_size,bed_room,bath_room,garage,garage_size,total_rooms,floor,basement,building_year) VALUES('$user_id','$asize','$bed_room','$bath_room','$garage','$gsize','$troom','$floor','$basement','$ybuild')";
	$result_feature=mysqli_query($link,$sql_feature);
	
	if($result && $result_feature){
			echo "<script>alert('Submited Successfully');</script>";
		}else{
			echo "<script>alert('Error in Submission!');</script>";
		}
	}
?>
		<center><b style="color:#088A08; font-size:20px;">Fill Up Your Property Details</b></center>
	<div class="col-sm-24 col-md-12" style="margin-top:20px;">
		<b style="color:#B43104; font-size:17px;">Apartment Information:</b><br/><br/>
		<form method="post">
					<div class="form-group">
					<label>User Name:<input type="text" class="form-control" name="user" placeholder="Your Login User ID" size="35" required /></label></div>
					<div class="form-group">
					<label>Select Apartment Type:
					<select name="apartment_type" class="form-control" maltiple>
						<option value="All Types">---Select One---</option>
						<option value="Studio Apartment">Studio Apartment</option>
						<option value="Loft Apartment">Loft Apartment</option>
						<option value="Town Apartment">Town Apartment</option>
						<option value="Garden Apartment">Garden Apartment</option>
					</select></label></div>
					<div class="form-group">
					<label>This Apartment Is For:
					<select name="apartment_for" class="form-control" maltiple>
						<option value="All Types">---Select One---</option>
						<option value="Family">Family</option>
						<option value="Bachelor">Bachelor</option>
						<option value="Student">Student</option>
					</select></label></div>
					<div class="form-group">
				<label>Apartment Name:<input type="text" class="form-control" name="apartment_name" placeholder="Your Apartment Name" size="35"  /></label></div>
				<div class="form-group">
				<label>Apartment Location:<input type="text" class="form-control" name="location" placeholder="Apartment Location" size="35"  /></label></div>
				<div class="form-group">
				<label>Address:<input type="text" class="form-control" name="address" placeholder="Apartment Address" size="35"  /></label></div>
				<div class="form-group">
				<label>City:<input type="text" class="form-control" name="city" placeholder="City" size="35"  /></label></div>
				<div class="form-group">
				<label>Apartment Rent:<input type="text" class="form-control" name="rent" placeholder="Apartment Rent" size="35"  />TK/month</label></div>
				<div class="form-group">
					<label>Description:<br/><textarea class="form-control" col="500" rows="10" wrap="virtual" name="description"placeholder="Write short description about your apartment" style="width:600px;"></textarea></label></div>
				</div>
	<div class="col-sm-8 col-md-4" style="margin-top:40px;">
				<b style="color:#B43104; font-size:17px;">Facilities:</b><br/><br/>
				<input type="checkbox" value="Air Conditioning" name="facility[]" />Air Conditioning<br/>
				<input type="checkbox" value="Cable or Satelite" name="facility[]" />Cable or Satelite<br/>
				<input type="checkbox" value="Dishwasher" name="facility[]" />Dishwasher<br/>
				<input type="checkbox" value="Tilesed Floor" name="facility[]" />Tilesed Floor<br/>
				<input type="checkbox" value="wi-fi Access" name="facility[]" />wi-fi Access<br/>
				<input type="checkbox" value="BroadBand Line" name="facility[]" />BrodBand Line<br/>
				<input type="checkbox" value="Alarm System" name="facility[]" />Alarm System<br/>
				<input type="checkbox" value="Ceiling Fan" name="facility[]" />Ceiling Fan<br/>
	</div>
	<div class="col-sm-8 col-md-4" style="margin-top:40px;">
				<br/><br/>
				<input type="checkbox" value="Extra Storage" name="facility" />Extra Storage<br/>
				<input type="checkbox" value="Drawning Room" name="facility[]" />Drawning Room<br/>
				<input type="checkbox" value="Ventilation" name="facility[]" />Ventilation<br/>
				<input type="checkbox" value="Balcony" name="facility[]" />Balcony<br/>
				<input type="checkbox" value="24/7 Water Supply" name="facility[]" />24/7 Water Supply<br/>
				<input type="checkbox" value="24/7 Gas Suppy" name="facility[]" />24/7 Gas Supply<br/>
				<input type="checkbox" value="Garage" name="facility[]" />Garage<br/>
				<input type="checkbox" value="Lift" name="facility[]" />Lift
				<br/>
	</div>
	<div class="col-sm-24 col-md-12" style="margin-top:40px;">
				<b style="color:#B43104; font-size:17px;">Features:</b><br/><br/>
				<div class="form-group">
				<label>Apartment Size:<input type="text" class="form-control" name="apartment_size" placeholder="Apartment Size" size="35"  />Sq.ft</label></div>
				<div class="form-group">
				<label>Apartment Bed Room:<input type="text" class="form-control" name="bed_room" placeholder="Number of Bed Rooms" size="35" /></label></div>
				<div class="form-group">
				<label>Bath Room:<input type="text" class="form-control" name="bath_room" placeholder="Number of Buth Rooms" size="35" /></label></div>
				<div class="form-group">
				<label>Garage:<input type="text" class="form-control" name="garage" placeholder="Number of Garage" size="35" /></label></div>
				<div class="form-group">
				<label>Size:<input type="text" class="form-control" name="garage_size" placeholder="Size of the Garage" size="35" />Sq.ft</label></div>
				<div class="form-group">
				<label>Total Rooms:<input type="text" class="form-control" name="total_rooms" placeholder="Total Rooms" size="35" /></label></div>
				<div class="form-group">
				<label>Floor:<input type="text" class="form-control" name="floor" placeholder="Floor" size="35" /></label></div>
				<div class="form-group">
				<label>Basement:<input type="text" class="form-control" name="basement" placeholder="Basement" size="35" /></label></div>
				<div class="form-group">
				<label>Year of Build:<input type="text" class="form-control" name="year_build" placeholder="Apartment building year" size="35" /></label></div>
				
				&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="btn_submit" class="bttn"><b>SUBMIT</b></button>
				&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" name="reset" class="bttn"><b>RESET</b></button>
				
		</div>	
		</form>
		</div><br/><br/>
		<form style="float:right;">
		<button type="submit" name="submit_prev" formaction="profile.php" class="btn-nxt"><b>PREVIOUS</b></button>
		<button type="submit" name="submit_next" formaction="image_upload.php" class="btn-nxt"><b>NEXT</b></button>
		</form>
		</div>
			

<?php include("footer.php"); ?>