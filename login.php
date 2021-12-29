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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAey6T2ZmIhV8gnWY-qxdJDb4Jsx7xvknc&callback=initMap">
    </script>

    </head>
    <body>
        
    <div class="colorlib-loader"></div>

    <div id="page">
        <!-- header start -->
        <?php
        include('header.php');
        ?>
        <!-- header end -->
        <section class="service-form mydesign">
        <div class="container-fluid">
            <div class="col-md-6 col-md-offset-3">
                <form class="form-area" method="post" action="">
                    <input type="hidden" name="_token" value="48O8o8F5CbWnReOpexJF7ylxitGN3bK3ovVAytpu">
                    <span class="form-text-area" style="color: #302939;">
                    <h2 class="text-uppercase text-center">LOGIN</h2>
                    <p>Use Email Address</p>
                    
                    </span>
                   <!--  <div class="form-group input-group-lg" >

                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name*"
                                   value="" required>
                                                                    </div> -->
                    <div class="form-group input-group-lg">
                                                    <input type="text" class="form-control" name="email" id="phone"
                                   placeholder="Your Email Address*" value="" required>
                                                                    </div>
                    <div class="form-group input-group-lg">
                                                    <input type="password" class="form-control" name="password" id="phone"
                                   placeholder="Password*" value="" required>
                                                                    </div>
                    
                  <!--   <div class="form-group input-group-lg">
                        <input type="password" class="form-control" name="confirmpass" id="phone" value=""
                            placeholder="Confirmed Password*"  required>
                        </div> -->

                    
                    <button class="btn btn-block btn-custom text-uppercase mb-5" name="submit" type="submit">LOGIN</button><br>
					<p>Don't Have an Account? <a href="register_customer.php"> SignUp</a></p>
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
    
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $query=mysqli_query($con,"SELECT * FROM register WHERE email='$email' && password='$password'");
     $num=mysqli_num_rows($query);
           if($num>0){
		       $row=mysqli_fetch_array($query);
               $_SESSION['email']=$row['email'];
               $_SESSION['name']=$row['name'];
        echo "<script>window.location='CustomerDashboard.php'</script>";
    }
    else{
        echo"<script>alert('Invailid Email and Password')</script>";
		echo "<script>window.location='login.php'</script>";
    }
}


?>