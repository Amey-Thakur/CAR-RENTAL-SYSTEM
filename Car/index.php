<?php
/**
 * ============================================================================
 * Car Rental Database Management System - Landing Page
 * ============================================================================
 * 
 * This file serves as the primary entry point for the Car Rental Portal.
 * It displays the homepage with marketing content, service highlights,
 * platform statistics, and provides access to user authentication modals.
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
 * @requires    Bootstrap 3.x
 * @requires    jQuery 3.x
 * 
 * ============================================================================
 * CHANGE LOG:
 * ----------------------------------------------------------------------------
 * 2021-01-19 - Initial release - AHNA Team
 * ============================================================================
 */

/**
 * Session Initialization
 * 
 * Starts the PHP session to maintain user state across page requests.
 * This is essential for tracking logged-in users and storing session data
 * such as user ID, email, and authentication tokens.
 */
session_start();

/**
 * Database Configuration
 * 
 * Includes the centralized database configuration file which establishes
 * the PDO connection to the MySQL database server. The $dbh variable
 * becomes available globally for all database operations.
 */
include('includes/config.php');

/**
 * Error Reporting Configuration
 * 
 * Suppresses all PHP error messages in production environment.
 * Note: Set to E_ALL during development for debugging purposes.
 * 
 * @production  error_reporting(0)
 * @development error_reporting(E_ALL)
 */
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<!--
============================================================================
HTML Document Structure
============================================================================
This document follows HTML5 standards with semantic markup.
The page is divided into the following main sections:
  1. Head - Meta information, CSS dependencies
  2. Header - Navigation and branding (included via PHP)
  3. Banner - Hero image with call-to-action
  4. Features - Service highlights and value propositions
  5. Statistics - Platform performance metrics
  6. Footer - Site footer with contact info (included via PHP)
  7. Modals - Authentication forms (login, register, forgot password)
  8. Scripts - JavaScript dependencies
============================================================================
-->

<head>
  <!-- Character Encoding: UTF-8 for international character support -->
  <meta charset="UTF-8">

  <!-- Page Title: Displayed in browser tab and search results -->
  <title>AHNA | CAR Rental</title>

  <!-- 
  ============================================================================
  CSS DEPENDENCIES
  ============================================================================
  The following stylesheets are loaded in order of specificity:
  1. Bootstrap - Core responsive grid system and UI components
  2. Custom Styles - Application-specific styling overrides
  3. Carousel Libraries - Owl Carousel for image sliders
  4. Slick Slider - Additional carousel functionality
  5. Font Awesome - Icon library for UI elements
  6. Google Fonts - Custom typography (Play font family)
  ============================================================================
  -->

  <!-- Bootstrap Framework: Responsive grid and core components -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

  <!-- Custom Application Styles: Brand-specific theming -->
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">

  <!-- Owl Carousel: Touch-enabled slider component -->
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">

  <!-- Slick Slider: Alternative carousel with advanced features -->
  <link href="assets/css/slick.css" rel="stylesheet">

  <!-- Bootstrap Slider: Range input component -->
  <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">

  <!-- Font Awesome: Scalable vector icons -->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">

  <!-- Google Fonts: Play font for modern typography -->
  <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">

  <!--
  ============================================================================
  INLINE STYLES
  ============================================================================
  Component-specific CSS for banner text overlay positioning.
  These styles position the promotional text and CTA button over the hero image.
  ============================================================================
  -->
  <style>
    /* Container positioning for absolute child elements */
    .container {
      position: relative;
      font-family: Arial;
    }

    /* Left-aligned text block for tagline */
    .text-block {
      position: absolute;
      bottom: 20px;
      left: 20px;
      color: white;
      padding-left: 20px;
      padding-right: 20px;
    }

    /* Right-aligned text block for CTA button */
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

  <!--
  ============================================================================
  HEADER SECTION
  ============================================================================
  Includes the shared navigation header component with:
  - Brand logo and identity
  - Main navigation menu
  - User authentication links (Login/Register or Profile/Logout)
  - Responsive mobile menu toggle
  ============================================================================
  -->
  <?php include('includes/header.php'); ?>

  <!--
  ============================================================================
  HERO BANNER SECTION
  ============================================================================
  Primary marketing banner with:
  - Full-width hero image
  - Promotional tagline overlay
  - Call-to-action button linking to vehicle search
  ============================================================================
  -->
  <section id="banner">
    <!-- Hero Image: Full-width promotional banner -->
    <img src="admin/img/vehicleimages/banner-image.jpg" style="width:100%;">

    <div class="container">
      <!-- Promotional Tagline: COVID-19 safety messaging -->
      <div class="text-block">
        <h4 style="color:white;">DRIVE IN A SANITISED CAR</h4><br /><br />
      </div>

      <!-- Primary Call-to-Action: Vehicle search link -->
      <div class="text-blockk">
        <a href="car-listing.php" class="btn" style="background-color:blue;">Search Cars</a><br /><br /><br />
      </div>
    </div>
  </section>

  <!--
  ============================================================================
  VALUE PROPOSITION SECTION
  ============================================================================
  Displays the key selling points and service features including:
  - Self-drive rental concept
  - Fuel cost inclusion policy
  - Transparent pricing guarantee
  - Flexible package options
  - Pan-India travel permits
  - 24/7 roadside assistance
  - Comprehensive damage insurance
  ============================================================================
  -->
  <section style="background-color:black;">
    <section id="banner">
      <div class="section-header text-center">
        <br />
        <!-- Section Heading -->
        <h2 style="color:aqua;">Self Drive Cars on Rent</h2>

        <!-- Taglines -->
        <h3 style="color:white;">
          <span>We simplified car rentals, so you can focus on what's important to you.</span>
        </h3>
        <h3 style="color:white;">
          <span>Unbeatable Rates. Easy & Quick Online Booking. Clean & Well Maintained Fleet.</span>
        </h3>

        <!-- Feature Cards Grid -->
        <p>
        <div class="items">
          <!-- Feature 1: Fuel Cost Included -->
          <div>
            <h3 style="color:aqua;">Fuel Cost Included</h3>
            <p style="color:white;">Don't worry about mileage! All fuel costs are included. If you refill fuel, we'll
              pay you back!</p>
          </div>

          <!-- Feature 2: No Hidden Charges -->
          <div>
            <h3 style="color:aqua;">No Hidden Charges</h3>
            <p style="color:white;">Our prices include taxes and insurance.<br>What you see is what you really pay!</p>
          </div>

          <!-- Feature 3: Flexible Pricing -->
          <div>
            <h3 style="color:aqua;">Flexi Pricing Packages</h3>
            <p style="color:white;">One size never fits all! Choose a balance of time and kilometers that works best for
              you.</p>
          </div>

          <!-- Feature 4: All-India Permits -->
          <div>
            <h3 style="color:aqua;">Go Anywhere</h3>
            <p style="color:white;">Our cars have all-India permits. Just remember to pay state tolls and entry taxes.
            </p>
          </div>

          <!-- Feature 5: 24/7 Support -->
          <div>
            <h3 style="color:aqua;">24x7 Roadside Assistance</h3>
            <p style="color:white;">We have round-the-clock, pan India partners. Help is never far away from you.</p>
          </div>

          <!-- Feature 6: Insurance Coverage -->
          <div>
            <h3 style="color:aqua;">Damage Insurance</h3>
            <p style="color:white;">All your bookings include damage insurance! Drive safe, but don't worry!</p>
          </div>
        </div>
        </p>
      </div>
    </section>

    <!--
    ============================================================================
    PLATFORM STATISTICS SECTION
    ============================================================================
    Displays key performance indicators (KPIs) to build trust:
    - Daily ride count
    - Total kilometers traveled
    - Registered user base
    - Fleet size
    
    These statistics are hardcoded for demonstration purposes.
    In a production environment, these would be fetched from the database.
    ============================================================================
    -->
    <section class="fun-facts-section">
      <div class="container div_zindex">
        <div class="row">
          <!-- Statistic 1: Daily Rides -->
          <div class="col-lg-3 col-xs-6 col-sm-3">
            <div class="fun-facts-m" style="background-color:blue;">
              <div class="cell">
                <h2><i class="fa fa-calendar" aria-hidden="true"></i>3000+</h2>
                <p style="color:white;">Rides Daily</p>
              </div>
            </div>
          </div>

          <!-- Statistic 2: Distance Covered -->
          <div class="col-lg-3 col-xs-6 col-sm-3">
            <div class="fun-facts-m" style="background-color:blue;">
              <div class="cell">
                <h2><i class="fa fa-car" aria-hidden="true"></i>36,00,000+</h2>
                <p style="color:white;">Km Travelled</p>
              </div>
            </div>
          </div>

          <!-- Statistic 3: User Base -->
          <div class="col-lg-3 col-xs-6 col-sm-3">
            <div class="fun-facts-m" style="background-color:blue;">
              <div class="cell">
                <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>95,000+</h2>
                <p style="color:white;">Happy users</p>
              </div>
            </div>
          </div>

          <!-- Statistic 4: Fleet Size -->
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

      <!-- Visual overlay for depth effect -->
      <div class="dark-overlay"></div>
    </section>

    <!--
    ============================================================================
    FOOTER SECTION
    ============================================================================
    Includes the shared footer component with:
    - Contact information
    - Social media links
    - Newsletter subscription
    - Copyright notice
    ============================================================================
    -->
    <?php include('includes/footer.php'); ?>

    <!--
    ============================================================================
    AUTHENTICATION MODALS
    ============================================================================
    Bootstrap modal dialogs for user authentication:
    - Login form with email/password
    - Registration form with user details
    - Forgot password form with email recovery
    
    These modals are triggered by header navigation links.
    ============================================================================
    -->
    <?php include('includes/login.php'); ?>
    <?php include('includes/registration.php'); ?>
    <?php include('includes/forgotpassword.php'); ?>

    <!--
    ============================================================================
    JAVASCRIPT DEPENDENCIES
    ============================================================================
    Scripts are loaded at the end of body for optimal page performance.
    Order of loading is important due to dependencies:
    1. jQuery - Core library required by all plugins
    2. Bootstrap - UI framework JavaScript
    3. Interface - Custom application scripts
    4. Slider plugins - Carousel functionality
    ============================================================================
    -->

    <!-- jQuery: Core JavaScript library -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap: UI component interactions -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Interface: Custom application logic -->
    <script src="assets/js/interface.js"></script>

    <!-- Bootstrap Slider: Range input functionality -->
    <script src="assets/js/bootstrap-slider.min.js"></script>

    <!-- Slick Slider: Carousel implementation -->
    <script src="assets/js/slick.min.js"></script>

    <!-- Owl Carousel: Alternative carousel library -->
    <script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>