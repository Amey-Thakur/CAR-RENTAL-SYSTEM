<?php
/**
 * ============================================================================
 * Car Rental System - Logout Handler
 * ============================================================================
 * 
 * This script handles the secure termination of user sessions. It performs
 * a complete cleanup of session data, including clearing session variables,
 * invalidating session cookies, and destroying the server-side session.
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
 * @subpackage  Authentication
 * @author      Amey Thakur (Lead)
 * @link        https://github.com/Amey-Thakur
 * @repository  https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM
 * @version     1.0.0
 * @date        2021-01-19
 * @license     MIT
 * 
 * @requires    PHP 7.0+
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
 * Must be called before destroying the session to access the current
 * session configuration.
 */
session_start();

/**
 * Clear Session Variables
 * 
 * Resets the $_SESSION superglobal array to an empty array, effectively
 * removing all stored session data for the current script execution.
 */
$_SESSION = array();

/**
 * Cookie Invalidation
 * 
 * If the session is propagated via cookies, this block forcibly expires
 * the session cookie on the client side by setting its expiration time
 * to the past. This ensures the browser discards the session identifier.
 */
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 60 * 60, // Set expiration to 1 hour ago
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

/**
 * Specific Session Key Cleanup
 * 
 * Explicitly unsets the 'login' key as a redundant safety measure.
 */
unset($_SESSION['login']);

/**
 * Destroy Session
 * 
 * Completely removes the session data from the server storage.
 */
session_destroy();

/**
 * Redirection
 * 
 * Redirects the user back to the application landing page (index.php)
 * after successful logout.
 */
header("location:index.php");
?>
