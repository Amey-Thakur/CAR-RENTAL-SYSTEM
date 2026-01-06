<!--
============================================================================
Car Rental System - Admin Header Partial
============================================================================

This file contains the HTML markup for the admin panel's header section.
It includes the branding logo, navigation toggle button, and the user 
account dropdown menu with options to change password or logout.
This file is included in all admin pages to maintain consistent navigation.

----------------------------------------------------------------------------
AUTHORSHIP & CREDITS (Amey Thakur)
----------------------------------------------------------------------------
This project was developed by the Amey Thakur:
- Amey Thakur

@package     CarRentalSystem
@subpackage  Admin
@author      Amey Thakur (Lead)
@link        https://github.com/Amey-Thakur
@repository  https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM
@version     1.0.0
@date        2021-01-19
@license     MIT

============================================================================
CHANGE LOG:
----------------------------------------------------------------------------
2021-01-19 - Initial release - Amey Thakur
============================================================================
-->

<div class="brand clearfix">
	<a href="dashboard.php" style="font-size: 20px;">Car Rental Portal | Admin Panel</a>
	<span class="menu-btn"><i class="fa fa-bars"></i></span>
	<ul class="ts-profile-nav">

		<li class="ts-account">
			<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i
					class="fa fa-angle-down hidden-side"></i></a>
			<ul>
				<li><a href="change-password.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</li>
	</ul>
</div>
