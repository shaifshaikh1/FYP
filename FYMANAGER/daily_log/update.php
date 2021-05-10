<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Daily log - Update</title>
</head>
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
							</div>
						</div>
						<div id="form">
						<h3>Daily Log</h3>
						<form method="post" action="dl_update.php">
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
										Date
									</td>
									<td>
										<input type="text" name="1">
									</td>
									<td>
										<input type="text" name="date">
									</td>
								</tr>
								<tr>
									<td>
										Material
									</td>
									<td>
										<input type="text" name="2">
									</td>
									<td>
										<input type="text" name="mat_n">
									</td>
								</tr>
								<tr>
									<td>
										Quantity
									</td>
									<td>
										<input type="text" name="3">
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
										<input type="text" name="4">
									</td>
									<td>
										<input type="text" name="funds">
									</td>
								</tr>
								<tr>
									<td>
										% completion
									</td>
									<td>
										<input type="text" name="5">
									</td>
									<td>
										<input type="text" name="per_comp">
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