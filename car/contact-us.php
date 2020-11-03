<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Query Sent. We will contact you shortly";
}
else
{
$error="Something went wrong. Please try again";
}
}
?>

<html>
<head>
<title>AHNA | CAR Rental</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- Fav and touch icons -->
<link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">

 <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>
</head>

<body style=" background-color:aqua;">
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6">
        <h3 style="color:blue;">REACH US</h3>
        <div class="contact_detail">
              <?php
$pagetype=$_GET['type'];
$sql = "SELECT Address,EmailId,ContactNo from tblcontactusinfo";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true" style="color:blue;"></i></div>
              <div class="contact_info_m" style="color:blue;"><?php   echo htmlentities($result->Address); ?></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true" style="color:blue;"></i></div>
              <div class="contact_info_m" style="color:blue;"><a href="mailto:anishaguptarp@gmail.com" style="color:blue;"><?php   echo htmlentities($result->EmailId); ?></a></div>
            </li>
            <li>
              <div class="icon_wrap" style="color:blue;"><i class="fa fa-phone"  aria-hidden="true" style="color:blue;"></i></div>
              <div class="contact_info_m"><a href="tel:61-1234-567-90" style="color:blue;"><?php   echo htmlentities($result->ContactNo); ?></a></div>
            </li>
          </ul>
        <?php }} ?>
        </div>
      </div>
      <div class="col-md-6">
        <h3 style="color:blue;">LET'S KEEP IN TOUCH</h3>
          <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <div class="contact_form gray-bg" style="background-color:black;">
          <form  method="post" >
            <div class="form-group">
              <label class="control-label" style="color:blue;">>  NAME</label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" placeholder="Enter Your Name" required>
            </div>
            <div class="form-group">
              <label class="control-label" style="color:blue;">>  EMAIL ADDRESS</label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" placeholder="Enter Email Address" required>
            </div>
            <div class="form-group">
              <label class="control-label" style="color:blue;">>  CONTACT NUMBER </label>
              <input type="text" name="contactno" class="form-control white_bg" id="phonenumber" placeholder="Enter Contact Number" required>
            </div>
            <div class="form-group">
              <label class="control-label" style="color:blue;">>  QUERY</label>
              <textarea class="form-control white_bg" name="message" rows="3" placeholder="Enter Your Query" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit" style="background-color:blue;">ASK US </button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- /Contact-us-->


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->



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
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>
<!--Slider-JS-->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:55 GMT -->
</html>
