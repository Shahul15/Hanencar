<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <?php include("include/title.php");?>
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
	
	<!-- Timedroper -->
    <link rel="stylesheet" href="vendors/timedroper/timedropper.min.css">
    <!-- Datedroper -->
    <link rel="stylesheet" href="vendors/datedroper/datedropper.min.css">
</head>
<body>
  <!--Top Bar-->
  <?php include("include/top.php");?>
  <!--Info Bar-->
  <?php include("include/navigation.php");?>
  <!--Navigation-->
  <?php include("include/header.php");?>
	<!--Page Cover-->
	<section class="row page-cover">
		<div class="container">
			<h2 class="h1 page-title">Get A Quote</h2>
			<ol class="breadcrumb">
				<li><a href="index.php">home</a></li>
				<li class="active">Get A Quote</li>
			</ol>
		</div>
	</section>
	<section class="row wrapper-blog">
		<div class="container">
			<div class="row wr-blog-res">
				<div class="col-md-12 col-sm-12 blog-section">
					
			
					  <div class="col-md-4 col-sm-9">	</div>		 
					  <div class="col-md-8 col-sm-9">					
					<div class="row m0 comments-area from-area">
						<h2 class="this-area-title">Get A Quote</h2>
					
					</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
					<form action="#" method="post" class="comment-form row m0">
				
					<div class="col-md-6 col-sm-12 col-xs-12">
					<input type="text" class="datedroper form-control" name="pickupdate" id="pickupdate" placeholder="Pick Up Date">
					<input type="text" class="timedroper form-control" name="pickuptime" id="pickuptime" placeholder="pick up Time">
					<input type="text" class="datedroper form-control" name="dropdate" id="dropdate" placeholder="Drop Off Date">
					<input type="text" class="timedroper form-control" name="droptime" id="droptime" placeholder="Drop Off Time">
					<input type="text" class="form-control" name="address" id="address" placeholder="Address *" required>	
					
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
                    <input type="text" class="form-control" name="state" id="state" placeholder="State *" required>
						
						<select class="form-control" required name="car_type" id="car_type">
						 <option value="">SELECT CAR TYPE </option>
                         <option value="yarishatchback"> Toyota Yaris Hatchback</option>
                         <option value="yarissedan">Toyota Yaris Sedan </option>
                         <option value="corollasedan">Toyota Corolla Sedan</option>
                         <option value="camysedan"> Toyota Camry Sedan</option>
                         <option value="toyatasuvrush">Toyata SUV Rush</option>
						 <option value="elantrasedan">Hyundai Elantra Sedan</option>
						 <option value="accentsedan">Hyundai Accent Sedan</option>
						 <option value="sonatasedan">Hyundai Sonata Sedan</option>
						 <!--<option value="saab">KIA</option>-->
						</select>
						
						<input type="text" class="form-control" name="name" id="name" placeholder="Name *" required>
						<input type="text" class="form-control" name="email" id="email" placeholder="Email Address *" required>
						<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number *" required>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-5 col-sm-5 col-xs-12"></div>
					<div class="col-md-7 col-sm-7 col-xs-12">
					<input type="submit" value="submit now" class="btn btn-outline">
					</div>
					</div>
					</form>
					</div>
				</div>
				<!--Sidebar-->
				
			</div>
		</div>
	</section>
 	<!--Footer-->

 	<?php include("include/footer.php");?>
	
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
		  <!-- Timedroper -->
  <script src="vendors/timedroper/timedropper.min.js"></script>
  <!-- Datedroper -->
  <script src="vendors/datedroper/datedropper.min.js"></script>
		<!--Theme Script-->    
		<script src="js/theme.js"></script>
  		
</body>

</html>