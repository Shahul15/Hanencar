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
	
	<!-- Timedroper -->
    <link rel="stylesheet" href="vendors/timedroper/timedropper.min.css">
    <!-- Datedroper -->
    <link rel="stylesheet" href="vendors/datedroper/datedropper.min.css">
</head>
<style>
ul{
    list-style-type: none;
}
.glyphicon{
    background-color: red;;
    color: #fff;
    border-radius: 15px ; 
    font-size: 20px;
	
}
</style>

<body>
	<!--Top Bar-->
	<?php include("include/top.php"); ?>
	
	<!--Info Bar-->
		<?php include("include/navigation.php"); ?>
	<!--Navigation-->
	<?php include("include/header.php"); ?>
	<!--Home 1 Slide Banner-->
	<section class="slide-banner row" >
		<img src="images/banner15.jpg" alt="" class="this-bg hidden-xs">

		<div class="this-texts text-left">
			
			<h2 class="this-h1" style="color: #1a1a1a;">BEST <span style="color:#f77d0a;">DETAILS!</span></h2>
			<h4 style="color: #1a1a1a;">Book Now For The Best Experience</h4>
			<h3 style="color:#f77d0a;">ONE STOP FOR ALL YOUR </h3><h3 style="color:#f77d0a;margin-left: 189px;">RENTAL CAR NEEDS..</h3>
		</div>
		
	</section>
	<!--3 Fold-->
	<section class="row" style="margin: -108px -20px 0px -15px;">
		<div class="col-sm-12 col-md-12 col-xs-12">
			<form action="our_cars.php" method="post" class="row m0 find-quick-form text-center">
				<h2 class="this-title">FIND a Car <u>quickly</u>!</h2>
				<p class="this-p">You just do one step behind, we will delivery car to your door!</p>
				
				<!--<ul class="nav nav-pills cartypes">
					<li><input type="checkbox" name="cartype" id="cartype01"><label for="cartype01">Luxury car</label></li>
					<li><input type="checkbox" name="cartype" id="cartype02"><label for="cartype02">Vans/Minivans</label></li>
					<li><input type="checkbox" name="cartype" id="cartype03"><label for="cartype03">Sport car</label></li>
					<li><input type="checkbox" name="cartype" id="cartype04"><label for="cartype04">SUV</label></li>
					<li><input type="checkbox" name="cartype" id="cartype05"><label for="cartype05">Sedan</label></li>
				</ul>-->
				
				<div class="row m0 fr-it">
					<div class="location-group">
					<div class="input-group">
						<input type="text" class="form-control" name="location" id="location" placeholder="Enter airport, city or postcode...">
						<span class="input-group-addon"><i class="ion-android-locate"></i></span>
					</div>
					<!--<input type="checkbox" name="dlocation" id="dlocation" class="sr-only">
					<label for="dlocation">Different return location?</label>
					<div class="dlocate">
						<div class="input-group">
							<input type="text" class="form-control" name="location1" id="location1" placeholder="Enter airport, city or postcode...">
							<span class="input-group-addon"><i class="ion-android-locate"></i></span>
						</div>
					</div>-->
				</div>  				
				<div class="input-group date-group">
					<input type="text" class="datedroper form-control" name="pickupdate" id="pickupdate" placeholder="Pick up date">
					<span class="input-group-addon"><i class="ion-calendar"></i></span>
				</div>
				<div class="input-group time-group">
					<input type="text" class="timedroper form-control" name="pickuptime" id="pickuptime" placeholder="08:00 am">
					<span class="input-group-addon"><i class="ion-ios-alarm-outline"></i></span>
				</div>
				<div class="input-group date-group">
					<input type="text" class="datedroper form-control" name="dropdate" id="dropdate" placeholder="Drop off date">
					<span class="input-group-addon"><i class="ion-calendar"></i></span>
				</div>
				<div class="input-group time-group">
					<input type="text" class="timedroper form-control" name="droptime" id="droptime" placeholder="08:00 am">
					<span class="input-group-addon"><i class="ion-ios-alarm-outline"></i></span>
				</div><br>
				
				
				</div>
				
				<div class="row m0 fr-it" style="margin-top: 19px;">
				<div class="input-group date-group">
					<input type="text" class="form-control" name="name" id="name" placeholder="Name">
					<span class="input-group-addon"><i class="ion-ios-contact"></i></span>
				</div>
				
				<div class="input-group date-group" style="margin-left: 13px;">
					<input type="email" class="form-control" name="email" id="email" placeholder="Email Id">
					<span class="input-group-addon"><i class="ion-email-unread"></i></span>
				</div>
				<div class="input-group date-group" style="margin-left: 13px;">
					<input type="text" class="form-control" name="phoneno" id="phoneno" placeholder="Phone No">
					<span class="input-group-addon"><i class="ion-ios-telephone"></i></span>
				</div>
				<div class="input-group date-group" style="margin-left: 13px;">
					<input type="text" class="form-control" name="location" id="location" placeholder="Location">
					<span class="input-group-addon"><i class="ion-ios-location"></i></span>
				</div>
				</div><br>
				
		
					<button  class="btn btn-primary" name="reserve_car" id="reserve_car">Reserve a Car</button>
			
				
			</form>
			
				
		</div>
	</section>

	<!--Features-->
	<section class="row features">
		
			<div class="col-md-12">
			<div class="col-md-6">
			<img src="images/about/about1.jpg" alt="">
			</div>
			
			<div class="col-md-6 ">
			  <h4>KNOW MORE ABOUT US </h4>

			  <h2>Who <span  style="color: #f77d0a;">Hannen Rental Car</span> Are.</h2><br>
				<div class="redline"></div><br>
				<div class="section-title ">
				
				<p>Hanen rentals is based in Dubai and provides car rental and hire services throughout the UAE. Hanen Rentals have a steady growth and is one of the better known Rent-A-Car companies in Dubai. This is mainly due to the quality of service before and after booking. We provide excellent car hire rates, special discounted rates and top quality rental cars in Dubai. You can make your Dubai car rental reservations online. Feel free to contact us for any further information required</p>
				<br>
				<ul class="nav car-detail-list1">
				<li> We give best travel experience</li>
				<li> All brand & type cars in our garage</li>
				<li> We ensure safety and trust</li>
				</ul>
				<a href="about.php" class="btn btn-primary">Know More...</a>
			</div>
			</div>
			
			
			
		</div>
	</section>
	<!--Fleet-->
	<section class="row fleets2">
		<div class="container">
		
			<div class="col-md-12">
			<div class="col-md-8">
				<h6 class="book">SPECIAL OFFERS</h6>
				<h2 class="reserve">Reserved Now & Get offer for<br>Toyota & Hyundai Only.</h2>
				<div class="whiteline"></div>
			</div>
			<div class="col-md-4">
			<button name="book" id="book" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Book Now</button>
			
			</div>
			</div>
			
			<div class="row">
			<div class="col-md-12">	
				
				<div class="col-md-4 feature">
				<div class="media">
				
					<div class="media-left"><span><img src="images/car/special.jpg" alt=""></span></div>
					
					<div class="media-right">
					<span class="stars">
					   <i class="fa fa-star checked"></i>
				  	  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
				       </span> 
						<h4>Toyato Yaris Hatchback 2018</h4>
						<p><strike>80.00 AED</strike> <b>70.00 AED</b> per day</p>
					<!--	<h6 class="post-meta">
						<a href="#" class=""><i class="fa fa-gears"></i>MANUAL</a>
						<a href="#" class="likes"><i class="fa fa-fax"></i>PETROL</a>
						<a href="#" class="comments"><i class="fa fa-tachometer"></i>2.3K CC</a>
						</h6>-->
						
					</div>
				</div>
				
			</div>
			
			<div class="col-md-4 feature">
				<div class="media">
					<div class="media-left"><span><img src="images/car/special1.jpg" alt=""></span></div>
					
					<div class="media-right">
					<span class="stars">
					   <i class="fa fa-star checked"></i>
				  	  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
				       </span> 
						<h4>Toyata SUV Rush 2019</h4>
						<p><strike>90.00 AED</strike> <b>150.00 AED</b> per day</p>
						<!--<h6 class="post-meta">
						<a href="#" class=""><i class="fa fa-gears"></i>MANUAL</a>
						<a href="#" class="likes"><i class="fa fa-fax"></i>PETROL</a>
						<a href="#" class="comments"><i class="fa fa-tachometer"></i>2.3K CC</a>
						</h6> -->
						
					</div>
				
			</div>
			</div>
			
			<div class="col-md-4 feature">
				<div class="media">
					<div class="media-left"><span><img src="images/car/special2.jpg" alt=""></span></div>
					
					<div class="media-right">
					<span class="stars">
					   <i class="fa fa-star checked"></i>
				  	  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
				       </span> 
						<h4>Hyundai Elantra Sedan 2015</h4>
						<p><strike>200.00 AED</strike> <b>75.00 AED</b> per day</p>
					<!--	<h6 class="post-meta">
						<a href="#" class=""><i class="fa fa-gears"></i>MANUAL</a>
						<a href="#" class="likes"><i class="fa fa-fax"></i>PETROL</a>
						<a href="#" class="comments"><i class="fa fa-tachometer"></i>2.3K CC</a>
						</h6> -->
						
					</div>
				</div>
			</div>
			
			
			</div>
			</div>
		</div>
	</section>
	<!--Updates-Partner-->	

		<!--Service Offers-->
<div class="welcome-area area-padding">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
					      <div class="col-md-2 col-sm-2 col-xs-12"></div> 
						  <div class="col-md-4 col-sm-4 col-xs-12"> 
						   <h4 class="text-left"><b>OUR</b><span style="color:#f77d0a;">CARS</span></h4></div>
						   
						   
						</div>
					</div>
				</div>
                <div class="row">
                    <!-- single-well end-->
                    <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: -44px;">
                    <div class="col-md-2 col-sm-2 col-xs-12"></div>
					<div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                               <a href="service_view.php"> <img src="images/car/yaris_home.jpg" alt=""></a>
                               <div class="image-layer">
                          <!--  <span class="stars">
					   <i class="fa fa-star checked"></i>
				  	  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star unchecked"></i>(12 reviews)
				       </span>    	
					<button class="btn1 btn-primary" style="background-color: #1a1b2e;border: 1px solid #1a1b2e;"> <a href="about.php"> <i class="fa fa-heart"></a></i> </button>
					  <button class="btn1 btn-primary" style="background-color: #f77d0a; border: 1px solid #f77d0a;margin-left: -3px;"> <a href="about.php" ><i class="fa fa-refresh"></i></a></button>
					   <button class="btn1 btn-primary" style="background-color: #1a1b2e;border: 1px solid #1a1b2e;margin-left: -4px;"><a href="about.php" > <i class="fa fa-search"></i></a></button>-->
                      <div class="col-sm-5 col-md-5">
							<h4><b>CLASS :</b> Premium </h4>
							<h4><b>YEAR  :</b> 2018</h4>
							<h4><b>TRANSMISSION :</b> Automatic</h4>
						</div>
						<div class="col-sm-5 col-md-5">
							<h4><b>DOOR :</b> 4</h4>
							<h4><b>COLOR :</b> Blue </h4>
							<h4><b>AIR CONDITION :</b> Yes </h4>
						</div>
                   
                                </div>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <a href="service_view.php"> <h4>Yaris Hatchback</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                               <a href="service_sedan.php">  <img src="images/car/sedan_home.jpg" alt=""></a>
                                <div class="image-layer">
                            <!--<span class="stars">
					   <i class="fa fa-star checked"></i>
				  	  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star unchecked"></i>(12 reviews)
				       </span>    	
					 <button class="btn1 btn-primary" style="background-color: #1a1b2e;border: 1px solid #1a1b2e;"> <a href="about.php"> <i class="fa fa-heart"></a></i> </button>
					  <button class="btn1 btn-primary" style="background-color: #f77d0a; border: 1px solid #f77d0a;margin-left: -3px;"> <a href="about.php" ><i class="fa fa-refresh"></i></a></button>
					   <button class="btn1 btn-primary" style="background-color: #1a1b2e;border: 1px solid #1a1b2e;margin-left: -4px;"><a href="about.php" > <i class="fa fa-search"></i></a></button>-->
                      <div class="col-sm-5 col-md-5">
							<h4><b>CLASS :</b> Premium </h4>
							<h4><b>YEAR  :</b> 2018</h4>
							<h4><b>TRANSMISSION :</b> Automatic</h4>
						</div>
						<div class="col-sm-5 col-md-5">
							<h4><b>DOOR :</b> 4</h4>
							<h4><b>COLOR :</b> White </h4>
							<h4><b>AIR CONDITION :</b> Yes </h4>
						</div>
                   
                                </div>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                   <a href="service_sedan.php">  <h4>Yaris Sedan </h4></a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    </div><br><br><br>
                    <!-- single-well end-->
                    <div class="col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-2 col-sm-2 col-xs-12"></div>
					
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                  <a href="service_elantra.php"><img src="images/car/elantra_home.jpg" alt=""></a>
                                <div class="image-layer">
                           <!-- <span class="stars">
					   <i class="fa fa-star checked"></i>
				  	  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star unchecked"></i>(12 reviews)
				       </span>    	
					 <button class="btn1 btn-primary" style="background-color: #1a1b2e;border: 1px solid #1a1b2e;"> <a href="about.php"> <i class="fa fa-heart"></a></i> </button>
					  <button class="btn1 btn-primary" style="background-color: #f77d0a; border: 1px solid #f77d0a;margin-left: -3px;"> <a href="about.php" ><i class="fa fa-refresh"></i></a></button>
					   <button class="btn1 btn-primary" style="background-color: #1a1b2e;border: 1px solid #1a1b2e;margin-left: -4px;"><a href="about.php" > <i class="fa fa-search"></i></a></button>-->
                      <div class="col-sm-5 col-md-5">
							<h4><b>CLASS :</b> Premium </h4>
							<h4><b>YEAR  :</b> 2016</h4>
							<h4><b>TRANSMISSION :</b> Automatic</h4>
						</div>
						<div class="col-sm-5 col-md-5">
							<h4><b>DOOR :</b> 4</h4>
							<h4><b>COLOR :</b> Sliver </h4>
							<h4><b>AIR CONDITION :</b> Yes </h4>
						</div>
                   
                                </div>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                <a href="service_elantra.php"><h4>Elantra Sedan</h4></a>
                                </div>
                            </div>
                        </div>
                    </div> 
					
					<div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <a href="service_accent.php">  
								<img src="images/car/accent_home.jpg" alt=""></a>
                              <div class="image-layer">
                           <!-- <span class="stars">
					   <i class="fa fa-star checked"></i>
				  	  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star checked"></i>
					  <i class="fa fa-star unchecked"></i>(12 reviews)
				       </span>    	
					 <button class="btn1 btn-primary" style="background-color: #1a1b2e;border: 1px solid #1a1b2e;"> <a href="about.php"> <i class="fa fa-heart"></a></i> </button>
					  <button class="btn1 btn-primary" style="background-color: #f77d0a; border: 1px solid #f77d0a;margin-left: -3px;"> <a href="about.php" ><i class="fa fa-refresh"></i></a></button>
					   <button class="btn1 btn-primary" style="background-color: #1a1b2e;border: 1px solid #1a1b2e;margin-left: -4px;"><a href="about.php" > <i class="fa fa-search"></i></a></button>-->
                      <div class="col-sm-5 col-md-5">
							<h4><b>CLASS :</b> Premium </h4>
							<h4><b>YEAR  :</b> 2015</h4>
							<h4><b>TRANSMISSION :</b> Automatic</h4>
						</div>
						<div class="col-sm-5 col-md-5">
							<h4><b>DOOR :</b> 4</h4>
							<h4><b>COLOR :</b> White </h4>
							<h4><b>AIR CONDITION :</b> Yes </h4>
						</div>
                   
                                </div>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                   <a href="service_accent.php">   <h4>Accent Sedan </h4><div class="parallelogram"></div></a>
                                </div>
                            </div>
                        </div><br>
						<div class="text-right">
						<a href="our_cars.php"><button  class="btn btn-primary" name="view_all" >View All</button></a></div>
                    </div>
					
                    </div>
                    <!-- single-well end-->
					
                </div>
            </div>
			
        </div>
	<!--Funfact-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BOOK A CAR</h4>
        </div>
        <div class="">
		<div class="col-md-12 col-sm-12 col-xs-12">
          <form action="#" method="post" class="comment-form row m0">
		  <div class="col-md-3 col-sm-3 col-xs-12"></div>
		       <div class="col-md-6 col-sm-6 col-xs-12"><br>
		      
	
	 
                     <select class="form-control" required name="car_type" id="car_type">
						 <option value="">SELECT CAR TYPE </option>
						 <option value="toyota">Toyato Camy Sedan 2018</option>
                         <option value="toyatasuv">Toyata SUV Rush 2016</option>
                         <option value="hyundai">Hyundai Elantra Sedan 2016 </option>
						</select>
							   
					
						<input type="text" class="form-control" name="name" id="name" placeholder="Name *" required>
						<input type="text" class="form-control" name="email" id="email" placeholder="Email Address *" required>
						<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number *" required>
						
							<input type="submit" value="submit now" class="btn btn-outline">
				</div>		
					
					</form>
					</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
     </div> 
     </div> 
		
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