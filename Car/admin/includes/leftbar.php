<!--
============================================================================
Car Rental Database Management System - Admin Sidebar Navigation
============================================================================

This file contains the HTML markup for the admin panel's sidebar navigation.
It provides links to all major administrative functions including:
- Dashboard
- Brand Management
- Vehicle Management
- Booking Management
- Content Management (Testimonials, Contact Queries, Pages)
- User Management
- Subscriber Management

----------------------------------------------------------------------------
AUTHORSHIP & CREDITS (AHNA Team)
----------------------------------------------------------------------------
This project was developed by the AHNA team:
- Amey Thakur
- Hasan Rizvi
- Nithya Gnanasekar
- Anisha Gupta

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
2021-01-19 - Initial release - AHNA Team
============================================================================
-->

<nav class="ts-sidebar">
	<ul class="ts-sidebar-menu">

		<li class="ts-label">Main</li>
		<li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>

		<li><a href="#"><i class="fa fa-files-o"></i> Brands</a>
			<ul>
				<li><a href="create-brand.php">Create Brand</a></li>
				<li><a href="manage-brands.php">Manage Brands</a></li>
			</ul>
		</li>

		<li><a href="#"><i class="fa fa-sitemap"></i> Vehicles</a>
			<ul>
				<li><a href="post-avehicle.php">Post a Vehicle</a></li>
				<li><a href="manage-vehicles.php">Manage Vehicles</a></li>
			</ul>
		</li>
		<li><a href="manage-bookings.php"><i class="fa fa-users"></i> Manage Booking</a></li>

		<li><a href="testimonials.php"><i class="fa fa-table"></i> Manage Testimonials</a></li>
		<li><a href="manage-contactusquery.php"><i class="fa fa-desktop"></i> Manage Contactus Query</a></li>
		<li><a href="reg-users.php"><i class="fa fa-users"></i> Reg Users</a></li>
		<li><a href="manage-pages.php"><i class="fa fa-files-o"></i> Manage Pages</a></li>
		<li><a href="update-contactinfo.php"><i class="fa fa-files-o"></i> Update Contact Info</a></li>

		<li><a href="manage-subscribers.php"><i class="fa fa-table"></i> Manage Subscribers</a></li>

	</ul>
</nav>