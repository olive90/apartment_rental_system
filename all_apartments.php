<?PHP include("header.php");?>


<div class="container">
	<div class="row">
		<div class="col-sm-12" style="background-color:#dedef8; box-shadow:inset 1px -1px 1px #444, inset -1ox 1px 1px #444;">
<?php
	include('dbconnect.php');
	$sql="SELECT * FROM property";
	$result=mysqli_query($link,$sql);
	while($row=mysqli_fetch_array($result)){

	echo "<table>";
	echo "<br/><br/>";
		echo "<tr><th><b>Apartment Name::</b></th><td> ".$row['apartment_name']."</td></tr>";

		echo "<tr><th><b>Apartment Type::</b></th><td> ".$row['apartment_type']."</td></tr>";

		echo "<tr><th><b>Apartment For::</b></th><td> ".$row['apartment_for']."</td></tr>";

		echo "<tr><th><b>Apartment Location::</b></th><td> ".$row['apartment_location']."</td></tr>";

		echo "<tr><th><b>Address::</b></th><td> ".$row['address']."</td></tr>";

		echo "<tr><th><b>City::</b></th><td> ".$row['city']."</td></tr>";

		echo "<tr><th><b>Description::</b></th><td> ".$row['description']."</td></tr>";
		
		echo "<tr><th><b>Facilities::</b></th><td> ".$row['facilities']."</td></tr>";

		echo "<tr><th><b>Rent::</b></th><td> ".$row['rent']." TK/Month</td></tr>";
		
		echo "</table>";
		
		echo '<a href="details.php?id=' . $row['user_id'] . '"><b class="button">Details<b></a>';
		echo "<br/>";

		}
		echo "<br/><br/>";
?>
</div>
</div>
</div>

<?php include("footer.php");?>
