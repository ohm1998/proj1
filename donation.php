	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="shortcut icon" href="img/fav.png">
		
		<meta name="author" content="codepixer">
		
		<meta name="description" content="">
		
		<meta name="keywords" content="">
		
		<meta charset="UTF-8">
		
		<title>Donation</title>

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
				        <a href="index.html"><h3 class="title_nav">NGO</h3></a>
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
								Donation			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="./adoption.php"> Donation </a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start cat-list Area -->
			<section class="cat-list-area section-gap" >
				<div class="container">
				<h2>Donation:</h2><br>
					<div class="row">
						<?php  
						require("./connection.php");

						$sql = "select sum(rescue_case_followup.cost_incurred) as cost,rescue_case_followup.case_id as case_id,photo_location from rescue join rescue_case_followup on rescue.case_id=rescue_case_followup.case_id group by rescue_case_followup.case_id;";
						$res = mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC);
						foreach($res as $key=>$r)
						{ ?>
							<?php 
									$q = "select sum(amount) as amount from donation where case_id=".$r['case_id']." and payment=1";
									$a = mysqli_fetch_all(mysqli_query($con,$q),MYSQLI_ASSOC);
									$tot_donation = $a[0]['amount'];
									echo $tot_donation."<br>";
									echo $r['cost'];
									if($tot_donation=="")
									{
										$perc=0;
									}
									else
									{
										$perc = ($tot_donation/$r['cost'])*100;
									}
									$perc = intval($perc);
									if($tot_donation>=$r['cost'])
									{
										continue;
									}
								?>
						<div class="col-lg-3 col-md-6 pet_click"  style="cursor:pointer;">
							<div class="single-cat-list">
							  <img src="<?php echo $r['photo_location']; ?>" alt="" style="height: 250px; width: 350px;"  class="img-fluid">
							  <div class="overlay" >
							    <div class="text top-right" >
							    	<?php echo "Cost: ".strtoupper($r['cost']); ?><br>
							    </div>
							  </div>
							</div>
							<center>
								<b>Donation Status</b>
								
							</center>
							<div class="progress">
							  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: <?php echo $perc+1; ?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"><?php echo $perc; ?>% Collected</div>
							</div>
							<br>
							<center>
								<button class="genric-btn primary circle" data-toggle="modal" data-target="#ModalCenter" onclick="fillInput(this)" name="<?php echo $r['case_id']?>">Donate</button><br><br>
							</center>
						</div>
						<?php }
						?>
					</div>
				</div>
				
					
			</section>	
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
											<h4>support@sleeksites.in</h4>
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
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://sleeksites.in" target="_blank">Sleeksites</a>
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


			<!-- Modal -->
			<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content" id="modalContent">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalCenterTitle">Please fill the form</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body" id="modalBody">
			        <form class="form-area" id="contactForm" class="contact-form text-right">
			        	<div class="col-lg-12 form-group">
							<input name="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" class="common-input mb-20 form-control" required="" type="text">
						
							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input name="contact" placeholder="Enter contact number" pattern="^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter contact number'" class="common-input mb-20 form-control" required="" type="contact">

							<input name="amount" placeholder="Enter Donation Amount" type="number" step="0.1" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter contact number'" class="common-input mb-20 form-control" required="">

							<input type="hidden" name="anim_sr" id="anim_sr" value="">
						</div>
			        
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button class="genric-btn primary circle" style="float: right;">Submit</button>			 
			      </div>
			      </form>
			      <center><b id="result"></b><br></center>
			    </div>
			  </div>
			</div>

			<div id="ajaxLoadingIcon"><img src="img/loading-icon.gif"></div>

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
				function fillInput(id){
					document.getElementById("anim_sr").value=id.name;
					document.getElementById("result").innerHTML= "";
				}

			    $(document).ajaxStart(function () {
			        $('#ajaxLoadingIcon').show();
			    });

				$("#contactForm").submit(function(e) {
				    var form = $(this);
				    var url = 'donater_details.php';

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: form.serialize(), // serializes the form's elements.
				           success: function(data)
				           {    
				                
				                $(document).ajaxStop(function () {
				                	 $('#ajaxLoadingIcon').hide();
				                    $("#result").html(data);
				                });
				           }
				         });

				    e.preventDefault(); // avoid to execute the actual submit of the form.
				});
			</script>
		</body>
	</html>