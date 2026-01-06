<?php
/**
 * ============================================================================
 * Car Rental System - Page Footer
 * ============================================================================
 * 
 * This file renders the global footer section of the website. It includes the
 * navigation links, social media connections (if enabled), copyright information,
 * and the newsletter subscription functionality.
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
 * @subpackage  TemplateParts
 * @author      Amey Thakur (Lead)
 * @link        https://github.com/Amey-Thakur
 * @repository  https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM
 * @version     1.0.0
 * @date        2021-01-19
 * @license     MIT
 * 
 * ============================================================================
 * CHANGE LOG:
 * ----------------------------------------------------------------------------
 * 2021-01-19 - Initial release - Amey Thakur
 * ============================================================================
 */

/**
 * Newsletter Subscription Handler
 * 
 * Processes form submission for the newsletter.
 * Checks if the email already exists in the 'tblsubscribers' table to prevent
 * duplicates before inserting.
 */
if (isset($_POST['emailsubscibe'])) {
  $subscriberemail = $_POST['subscriberemail'];

  // Check for existing subscription
  $sql = "SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
  $query = $dbh->prepare($sql);
  $query->bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  $cnt = 1;

  if ($query->rowCount() > 0) {
    echo "<script>alert('Already Subscribed.');</script>";
  } else {
    // Insert new subscriber
    $sql = "INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();

    if ($lastInsertId) {
      echo "<script>alert('Subscribed successfully.');</script>";
    } else {
      echo "<script>alert('Something went wrong. Please try again');</script>";
    }
  }
}
?>

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <!-- About Us & Navigation Links -->
        <div class="col-md-6">
          <h6>About Us</h6>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="car-listing.php">CARS</a></li>
            <li><a href="contact-us.php">CONTACT US</a></li>
            <li><a href="page.php?type=aboutus">ABOUT US</a></li>
          </ul>
        </div>

        <!-- Newsletter Subscription Form -->
        <div class="col-md-3 col-sm-6">
          <h6>Let's Keep in Touch</h6>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input"
                  style="background-color:white;" required placeholder="Enter Your Email" />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block"
                style="background-color:blue;">Subscribe</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Copyright Section -->
  <div class="footer-bottom" style="background-color:blue;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <!-- Social icons or additional links could go here -->
        </div>
        <div class="col-md-6 col-md-pull-6">
          <center>
            <p class="copy-right" style="background-color:blue;">Copyright &copy; 2020 AHNA car India Private Ltd. All
              rights reserved.</p>
          </center>
        </div>
      </div>
    </div>
  </div>
</footer>
