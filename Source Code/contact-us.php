<?php
/**
 * ============================================================================
 * Car Rental System - Contact Page
 * ============================================================================
 * 
 * This file handles user inquiries and general contact information.
 * It provides a web form for users to submit messages to the administration
 * and displays the company's contact details (Address, Email, Phone) fetched
 * dynamically from the database.
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
 * Form Submission Handling
 * 
 * Processes the 'Contact Us' form data when the submit button (named 'send')
 * is clicked. It captures Name, Email, Contact Number, and Message, then
 * inserts them into the 'tblcontactusquery' table.
 */
if (isset($_POST['send'])) {
  $name = $_POST['fullname'];
  $email = $_POST['email'];
  $contactno = $_POST['contactno'];
  $message = $_POST['message'];
  
  // SQL Statement for Insertion
  $sql = "INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
  $query = $dbh->prepare($sql);
  
  // Parameter Binding (to prevent SQL Injection)
  $query->bindParam(':name', $name, PDO::PARAM_STR);
  $query->bindParam(':email', $email, PDO::PARAM_STR);
  $query->bindParam(':contactno', $contactno, PDO::PARAM_STR);
  $query->bindParam(':message', $message, PDO::PARAM_STR);
  
  // Execute Query
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  
  // Feedback Mechanism
  if ($lastInsertId) {
    $msg = "Query Sent. We will contact you shortly";
  } else {
    $error = "Something went wrong. Please try again";
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
  
  <!-- CSS Dependencies -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- Typography -->
  <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">

  <!-- Component Styles -->
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
  </style>
</head>

<body style=" background-color:aqua;">

  <!-- Header Inclusion -->
  <?php include('includes/header.php'); ?>
  
  <section class="contact_us section-padding">
    <div class="container">
      <div class="row">
        
        <!-- Contact Details Column -->
        <div class="col-md-6">
          <h3 style="color:blue;">REACH US</h3>
          <div class="contact_detail">
            <?php
            // Fetch Contact Info from Database
            $pagetype = $_GET['type'];
            $sql = "SELECT Address,EmailId,ContactNo from tblcontactusinfo";
            $query = $dbh->prepare($sql);
            $query->bindParam(':pagetype', $pagetype, PDO::PARAM_STR); // Note: :pagetype unused in query string, but harmless.
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            $cnt = 1;
            
            if ($query->rowCount() > 0) {
              foreach ($results as $result) { ?>
                <ul>
                  <!-- Address -->
                  <li>
                    <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true" style="color:blue;"></i></div>
                    <div class="contact_info_m" style="color:blue;"><?php echo htmlentities($result->Address); ?></div>
                  </li>
                  <!-- Email -->
                  <li>
                    <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true" style="color:blue;"></i></div>
                    <div class="contact_info_m" style="color:blue;">
                        <a href="mailto:anishaguptarp@gmail.com" style="color:blue;">
                            <?php echo htmlentities($result->EmailId); ?>
                        </a>
                    </div>
                  </li>
                  <!-- Phone -->
                  <li>
                    <div class="icon_wrap" style="color:blue;"><i class="fa fa-phone" aria-hidden="true" style="color:blue;"></i></div>
                    <div class="contact_info_m"><a href="tel:61-1234-567-90" style="color:blue;"><?php echo htmlentities($result->ContactNo); ?></a></div>
                  </li>
                </ul>
              <?php }
            } ?>
          </div>
        </div>
        
        <!-- Contact Form Column -->
        <div class="col-md-6">
          <h3 style="color:blue;">LET'S KEEP IN TOUCH</h3>
          
          <!-- Notification Area: Success/Error Messages -->
          <?php if ($error) { ?>
            <div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div>
          <?php } else if ($msg) { ?>
            <div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div>
          <?php } ?>
          
          <div class="contact_form gray-bg" style="background-color:black;">
            <form method="post">
              <div class="form-group">
                <label class="control-label" style="color:blue;">> NAME</label>
                <input type="text" name="fullname" class="form-control white_bg" id="fullname" placeholder="Enter Your Name" required>
              </div>
              <div class="form-group">
                <label class="control-label" style="color:blue;">> EMAIL ADDRESS</label>
                <input type="email" name="email" class="form-control white_bg" id="emailaddress" placeholder="Enter Email Address" required>
              </div>
              <div class="form-group">
                <label class="control-label" style="color:blue;">> CONTACT NUMBER </label>
                <input type="text" name="contactno" class="form-control white_bg" id="phonenumber" placeholder="Enter Contact Number" required>
              </div>
              <div class="form-group">
                <label class="control-label" style="color:blue;">> QUERY</label>
                <textarea class="form-control white_bg" name="message" rows="3" placeholder="Enter Your Query" required></textarea>
              </div>
              <div class="form-group">
                <button class="btn" type="submit" name="send" type="submit" style="background-color:blue;">ASK US</button>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  
  <!-- Footer & Modals -->
  <?php include('includes/footer.php'); ?>
  <?php include('includes/login.php'); ?>
  <?php include('includes/registration.php'); ?>
  <?php include('includes/forgotpassword.php'); ?>

  <!-- Script Dependencies -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/interface.js"></script>
  <script src="assets/switcher/js/switcher.js"></script>
  <script src="assets/js/bootstrap-slider.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Original Template Credits Preserved for Legacy Reference -->
<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/contact-us.html -->

</html>
