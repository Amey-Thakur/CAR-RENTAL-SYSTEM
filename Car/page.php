<?php
/**
 * ============================================================================
 * Car Rental Database Management System - Dynamic Page Loader
 * ============================================================================
 * 
 * This script is responsible for rendering dynamic content pages such as 
 * "About Us", "Privacy Policy", "Terms of Service", etc. It fetches the 
 * page content from the database based on the 'type' parameter passed in 
 * the URL.
 * 
 * ----------------------------------------------------------------------------
 * AUTHORSHIP & CREDITS (AHNA Team)
 * ----------------------------------------------------------------------------
 * This project was developed by the AHNA team:
 * - Amey Thakur
 * - Hasan Rizvi
 * - Nithya Gnanasekar
 * - Anisha Gupta
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
 * 
 * ============================================================================
 * CHANGE LOG:
 * ----------------------------------------------------------------------------
 * 2021-01-19 - Initial release - AHNA Team
 * ============================================================================
 */

/**
 * Session Initialization
 */
session_start();

/**
 * Error Reporting
 */
error_reporting(0);

/**
 * Database Connection
 */
include('includes/config.php');
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
  
  <!-- CSS Dependencies -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">

  <!-- Browser Icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body style="background-color:aqua;">

  <!-- Header -->
  <?php include('includes/header.php'); ?>
  
  <?php
  /**
   * Content Retrieval
   * 
   * Fetches the specific page content from 'tblpages' based on the 'type' GET parameter.
   */
  $pagetype = $_GET['type'];
  $sql = "SELECT type,detail,PageName from tblpages where type=:pagetype";
  $query = $dbh->prepare($sql);
  $query->bindParam(':pagetype', $pagetype, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  $cnt = 1;
  
  if ($query->rowCount() > 0) {
    foreach ($results as $result) { ?>

      <!-- Page Content Container -->
      <div class="booking-details text-justify">

        <center>
          <div class="page-heading">
            <br /><br />
            <!-- Dynamic Page Title (Note: Hardcoded 'ABOUT US' in original, might want to use PageName if consistent for all types) -->
            <!-- The original code had 'ABOUT US' hardcoded. Keeping it as is to preserve layout, but noting that PageName is available: <?php echo htmlentities($result->PageName); ?> -->
            <h1 style="color:blue;">ABOUT US</h1>
            <br /><br />
          </div>
        </center>

        <section class="aboutus ng-scope">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="text-about" style="color:black;">
                  <!-- 
                       The following content block appears to be static HTML mixed with 
                       potential dynamic content. The 'detail' field from database 
                       is NOT printed here in the original code? 
                       Wait, checking original code...
                       Original code: echo htmlentities($result->PageName) was NOT used inside the <p> tags.
                       It seems the original file had hardcoded text for "AHNA Self Drive Cars".
                       
                       HOWEVER, usually 'page.php?type=aboutus' would fetch content from DB.
                       The provided original code has a LARGE block of static text about AHNA, 
                       and does NOT echo $result->detail. 
                       This implies this file might be specifically modified for 'About Us' or overrides the DB content.
                       
                       I will preserve the static text provided in the input file as it contains 
                       specific "AHNA" branding text which is crucial for the user.
                  -->
                  <p>AHNA Self Drive Cars is a self drive brand. INDIA’s second largest self drive car rental company
                    currently managing more than 65,000 cars in our fleet in INDIA. With AHNA, we endeavor to provide Indian
                    users the Best in World class service and technology at Indian prices. AHNA is currently present in 20
                    Indian cities including Bangalore, Pune, Mumbai, Delhi-NCR, Hyderabad, Chennai, Kolkata, Jaipur, Indore,
                    Chandigarh, Ahmedabad, Surat, Vadodara Ludhiana, Amritsar, Bhopal Goa, Dehradun, Rishikesh and Haridwar.
                  </p>
                  <p>&nbsp;</p>
                  <p>In India, ORIX is already the largest B2B Car Rental player in India, and having captured the B2B
                    chauffeur driven car market, entering the self-driven car market was just a matter of time for us. It
                    all started in 2016 when we at ORIX started receiving requests from users like yourself who wanted our
                    world class maintained cars but also demanded the privacy of only their loved ones. We felt that there
                    is a strong need to address this situation, and AHNA Self Drive cars thus became our answer for this
                    need of our users. And now that we are here, you don’t need to look anywhere else for your need of self
                    drive car rentals – be it hatchbacks, sedans, SUVs, MUVs or luxury cars.</p>
                  <p>&nbsp;</p>
                  <p>AHNA Self Drive Cars gives you a choize of using our amazing cars with your choize of privacy and
                    freedom, so that you can start enjoying your road journey as you wish without waiting to reach your
                    destination. To top it up and be true in our endeavor, AHNA Self Drive Car Rentals in India is available
                    without any kilometer capping, thus offering unlimited kilometers on all bookings made by you. Best
                    things in the World do not come with an usage limit, and unlimited kilometers is our way of telling you
                    that your choize of our cars is among the best in the World. This we believe will be a small step
                    towards making you enjoy your journey to the fullest, by concentrating on counting memories, not
                    kilometers.</p>
                  <p>&nbsp;</p>
                  <p>Having your friends and family coming over for a long weekend? Bored of driving your own vehicle and
                    wanting to try your hands on a different car? Used to owning your own car but somehow stranded without
                    one? Peak hour rush in all modes of public transport horrifying you? Or just afraid of running the risk
                    of being fleeced by local autowallahs and taxiwallahs in a new town? Whatever your reason may be, AHNA
                    is your default choize to address all these reasons.</p>
                  <p>&nbsp;</p>
                  <p>You can get your choize of self-drive car hand delivered at your doorstep, your office or at your
                    airport’s arrival terminal with our home and airport delivery options.&nbsp;</p>
                  <p>&nbsp;</p>
                  <p>Here is what makes AHNA self-drive car rental service your first choice for renting self drive cars
                    anywhere in India –</p>
                  <p>&nbsp;</p>
                  <u>
                    <li>Rent a Self-Drive Car by the Hour, Day, Week or Month</li>
                    <li>Unlimited Kilometers - No hassle of keeping fuel slips and seeking reimbursements</li>
                    <li>Newest Fleet of Cars across Categories</li>
                    <li>No Hidden Charges</li>
                    <li>Lowest Fares Guaranteed</li>
                    <li>All Inclusive Fares - No additional cost for Insurance, Tax or Pollution</li>
                    <li>Your maximum liability in case of an accident is limited to your refundable security deposit</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p><a href="car-listing.php" style="color:blue;">So what are you waiting for? Time to book and ride!</a>
                    </p>
                    <br /><br />
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

    <?php }
  } ?>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

  <!-- Modals -->
  <?php include('includes/login.php'); ?>
  <?php include('includes/registration.php'); ?>
  <?php include('includes/forgotpassword.php'); ?>

  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/interface.js"></script>
  <script src="assets/switcher/js/switcher.js"></script>
  <script src="assets/js/bootstrap-slider.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:26:12 GMT -->

</html>