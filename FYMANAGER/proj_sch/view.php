<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Projected Schedule - View</title>
	</head>
	
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
							</div>
						</div>
						<div id="form">
						<h3>Projected Schedule</h3>
						<form method="post" action="sch_view.php">
							<table>
								<tr>
									<td>Attribute</td>
									<td>Value</td>
								</tr>
								<tr>
									<td>
										Floor<span class="ast"></span>
									</td>
									<td>
										<input type="text" name="floor">
									</td>
								</tr>
								<tr>
									<td>
										Material ID<span class="ast"></span>
									</td>
									<td>
										<input type="text" name="mat_id" >
									</td>
								</tr>
								<tr>
									<td>
										Work<span class="ast"></span>
									</td>
									<td>
										<input type="text" name="work">
									</td>
								</tr>
								<tr>
									<td>
										Employee designation<span class="ast"></span>
									</td>
									<td>
										<input type="text" name="man_d" >
									</td>
								</tr>
								<tr>
									<td>
										Material<span class="ast"></span>
									</td>
									<td>
										<input type="text" name="mat_n" >
									</td>
								</tr>
								<tr>
									<td>
										End date<span class="ast"></span>
									</td>
									<td>
										<input type="date" name="end_d" >
									</td>
								</tr>
								<tr>
									<td>
										Manpower<span class="ast"></span>
									</td>
									<td>
										<input type="text" name="man_q" >
									</td>
								</tr>
								<tr>
									<td>
										Material quantity<span class="ast"></span>
									</td>
									<td>
										<input type="text" name="mat_q" >
									</td>
								</tr>
								<tr>
									<td>
										Funds<span class="ast"></span>
									</td>
									<td>
										<input type="text" name="funds" >
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
					  				<td></td>
					  			</tr>
					  			<tr>
									<td>
										<input type="checkbox" name="0" value="empid">Floor
									</td>
									<td>
										<input type="checkbox" name="1" value="fname">Work
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" name="2" value="lname">Employee designation
					  				</td>
									<td>
										<input type="checkbox" name="3" value="hno">Material
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" name="4" value="lane">End date
					  				</td>
									<td>
										<input type="checkbox" name="5" value="area">Manpower
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" name="6" value="city">Material quantity
					  				</td>
									<td>
										<input type="checkbox" name="7" value="dob">Funds
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" name="0" value="mid">Material ID
									</td>
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