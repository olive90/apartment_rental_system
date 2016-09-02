<?php
	include('dbconnect.php');
	if(isset($_POST['btn_submit'])){
		$user_id=$_POST['user'];
		$fname=$_POST['first_name'];
		$lname=$_POST['last_name'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$phn_number=$_POST['phn_number'];
		
		$sql="INSERT INTO owner(user_id,first_name,last_name,email,address,city,phone) VALUES('$user_id','$fname','$lname','$email','$address','$city','$phn_number')";
		$result=mysqli_query($link,$sql);
		if($result){
			echo "<script>alert('successfully submited');</script>";
			header("Location:property.php");
		}else{
			echo "<script>alert('error while submitting!');</script>";
			//header("Location:owner.php");
		}
	}
?>

	<p align="center" style="color:#088A08; font-size:20px;"><b>Fill Up Your Details</b></p>
		<div id="owner">
		<form method="post">
					<label>User Name:<input type="text" name="user" placeholder="Your Login User ID" required="" autofocus="" /></label><br/>
					<label>First Name:<input type="text" name="first_name" placeholder="First Name" required="" /></label><br/>
					<label>Last Name:<input type="text" name="last_name" placeholder="Last Name" required="" /></label><br/>
					<label>Email Id:<input type="email" name="email" Placeholder="Your Email" required="" /></label><br/>
					<label>Address:<input type="text" name="address" placeholder="Your Address" required="" /></label><br/>
					<label>City:<input type="text" name="city" placeholder="Your City" required="" /></label><br/>
					<label>Phone Number:<input type="text" name="phn_number" placeholder="Your Phone Number" required="" /></label><br/>

					<center><button type="submit" name="btn_submit" class="bttn"><b>SUBMIT</b></button></center>
		</form>
		</div>
		<br/><br/>
		<form style="float:right;">
		<button type="submit" name="submit_next" formaction="property.php" class="btn-nxt"><b>NEXT</b></button>
		</form>
