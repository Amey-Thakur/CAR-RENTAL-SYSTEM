<?php
/**
 * ============================================================================
 * Car Rental System - Admin Logout
 * ============================================================================
 * 
 * This file handles the secure termination of the admin session.
 * It clears all session variables, invalidates the session cookie, and
 * redirects the administrator back to the login page.
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
 * @subpackage  Admin
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

session_start();

// Unset all session variables
$_SESSION = array();

/**
 * Cookie Invalidation
 * 
 * If the session authenticates via cookies, secure deletion is required
 * to prevent session hijacking via old cookies.
 */
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 60 * 60,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Clear specific login variable and destroy session
unset($_SESSION['alogin']);
session_destroy();

// Redirect to Admin Login
header("location:index.php");
?>
