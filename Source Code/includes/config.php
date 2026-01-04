<?php
/**
 * ============================================================================
 * Car Rental Database Management System - Database Configuration
 * ============================================================================
 * 
 * This file contains the database configuration parameters and establishes
 * the connection to the MySQL database using PDO (PHP Data Objects).
 * It uses the Singleton pattern concept implicitly by providing a shared
 * connection handle ($dbh) used throughout the application.
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
 * @subpackage  Configuration
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
 * Database Credentials
 * 
 * Configuration constants for connecting to the database.
 * NOTE: In a production environment, these should be stored in environment
 * variables or a secure configuration file outside the web root.
 */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'carrental');

/**
 * Database Connection Establishment
 * 
 * Attempts to create a new PDO connection instance.
 * Sets the character set to UTF-8 to support international characters.
 */
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    // Enable exception throwing for error handling
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Terminate execution and display error if connection fails
    exit("Error: " . $e->getMessage());
}
?>