<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Projected Schedule - Delete</title>
	</head>

						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
							</div>
						</div>
						<div id="form">
						<h3>Projected Schedule</h3>
						<form method="post" action="sch_delete.php">
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
								<tr>
									<td>
										Material ID<span class="ast"></span>
									</td>
									<td>
										<input type="text" name="mat_id" >
									</td>
								</tr>
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
									<td></td>
									<td>
										<input type="submit" value="Delete">
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