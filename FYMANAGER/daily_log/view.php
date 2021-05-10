<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Daily log - View</title>
</head>
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
							</div>
						</div>
						<div id="form">
						<h3>Daily Log</h3>
						<form method="post" action="dl_view.php">
							<table>
								<tr>
									<td>Attribute</td>
									<td>Value</td>
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
										Date
									</td>
									<td>
										<input type="date" name="date">
									</td>
								</tr>
								<tr>
									<td>
										Material
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
										<input type="text" name="mat_q">
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
										% completion
									</td>
									<td>
										<input type="text" name="per_comp">
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
					  			</tr>
					  			<tr>
									<td>
										<input type="checkbox" name="0" value="empid">Floor
									</td>
									<td>
										<input type="checkbox" name="1" value="fname">Date
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" name="2" value="lname">Material
					  				</td>
									<td>
										<input type="checkbox" name="3" value="hno">Quantity
									</td>
								</tr>
								<tr>
									<td>
										<input type="checkbox" name="4" value="lane">Funds
					  				</td>
									<td>
										<input type="checkbox" name="5" value="area">% completion
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