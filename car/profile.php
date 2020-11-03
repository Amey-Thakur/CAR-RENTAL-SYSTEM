<style>
div{
font-family: Play;
font-size: 20px;
color: BLUE;
}
</style>

<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  {
header('location:index.php');
}
else{
if(isset($_POST['updateprofile']))
  {
$name=$_POST['fullname'];
$mobileno=$_POST['mobilenumber'];
$dob=$_POST['dob'];
$adress=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$email=$_SESSION['login'];
$sql="update tblusers set FullName=:name,ContactNo=:mobileno,dob=:dob,Address=:adress,City=:city,Country=:country where EmailId=:email";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':adress',$adress,PDO::PARAM_STR);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':country',$country,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$msg="Profile Updated Successfully";
}

?>
  <!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
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

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
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
<body style="background-color:aqua;">

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->
<!--Page Header-->


      <center><div class="page-heading">
        <br/><br/>
        <h1 style="color:blue;">MY PROFILE</h1>
      </div></center>


<!-- /Page Header-->


<?php
$useremail=$_SESSION['login'];
$sql = "SELECT * from tblusers where EmailId=:useremail";
$query = $dbh -> prepare($sql);
$query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40" style="background-color:aqua;">
      <div class="upload_user_logo"> <img src="assets\images\dealer-logo.png" alt="image">
      </div>

      <div class="dealer_info" style="color:blue;" >
        <h5 style="color:black;"><?php echo htmlentities($result->FullName);?></h5>
        <p><?php echo htmlentities($result->Address);?><br>
          <?php echo htmlentities($result->City);?>&nbsp;<?php echo htmlentities($result->Country);?></p>
      </div>
    </div>

    <div class="row" >
      <div class="col-md-3 col-sm-3" >
        <?php include('includes/sidebar.php');?>
      <div class="col-md-6 col-sm-8" style="background-color:black;">
        <div class="profile_wrap">
          <center><h5 class="uppercase underline" style="background-color:blue;">MY PROFILE</h5></center>
          <?php
         if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
          <form  method="post">
           <div class="form-group" style="color:white;">
              <label class="control-label" style="color:blue;">REGISTRATION DATE -></label>
             <?php echo htmlentities($result->RegDate);?>
            </div>
             <?php if($result->UpdationDate!=""){?>
            <div class="form-group" style="color:white;">   
              <label class="control-label" style="color:blue;">LAST UPDATED ON     -></label>
             <?php echo htmlentities($result->UpdationDate);?>
            </div>
            <?php } ?>
            <div class="form-group">
              <label class="control-label" style="color:blue;">> NAME</label>
              <input class="form-control white_bg" name="fullname" placeholder="Name" value="<?php echo htmlentities($result->FullName);?>" id="fullname" type="text"  required>
            </div>
            <div class="form-group">
              <label class="control-label" style="color:blue;">>  EMAIL ADDRESS</label>
              <input class="form-control white_bg" placeholder="Email Address" value="<?php echo htmlentities($result->EmailId);?>" name="emailid" id="email" type="email" required readonly>
            </div>
            <div class="form-group">
              <label class="control-label" style="color:blue;">>  CONTACT NUMBER</label>
              <input class="form-control white_bg" name="mobilenumber" placeholder="Contact Number" value="<?php echo htmlentities($result->ContactNo);?>" id="phone-number" type="text" required>
            </div>
            <div class="form-group">
              <label class="control-label" style="color:blue;">>  DATE OF BIRTH</label>
              <input class="form-control white_bg" value="<?php echo htmlentities($result->dob);?>" name="dob" placeholder="DD/MM/YYYY" id="birth-date" type="text" >
            </div>
            <div class="form-group">
              <label class="control-label" style="color:blue;">>  RESIDENTIAL ADDRESS</label>
              <textarea class="form-control white_bg" name="address" rows="3"placeholder="Enter your address" ><?php echo htmlentities($result->Address);?></textarea>
            </div>
            <div class="form-group">
              <label class="control-label" style="color:blue;">>  COUNTRY</label>
              <input class="form-control white_bg"  id="country" name="country" placeholder="Country" value="<?php echo htmlentities($result->City);?>" type="text">
            </div>
            <div class="form-group">
              <label class="control-label" style="color:blue;">>  CITY</label>
              <input class="form-control white_bg" id="city" name="city" placeholder="City" value="<?php echo htmlentities($result->City);?>" type="text">
            </div>
            <?php }} ?>

            <div class="form-group">
              <button type="submit" name="updateprofile" class="btn" style="background-color:blue;">UPDATE MY PROFILE</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<!--/Profile-setting-->

<p></p><br/><!--Footer -->
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

<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>
<!--Slider-JS-->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
<?php } ?>
