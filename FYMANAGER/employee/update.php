<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Employee Management - Update</title>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />
		<script src="../js/modernizr.custom.js"></script>
	</head>
	<body>
		
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
							</div>
						</div>
						<div id="form">
						<h3>Employee Details</h3>
						<form method="post" action="emp_update.php">
							<table>
								<tr>
									<td>Update</td>
									<td>Set</td>
									<td>Where</td>
								</tr>
								<tr>
									<td>
										Employee id
									</td>
									<td>
										<input type="text" name="0">
									</td>
									<td>
										<input type="text" name="emp_id">
									</td>
								</tr>
								<tr>
									<td>
										First Name
									</td>
									<td>
										<input type="text" name="1">
									</td>
									<td>
										<input type="text" name="fname">
									</td>
								</tr>
								<tr>
									<td>
										Last Name
									</td>
									<td>
										<input type="text" name="2">
									</td>
									<td>
										<input type="text" name="lname">
									</td>
								</tr>
								<tr>
									<td>
										House Number
									</td>
									<td>
										<input type="text" name="3">
									</td>
									<td>
										<input type="text" name="house_no">
									</td>
								</tr>
								<tr>
									<td>
										Lane
									</td>
									<td>
										<input type="text" name="4">
									</td>
									<td>
										<input type="text" name="lane">
									</td>
								</tr>
								<tr>
									<td>
										Area
									</td>
									<td>
										<input type="text" name="5">
									</td>
									<td>
										<input type="text" name="area">
									</td>
								</tr>
								<tr>
									<td>
										City
									</td>
									<td>
										<input type="text" name="6">
									</td>
									<td>
										<input type="text" name="city">
									</td>
								</tr>
								<tr>
									<td>
										Date of Birth
									</td>
									<td>
										<input type="date" name="7">
									</td>
									<td>
										<input type="date" name="dob">
									</td>
								</tr>
								<tr>
									<td>
										Gender
									</td>
									<td>
										<input type="text" name="8">
									</td>
									<td>
										<input type="text" name="gender">
									</td>
								</tr>
								<tr>
									<td>
										Designation
									</td>
									<td>
										<input type="text" name="9">
									</td>
									<td>
										<input type="text" name="designation">
									</td>
								</tr>
								<tr>
									<td>
										Type of Salary
									</td>
									<td>
										<input type="text" name="10">
									</td>
									<td>
										<input type="text" name="tos">
									</td>
								</tr>
								<tr>
									<td>
										Email
									</td>
									<td>
										<input type="text" name="11">
									</td>
									<td>
										<input type="text" name="email">
									</td>
								</tr>
								<tr>
									<td>
										Salary
									</td>
									<td>
										<input type="text" name="12">
									</td>
									<td>
										<input type="text" name="salary">
									</td>
								</tr>
								<tr>
									<td>
										Date of Termination
									</td>
									<td>
										<input type="date" name="13">
									</td>
									<td>
										<input type="date" name="dot">
									</td>
								</tr>
								<tr>
									<td>
										Hours Worked
									</td>
									<td>
										<input type="text" name="14">
									</td>
									<td>
										<input type="text" name="hrs_w">
									</td>
								</tr>
								<tr>
									<td>
										Hourly Rate
									</td>
									<td>
										<input type="text" name="15">
									</td>
									<td>
										<input type="text" name="hrly_rate">
									</td>
								</tr>
								<tr>
									<td>
										Floor Working
									</td>
									<td>
										<input type="text" name="16">
									</td>
									<td>
										<input type="text" name="floor">
									</td>
								</tr>
								<tr>
									<td>
									</td>
									<td>
										<input type="submit" value="Update">
									</td>
									<td>
									</td>
								</tr>
							</table>
						</form>
						</div>
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->

			</div><!-- /pusher -->
		</div><!-- /container -->
		<script src="../js/classie.js"></script>
		<script src="../js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
	</body>
</html>