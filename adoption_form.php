<?php  
require("./connection.php");

$sql = "select * from adoption where adopt_status=0 and sr=".$_GET['sr'];
$res = mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="shortcut icon" href="img/fav.png">
	
	<meta name="author" content="codepixer">
	
	<meta name="description" content="">
	
	<meta name="keywords" content="">
	
	<meta charset="UTF-8">
	
	<title>Adoption</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">							
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">
		<style type="text/css">
			.title_nav
			{
				color:white;
			}
		</style>
	</head>
	<body>
		  <header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <!-- <a href="index.html"><img src="img/logo.png" alt="" title="" /></a> -->
				        <h3 class="title_nav">NGO</h3>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
				          <li><a href="lost_found1.php">Lost and Found</a></li>
				          <li><a href="adoption.php">Adoption</a></li>
				          <li><a href="foster.php">Foster</a></li>
				          <li><a href="membership.php">Volunteer</a></li>
				          <li><a href="rescue.php">Rescue</a></li>
				          <li><a href="donation.php">Sponsor</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

		<!-- start banner Area -->
		<section class="banner-area relative" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Adoption Form				
						</h1>	
						<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="dogs.html"> Adoption Form</a></p>
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->	
			
		<!-- Start cat-list Area -->
		<section class="cat-list-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Details:</h2><br>
						<img src="<?php echo "adminp/".$res[0]['photo_location']; ?>" alt="" height=250 width=300> <br>
						<?php
							unset($res[0]['adopt_status']);
							foreach ($res[0] as $key => $value)
							{
								if($key=="photo_location" || $key=="sr")
								{
									continue;
								}
								echo "<h3 style='color:#fab700; float:left; padding: 5px; margin: 15px;'>".ucfirst($key).": ".ucfirst($value)."</h3>";
							} 
						?>
						<br>
					</div>
				</div>
				<div class="row">
						<div class="col-lg-12">
							<form class="form-area" id="contactForm" class="contact-form text-right" action="./adopter_details.php" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="contact" placeholder="Enter contact number" pattern="^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter contact number'" class="common-input mb-20 form-control" required="" type="contact">

										<input type="hidden" name="anim_sr" value="<?php echo $_GET['sr']; ?>">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="address" placeholder="Enter address of animal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Address'" required=""></textarea>						
									</div>
									<div class="col-lg-12 d-flex justify-content-between">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary circle" style="float: right;">Submit</button>		
									</div>
								</div>
							</form>	
						</div>
				</div>
			</div>	
		</section>
		<!-- End cat-list Area -->
				

		<!-- Start calltoaction Area -->
		<section class="calltoaction-area section-gap relative">
			<div class="container">
				<div class="overlay overlay-bg"></div>						
				<div class="row align-items-center justify-content-center">
					<h1 class="text-white">Want to help? Become a Volunteer</h1>
					<p class="text-white">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
					</p>
					<div class="buttons d-flex flex-row">
						<a href="#" class="primary-btn text-uppercase">View pdf details</a>
						<a href="#" class="primary-btn text-uppercase">Register now</a>
					</div>
				</div>
			</div>	
		</section>
		<!-- End calltoaction Area -->													
			
		<!-- start footer Area -->		
		<footer class="footer-area">
			<div class="container">
				<div class="row pt-120 pb-80">
					<div class="col-lg-4 col-md-6">
						<div class="single-footer-widget">
							<h6>About Us</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp
							or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-footer-widget">
							<h6>Useful Links</h6>
							<div class="row">
								<ul class="col footer-nav">
									<li><a href="#">Home</a></li>
									<li><a href="#">Service</a></li>
									<li><a href="#">About</a></li>
									<li><a href="#">Case Study</a></li>
								</ul>
								<ul class="col footer-nav">
									<li><a href="#">Pricing</a></li>
									<li><a href="#">Team</a></li>
									<li><a href="#">Blog</a></li>
								</ul>									
							</div>
						</div>
					</div>						
					<div class="col-lg-4  col-md-6">
						<div class="single-footer-widget mail-chimp">
							<h6 class="mb-20">Contact Us</h6>
							<ul class="list-contact">
								<li class="flex-row d-flex">
									<div class="icon">
										<span class="lnr lnr-home"></span>
									</div>
									<div class="detail">
										<h4>NIT Puducherry, Karaikal</h4>
										<p>
											T-07, Boys Hostel
										</p>
									</div>	
								</li>
								<li class="flex-row d-flex">
									<div class="icon">
										<span class="lnr lnr-phone-handset"></span>
									</div>
									<div class="detail">
										<h4>(+91) 9512885899</h4>
										<p>
											Mon to Fri 9am to 6 pm
										</p>
									</div>	
								</li>
								<li class="flex-row d-flex">
									<div class="icon">
										<span class="lnr lnr-envelope"></span>
									</div>
									<div class="detail">
										<h4>support@sleeksites.com</h4>
										<p>
											Send us your query anytime!
										</p>
									</div>	
								</li>																		
							</ul>
						</div>
					</div>						
				</div>
			</div>
			<div class="copyright-text">
				<div class="container">
					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-6 footer-text m-0 text-white">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://sleeksites.com" target="_blank">sleeksites</a>
</p>
						<div class="col-lg-4 col-sm-6 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>						
				</div>
			</div>
		</footer>
		<!-- End footer Area -->	


		


		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>			
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>
			<script src="js/easing.min.js"></script>			
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>	
		<script src="js/owl.carousel.min.js"></script>						
		<script src="js/jquery.nice-select.min.js"></script>							
		<script src="js/mail-script.js"></script>	
		<script src="js/main.js"></script>	
	</body>
</html>