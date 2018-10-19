<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php include("include/title.php"); ?>
  <!--Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <!--Bootstrap-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <!--Font Awesome-->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!--Simple Line Icons-->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <!--Owl Carousel-->
  <link rel="stylesheet" href="vendors/owl.carousel/owl.carousel.css">
  <!--Select-->
  <link rel="stylesheet" href="vendors/bootstrap-select/css/bootstrap-select.css">   
  <!--Theme Styles-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/theme.css">
</head>
<body>   
  <!--Top Bar-->
  <?php include("include/top.php"); ?>
  <!--Info Bar-->
  <?php include("include/navigation.php"); ?>  
  <!--Navigation-->
	<?php include("include/header.php"); ?>
	<!--Page Cover-->
	<section class="row page-cover">
		<div class="container">
			<h2 class="h1 page-title">contact us</h2>
			<ol class="breadcrumb">
				<li><a href="index.php">home</a></li>
				<li class="active">contact</li>
			</ol>
		</div>
	</section>  	
	<section class="row wrapper-contact">
	
		<div class="container contact-map ipad-width" style="height: 525px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7221.821582461387!2d55.400168873487864!3d25.172489885630522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6134f2738a19%3A0xad44edc23264ed41!2sEngland+Cluster+-+Dubai!5e0!3m2!1sen!2sae!4v1533473874980" width="700" height="525" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="contact-form-area col-md-push-7 col-sm-push-6 col-md-5 col-sm-6">
				<div class="form-area row">
					<div class="this-inner row m0">
						<h3 class="this-title">Help us better!</h3>
 						<div class="row m0 contact-form-info">
 							<form action="#" class="contct-form contactForm row m0">
							<div class="input-group">
								<input type="text" name="name" id="name" class="form-control" placeholder="Your name">
								<span class="input-group-addon"><i class="ion-person"></i></span>
							</div>
							<div class="input-group">
								<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
								<span class="input-group-addon"><i class="ion-email-unread"></i></span>
							</div>
							<div class="input-group">
								<input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone">
								<span class="input-group-addon"><i class="ion-ios-telephone"></i></span>
							</div>
							<div class="row m0">
								<input type="checkbox" name="subscribe" id="subscribe2" class="sr-only contact-checkbox">
								<label for="subscribe2">Also subscribe to your e-mail *</label>
							</div>
							<h5 class="textarea-label">Your comment <i class="ion-chatbubble-working"></i></h5>
							<textarea name="message" id="message" class="form-control"></textarea>
							<input type="submit" value="SEND MESSENGE" class="btn btn-primary">
						</form>
							<div id="success"><span>Your message sent successfully.</span></div>
							<div id="error"><span>Something wrong here!.</span></div>
 						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="media contact-addresses ipad-width">
				<div class="media-left  media-middle">
					<div class="img-holder">
						<img src="images/address-media.png" alt="">
						<div class="hover-box">  							
						<ul class="nav nav-pills social-nav">
							<li><a href="#" class="ion-social-facebook" data-toggle="tooltip" data-placement="top" title="Facbook"></a></li>
							<li><a href="#" class="ion-social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"></a></li>
							<li><a href="#" class="ion-social-googleplus" data-toggle="tooltip" data-placement="top" title="Google Plus"></a></li>
						</ul>
						</div>
				</div>
				</div>
				<div class="media-body media-middle">
					<div class="col-md-6 address-portion">
						<h4 class="this-title">OFFICE ADDRESS</h4>
 						<ul class="nav foot-nav style3">
 							<li><i class="ion-location"></i>YNakheel-International City-Dubai<br>Office: IC1-ENG-Y13-S16<br class="visible-lg"></li>
 							<li><i class="ion-ios-telephone"></i>+971 50 998 8841<br> +971 50 990 5678</li>
 							<li><i class="ion-email-unread"></i><a href="#">info@hanenrentacar.com</a></li>
 						</ul>
					</div>
					<!--<div class="col-md-6 address-portion">
						<h4 class="this-title">OFFICE ADDRESS 2 Contact detail</h4>
 						<ul class="nav foot-nav style3">
 							<li><i class="ion-location"></i>Your Address <br class="visible-lg"></li>
 							<li><i class="ion-ios-telephone"></i>Your Phone Number</li>
 							<li><i class="ion-email-unread"></i><a href="#">Your Email id</a></li>
 						</ul>
					</div>-->
				</div>
			</div>
		</div>
	</section>   	
 		
 	 <?php include("include/footer.php"); ?>	
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!--Google Map-->
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="js/gmaps.min.js"></script>
  <!--Contact-->    
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/contact.js"></script>
  <!--Owl Carousel-->
  <script src="vendors/owl.carousel/owl.carousel.min.js"></script>
  <!--CounterUp-->
  <script src="vendors/couterup/jquery.counterup.min.js"></script>
  <!--WayPoints-->
  <script src="vendors/waypoint/waypoints.min.js"></script>
  <!--Select-->
  <script src="vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
  <!--Instafeed-->
  <script src="vendors/instafeed/instafeed.min.js"></script>
  <!-- Isotope -->
  <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope.min.js"></script>
  <!--Theme Script-->    
  <script src="js/theme.js"></script>
</body>


</html>