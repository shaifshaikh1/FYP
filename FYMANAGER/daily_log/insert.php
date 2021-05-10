<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Daily Log - Insert</title>
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
						<h3>Daily Log</h3>
						<form method="post" action="dl_insert.php">
							<table>
								<tr>
									<td>Attribute</td>
									<td>Value</td>
								</tr>
								<tr>
									<td>
										Floor<span class="ast">*</span>
									</td>
									<td>
										<input type="text" name="floor" id="flr"required>
									</td>
								</tr>
								<tr>
									<td>
										Date<span class="ast">*</span>
									</td>
									<td>
										<input type="date" name="date" id="date"required>
									</td>
								</tr>
								<tr>
									<td>
										Material<span class="ast">*</span>
									</td>
									<td>
										<input type="text" name="mat_n" id="mat_n"required>
									</td>
								</tr>
								<tr>
									<td>
										Quantity<span class="ast">*</span>
									</td>
									<td>
										<input type="text" name="mat_q" id="mat_q"required>
									</td>
								</tr>
								<tr>
									<td>
										Funds<span class="ast">*</span>
									</td>
									<td>
										<input type="text" name="funds" id="funds"required>
									</td>
								</tr>
								<tr>
									<td>
										% completion<span class="ast">*</span>
									</td>
									<td>
										<input type="text" name="per_comp" id="per_comp"required>
									</td>
								</tr>
								<tr>
									<td>
										<input type="submit" id="submit" value="Insert">
									</td>
								
								</tr>
							</table>
						</form>
						</div>
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->

			</div><!-- /pusher -->
		</div><!-- /container -->
		<script> 
		function getclicked(){
		var a =document.getElementById("flr");
		var b =document.getElementById("date");
		var c =document.getElementById("mat_n");
		var d =document.getElementById("mat_q");
		var e =document.getElementById("funds");
		var f =document.getElementById("per_comp");
		var addata = {flr = flr.value,
			date = date.value,
			mat_n = mat_n.value,
			mat_q = mat_q.value,
			funds = funds.value,
			per_comp = per_comp.value}

			 var print =document.write=add(addata);
		
			<?php 
			
			echo $print;
			
			?>
		}
			document.getElementById("submit").addEventListener("click",getclicked);
		</script>
		<script src="../js/classie.js"></script>
		<script src="../js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
	</body>
</html>