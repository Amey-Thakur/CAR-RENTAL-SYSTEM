<?php
/**
 * ============================================================================
 * Car Rental Database Management System - Edit Vehicle Brand
 * ============================================================================
 * 
 * This file provides the functionality to modify existing vehicle brands.
 * It fetches the brand details based on the ID and updates the record
 * in the 'tblbrands' table upon submission.
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
 * 2021-01-19 - Initial release - AHNA Team
 * ============================================================================
 */

session_start();
error_reporting(0);
include('includes/config.php');

/**
 * Session Verification
 * 
 * Ensure admin is logged in before allowing updates.
 */
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	// Brand Update Logic
	if (isset($_POST['submit'])) {
		$brand = $_POST['brand'];
		$id = $_GET['id'];

		$sql = "update tblbrands set BrandName=:brand where id=:id";
		$query = $dbh->prepare($sql);
		$query->bindParam(':brand', $brand, PDO::PARAM_STR);
		$query->bindParam(':id', $id, PDO::PARAM_STR);
		$query->execute();

		$msg = "Brand updted successfully";
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

		<title>Car Rental Portal | Admin Edit Brand</title>

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

							<h2 class="page-title">Edit Brand</h2>

							<div class="row">
								<div class="col-md-10">
									<div class="panel panel-default">
										<div class="panel-heading">Form fields</div>
										<div class="panel-body">

											<!-- Edit Brand Form -->
											<form method="post" name="chngpwd" class="form-horizontal"
												onSubmit="return valid();">

												<!-- Feedback Messages -->
												<?php if ($error) { ?>
													<div class="errorWrap">
														<strong>ERROR</strong>:<?php echo htmlentities($error); ?>
													</div>
												<?php } else if ($msg) { ?>
														<div class="succWrap">
															<strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
														</div>
												<?php } ?>

												<!-- Fetch Brand Details -->
												<?php
												$id = $_GET['id'];
												$ret = "select * from tblbrands where id=:id";
												$query = $dbh->prepare($ret);
												$query->bindParam(':id', $id, PDO::PARAM_STR);
												$query->execute();
												$results = $query->fetchAll(PDO::FETCH_OBJ);
												$cnt = 1;
												if ($query->rowCount() > 0) {
													foreach ($results as $result) {
														?>

														<div class="form-group">
															<label class="col-sm-4 control-label">Brand Name</label>
															<div class="col-sm-8">
																<input type="text" class="form-control"
																	value="<?php echo htmlentities($result->BrandName); ?>"
																	name="brand" id="brand" required>
															</div>
														</div>
														<div class="hr-dashed"></div>

													<?php }
												} ?>

												<div class="form-group">
													<div class="col-sm-8 col-sm-offset-4">
														<button class="btn btn-primary" name="submit"
															type="submit">Submit</button>
													</div>
												</div>

											</form>

										</div>
									</div>
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