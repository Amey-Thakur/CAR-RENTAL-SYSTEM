<header>
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container" >
      <div class="navbar-header">
        <style>
div{
   font-family: Play;
   font-size: 20px;
   color: BLUE;
}
</style>

        <div class="user_login">
            <?php   if(strlen($_SESSION['login'])==0)  {  ?>
        <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal" style="background-color:blue;">My Account</a> </div>
            <?php } else{  echo  "Welcome To AHNA Car Rental Services"; } ?>
        </div>
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                  <?php
                  $email=$_SESSION['login'];
                  $sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
                  $query= $dbh -> prepare($sql);
                  $query-> bindParam(':email', $email, PDO::PARAM_STR);
                  $query-> execute();
                  $results=$query->fetchAll(PDO::FETCH_OBJ);
                  if($query->rowCount() > 0)
                  {
                  foreach($results as $result)
	                {
             	    echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                 <ul class="dropdown-menu">
                 <?php if($_SESSION['login']){?>
                 <li><a href="profile.php">Profile Settings</a></li>
                 <li><a href="update-password.php">Update Password</a></li>
                 <li><a href="my-booking.php">My Booking</a></li>
                 <li><a href="logout.php">Sign Out</a></li>
                 <?php } else { ?>
                 <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
                 <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Update Password</a></li>
                 <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Booking</a></li>
                 <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Sign Out</a></li>
                <?php } ?>
                </ul>
            </li>
          </ul>
        </div>
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="collapse navbar-collapse" id="navigation">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a>    </li>
            <li><a href="car-listing.php">Cars</a>
            <li><a href="contact-us.php">Contact Us</a></li>
            <li><a href="page.php?type=aboutus">About Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
