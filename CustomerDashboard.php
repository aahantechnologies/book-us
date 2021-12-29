<!DOCTYPE HTML>
<?php
session_start();
include('connection.php');
?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BookUs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
	/* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAey6T2ZmIhV8gnWY-qxdJDb4Jsx7xvknc&callback=initMap">
    </script>
	</head>
	<body>		
	<div class="colorlib-loader"></div>
	<div id="page">
		<!-- header start -->
		<nav class="colorlib-nav" role="navigation">
			
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-widget"><a href="CustomerDashboard.php"><img src="my_image/logo/BookUs.png" alt="BookUs"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="CustomerDashboard.php">HOME</a></li>
								<li class="has-dropdown">
									<a href="CustomerDashboard.php#colorlib-services">SERVICE</a>
									<!-- <ul class="dropdown">
										<li><a href="#">Web Design</a></li>
										<li><a href="#">eCommerce</a></li>
										<li><a href="#">Branding</a></li>
										<li><a href="#">API</a></li>
									</ul> -->
								</li>
								<li><a href="CustomerDashboard.php#colorlib-footer">CONTACT US</a></li>
								 <li class="nav-item dropdown join-dropdown mt-1">
                            <img class="img-fluid" src="./Appoint Me_files/joinbutton.png" alt="">                
                        </li>
                         <li class="nav-item dropdown join-dropdown mt-1">
                            <img class="img-fluid" src="./Appoint Me_files/joinbutton.png" alt="">
                            <a href="" class="dropdown-toggle join-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="caption"><?php echo $_SESSION['name']; ?><span class="bg-icon"></span></span>                
                            </a>
                           <ul class="dropdown-menu join-dropdown-menu" role="menu">
                                <li><a href="index.php">Logout</a></li>                               
                            </ul>                             
                        </li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- header end -->
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(my_image/banner/banner001.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<!-- <h2>Welcome to the luxehotel</h2> -->
				   					<!-- <h1>A Luxury Hotel</h1> -->
										<!-- <p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p> -->
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(my_image/banner/banner002.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<!-- <h2>Discover &amp; Enjoy</h2>
				   					<h1>Everything you need in luxehotel</h1>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p> -->
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(my_image/banner/banner003.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<!-- <h2>You are invited</h2>
				   					<h1>We know how to please you</h1>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p> -->
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(my_image/banner/banner004.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<!-- <h2>Come &amp; enjoy the unforgetable nights</h2>
				   					<h1>In the heart of luxehotel</h1>
										<p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p> -->
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-reservation">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-3 col-3 search-wrap">
						<form method="post" class="colorlib-form">
		              	<div class="row">
		                <div class="col-lg-3 col-sm-3 col-3">
		                  <div class="form-group">
						  <img id="topicon" src="my_image/icon/user-avatar-with-check-mark.png" alt="VERIFIED PROFESSIONAL"><br>
		                      
		                    <label for="date">Verified Professional</label>
		                    <div class="form-field">
		                      
		                    </div>
		                  </div>
		                </div>
		                <div class="col-lg-3 col-sm-3 col-3">
		                  <div class="form-group">
						  <img id="topicon" src="my_image/icon/shield.png" alt="VERIFIED PROFESSIONAL"><br>
		                    <label for="date">Assured Work</label>
		                    <div class="form-field">
							
		                    </div>
		                  </div>
		                </div>
		                <div class="col-lg-3 col-sm-3 col-3">
		                  <div class="form-group">
						  <img id="topicon" src="my_image/icon/money-back.png" alt="VERIFIED PROFESSIONAL"><br>
		                    <label for="adults">Satisfaction Guaranteed</label>
		                    <div class="form-field">
							
		                    </div>
		                  </div>
		                </div>
		                <div class="col-lg-3 col-sm-3 col-3">
		                  <div class="form-group">
						  <img id="topicon" src="my_image/icon/running-man.png" alt="VERIFIED PROFESSIONAL"><br>
		                    <label for="children">On Time Arrival</label>
		                    <div class="form-field">
							
		                    </div>
		                  </div>
		                </div>
		                <!-- <div class="col-md-2">
		                  <input type="submit" name="submit" id="submit" value="Search" class="btn btn-primary btn-block">
		                </div> -->
		              </div>
		            </form>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<center><h2 style="color: #302939;">
            <span class="underline-black black-text">O</span><span class="underline-green black-text">ur</span> services
        </h2></center>
					<div class="col-md-3 animate-box text-center">
                                            <a href="Appointment.php"><div class="services">
							<span class="icon">
								<img  style="width:80px; height:80px;  margin-top: -30px;" src="images/maid.png">
								<!-- <i class="flaticon-reception"></i> -->
							</span>
							<h3>House Maid</h3>
							<!-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p> -->
						</div></a>
					</div>
					<div class="col-md-3 animate-box text-center">
						<a href="Appointment.php"><div class="services">
							<span class="icon">
								<img style="width:80px; height:80px;  margin-top: -30px;" src="my_image/icon/electrician.png">
							</span>
							<h3>Electrician</h3>
							<!-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p> -->
						</div></a>
					</div>	
					<div class="col-md-3 animate-box text-center">
						<a href="Appointment.php"><div class="services">
							<span class="icon">
								<img style="width:80px; height:80px;  margin-top: -30px;" src="my_image/icon/plumber.png">
							</span>
							<h3>Plumber</h3>
							<!-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p> -->
						</div></a>
					</div>
					<a href="Appointment.php"><div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<img style="width:80px; height:80px;  margin-top: -30px;" src="my_image/icon/doctor.png">
							</span>
							<h3>Doctor</h3>
							<!-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p> -->
						</div>
					</div></a>
				</div>
					<div class="col-md-3 animate-box text-center">
                                            <a href="Appointment.php"><div class="services">
							<span class="icon">
								<img  style="width:80px; height:80px;  margin-top: -30px;" src="my_image\icon\cut.png">
								<!-- <i class="flaticon-reception"></i> -->
							</span>
							<h3>Saloon</h3>
							<!-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p> -->
						</div></a>
					</div>
					<div class="col-md-3 animate-box text-center">
						<a href="Appointment.php"><div class="services">
							<span class="icon">
								<img style="width:80px; height:80px;  margin-top: -30px;" src="my_image/icon/car-driver.png">
							</span>
							<h3>Taxi</h3>
							<!-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p> -->
						</div></a>
					</div>	
					<div class="col-md-3 animate-box text-center">
						<a href="Appointment.php"><div class="services">
							<span class="icon">
								<img style="width:80px; height:80px;  margin-top: -30px;" src="my_image/icon/cooking.png">
							</span>
							<h3>Cooking</h3>
							<!-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p> -->
						</div></a>
					</div>
					<a href="Appointment.php"><div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<img style="width:80px; height:80px;  margin-top: -30px;" src="my_image/icon/mechanic.png">
							</span>
							<h3>Mechanic</h3>
							<!-- <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p> -->
						</div>
					</div></a>
				</div>
			</div>
		</div>
<hr/>

<section class="service" id="service">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12">
                <h2 class="headline"> HouseMaid Services</h2>
                <hr>
                <div class="col-lg-3 col-md-3 float-left mt-3">
                    <a href="Appointment.php">
                        <img style="width: 250px; height: auto;"  class="img-fluid service-feature" src="my_image/side_image/side_image01.png"
                             alt="HomeMaid">
                    </a>
                </div>
                <div class="col-lg-9 col-md-9 float-right" style=" text-align: center;     padding: 4em 0 0 0;">
                    <div class="row h6mt">
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <a href="">
                                    <img style="width:80px; height:80px;" class="img-fluid" src="my_image/icon/housekeeping.png" alt="">
                                </a>
                            </div>
                            <a class="item-title" href="">
                                <h6>Cleaning</h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <a href="">
                                    <img style="width:80px; height:80px;" class="img-fluid" src="my_image/icon/cooking.png" alt="">
                                </a>
                            </div>
                            <a class="item-title" href="">
                                <h6>Cook</h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <a href="">
                                    <img style="width:80px; height:80px;" class="img-fluid" src="my_image/icon/dish.png" alt="">
                                </a>
                            </div>
                            <a class="item-title" href="">
                                <h6>Washing</h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <a href="">
                                    <img style="width:80px; height:80px;" class="img-fluid" src="my_image/icon/dry.png" alt="">
                                </a>
                            </div>
                            <a class="item-title" href="">
                                <h6>Laundry</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<hr/>
    
    <div class="row h6mt" style="text-align: center;">
            <div class="col-lg-12">
                <h2 style="text-align: left;" class="headline"> Appliance Repair</h2>
                <hr>
                <div class="col-lg-3 col-md-3 float-left mt-3">
                    <a href="Appointment.php">
                        <img style="width: 60%; height: auto;"  class=" service-feature"  src="my_image\side_image\sidework.png"
                             alt="Plumber">
                    </a>
                </div>
                <div class="col-lg-9 col-md-9 float-right mt-3">
                    <div class="row" style="padding: 4em 0 0 0;">
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <a href="">
                                    <img class="img-fluid" src="images/air-conditioner.png" alt="">
                                </a>
                            </div>
                            <a class="item-title" href="">
                                <h6>Ac Repair</h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <a href="">
                                    <img class="img-fluid" src="images/refrigerator.png"
                                         alt="">
                                </a>
                            </div>
                            <a class="item-title" href="">
                                <h6>Refrigerator</h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <a href="">
                                    <img class="img-fluid" src="images/tv.png" alt="">
                                </a>
                            </div>
                            <a class="item-title" href="">
                                <h6>Tv Installation </h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <a href="">
                                    <img class="img-fluid" src="images/sink.png" alt="">
                                </a>
                            </div>
                            <a class="item-title" href="">
                                <h6>Sanitary Works</h6>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <!-- <a href="">
                                    <img class="img-fluid" src="images/plug.png" alt="">
                                </a> -->
                            </div>
                            <a class="item-title" href="">
                                <!-- <h6>Electrical Service</h6> -->
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                               <!--  <a href="">
                                    <img class="img-fluid" src="images/leak.png" alt="">
                                </a> -->
                            </div>
                            <!-- <a class="item-title" href="">
                                <h6>Plumbing Service</h6>
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr/>
        
        <div class="row h6mt" style="text-align: center; ">
            <div class="col-lg-12">
                <h2 style="text-align: left;" class="headline"> Health Services</h2>
                <hr>
                <div class="col-lg-3 col-md-3 float-left mt-3">
                    <a href="Appointment.php">
                        <img class=" service-feature" style="width: 50%; height: auto;"  src="my_image\side_image\sidedoctor.png" alt="Nurse">
                    </a>
                </div>
                <div class="col-lg-9 col-md-8 float-right"  style="padding: 4em 0 0 0;">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <a href="">
                                    <img class="img-fluid" src="images/ambulance.png"
                                         alt="Ambulance">
                                </a>
                            </div>
                            <a class="item-title" href="">
                                <h6>Ambulance</h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <a href="">
                                    <img class="img-fluid" src="images/nurse.png" alt="Nurse">
                                </a>
                            </div>
                            <a class="item-title" href="">
                                <h6>Nurse</h6>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <a href="">
                                    <img class="img-fluid" src="images/doctor_1.png" alt="Doctor">
                                </a>
                            </div>
                            <a class="item-title" href="">
                                <h6>Doctor</h6>
                            </a>
                        </div>
                       
                        <div class="col-lg-3 col-md-3">
                            <div class="service-item">
                                <!-- <a href="">
                                    <img class="img-fluid" src="physiotherapy.png"
                                         alt="Physiotherapy">
                                </a> -->
                            </div>
                            <!-- <a class="item-title" href="">
                                <h6>Physiotherapy</h6>
                            </a -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
		

       
</div>
     <hr/>        
		
        


       	<div id="colorlib-subscribe" style="height:200px;     padding: 4em 0; background-color:#74c043; text-align:center;" >
			<!-- <div></div> -->
			<div class="container" >
                            <div class="row" >
            <div class="col-md-3">

                <span class="counter">  <h2 class="counter-statistic"  style="color: #ffffff">200</h2>
                    <!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                </span>
                <h6  style="color: #ffffff">Happy Customer</h6>
            </div>
            <div class="col-md-3">

                <span class="counter"><h2 class="counter-statistic"  style="color: #ffffff">3000</h2>
                    <!-- <i class="fa fa-plus" aria-hidden="true"></i> </span> -->

                <h6  style="color: #ffffff">Hours Served</h6>
            </div>
            <div class="col-md-3">

                <span class="counter"> <h2 class="counter-statistic"  style="color: #ffffff">50</h2>
                    <!-- <i class="fa fa-plus" aria-hidden="true"></i> </span> -->

                <h6  style="color: #ffffff">Hours Appoint / Daily</h6>
            </div>
            <div class="col-md-3">

                <span class="counter">   <h2 class="counter-statistic"  style="color: #ffffff">100</h2>
                    <!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                </span>

                <h6  style="color: #ffffff">Verified Experts</h6>
            </div>
        </div>
			</div>
		</div>


		<div id="colorlib-rooms" class="colorlib-light-grey" style="height:480px;">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<!-- <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> -->
						<h2>Customer Says About Us</h2>
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel owl-carousel2">
							<div class="item">
								<p class="quote-text">
                        I started taking their service n I love it ... <br>
                        I specially love the behaviour of the management and also the system they have ...
                        looking forward to have more beautiful journey with u
                    </p>
								<!-- <a href="images/room-1.jpg" class="room image-popup-link" style="background-image: url(images/room-1.jpg);"></a> -->
								<div class="desc text-center">
									
									<h4>Nawsheen Nahreen Mou</h4>
                            <p>Happy Customer
										<!-- <span class="currency">$</span>
										<span class="price-room">99</span>
										<span class="per">/ per night</span> -->
									</p>
									 <!-- <ul> -->
										<!-- <li><i class="icon-check"></i> Only 10 rooms are available</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li> -->
									<!-- </ul>  -->
									<!-- <p><a class="btn btn-primary btn-book">Book now!</a></p> -->
								</div>
							</div>
							<div class="item">
								<p class="quote-text">
                        I started taking their service n I love it ... <br>
                        I specially love the behaviour of the management and also the system they have ...
                        looking forward to have more beautiful journey with u
                        Thank you for your service.
                    </p>
								<div class="desc text-center">
									<h4>Ln Nelufa Yesmin Niloy</h4>
                            <p>Happy Customer</p>
									<!-- <p class="price">
										<span class="currency">$</span>
										<span class="price-room">199</span>
										<span class="per">/ per night</span>
									</p> -->
									<!-- <ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul> -->
									<!-- <p><a class="btn btn-primary btn-book">Book now!</a></p> -->
								</div>
							</div>
							<div class="item">
								 <p class="quote-text">
                        I started taking their service n I love it ... <br>
                        I specially love the behaviour of the management and also the system they have ...
                        looking forward to have more beautiful journey with u
                        Thank you for your service.
                    </p>
								<div class="desc text-center">
									
									 <h4>Sanjida Hossain </h4>
                            <p>Happy Customer</p>
									<!-- <p class="price">
										<span class="currency">$</span>
										<span class="price-room">249</span>
										<span class="per">/ per night</span>
									</p> -->
									<!-- <ul>
										<li><i class="icon-check"></i> Two double beds</li>
										<li><i class="icon-check"></i> Babysitting facilities</li>
										<li><i class="icon-check"></i> 1 free bed available on request</li>
									</ul> -->
									<!-- <p><a class="btn btn-primary btn-book">Book now!</a></p> -->
								</div>
							</div>
							<div class="item">
								 <p class="quote-text">
                         I started taking their service n I love it ... <br>
                        I specially love the behaviour of the management and also the system they have ...
                        looking forward to have more beautiful journey with u
                        Thank you for your service.
                    </p>
								<div class="desc text-center">
									 <h4>
                                Fahreen Hannan </h4>
                            <p>Happy Customer</p>
									<!-- <p class="price">
										<span class="currency">$</span>
										<span class="price-room">150</span>
										<span class="per">/ per night</span>
									</p> -->
									<!-- <ul>
										<li><i class="icon-check"></i> Only 10 rooms are available</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p> -->
								</div>
							</div>
							<div class="item">
								  <p class="quote-text">
                        I started taking their service n I love it ... <br>
                        I specially love the behaviour of the management and also the system they have ...
                        looking forward to have more beautiful journey with u
                        Thank you for your service.
                    </p>
								<div class="desc text-center">
									 <h4>Sonali Haque </h4>
                            <p>Happy Customer</p>
									<!-- <p class="price">
										<span class="currency">$</span>
										<span class="price-room">200</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p> -->
								</div>
							</div>
							<div class="item">
								 <p class="quote-text">
                        I started taking their service n I love it ... <br>
                        I specially love the behaviour of the management and also the system they have ...
                        looking forward to have more beautiful journey with u
                        Thank you for your service.
                    </p>
								<div class="desc text-center">
									 <h4>Nawsheen Nahreen Mou</h4>
                            <p>Happy Customer</p>
									<!-- <p class="price">
										<span class="currency"><small>$</small></span>
										<span class="price-room">299</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p> -->
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
        


        <!-- // <div id="colorlib-rooms" class="">
		// 	<div class="container">
		// 		<div class="row">
		// 			<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						
		// 				<h2>We Are Serving</h2>
						
		// 			</div>
		// 		</div>
		// 		<div class="row">
        //         <div class="no-padding col-md-6 col-lg-6 col-sm-12 col-xs-12">
        //             <div class="map-area relative">
        //                 <div id="map" style="width: 100%; height: 350px;">  -->
                       <!--  <div id="contact"> -->
		 <!-- <div class="container">
		// 	<div class="col-lg-8" -->
				<!-- <div class="map"> -->
		<!-- // 			<iframe style="height:453px; width:220%; margin-top: -50px; margin-right: -100px; margin-left: -40px; border:none;" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
		// 			</iframe>
		// 			</div>
		// 		</div> -->
		 	<!-- </div> -->
        <!-- //             </div>
        //         </div>
		// 				</div>
		// 			</div>
					
		// 		</div>
		// 	</div>
		// </div> -->

	
		<div id="colorlib-subscribe" style="background-image: url(my_image/banner/buttom-banner001.jpg); height:450px;" >
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<!-- <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> -->
						<!-- <h2>Sign Up for a Newsletter</h2>
						<p>Get A 50% Discounts in every Rooms, Book now!</p> -->
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<!-- <input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button> -->
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- footer start -->
		<?php
		include('footer.php');
		?>
		<!-- footer end -->

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

