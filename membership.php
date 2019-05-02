	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="shortcut icon" href="img/fav.png">
		
		<meta name="author" content="codepixer">
		
		<meta name="description" content="">
		
		<meta name="keywords" content="">
		
		<meta charset="UTF-8">
		
		<title>Adoption / Lost And Found</title>

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
								Apply for membership				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="./adoption.php"> Membership</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			<!-- Start cat-list Area -->
			<section class="cat-list-area section-gap" >

				<div class="container">
					<h2>Apply for membership</h2><br>
					<div class="row">
						<div class="col-lg-12">
							<form action="./add_member.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">

								<div class="form-group">
							  		<label for="name">Name:</label>
								  	<input type="text" class="form-control" name="name">
								</div>
								<div class="custom-file">
								    <input type="file" class="custom-file-input" name="photo" aria-describedby="inputGroupFileAddon01">
								    <label class="custom-file-label" for="inputGroupFile01">Upload Photo</label>
							    </div>
								<div class="form-group">
							  		<label for="dob"><br>Date Of Birth:</label>
								  	<input type="date" class="form-control" name="dob">
								</div>
								<div class="form-group">
							  		<label for="age">Age</label>
								  	<input type="number" class="form-control" name="age">
								</div>
								<div class="form-group">
							  		<label for="address">Address:</label>
								  	<textarea class="form-control" name="address"></textarea>
								</div>
								<div class="form-group">
							  		<label for="contact">Contact:</label>
								  	<input type="text" class="form-control" name="contact">
								</div>
								<div class="form-group">
							  		<label for="panid">Pan Id No:</label>
								  	<input type="text" class="form-control" name="panid">
								</div>
								<div class="form-group">
							  		<label for="email">Email:</label>
								  	<input  type="email" name="email" class="form-control" >
								</div>
								<div class="form-group">
							  		<label for="occ">Occupation/Qualification(Mention Stream & Semester):</label>
								  	<textarea class="form-control" name="occ"></textarea>
								</div>
								<div class="form-group">
							  		<label for="school">If currently in school, include name of school, grade and course of study:</label>
								  	<textarea class="form-control" name="school"></textarea>
								</div>
								<div class="form-group">
							  		<label for="currclub">Are you a current member of any other Animal Welfare Society/Club in India or Abroad? If so please mention the club and status:</label>
								  	<input type="text" class="form-control" name="currclub">
								</div>
								<div class="form-group">
							  		<label for="society">SOCIETY:</label>
								  	<input type="text" class="form-control" name="society">
								</div>
								<div class="form-group">
							  		<label for="status">Status:</label>
								  	<input type="text" class="form-control" name="status">
								</div>
								<div class="form-group">
							  		<label for="memnum">Are you existing member of PFA Durg-Bhilai Unit II: (YES/NO) If Yes, then share your Membership Number::</label>
								  	<input type="text" class="form-control" name="memnum">
								</div>

								<div class="form-group">
									<label for="mem_type">Choose Memebership Type:</label>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Select</th>
												<th>Membership Type</th>
												<th>Membership Fee</th>
												<th>Benefits</th>
												<th>Duration</th>
											</tr>
										</thead>
										<tbody>
											<tr onclick="document.getElementById('member1').checked = true;">
												<td><input type="radio" id="member1" name="mem_type" value="6m"></td>
												<td>Half Yearly</td>
												<td>600</td>
												<td>ID Cards for 6 months</td>
												<td>6M</td>					
											</tr>
											<tr onclick="document.getElementById('member2').checked = true;">
												<td><input type="radio" id="member2" name="mem_type" value="12m"></td>
												<td>Yearly</td>
												<td>1200</td>
												<td>ID Cards for 1 Year</td>
												<td>12M</td>					
											</tr>
										</tbody>
									</table>
								</div>

								<br>

								<div class="form-group">
							  		<label for="aoi">Choose area Of Interest:</label>
								  	<label class="checkbox-inline"><input type="checkbox" value="Field" name="aoi[]">&nbspField</label>
									<label class="checkbox-inline"><input type="checkbox" value="EVent Participation"  name="aoi[]">&nbspEvent Participation</label>
									<label class="checkbox-inline"><input type="checkbox" value="HR" name="aoi[]">&nbspHR</label> 
									<label class="checkbox-inline"><input type="checkbox" value="Donation" name="aoi[]">&nbspDonation</label> 
								</div>


							  <ol class="list-group">
							  	<li class="list-group-item list-group-item-info">Rules</li>
							    <li class="list-group-item">Field- Must attend (come for help) at least 2 cases in a month or help in Foster home management/cleaning at least twice a month.<br>
							   	<b>Note:</b> This does not require any trained first aid specialiation. Any 3-4 people can come together and take the animal to our recommended vet. Expenses will be paid by PFA.</li>
							    <li class="list-group-item">Event – Must conduct or attend at least 1 event in a month. E.g. Awareness campaign, Adoption camp, sterilization drive, Plantation drives etc.</li>
							    <li class="list-group-item">HR- Attend calls, Attend Public meetings, Follow up on adopters, Sponsors, Donors, Members etc, Public speaking and giving presentations etc.</li>
							    <li class="list-group-item">Donation- If not able to contribute any of the above activities, please donate any small amount every month apart from membership fees.</li>
							  </ol>

							<br><br>
								<div class="tandc">
								  <ul class="list-group">
								  	<li class="list-group-item list-group-item-success">I understand that People for Animals Durg-Bhilai unit-II reserves the right to terminate my membership status as a result of any of the following:</li>
								    <li class="list-group-item">Any abuse or mistreatment of any animal</li>
								    <li class="list-group-item">Failure to comply with organization policies, rules and other regulations</li>
								    <li class="list-group-item">Unsatisfactory attitude, work or appearance</li>
								    <li class="list-group-item">Any other circumstances which, in judgement of President/ Secretary would make my continued service as a member</li>
								    <li class="list-group-item">Hold absolutely confidential information that I may obtain concerning clients animals and staff. I understand that an intentional or unintentional violation of confidentiality may result in disciplinary action, including termination by PFA Durg-Bhilai unit-II and/or legal action by other</li>
								  </ul>	
								</div>
								<br>
								<div class="form-group">
								  	<label class="checkbox-inline"><input type="checkbox" value="1" name="agree" onchange="activateButton(this)">&nbspI have read and understood each of above conditions. My signature below indicates that I agree to comply with them.</label>
								</div>


								<div class="form-group">
									<input type="submit" class="btn btn-success" value="Submit" id="submitForm" required>
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
				$( document ).ready(function() {
				    document.getElementById("submitForm").disabled = true;
				});
				function activateButton(element) {

			      if(element.checked) {
			        document.getElementById("submitForm").disabled = false;
			       }
			       else  {
			        document.getElementById("submitForm").disabled = true;
			      }

			  }
			</script>
		</body>
	</html>