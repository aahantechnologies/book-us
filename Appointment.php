<!DOCTYPE HTML>
   <?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['email']))
{

}
if(!isset($_SESSION['name']) && !isset($_SESSION['email']))
{
  echo "<script>alert('Invalid user please login first')</script>";
  echo "<script>window.location='login.php'</script>";
}
?>
<?php
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
      <link rel="stylesheet" href="css/my-c-style.css">
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
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAey6T2ZmIhV8gnWY-qxdJDb4Jsx7xvknc&callback=initMap"></script>
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
							<div id="colorlib-widget"><a href="index.php"><img src="my_image/logo/BookUs.png" alt="BookUs"></a></div>
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
                        </li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
      <!-- header end -->
      <form id="logout-form" action="/logout" method="POST" style="display: none;">
         <input type="hidden" name="_token" value="48O8o8F5CbWnReOpexJF7ylxitGN3bK3ovVAytpu">
      </form>
      <section class="service-form mydesign">
         <div class="container-fluid">
            <div class="col-md-6 col-md-offset-3">
               <form class="form-area" method="post" action="">
                  <input type="hidden" name="_token" value="48O8o8F5CbWnReOpexJF7ylxitGN3bK3ovVAytpu">
                  <span class="form-text-area" style="color: #302939;">
                     <h2 class="text-uppercase text-center">Great Decision!</h2>
                     <p class="text-center">Enter your details and we'll be in touch shortly </p>
                  </span>
                  <div class="form-group input-group-lg" >
                     <input type="text" class="form-control" name="name" id="name" placeholder="Your Name*"
                        value="" required>
                  </div>
                  <div class="form-group input-group-lg">
                     <input type="text" class="form-control" name="phone" id="phone"
                        placeholder="Add Valid Phone Number*" value="" required>
                  </div>
                  <div class="form-group input-group-lg">
                     <textarea class="form-control" name="address" placeholder="Address*"
                        required></textarea>
                  </div>
                  <div class="form-group ">
                     <select class="selectpicker show-tick form-control" style="-moz-appearance: window;
    -webkit-appearance: none;" title="Select Your Area"
                        data-live-search="true" data-style="btn-white" name="location" required>
                        <option value="New York"
                           >
                           New York
                        </option>
                        <option value="Washington"
                           >
                           Washington
                        </option>
                        <option value="Sprinfield"
                           >
                           Sprinfield
                        </option>
                        <option value="California"
                           >
                           California
                        </option>                        
                     </select>
                  </div>
                  <div class="form-group input-group-lg">
                     <input type="date" class="form-control" name="date" id="txtDate" value=""
                        placeholder="Select Your Date*"  required>
                  </div>
                  <div class="form-group ">
                     <select class="selectpicker show-tick form-control" style="-moz-appearance: window;
    -webkit-appearance: none;" title="Select Your Time*"
                        data-live-search="true" data-style="btn-white" name="time" required>
                        <option data-tokens="8:00 AM - 9:00 AM"
                           value="8:00 AM - 9:00 AM" >
                           8:00 AM - 9:00 AM
                        </option>
                        <option data-tokens="9:00 AM - 10:00 AM"
                           value="9:00 AM - 10:00 AM" >
                           9:00 AM - 10:00 AM
                        </option>
                        <option data-tokens="10:00 AM - 11:00 AM"
                           value="10:00 AM - 11:00 AM" >
                           10:00 AM - 11:00 AM
                        </option>
                        <option data-tokens="11:00 AM - 12:00 PM"
                           value="11:00 AM - 12:00 PM" >
                           11:00 AM - 12:00 PM
                        </option>
                        <option data-tokens="12:00 PM - 1:00 PM"
                           value="12:00 PM - 1:00 PM" >
                           12:00 PM - 1:00 PM
                        </option>
                        <option data-tokens="1:00 PM - 2:00 PM"
                           value="1:00 PM - 2:00 PM" >
                           1:00 PM - 2:00 PM
                        </option>
                        <option data-tokens="2:00 PM - 3:00 PM"
                           value="2:00 PM - 3:00 PM" >
                           2:00 PM - 3:00 PM
                        </option>
                        <option data-tokens="3:00 PM - 4:00 PM"
                           value="3:00 PM - 4:00 PM" >
                           3:00 PM - 4:00 PM
                        </option>
                        <option data-tokens="4:00 PM - 5:00 PM"
                           value="4:00 PM - 5:00 PM" >
                           4:00 PM - 5:00 PM
                        </option>
                        <option data-tokens="5:00 PM - 6:00 PM"
                           value="5:00 PM - 6:00 PM" >
                           5:00 PM - 6:00 PM
                        </option>
                        <option data-tokens="6:00 PM - 7:00 PM"
                           value="6:00 PM - 7:00 PM" >
                           6:00 PM - 7:00 PM
                        </option>
                        <option data-tokens="7:00 PM - 8:00 PM"
                           value="7:00 PM - 8:00 PM" >
                           7:00 PM - 8:00 PM
                        </option>
                        <option data-tokens="8:00 PM - 9:00 PM"
                           value="8:00 PM - 9:00 PM" >
                           8:00 PM - 9:00 PM
                        </option>
                        <option data-tokens="9:00 PM - 10:00 PM"
                           value="9:00 PM - 10:00 PM" >
                           9:00 PM - 10:00 PM
                        </option>
                        <option data-tokens="10:00 PM - 11:00 PM"
                           value="10:00 PM - 11:00 PM" >
                           10:00 PM - 11:00 PM
                        </option>
                        <option data-tokens="11:00 PM - 12:00 AM"
                           value="11:00 PM - 12:00 AM" >
                           11:00 PM - 12:00 AM
                        </option>
                        <option data-tokens="12:00 AM - 1:00 AM"
                           value="12:00 AM - 1:00 AM" >
                           12:00 AM - 1:00 AM
                        </option>
                        <option data-tokens="1:00 AM - 2:00 AM"
                           value="1:00 AM - 2:00 AM" >
                           1:00 AM - 2:00 AM
                        </option>
                        <option data-tokens="2:00 AM - 3:00 AM"
                           value="2:00 AM - 3:00 AM" >
                           2:00 AM - 3:00 AM
                        </option>
                        <option data-tokens="3:00 AM - 4:00 AM"
                           value="3:00 AM - 4:00 AM" >
                           3:00 AM - 4:00 AM
                        </option>
                        <option data-tokens="4:00 AM - 5:00 AM"
                           value="4:00 AM - 5:00 AM" >
                           4:00 AM - 5:00 AM
                        </option>
                        <option data-tokens="5:00 AM - 6:00 AM"
                           value="5:00 AM - 6:00 AM" >
                           5:00 AM - 6:00 AM
                        </option>
                        <option data-tokens="6:00 AM - 7:00 AM"
                           value="6:00 AM - 7:00 AM" >
                           6:00 AM - 7:00 AM
                        </option>
                        <option data-tokens="7:00 AM - 8:00 AM"
                           value="7:00 AM - 8:00 AM" >
                           7:00 AM - 8:00 AM
                        </option>
                     </select>
                  </div>				 
                  <?php
                     // Include the database configuration file
                     require 'dbConfig.php';
                     
                     function categoryTree($parent_id = 0, $sub_mark = ''){
                         global $db;
                         $query = $db->query("SELECT * FROM categories WHERE parent_id = $parent_id ORDER BY name ASC");                     
                         if($query->num_rows > 0){
                             while($row = $query->fetch_assoc()){
                                 echo '<option value="'.$row['name'].'">'.$sub_mark.$row['name'].'</option>';
                                 categoryTree($row['id'], $sub_mark.'---');
                             }
                         }
                     }
                     ?>      
                  <div class="form-group ">
                     <select class="selectpicker show-tick servicename form-control" style="-moz-appearance: window;
    -webkit-appearance: none;" title="Select Your Service*"
                        data-live-search="true"
                        data-style="btn-white" name="reason" required >
                     <?php categoryTree(); ?>
                     </select>
                  </div>
                  <button class="btn btn-block btn-custom text-uppercase mb-5" name="submit" type="submit">Submit</button>
               </form>
            </div>
         </div>
      </section>
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
<?php
   if(isset($_REQUEST['submit'])){
       $name=$_REQUEST['name'];
       $phone=$_REQUEST['phone'];
       $address=$_REQUEST['address'];
       $location=$_REQUEST['location'];
       $date=$_REQUEST['date'];
       $time=$_REQUEST['time'];
       $reason=$_REQUEST['reason'];
	   $main_service=$_REQUEST['main_service'];
	   $query=mysqli_query($con,"INSERT INTO service(name,phone_number,address,area,date,time,service) VALUES('$name','$phone','$address','$location','$date','$time','$reason')");
       if($query){
           echo"<script>alert('Thank You..... We Provide this Service Shortly')</script>";
       }
       else{
           echo"<script>alert('register not done')</script>";
       }
   }
   
   
   ?>