<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="shortcut icon" href="img/fav.png">
	
	<meta name="author" content="codepixer">
	
	<meta name="description" content="">
	
	<meta name="keywords" content="">
	
	<meta charset="UTF-8">
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
				.cat-list-area .text {
					top:50%;
					left:50%;
				}
			</style>
		</head>
	<title>Rescue Page</title>
</head>
<body>
<header id="header" id="home">
	<div class="container main-menu">
		<div class="row align-items-center justify-content-between d-flex">
		<div id="logo">
		<!-- <a href="index.html"><img src="img/logo.png" alt="" title="" /></a> -->
		<h3 class="title_nav">Dog Adoption</h3>
	</div>
	<nav id="nav-menu-container">
	    <ul class="nav-menu">
		    <li class="menu-active"><a href="index.html">Home</a></li>
		    <li><a href="about.html">About Us</a></li>
		    <li><a href="dogs.html">Dogs</a></li>
		    <li><a href="adoption.php">Adoption</a></li>
		    <li><a href="lost_found1.php">Lost and Found</a></li>
		    <li><a href="membership.php">Membership</a></li>
		    <li><a href="contact.html">Contact</a></li>
		    <li><a href="rescue.php">Rescue</a></li>
		</ul>
	</nav><!-- #nav-menu-container -->		    		
	</div>
	</div>
	</header><!-- #header -->
	<!-- start banner Area -->
	<section class="banner-area relative" id="home">
		<div class="container">
			<div class="overlay overlay-bg"></div>
				<div class="row fullscreen d-flex align-items-center justify-content-start">
					<div class="banner-content col-lg-8 col-md-12">
						<h1 class="text-uppercase">
							We need your help.		
						</h1>
						<p class="text-white sub-head">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp
							or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
						</p>
					</div>											
				</div>
			</div>
		</div>
	</section>
	<!--Form Sarts-->
	<div class="container">
					<h2>Rescue:</h2><br>
					<div class="row">
						<div class="col-lg-12">
							<form class="form-area" id="contactForm" action="rescue_req.php" method="post" class="contact-form text-right" enctype="multipart/form-data">
								<div class="row">
								<div class="col-lg-6 form-group">
											<input name="case_title" placeholder="Enter case title" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Case Title'" class="common-input mb-20 form-control" required="" type="text">
											<input name="contact_name" placeholder="Enter Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Name'" class="common-input mb-20 form-control" required="" type="text">
											<input name="contact" placeholder="Enter contact number" pattern="^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter contact number'" class="common-input mb-20 form-control" required="" type="contact">
										</div>
										<div class="col-lg-6 form-group">
											<textarea class="common-textarea form-control" name="animal_address" placeholder="Address of the animal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address of the animal'" required></textarea><br>				
											<textarea class="common-textarea form-control" name="animal_problem" placeholder="Problem of the animal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Problem of the animal'" required></textarea>	
										</div>
										<div class="col-lg-12 d-flex justify-content-between">
											<div class="alert-msg" style="text-align: left;"></div>
											<button class="genric-btn primary circle" style="float: right;">Add Rescue Data</button>		
										</div>
								</div>
							</form>
						</div>	
					</div>
				</div>
	<br>
	<br>
<!-- Form Ends -->
</body>
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
<script type="text/javascript">
function pet_adopt(sr)
{
	window.location.href = "./adoption_form.php?sr="+sr;
}
</script>
</html>