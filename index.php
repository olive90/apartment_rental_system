<?php
	include("header.php");
	//include("comment.php");
?>


<div class="container" >
	<div class="row">
		<div class="col-md-6">
			<div class="carousel slide" id="carousel-739204">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-739204">
					</li>
					<li data-slide-to="1" data-target="#carousel-739204">
					</li>
					<li data-slide-to="2" data-target="#carousel-739204">
					</li>
					<li data-slide-to="3" data-target="#carousel-739204">
					</li>
					<li data-slide-to="4" data-target="#carousel-739204">
					</li>
					<li data-slide-to="5" data-target="#carousel-739204">
					</li>
					<li data-slide-to="6" data-target="#carousel-739204">
					</li>
					<li data-slide-to="7" data-target="#carousel-739204">
					</li>
					<li data-slide-to="8" data-target="#carousel-739204">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="image-650/400" src="photos/Appartment.jpg">
						<div class="carousel-caption">
							<p>
								<b>Appartment</b>
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="image-650/400" src="photos/Apartment-With-Artistic-Flair.jpg">
						<div class="carousel-caption">
							<p>
								<b>Apartment-With-Artistic-Flair</b>
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="image-650/400" src="photos/Attached dining and living.jpg">
						<div class="carousel-caption">
							<p>
								<b>Attached dining and living</b>
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="image-650/400" src="photos/Bed Room.jpg">
						<div class="carousel-caption">
							<p>
								<b>Bed Room</b>
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="image-650/400" src="photos/Living Room.jpg">
						<div class="carousel-caption">
							<p>
								<b>Living Room</b>
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="image-650/400" src="photos/Living Room2.jpg">
						<div class="carousel-caption">
							<p>
								<b>Living Room2</b>
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="image-650/400" src="photos/Loft Apartment.jpg">
						<div class="carousel-caption">
							<p>
								<b>Loft Apartment</b>
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="image-650/400" src="photos/rose_apartment.jpg">
						<div class="carousel-caption">
							<p>
								<b>rose_apartment</b>
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="image-650/400" src="photos/three-bedroom-apartment.jpg">
						<div class="carousel-caption">
							<p>
								<b>three-bedroom-apartment</b>
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-739204" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-739204" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="jumbotron well">
				<h2 style="color:#8A2908;">
					Our Company
				</h2>
				<p style="color:#01A9DB;">
					Our company was founded on the premise that we would put quality, and customer satisfaction first, while still keeping a highly affordable product We are a father and son team who enjoying helping our customers beautify and improve their homes.
	
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="our_company.php">Learn more</a>
				</p>
			</div>
		</div>
	</div><br/>
	<div class="row">
		<div class="col-md-6">
			<h3>Leave your comment</h3>
			<form role="form" action="comment.php" method="post">
				<div class="form-group">
					<label for="name">
						Name
					</label>
					<input class="form-control" type="text" name="name" />
				</div>
				<div class="form-group">
					 
					<label for="email">
						Email address
					</label>
					<input class="form-control" type="email" name="email" />
				</div>
				<div class="form-group">
					 
					<label for="comment">
						Comment
					</label>
					<textarea class="form-control" id="comment" col="100" rows="10" wrap="virtual" name="comment" placeholder="Write your comment here...." style="width:400px;"></textarea>
				</div> 
				<button type="submit" class="btn btn-default" name="btn_comment">
					Submit
				</button>
			</form>
		</div>
		<div class="col-md-6">
			<blockquote>
				<p>
					Latest news
				</p>
				<?php
					include("dbconnect.php");
					error_reporting(E_ERROR||E_WARNING);
					$sql_news="SELECT * FROM news";
					$result_news=mysqli_query($link,$sql_news);
					while($r=mysqli_fetch_array($result_news)){
						echo $r['head_line']."<br/>";
						echo $r['update_date']."<br/>";
						echo $r['news']."<br/>";
					}
				?>
			</blockquote>
		</div>
	</div><br/>
	<div class="row">
		<div class="col-md-6">
					<h3>Visitors Comments</h3><br/>
					<?php
						include("dbconnect.php");
						$sql="SELECT * FROM comments";
						$result=mysqli_query($link,$sql);
						while($row=mysqli_fetch_array($result)){
							echo "<b>".$row['name']."</b><br/>";
							echo $row['email']."<br/>";
							echo "<i>".$row['comment']."</i><br/>";
							echo "<br/>";
						}
					?>
		</div>
		<div class="col-md-6">
			
					<h3>Follow Us On</h3>
				<div class="icons-container">
				<div class="col-sm-12 icons-text">
					<a href="#" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-email-1"><i class="fa fa-at"></i></a>
					<a href="http://www.facebook.com" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-instagram"><i class="fa fa-instagram"></i></a>
					<a href="#" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-flickr"><i class="fa fa-flickr"></i></a>
					<a href="#" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-google-plus"><i class="fa fa-google-plus"></i></a>
					<a href="#" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-linkedin"><i class="fa fa-linkedin"></i></a>
					<a href="http://www.linkedin.com" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-paypal"><i class="fa fa-paypal"></i></a>
					<a href="http://www.twitter.com" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-whatsapp"><i class="fa fa-whatsapp"></i></a>
					<a href="http://www.youtube.com" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-youtube"><i class="fa fa-youtube"></i></a>
				</div>
				</div>
				
		</div>
	</div>
</div>
<script language="javascript">
    $('.carousel').carousel({
        interval: 3000
    })
</script>


<?php
	include("footer.php");
?>