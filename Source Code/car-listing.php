<?php
/**
 * ============================================================================
 * Car Rental System - Car Listing Page
 * ============================================================================
 * 
 * This file handles the display of the vehicle inventory. It fetches vehicle
 * details from the database, supports pagination (if implemented), and provides
 * sidebar filters for users to refine their search by Brand or Fuel Type.
 * 
 * ----------------------------------------------------------------------------
 * AUTHORSHIP & CREDITS (Amey Thakur)
 * ----------------------------------------------------------------------------
 * This project was developed by the Amey Thakur:
 * - Amey Thakur
 * 
 * 
 * 
 * 
 * @package     CarRentalSystem
 * @subpackage  Frontend
 * @author      Amey Thakur (Lead)
 * @link        https://github.com/Amey-Thakur
 * @repository  https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM
 * @version     1.0.0
 * @date        2021-01-19
 * @license     MIT
 * 
 * @requires    PHP 7.0+
 * @requires    MySQL 5.7+
 * @requires    Bootstrap 3.x
 * @requires    jQuery 3.x
 * 
 * ============================================================================
 * CHANGE LOG:
 * ----------------------------------------------------------------------------
 * 2021-01-19 - Initial release - Amey Thakur
 * ============================================================================
 */

/**
 * Session Initialization
 * 
 * Starts any existing session to ensure user state (login status) is preserved
 * across the navigation.
 */
session_start();

/**
 * Database Configuration
 * 
 * Includes the main configuration file to establish the PDO database connection.
 */
include('includes/config.php');

/**
 * Error Reporting
 * 
 * Suppresses error display for production use case.
 */
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
  <!-- 
  ============================================================================
  META INFORMATION & SEO
  ============================================================================
  -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <title>AHNA | CAR Rental</title>

  <!-- 
  ============================================================================
  STYLESHEET DEPENDENCIES
  ============================================================================
  1. Bootstrap: Framework for responsive layout.
  2. Style.css: Custom override styles.
  3. Owl Carousel: Touch-enabled jQuery plugin for carousels.
  4. Slick: Standard carousel.
  5. Bootstrap Slider: Input range sliders.
  6. FontAwesome: Iconography.
  -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">

  <!-- Apple Touch Icons for iOS home screen shortcuts -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144"
    href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114"
    href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
  <link rel="apple-touch-icon-precomposed" sizes="72x72"
    href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">

  <!-- Typography: Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">

  <!-- Inline styles for component-specific overrides -->
  <style>
    div {
      font-family: Play;
      font-size: 20px;
      color: BLUE;
    }
  </style>
</head>

<body style="background-color:aqua;">

  <!--
  ============================================================================
  HEADER COMPONENT
  ============================================================================
  Includes the common navigation bar.
  -->
  <?php include('includes/header.php'); ?>

  <br /><br />

  <!-- Main Grid Container -->
  <div class="container">
    <div class="row">

      <!-- 
      ========================================================================
      PRIMARY CONTENT COLUMN (Right Side)
      Contains the list of vehicles.
      ========================================================================
      (col-md-push-3 used for visual reordering if needed, ensuring content comes first in DOM)
      -->
      <div class="col-md-9 col-md-push-3">

        <!-- Result Count / Sorting Options -->
        <div class="result-sorting-wrapper" style="background-color:black;">
          <div class="sorting-count" style="color:blue;">
            <?php
            // Query 1: Fetch total count of vehicles
            $sql = "SELECT id from tblvehicles";
            $query = $dbh->prepare($sql);
            $query->bindParam(':vhid', $vhid, PDO::PARAM_STR); // Note: :vhid is not used in the query string above but bound here.
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            $cnt = $query->rowCount();
            ?>
            <p style="color:blue;">
              <center><span style="color:blue;"><?php echo htmlentities($cnt); ?> CARS</span></center>
            </p>
          </div>
        </div>

        <?php
        // Query 2: Fetch vehicle details along with Brand Name using a JOIN operation
        $sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $cnt = 1;

        // Check if results exist
        if ($query->rowCount() > 0) {
          // Iterate through each vehicle record
          foreach ($results as $result) {
            ?>
            <!-- Vehicle Card Component -->
            <div class="product-listing-m gray-bg">
              <div class="product-listing-img">
                <!-- Vehicle Image -->
                <img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" class="img-responsive"
                  alt="Image" /> </a>
              </div>

              <div class="product-listing-content">
                <!-- Vehicle Title & Brand -->
                <h5>
                  <a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id); ?>">
                    <?php echo htmlentities($result->BrandName); ?>, <?php echo htmlentities($result->VehiclesTitle); ?>
                  </a>
                </h5>

                <!-- Pricing Information -->
                <p class="list-price">₹<?php echo htmlentities($result->PricePerDay); ?> Per Day Rental</p>

                <!-- Key Attributes List -->
                <ul>
                  <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity); ?>
                    seats</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear); ?> model
                  </li>
                  <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType); ?></li>
                </ul>

                <!-- Action Button: View Details -->
                <a href="vehicle-details.php?vhid=<?php echo htmlentities($result->id); ?>" class="btn"
                  style="background-color:blue;">View Details </a>
              </div>
            </div>
          <?php
          } // End foreach
        } // End if
        ?>
      </div>

      <!-- 
      ========================================================================
      SIDEBAR WIDGETS (Left Side)
      Contains search filters for Brands and Fuel Type.
      ========================================================================
      -->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget" style="background-color:black;">
          <div class="widget_heading">
            <h5 style="color:blue;">> Find Your Car </h5>
          </div>

          <div class="sidebar_filter">
            <!-- Filter Form: Submits to search-carresult.php -->
            <form action="search-carresult.php" method="post">

              <!-- Filter: Select Brand -->
              <div class="form-group select">
                <select class="form-control" name="brand">
                  <option>Select Brand</option>
                  <?php
                  // Query 3: Fetch all brands for the dropdown
                  $sql = "SELECT * from  tblbrands ";
                  $query = $dbh->prepare($sql);
                  $query->execute();
                  $results = $query->fetchAll(PDO::FETCH_OBJ);
                  $cnt = 1;
                  if ($query->rowCount() > 0) {
                    foreach ($results as $result) { ?>
                      <option value="<?php echo htmlentities($result->id); ?>">
                        <?php echo htmlentities($result->BrandName); ?>
                      </option>
                    <?php }
                  } ?>
                </select>
              </div>

              <!-- Filter: Select Fuel Type -->
              <div class="form-group select">
                <select class="form-control" name="fueltype">
                  <option>Select Fuel Type</option>
                  <option value="Petrol">Petrol</option>
                  <option value="Diesel">Diesel</option>
                </select>
              </div>

              <!-- Submit Button -->
              <div class="form-group">
                <button type="submit" class="btn btn-block" style="background-color:blue;">SEARCH</button>
              </div>
            </form>
          </div>
        </div>
      </aside>
      <!-- /Sidebar -->

    </div>
  </div>

  <br /><br />

  <!--
  ============================================================================
  FOOTER & MODALS
  ============================================================================
  -->
  <?php include('includes/footer.php'); ?>
  <?php include('includes/login.php'); ?>
  <?php include('includes/registration.php'); ?>
  <?php include('includes/forgotpassword.php'); ?>

  <!--
  ============================================================================
  JAVASCRIPT LIBRARIES
  ============================================================================
  -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/interface.js"></script>
  <script src="assets/switcher/js/switcher.js"></script>
  <script src="assets/js/bootstrap-slider.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
</body>

</html>
