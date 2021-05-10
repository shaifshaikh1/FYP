<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		
	</head>
	
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
							</div>
						</div>
						<div id="form">
						<h3>Resource Allotment</h3>
						<form method="post" action="res_delete.php">
							<table>
								<tr>
									<td>Attribute</td>
									<td>Value</td>
								</tr>
								<tr>
									<td>
										Resource ID
									</td>
									<td>
										<input type="text" name="id">
									</td>
								</tr>
								<tr>
									<td>
										Floor
									</td>
									<td>
										<input type="text" name="floor">
									</td>
								</tr>
								<tr>
									<td>
										Funds
									</td>
									<td>
										<input type="text" name="funds">
									</td>
								</tr>
								<tr>
									<td>
										Quantity
									</td>
									<td>
										<input type="text" name="quantity">
									</td>
								</tr>
								<tr>
									<td>
										Sources
									</td>
									<td>
										<input type="text" name="sources">
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