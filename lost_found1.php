<!DOCTYPE html>
<html>
<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="shortcut icon" href="img/fav.png">
		
		<meta name="author" content="codepixer">
		
		<meta name="description" content="">
		
		<meta name="keywords" content="">
		
		<meta charset="UTF-8">
		
		<title>Lost And Found</title>

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
<body>
	<header id="header" id="home">
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><h3 class="title_nav">Dog Adoption</h3></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
				          <li><a href="about.html">About Us</a></li>
				          <li><a href="dogs.html">Dogs</a></li>
				          <li><a href="adoption.php">Adoption & Lost/Found</a></li>
				          <li><a href="membership.php">Membership</a></li>
				          <li><a href="contact.html">Contact</a></li>
				          			              
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
								Lost and Found			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="./lost_found1.php"> Lost and Found </a></p>
						</div>	
					</div>
				</div>
			</section>
			<br>
<div class="container">
					<h2>Lost And Found:</h2><br>
					<div class="row">
						<div class="col-lg-12">
							<form class="form-area" id="contactForm" action="lost_found.php" method="post" class="contact-form text-right" enctype="multipart/form-data">
								<div class="row">
										<div class="col-lg-6 form-group">
											<input name="name" placeholder="Enter Animal Type" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Animal Type'" class="common-input mb-20 form-control" required="" type="text">
											<input name="owner_name" placeholder="Enter Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Name'" class="common-input mb-20 form-control" required="" type="text">

											<input name="contact" placeholder="Enter contact number" pattern="^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter contact number'" class="common-input mb-20 form-control" required="" type="contact">
											Photo:&nbsp<input type="file" name="lost_photo" required="">
										</div>

										<div class="col-lg-6 form-group">
											<textarea class="common-textarea form-control" name="animal_details" placeholder="Details Of animal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Details Of animal'" required=""></textarea><br>	

											<textarea class="common-textarea form-control" name="address" placeholder="Enter address of animal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter address of animal'" required=""></textarea>					
										</div>

										
										<div class="col-lg-12 d-flex justify-content-between">
											<div class="alert-msg" style="text-align: left;"></div>
											<button class="genric-btn primary circle" style="float: right;">Upload Data</button>		
										</div>
								</div>
							</form>
						</div>	
					</div>
						
					
				</div>
				<div class="container">
				<h2>Lost & found:</h2><br>
					<div class="row">
						<?php  
						require("./connection.php");
						$sql = "select * from lost_found where status=0;";
						$res = mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC);
						foreach($res as $r)
						{ ?>
						<div class="col-lg-3 col-md-6 pet_click" onclick="pet_adopt(<?php echo $r['sr']; ?>)" style="cursor: pointer;">
							<div class="single-cat-list">
							  <img src="<?php echo "adminp".$r['photo_location']; ?>" alt="" style="height: 250px; width: 350px;"  class="img-fluid">
							  <div class="overlay" >
							    <div class="text top-right" style="padding: 15px;">
							    	<?php echo "Animal: ".$r['animal']; ?><br>
							    	<?php echo "Detail".$r['animal_details']; ?>
							    </div>
							  </div>
							</div>
						</div>
						<?php }
						?>
					</div>
				</div>	
			</section>
			<!-- End cat-list Area -->
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