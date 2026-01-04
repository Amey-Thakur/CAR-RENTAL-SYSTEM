<?php
/**
 * ============================================================================
 * Car Rental Database Management System - Email Availability Checker
 * ============================================================================
 * 
 * This script serves as an AJAX endpoint to validate user email addresses
 * during the registration process. It checks the database for existing
 * accounts with the provided email and provides real-time feedback to the
 * user interface.
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
 * @subpackage  Utilities
 * @author      Amey Thakur (Lead)
 * @link        https://github.com/Amey-Thakur
 * @repository  https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM
 * @version     1.0.0
 * @date        2021-01-19
 * @license     MIT
 * 
 * @requires    PHP 7.0+
 * @requires    MySQL 5.7+
 * @requires    jQuery (frontend trigger)
 * 
 * ============================================================================
 * CHANGE LOG:
 * ----------------------------------------------------------------------------
 * 2021-01-19 - Initial release - AHNA Team
 * ============================================================================
 */

/**
 * Database Connection
 * 
 * Include the configuration file to establish a connection to the database
 * using PDO. This provides access to the $dbh connection object.
 */
require_once("includes/config.php");

/**
 * Input Validation & Processing
 * 
 * Checks if the 'emailid' parameter exists in the POST request.
 * If present, it sanitizes and validates the email before checking
 * the database for duplicates.
 */
if (!empty($_POST["emailid"])) {
	$email = $_POST["emailid"];

	// Validate email format using PHP's filter_var
	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		echo "error : You did not enter a valid email.";
	} else {
		// Prepare SQL statement to check for existing email
		$sql = "SELECT EmailId FROM tblusers WHERE EmailId=:email";
		$query = $dbh->prepare($sql);

		// Bind parameter to prevent SQL injection
		$query->bindParam(':email', $email, PDO::PARAM_STR);

		// Execute query
		$query->execute();
		$results = $query->fetchAll(PDO::FETCH_OBJ);
		$cnt = 1;

		/**
		 * Response Generation
		 * 
		 * Checks the row count of the query result.
		 * - If count > 0: Email exists. Return error message and disable submit button.
		 * - If count == 0: Email is available. Return success message and enable submit button.
		 */
		if ($query->rowCount() > 0) {
			echo "<span style='color:red'> Email already exists .</span>";
			echo "<script>$('#submit').prop('disabled',true);</script>";
		} else {
			echo "<span style='color:green'> Email available for Registration .</span>";
			echo "<script>$('#submit').prop('disabled',false);</script>";
		}
	}
}
?>