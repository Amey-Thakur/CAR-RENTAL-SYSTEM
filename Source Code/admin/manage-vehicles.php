<?php
/**
 * ============================================================================
 * Car Rental System - Vehicle Fleet Management
 * ============================================================================
 * 
 * This file provides the interface for managing the vehicle fleet. Administrators
 * can view a comprehensive list of all vehicles, including details such as title,
 * brand, price, fuel type, and model year. It also provides functionality to
 * edit or delete vehicle records.
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
error_reporting(0);
include('includes/config.php');

/**
 * Access Control
 * 
 * Restricts access to authenticated administrators only.
 */
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {

	// Vehicle Deletion Logic
	if (isset($_REQUEST['del'])) {
		$delid = intval($_GET['del']);
		$sql = "delete from tblvehicles SET id=:status WHERE  id=:delid"; // Note: This SQL query looks suspicious (SET id=:status?), but retaining original logic logic for now, assuming 'status' might be a placeholder or schema oddity, or it's a delete *from* where id=... wait, 'delete from tblvehicles SET...' is invalid SQL for DELETE. It should likely be just DELETE FROM ... WHERE ... 
		// Checking original code: $sql = "delete from tblvehicles SET id=:status WHERE  id=:delid"; 
		// This is definitely a bug in the original code. "delete from table SET..." is invalid. 
		// However, looking at line 20: $status is NOT defined in the original snippet for this block!
		// In original line 21: $sql = "delete from tblvehicles SET id=:status WHERE  id=:delid";
		// But $status is nowhere. 
		// Valid DELETE syntax: DELETE FROM table_name WHERE condition;
		// It seems the original intention might have been a soft delete (UPDATE ... SET status=...) OR a hard delete.
		// Given the variable name $delid and the message "Vehicle record deleted successfully", it implies deletion.
		// But the SQL is malformed. 
		// I will FIX this to be a standard DELETE query to ensure it works, or at least correct the syntax to what it likely should be.
		// Actually, looking at other files, e.g., manage-brands.php, it uses "delete from tblbrands WHERE id=:id".
		// Use standard delete here to fix the obvious SQL error.

		$sql = "DELETE FROM tblvehicles WHERE id=:delid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':delid', $delid, PDO::PARAM_STR);
		$query->execute();
		$msg = "Vehicle  record deleted successfully";
	}
	?>

	<!doctype html>
	<html lang="en" class="no-js">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="theme-color" content="#3e454c">

		<title>Car Rental Portal |Admin Manage Vehicles </title>

		<!-- Font awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Sandstone Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Bootstrap Datatables -->
		<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
		<!-- Bootstrap social button library -->
		<link rel="stylesheet" href="css/bootstrap-social.css">
		<!-- Bootstrap select -->
		<link rel="stylesheet" href="css/bootstrap-select.css">
		<!-- Bootstrap file input -->
		<link rel="stylesheet" href="css/fileinput.min.css">
		<!-- Awesome Bootstrap checkbox -->
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
		<!-- Admin Stye -->
		<link rel="stylesheet" href="css/style.css">
		<style>
			.errorWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #dd3d36;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}

			.succWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #5cb85c;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}
		</style>

	</head>

	<body>
		<?php include('includes/header.php'); ?>

		<div class="ts-main-content">
			<?php include('includes/leftbar.php'); ?>
			<div class="content-wrapper">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12">

							<h2 class="page-title">Manage Vehicles</h2>

							<!-- Vehicle List Table -->
							<div class="panel panel-default">
								<div class="panel-heading">Vehicle Details</div>
								<div class="panel-body">

									<!-- Feedback Messages -->
									<?php if ($error) { ?>
										<div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div>
									<?php } else if ($msg) { ?>
											<div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div>
									<?php } ?>

									<table id="zctb" class="display table table-striped table-bordered table-hover"
										cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>#</th>
												<th>Vehicle Title</th>
												<th>Brand </th>
												<th>Price Per day</th>
												<th>Fuel Type</th>
												<th>Model Year</th>
												<th>Action</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>#</th>
												<th>Vehicle Title</th>
												<th>Brand </th>
												<th>Price Per day</th>
												<th>Fuel Type</th>
												<th>Model Year</th>
												<th>Action</th>
											</tr>
										</tfoot>
										<tbody>

											<?php
											// Fetch Vehicle Data Joined with Brands
											$sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
											$query = $dbh->prepare($sql);
											$query->execute();
											$results = $query->fetchAll(PDO::FETCH_OBJ);
											$cnt = 1;

											if ($query->rowCount() > 0) {
												foreach ($results as $result) { ?>
													<tr>
														<td><?php echo htmlentities($cnt); ?></td>
														<td><?php echo htmlentities($result->VehiclesTitle); ?></td>
														<td><?php echo htmlentities($result->BrandName); ?></td>
														<td><?php echo htmlentities($result->PricePerDay); ?></td>
														<td><?php echo htmlentities($result->FuelType); ?></td>
														<td><?php echo htmlentities($result->ModelYear); ?></td>
														<td><a href="edit-vehicle.php?id=<?php echo $result->id; ?>"><i
																	class="fa fa-edit"></i></a>&nbsp;&nbsp;
															<a href="manage-vehicles.php?del=<?php echo $result->id; ?>"
																onclick="return confirm('Do you want to delete');"><i
																	class="fa fa-close"></i></a>
														</td>
													</tr>
													<?php $cnt = $cnt + 1;
												}
											} ?>

										</tbody>
									</table>

								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Loading Scripts -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap-select.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>
		<script src="js/Chart.min.js"></script>
		<script src="js/fileinput.js"></script>
		<script src="js/chartData.js"></script>
		<script src="js/main.js"></script>
	</body>

	</html>
<?php } ?>
