<?php
/**
 * ============================================================================
 * Car Rental System - Password Management
 * ============================================================================
 * 
 * This file allows users to securely update their account password.
 * It includes client-side validation for password matching and server-side
 * verification of the current password before applying changes.
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
 * @subpackage  UserDashboard
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
 * 2021-01-19 - Initial release - Amey Thakur
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

/**
 * Access Control and Password Logic
 */
if (strlen($_SESSION['login']) == 0) {
  // Redirect to login if session is invalid
  header('location:index.php');
} else {

  /**
   * Password Update Handler
   * Processes the form submission for password change.
   */
  if (isset($_POST['update'])) {
    // Hash passwords using MD5 (Legacy system requirement)
    $password = md5($_POST['password']);
    $newpassword = md5($_POST['newpassword']);
    $email = $_SESSION['login'];

    // Verify Current Password
    $sql = "SELECT Password FROM tblusers WHERE EmailId=:email and Password=:password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);

    // If match found, update to new password
    if ($query->rowCount() > 0) {
      $con = "update tblusers set Password=:newpassword where EmailId=:email";
      $chngpwd1 = $dbh->prepare($con);
      $chngpwd1->bindParam(':email', $email, PDO::PARAM_STR);
      $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
      $chngpwd1->execute();
      $msg = "Your Password succesfully changed";
    } else {
      $error = "Your current password is wrong";
    }
  }
  ?>

  <!DOCTYPE HTML>
  <html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

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
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
      href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
      href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
      href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Client-Side Validation Script -->
    <script type="text/javascript">
      function valid() {
        if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
          alert("New Password and Confirm Password Field do not match  !!");
          document.chngpwd.confirmpassword.focus();
          return false;
        }
        return true;
      }
    </script>

    <style>
      .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
      }

      .succWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
      }

      div {
        font-family: Play;
        font-size: 20px;
        color: BLUE;
      }
    </style>
  </head>

  <body style="background-color:aqua;">

    <!-- Color Switcher -->
    <?php include('includes/colorswitcher.php'); ?>

    <!-- Header -->
    <?php include('includes/header.php'); ?>

    <!-- Page Title -->
    <center>
      <div class="page-heading">
        <br /><br />
        <h1 style="color:blue;">UPDATE PASSWORD</h1>
      </div>
    </center>

    <?php
    // Fetch user profile info for sidebar display
    $useremail = $_SESSION['login'];
    $sql = "SELECT * from tblusers where EmailId=:useremail";
    $query = $dbh->prepare($sql);
    $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;

    if ($query->rowCount() > 0) {
      foreach ($results as $result) { ?>

        <div class="container">
          <!-- Profile Header Info -->
          <div class="user_profile_info gray-bg padding_4x4_40" style="background-color:aqua;">
            <div class="upload_user_logo">
              <img src="assets\images\dealer-logo.png" alt="image">
            </div>
            <div class="dealer_info">
              <h5><?php echo htmlentities($result->FullName); ?></h5>
              <p>
                <?php echo htmlentities($result->Address); ?><br>
                <?php echo htmlentities($result->City); ?>&nbsp;<?php echo htmlentities($result->Country); ?>
              </p>
            </div>
          </div>
        </div>
      <?php }
    } ?>

    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 col-sm-3">
        <?php include('includes/sidebar.php'); ?>

        <!-- Password Form -->
        <div class="col-md-6 col-sm-8" style="background-color:black;">
          <div class="profile_wrap">
            <form name="chngpwd" method="post" onSubmit="return valid();">

              <center>
                <h5 class="uppercase underline" style="background-color:blue;">MY PASSWORD</h5>
              </center>

              <!-- Notifications -->
              <?php if ($error) { ?>
                <div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div>
              <?php } else if ($msg) { ?>
                  <div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div>
              <?php } ?>

              <!-- Input Fields -->
              <div class="form-group">
                <label class="control-label" style="color:blue;">> CURRENT PASSWORD</label>
                <input class="form-control white_bg" id="password" name="password" type="password"
                  placeholder="Current Password" required>
              </div>

              <div class="form-group">
                <label class="control-label" style="color:blue;">> NEW PASSWORD</label>
                <input class="form-control white_bg" id="newpassword" type="password" name="newpassword"
                  placeholder="New Password" required>
              </div>

              <div class="form-group">
                <label class="control-label" style="color:blue;">> CONFIRM NEW PASSWORD</label>
                <input class="form-control white_bg" id="confirmpassword" type="password" name="confirmpassword"
                  placeholder="Confirm New Password" required>
              </div>

              <!-- Submit Button -->
              <div class="form-group">
                <input type="submit" value="UPDATE" name="update" id="submit" class="btn btn-block"
                  style="background-color:blue;">
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

    <br /><br />

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
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

  </body>

  </html>
<?php } ?>
