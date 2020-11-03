<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<html>
<head>
<title>AHNA | CAR Rental</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
<style>
.container {
  position: relative;
  font-family: Arial;
}
.text-block {
  position: absolute;
  bottom: 20px;
  left: 20px;

  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
.text-blockk {
  position: absolute;
  bottom: 20px;
  right: 20px;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
</style>
</head>

<body style="background-color:black;">
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->
<section id="banner">
  <img src="admin\img\vehicleimages\banner-image.jpg"  style="width:100%;">
	<div class="container">
  <div class="text-block">
    <h4 style="color:white;">DRIVE IN A SANITISED CAR</h4>  <br/><br/>
 </div>
		<div class="text-blockk">
			<a href="car-listing.php" class="btn" style="background-color:blue;">Search Cars</a>   <br/><br/><br/>
</div>

  </div>

</div>

</section>

<section style="background-color:black;">
<section id="banner">
    <div class="section-header text-center">
			<br/>
	      <h2 style="color:aqua;">Self Drive Cars on Rent</h2>
			<h3 style="color:white;"><span>We simplified car rentals, so you can focus on what's important to you.</span></h3>
			<h3 style="color:white;"><span>Unbeatable Rates. Easy & Quick Online Booking. Clean & Well Maintained Fleet.</span></h3>
      <p><div class="items">
				<div>	<h3 style="color:aqua;">Fuel Cost Included</h3><p style="color:white;">Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll pay you back!</p></div>
				<div><h3 style="color:aqua;">No Hidden Charges</h3><p style="color:white;">Our prices include taxes and insurance.<br>What you see is what you really pay!</p></div>
				<div><h3 style="color:aqua;">Flexi Pricing Packages</h3><p style="color:white;">One size never fits all! Choose a balance of time and kilometers that works best for you.</p></div>
				<div><h3 style="color:aqua;">Go Anywhere</h3><p style="color:white;">Our cars have all-India permits. Just remember to pay state tolls and entry taxes.</p></div>
				<div><h3 style="color:aqua;">24x7 Roadside Assistance</h3><p style="color:white;">We have round-the-clock, pan India partners. Help is never far away from you.</p></div>
				<div><h3 style="color:aqua;">Damage Insurance</h3><p style="color:white;">All your bookings include damage insurance! Drive safe, but don’t worry!</p></div></div></p>
    </div>
</section>

<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m" style="background-color:blue;" >
          <div class="cell" >
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>3000+</h2>
            <p style="color:white;">Rides Daily</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m" style="background-color:blue;">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>36,00,000+</h2>
            <p style="color:white;">Km Travelled</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m" style="background-color:blue;">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>95,000+</h2>
            <p style="color:white;">Happy users</p>
          </div>
        </div>
      </div>
			<div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m" style="background-color:blue;">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>6500+</h2>
            <p style="color:white;">Number of Cars</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->
<!--Back to top-->

<!--/Back to top-->
<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form -->
<!--Register-Form -->
<?php include('includes/registration.php');?>
<!--/Register-Form -->
<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form -->
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>
<!--Slider-JS-->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>
