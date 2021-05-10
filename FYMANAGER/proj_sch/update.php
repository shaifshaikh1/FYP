<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Projected Schedule - Update</title>
	</head>
	
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
							</div>
						</div>
						<div id="form">
						<h3>Projected Schedule</h3>
						<form method="post" action="sch_update.php">
							<table>
								<tr>
									<td>Update</td>
									<td>Set</td>
									<td>Where</td>
								</tr>
								<tr>
									<td>
										Floor
									</td>
									<td>
										<input type="text" name="0">
									</td>
									<td>
										<input type="text" name="floor">
									</td>
								</tr>
								<tr>
									<td>
										Work
									</td>
									<td>
										<input type="text" name="1">
									</td>
									<td>
										<input type="text" name="work">
									</td>
								</tr>
								<tr>
									<td>
										Employee Designation
									</td>
									<td>
										<input type="text" name="2">
									</td>
									<td>
										<input type="text" name="man_d">
									</td>
								</tr>
								<tr>
									<td>
										Material
									</td>
									<td>
										<input type="text" name="3">
									</td>
									<td>
										<input type="text" name="mat_n">
									</td>
								</tr>
								<tr>
									<td>
										End date
									</td>
									<td>
										<input type="date" name="4">
									</td>
									<td>
										<input type="date" name="end_d">
									</td>
								</tr>
								<tr>
									<td>
										Manpower
									</td>
									<td>
										<input type="text" name="5">
									</td>
									<td>
										<input type="text" name="man_q">
									</td>
								</tr>
								<tr>
									<td>
										Material quantity
									</td>
									<td>
										<input type="text" name="6">
									</td>
									<td>
										<input type="text" name="mat_q">
									</td>
								</tr>
								<tr>
									<td>
										Funds
									</td>
									<td>
										<input type="text" name="7">
									</td>
									<td>
										<input type="text" name="funds">
									</td>
								</tr>
								<tr>
									<td>
										Material ID<span class="ast"></span>
									</td>
									<td>
										<input type="text" name="8">
									</td>
									<td>
										<input type="text" name="mat_id" >
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