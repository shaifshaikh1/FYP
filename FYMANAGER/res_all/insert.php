<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Resource Allotment - Insert</title>
		<style>
			.ast{
				color: red;
			}
		</style>
	</head>

						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
							</div>
						</div>
						<div id="form">
						<h3>Resource Allotment</h3>
						<form method="post" action="res_insert.php">
							<table>
								<tr>
									<td>Attribute</td>
									<td>Value</td>
								</tr>
								<tr>
									<td>
										Resource id<span class="ast">*</span>
									</td>
									<td>
										<input type="text" name="id" required>
									</td>
								</tr>
								<tr>
									<td>
										Floor<span class="ast">*</span>
									</td>
									<td>
										<input type="text" name="floor" required>
									</td>
								</tr>
								<tr>
									<td>
										Funds<span class="ast">*</span>
									</td>
									<td>
										<input type="text" name="funds" required>
									</td>
								</tr>
								<tr>
									<td>
										Quantity<span class="ast">*</span>
									</td>
									<td>
										<input type="text" name="quantity" required>
									</td>
								</tr>
								<tr>
									<td>
										Sources<span class="ast">*</span>
									</td>
									<td>
										<input type="text" name="sources">
									</td>
								</tr>
								<tr>
									<td>
										<input type="submit" value="Done Inserting">
									</td>
									<td>
										<input type="submit" value="Next">
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