<?php include("header.php"); ?>


<div class="container">
	<div class="row">
		<div class="col-sm-24 col-md-12">
<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['admin_name']))
{
 header("Location: admin_login.php");
}
$res=mysqli_query($link,"SELECT * FROM admin WHERE id=".$_SESSION['admin_name']);
$userRow=mysqli_fetch_array($res);
?>
<center>
		<h3 style="color:#04B4AE;"><i><b>Welcome to Apartment Rental System</b></i></h3>
         Logged in as -&nbsp;&nbsp;<?php echo "<b style='color:#FE2E64; font-size:18px;'>".$userRow['admin_name']."</b>"; ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin_logout.php?logout">Sign Out</a>
</center><br/>
</div>

<div class="col-sm-24 col-md-12" style="margin-top:0px;">

<?php
	include('dbconnect.php');
	echo "<b style='color:#B43104; font-size:17px;'>::::All Users::::</b>";
	$view_users_query="SELECT * FROM users";
	$run_query=mysqli_query($link,$view_users_query);
	
	echo "<table class='table table-hover table-striped' class='ergTable' id='mobileTable'>";
	echo "<div class='mobileErgDiv' ng-repeat='data in responseData | limitTo:limit'>";
	echo "<tr> <th><i><b>User ID</b></i></th> <th><i><b>User Name</b></i></th> <th><i><b>Email</b></i></th> <th><i><b>Password</b></i></th><th><i><b>Delete</b></i></th></tr>";
	while($row=mysqli_fetch_array($run_query)){
		
		echo "<tr>";
		echo '<td>'.$row['user_id'].'</td>';
		echo '<td>'.$row['username'].'</td>';
		echo '<td>'.$row['email'].'</td>';
		echo '<td>'.$row['password'].'</td>';
		echo "</tr>";
		
	}
	echo "</div>";
	echo "</table>";
		?>
</div></div>
<div class="row">
		<div class="col-md-6">
			<table class="table">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Product
						</th>
						<th>
							Payment Taken
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Default
						</td>
					</tr>
					<tr class="active">
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Approved
						</td>
					</tr>
					<tr class="success">
						<td>
							2
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							02/04/2012
						</td>
						<td>
							Declined
						</td>
					</tr>
					<tr class="warning">
						<td>
							3
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							03/04/2012
						</td>
						<td>
							Pending
						</td>
					</tr>
					<tr class="danger">
						<td>
							4
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							04/04/2012
						</td>
						<td>
							Call in to confirm
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<form role="form" action="news.php" method="post">
				<div class="form-group">
					 
					<label for="head_line">
						Head Line
					</label>
					<input class="form-control" type="text" name="head_line" />
				</div>
				<div class="form-group">
					 
					<label for="update_date">
						Update Date
					</label>
					<input class="form-control" type="date" name="update_date" />
				</div>
				<div class="form-group">
					 
					<label for="newses">
						News
					</label>
					<textarea class="form-control" col="100" rows="10" wrap="virtual" name="newses" placeholder="Write latest news here...." style="width:400px;"></textarea>
				</div> 
				<button type="submit" class="btn btn-default" name="btn_news">
					Submit
				</button>
			</form>
		</div>
	</div></div>
</div><br/>

<?php include("footer.php"); ?>