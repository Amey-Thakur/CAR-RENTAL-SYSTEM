<?php
/**
 * ============================================================================
 * Car Rental Database Management System - User Registration
 * ============================================================================
 * 
 * This file handles the user account creation process. It provides a registration
 * form within a modal, performs client-side validation, and utilizes AJAX
 * to check for email uniqueness before submission.
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
 * 2021-01-19 - Initial release - AHNA Team
 * ============================================================================
 */

/**
 * Registration Handler
 * 
 * Processes the registration form.
 * Inserts a new user record into 'tblusers' after hashing the password.
 */
if (isset($_POST['signup'])) {
  $fname = $_POST['fullname'];
  $email = $_POST['emailid'];
  $mobile = $_POST['mobileno'];
  $password = md5($_POST['password']); // Hashing password with MD5

  $sql = "INSERT INTO  tblusers(FullName,EmailId,ContactNo,Password) VALUES(:fname,:email,:mobile,:password)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':fname', $fname, PDO::PARAM_STR);
  $query->bindParam(':email', $email, PDO::PARAM_STR);
  $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
  $query->bindParam(':password', $password, PDO::PARAM_STR);
  $query->execute();

  $lastInsertId = $dbh->lastInsertId();
  if ($lastInsertId) {
    echo "<script>alert('Registration successfull. Now you can login');</script>";
  } else {
    echo "<script>alert('Something went wrong. Please try again');</script>";
  }
}
?>

<!-- Email Availability Check (AJAX) -->
<script>
  function checkAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
      url: "check_availability.php",
      data: 'emailid=' + $("#emailid").val(),
      type: "POST",
      success: function (data) {
        $("#user-availability-status").html(data);
        $("#loaderIcon").hide();
      },
      error: function () { }
    });
  }
</script>

<!-- Form Validation Script -->
<script type="text/javascript">
  function valid() {
    // Confirm password match
    if (document.signup.password.value != document.signup.confirmpassword.value) {
      alert("Password and Confirm Password Field do not match  !!");
      document.signup.confirmpassword.focus();
      return false;
    }
    return true;
  }
</script>

<!-- Registration Modal -->
<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color:aqua;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" style="color:blue;">MAKE MY ACCOUNT</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">

              <!-- Registration Form -->
              <form method="post" name="signup" onSubmit="return valid();">
                <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="Name" required="required">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="mobileno" placeholder="Contact Number" maxlength="10"
                    required="required">
                </div>
                <div class="form-group">
                  <!-- Email input triggers AJAX availability check on blur -->
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()"
                    placeholder="Email Address" required="required">
                  <span id="user-availability-status" style="font-size:12px;"></span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password"
                    required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password"
                    required="required">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree" style="color:black;">I Agree with <a href="#" style="color:blue;">Terms and
                      Conditions</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-block"
                    style="background-color:blue;">
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer text-center">
        <p> <a href="#loginform" data-toggle="modal" data-dismiss="modal" style="color:blue;">Already got an
            account...?</a></p>
      </div>

    </div>
  </div>
</div>