<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Resource Allotment - View</title>
	</head>
	
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
							</div>
						</div>
						<div id="form">
						<h3>Resource Allotment</h3>
						<form method="post" action="res_view.php">
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
					               Funds Alloted
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
					            <td colspan="2">
					               Select what to view
					            </td>
					         </tr>
					         <tr>
					            <th>
					               <input type="checkbox" name="select_all" onclick="checkAll(this)" value="all">Select All
					            </th>
					            <td>
					               <input type="checkbox" name="0" value="id">Resource ID
					            </td>
					         </tr>
					         <tr>
					            <td>
					               <input type="checkbox" name="1" value="floor">Floor
					            </td>
					            <td>
					               <input type="checkbox" name="2" value="lname">Funds alloted
					            </td>
					         </tr>
					         <tr>
					            <td>
					               <input type="checkbox" name="3" value="hno">Quantity
					            </td>
					            <td>
					               <input type="checkbox" name="4" value="lane">Sources
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