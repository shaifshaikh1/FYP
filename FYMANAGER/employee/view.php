<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Employee Management - View</title>
</head>
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
							</div>
						</div>
						<div id="form">
						<h3>Employee Details</h3>
						<form method="post" action="emp_view.php">
						<table>
							<tr>
								<td>Attribute</td>
								<td>Value</td>
							</tr>
							<tr>
								<td>
									Employee id
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
									<input type="text" name="fname">
								</td>
							</tr>
							<tr>
								<td>
									Last Name
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
									<input type="text" name="house_no">
								</td>
							</tr>
							<tr>
								<td>
									Lane
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
									<input type="text" name="area">
								</td>
							</tr>
							<tr>
								<td>
									City
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
									<input type="date" name="dob">
								</td>
							</tr>
							<tr>
								<td>
									Gender
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
									<input type="text" name="designation">
								</td>
							</tr>
							<tr>
								<td>
									Type of Salary
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
									<input type="text" name="email">
								</td>
							</tr>
							<tr>
								<td>
									Salary
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
									<input type="date" name="dot">
								</td>
							</tr>
							<tr>
								<td>
									Hours Worked
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
									<input type="text" name="hrly_rate">
								</td>
							</tr>
							<tr>
								<td>
									Floor Working
								</td>
								<td>
									<input type="text" name="floor_w">
								</td>
							</tr>
							<tr>
								<td colspan="2">
									Select what to view
								</td>
							</tr>
							<tr>
								<th>
									<input type="checkbox" name="select_all" onclick="checkAll(this)" value="all">Select All
				  				</th>
								<td>
									<input type="checkbox" name="0" value="empid">Employee id
								</td>
				  			</tr>
				  			<tr>
								<td>
									<input type="checkbox" name="1" value="fname">First Name
								</td>
								<td>
									<input type="checkbox" name="2" value="lname">Last Name
				  				</td>
				  			</tr>
				  			<tr>
								<td>
									<input type="checkbox" name="3" value="hno">House Number
								</td>
								<td>
									<input type="checkbox" name="4" value="lane">Lane
				  				</td>
				  			</tr>
				  			<tr>
								<td>
									<input type="checkbox" name="5" value="area">Area
								</td>
								<td>
									<input type="checkbox" name="6" value="city">City
				  				</td>
				  			</tr>
				  			<tr>
								<td>
									<input type="checkbox" name="7" value="dob">Date of Birth
								</td>
								<td>
									<input type="checkbox" name="8" value="gender">Gender
				  				</td>
				  			</tr>
				  			<tr>
								<td>
									<input type="checkbox" name="9" value="desig">Designation
								</td>
								<td>
									<input type="checkbox" name="10" value="tos">Type of Salary
				  				</td>
				  			</tr>
				  			<tr>
								<td>
									<input type="checkbox" name="11" value="email">Email
								</td>
								<td>
									<input type="checkbox" name="12" value="sal">Salary
				  				</td>
				  			</tr> 
				  			<tr>
								<td>
									<input type="checkbox" name="13" value="dot">Date of Termination
								</td>
								<td>
									<input type="checkbox" name="14" value="hrsw">Hours Worked
				  				</td>
				  			</tr>
				  			<tr>
								<td>
									<input type="checkbox" name="15" value="hrrate">Hourly Rate
								</td>
								<td>
									<input type="checkbox" name="16" value="floor">Floor Working
				  				</td>
				  			</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" value="View">
								</td>
							</tr>
						</table>
					</form>
					<script type="text/javascript">
						function checkAll(ele) {
					     var checkboxes = document.getElementsByTagName('input');
					     if (ele.checked) {
					         for (var i = 0; i < checkboxes.length; i++) {
					             if (checkboxes[i].type == 'checkbox') {
					                 checkboxes[i].checked = true;
					             }
					         }
					     } else {
					         for (var i = 0; i < checkboxes.length; i++) {
					             console.log(i)
					             if (checkboxes[i].type == 'checkbox') {
					                 checkboxes[i].checked = false;
					             }
					         }
					     }
					 }
					</script>

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