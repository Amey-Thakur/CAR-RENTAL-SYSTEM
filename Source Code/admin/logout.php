<?php
/**
 * Car Rental Database Management System - Admin Module
 * 
 * @author      Amey Thakur
 * @link        https://github.com/Amey-Thakur
 * @repository  https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM
 * @date        2021-01-19
 * @license     MIT
 */

session_start();
$_SESSION = array();
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
unset($_SESSION['login']);
session_destroy(); // destroy session
header("location:index.php");
?>