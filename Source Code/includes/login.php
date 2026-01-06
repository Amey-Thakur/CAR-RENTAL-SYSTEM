<?php
/**
 * ============================================================================
 * Car Rental System - User Authentication
 * ============================================================================
 * 
 * This file handles the user login process. It uses a modal interface for
 * credential submission and performs server-side validation against the
 * database. Successful login initializes session variables for the user.
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
 * ============================================================================
 * CHANGE LOG:
 * ----------------------------------------------------------------------------
 * 2021-01-19 - Initial release - Amey Thakur
 * ============================================================================
 */

/**
 * Login Handler
 * 
 * Processes the login form submission.
 * Hashes the submitted password using MD5 and compares it with the stored hash
 * in the 'tblusers' table.
 */
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  // Credentials Verification Query
  $sql = "SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId=:email and Password=:password";
  $query = $dbh->prepare($sql);
  $query->bindParam(':email', $email, PDO::PARAM_STR);
  $query->bindParam(':password', $password, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);

  if ($query->rowCount() > 0) {
    // Authentication Successful: Initialize Session
    $_SESSION['login'] = $_POST['email'];
    $_SESSION['fname'] = $results->FullName;

    // Refresh Page to Apply Login State
    $currentpage = $_SERVER['REQUEST_URI'];
    echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
  } else {
    // Authentication Failed
    echo "<script>alert('Invalid Details');</script>";
  }
}
?>

<!-- Login Modal -->
<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color:aqua;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" style="color:blue;">SIGN IN</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">

              <!-- Login Form -->
              <form method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group checkbox">
                  <!-- 'Remember Me' Checkbox (Preserved from legacy code, functionality pending) -->
                  <input type="checkbox" id="remember">
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Sign In" class="btn btn-block"
                    style="background-color:blue;">
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>

      <!-- Modal Footer / Links -->
      <div>
        <p>
          <a href="#forgotpassword" data-toggle="modal" data-dismiss="modal"
            style="color:blue;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspForgot Password...?</a>
          &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <a href="#signupform" data-toggle="modal" data-dismiss="modal" style="color:blue;">Make My Account...</a>
        </p>
      </div>

    </div>
  </div>
</div>
