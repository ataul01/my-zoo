<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Zoo website- contact us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://webthemez.com" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
</head>
<body>
	<div id="wrapper">

		<!-- start header -->
		<?php include('includes/header.php');?>
		<!-- end header -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="pageTitle"><span style="color: #fde7cb; font-size: 30px;">Contact Us</span></h2>
					</div>
				</div>
			</div>
		</section>
		<section id="content">

			<div class="container">
				<div class="row"> 
					<div class="col-md-12">
						<div class="about-logo">
							<h3>About Zoo</h3>
							<p>Modern zoos try not only to be for people's entertainment, but for education, research, and the conservation and protection of animals. Many zoos are centers where rare animals are preserved when they are in danger of dying out. These modern zoos also want to give the animals a natural life, so that they are healthy and behave normal. This is done for the animals, but also that people can see the animals as if they were in nature, and not in a zoo</p>
							
						</div>  
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor.</p>

						<!-- Form itself -->
						<form  method="post" >
							<h3>Let us know</h3>
							<div class="control-group" style="margin-top: 15px;">
								<div class="controls">
									<input type="text" class="form-control" 
									placeholder="Full Name" id="name" required
									/>
									<p class="help-block"></p>
								</div>
							</div> 	
							<div class="control-group" style="margin-top: 15px;">
								<div class="controls">
									<input type="email" class="form-control" placeholder="Email" 
									id="email" required
									 />
								</div>
							</div> 	

							<div class="control-group" style="margin-top: 15px;">
								<div class="controls">
									<textarea rows="10" cols="100" class="form-control" 
									placeholder="Message" id="message" required
									 style="resize:none"></textarea>
								</div>
							</div> 		 
							<div id="success"> </div> <!-- For success/fail messages -->
							<button type="submit" class="btn btn-primary pull-right " style="margin-top: 15px;">Send</button><br />
						</form>
					</div>
				</div>
			</div>

		</section>
		<?php include('includes/footer.php');?>
	</div>
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>  
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script> 
	<!-- Vendor Scripts -->
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>