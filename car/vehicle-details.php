<style>
  div {
    font-family: Play;
    font-size: 20px;
    color: BLUE;
    object-fit: cover;
  }
</style>

<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (isset($_POST['submit'])) {
  $fromdate = $_POST['fromdate'];
  $todate = $_POST['todate'];
  $message = $_POST['message'];
  $useremail = $_SESSION['login'];
  $status = 0;
  $vhid = $_GET['vhid'];
  $sql = "INSERT INTO  tblbooking(userEmail,VehicleId,FromDate,ToDate,message,Status) VALUES(:useremail,:vhid,:fromdate,:todate,:message,:status)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
  $query->bindParam(':vhid', $vhid, PDO::PARAM_STR);
  $query->bindParam(':fromdate', $fromdate, PDO::PARAM_STR);
  $query->bindParam(':todate', $todate, PDO::PARAM_STR);
  $query->bindParam(':message', $message, PDO::PARAM_STR);
  $query->bindParam(':status', $status, PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if ($lastInsertId) {
    echo "<script>alert('Booking successful.');</script>";
  } else {
    echo "<script>alert('Something went wrong. Please try again');</script>";
  }
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

  <link rel="apple-touch-icon-precomposed" sizes="144x144"
    href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114"
    href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
  <link rel="apple-touch-icon-precomposed" sizes="72x72"
    href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">


</head>

<body style="background-color:black;">

  <!--Header-->
  <?php include('includes/header.php'); ?>
  <!-- /Header -->

  <!--Listing-Image-Slider-->

  <?php
  $vhid = intval($_GET['vhid']);
  $sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.id=:vhid";
  $query = $dbh->prepare($sql);
  $query->bindParam(':vhid', $vhid, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  $cnt = 1;
  if ($query->rowCount() > 0) {
    foreach ($results as $result) {
      $_SESSION['brndid'] = $result->bid;
      ?>

      <section id="listing_img_slider">
        <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" class="img-responsive"
            alt="image" width="900" height="400"></div>
        <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage2); ?>" class="img-responsive"
            alt="image" width="900" height="560"></div>
        <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage3); ?>" class="img-responsive"
            alt="image" width="900" height="560"></div>
        <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage4); ?>" class="img-responsive"
            alt="image" width="900" height="560"></div>
        <?php if ($result->Vimage5 == "") {

        } else {
          ?>
          <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage5); ?>" class="img-responsive"
              alt="image" width="900" height="560"></div>
        <?php } ?>
      </section>
      <!--/Listing-Image-Slider-->


      <!--Listing-detail-->
      <section class="listing-detail">
        <div class="container">
          <div class="listing_detail_head row">
            <div class="col-md-9">
              <h2 style=" color:aqua;"><?php echo htmlentities($result->BrandName); ?> ,
                <?php echo htmlentities($result->VehiclesTitle); ?></h2>
            </div>
            <div class="col-md-3">
              <div class="price_info" style=" color:aqua;">
                <p style="color:blue;">₹<?php echo htmlentities($result->PricePerDay); ?> </p>Per Day Rental

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9">
              <div class="main_features">
                <ul>

                  <li style="background-color:aqua;"> <i class="fa fa-calendar" aria-hidden="true" style="color:blue;"></i>
                    <h5><?php echo htmlentities($result->ModelYear); ?></h5>
                    <p style="color:blue;">Reg.Year</p>
                  </li>
                  <li style="background-color:aqua;"> <i class="fa fa-cogs" aria-hidden="true" style="color:blue;"></i>
                    <h5><?php echo htmlentities($result->FuelType); ?></h5>
                    <p style="color:blue;">Fuel Type</p>
                  </li>

                  <li style="background-color:aqua;"> <i class="fa fa-user-plus" aria-hidden="true" style="color:blue;"></i>
                    <h5><?php echo htmlentities($result->SeatingCapacity); ?></h5>
                    <p style="color:blue;">Seats</p>
                  </li>
                </ul>
              </div>
              <div class="listing_more_info" style="color:blue;">
                <div class="listing_detail_wrap" style="background-color:aqua;">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs gray-bg" role="tablist">
                    <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview"
                        role="tab" data-toggle="tab" style="color:blue;">Vehicle Overview </a></li>

                    <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab"
                        style="color:blue;">Accessories</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content" style="color:blue;">
                    <!-- vehicle-overview -->
                    <div role="tabpanel" class="tab-pane active" id="vehicle-overview">

                      <p><?php echo htmlentities($result->VehiclesOverview); ?></p>
                    </div>


                    <!-- Accessories -->
                    <div role="tabpanel" class="tab-pane" id="accessories">
                      <!--Accessories-->
                      <table style="background-color:aqua;">
                        <thead>
                          <tr>
                            <th colspan="2" style="color:blue;">Accessories</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Air Conditioner</td>
                            <?php if ($result->AirConditioner >= 1) {
                              ?>
                              <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>AntiLock Braking System</td>
                            <?php if ($result->AntiLockBrakingSystem >= 1) {
                              ?>
                              <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Power Steering</td>
                            <?php if ($result->PowerSteering == 1) {
                              ?>
                              <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } ?>
                          </tr>


                          <tr>

                            <td>Power Windows</td>

                            <?php if ($result->PowerWindows >= 1) {
                              ?>
                              <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>CD Player</td>
                            <?php if ($result->CDPlayer >= 1) {
                              ?>
                              <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Leather Seats</td>
                            <?php if ($result->LeatherSeats >= 1) {
                              ?>
                              <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Central Locking</td>
                            <?php if ($result->CentralLocking == 1) {
                              ?>
                              <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Power Door Locks</td>
                            <?php if ($result->PowerDoorLocks >= 1) {
                              ?>
                              <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } ?>
                          </tr>
                          <tr>
                            <td>Brake Assist</td>
                            <?php if ($result->BrakeAssist >= 1) {
                              ?>
                              <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Driver Airbag</td>
                            <?php if ($result->DriverAirbag == 1) {
                              ?>
                              <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Passenger Airbag</td>
                            <?php if ($result->PassengerAirbag >= 1) {
                              ?>
                              <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Crash Sensor</td>
                            <?php if ($result->CrashSensor >= 1) {
                              ?>
                              <td><i class="fa fa-check" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true" style="color:blue;"></i></td>
                            <?php } ?>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </div>
            <?php }
  } ?>

        </div>

        <!--Side-Bar-->
        <aside class="col-md-3">

          <div class="sidebar_widget" style="background-color:aqua;">
            <div class="widget_heading">
              <h5 style="color:blue;">> Book Now</h5>
            </div>
            <form method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="fromdate" placeholder="Date(DD/MM/YYYY) From...? "
                  required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="todate" placeholder="Date(DD/MM/YYYY) To...? " required>
              </div>
              <div class="form-group">
                <textarea rows="3" class="form-control" name="message" placeholder="Extra Reqirements..."
                  required></textarea>
              </div>
              <?php if ($_SESSION['login']) { ?>
                <div class="form-group">
                  <input type="submit" class="btn" name="submit" value="Book Now" style="background-color:blue;">
                </div>
              <?php } else { ?>
                <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal"
                  style="background-color:blue;">SIGN IN FOR BOOKING</a>

              <?php } ?>
            </form>
          </div>
        </aside>
        <!--/Side-Bar-->
      </div>

      <div class="space-20"></div>
      <div class="divider"></div>

      <!--Similar-Cars-->
      <div class="similar_cars" style="color:blue;">
        <h3 style="color:blue;">SIMILAR CARS</h3>
        <div class="row">
          <?php
          $bid = $_SESSION['brndid'];
          $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.VehiclesBrand=:bid";
          $query = $dbh->prepare($sql);
          $query->bindParam(':bid', $bid, PDO::PARAM_STR);
          $query->execute();
          $results = $query->fetchAll(PDO::FETCH_OBJ);
          $cnt = 1;
          if ($query->rowCount() > 0) {
            foreach ($results as $result) { ?>

              <div class="col-md-3 grid_listing">
                <div class="product-listing-m gray-bg" style="background-color:black;">
                  <div class="product-listing-img"> <a
                      href="vehicle-details.php?vhid=<?php echo htmlentities($result->id); ?>"><img
                        src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" class="img-responsive"
                        alt="image" /> </a>
                  </div>
                  <div class="product-listing-content">
                    <h5><a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id); ?>"
                        style="color:aqua;"><?php echo htmlentities($result->BrandName); ?> ,
                        <?php echo htmlentities($result->VehiclesTitle); ?></a></h5>
                    <p class="list-price" style="color:blue;">₹<?php echo htmlentities($result->PricePerDay); ?></p>

                    <ul class="features_list" style="background-color:aqua;">

                      <li style="color:blue;"><i class="fa fa-user" aria-hidden="true"
                          style="color:blue;"></i><?php echo htmlentities($result->SeatingCapacity); ?> seats</li>
                      <li style="color:blue;"><i class="fa fa-calendar" aria-hidden="true"
                          style="color:blue;"></i><?php echo htmlentities($result->ModelYear); ?> model</li>
                      <li style="color:blue;"><i class="fa fa-car" aria-hidden="true"
                          style="color:blue;"></i><?php echo htmlentities($result->FuelType); ?></li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php }
          } ?>

        </div>
      </div>
      <!--/Similar-Cars-->

    </div>
  </section>
  <!--/Listing-detail-->

  <!--Footer -->
  <?php include('includes/footer.php'); ?>
  <!-- /Footer-->


  <!--Login-Form -->
  <?php include('includes/login.php'); ?>
  <!--/Login-Form -->

  <!--Register-Form -->
  <?php include('includes/registration.php'); ?>

  <!--/Register-Form -->

  <!--Forgot-password-Form -->
  <?php include('includes/forgotpassword.php'); ?>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/interface.js"></script>
  <script src="assets/switcher/js/switcher.js"></script>
  <script src="assets/js/bootstrap-slider.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>