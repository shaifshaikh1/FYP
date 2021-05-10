<?php
include_once "db/connect.php";
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />
		<script src="../js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<!-- Push Wrapper -->
			<div class="mp-pusher" id="mp-pusher">

				<!-- mp-menu -->
				<nav id="mp-menu" class="mp-menu">
					<div class="mp-level">
						<h2 class="icon icon-world">All Categories</h2>
						<ul>
							<li >
								<a  href="#">Employee</a>
								<div class="mp-level">
									<h2 >Employee</h2>
									<ul>
										<li>
											<a href="employee/emp_view.php">View</a>
										</li>
										<li >
											<a href="employee/emp_insert.php">Insert</a>
										</li>
										<li >
											<a href="employee/emp_update.php">Update</a>
										</li>
										<li >
											<a href="employee/emp_delete.php">Delete</a>
										</li>
									</ul>
								</div>
							</li>

							<li >
								<a  href="#">Projected Schedule</a>
								<div class="mp-level">
									<h2 >Projected Schedule</h2>
									<ul>
										<li>
											<a href="proj_sch/sch_view.php">View</a>
										</li>
										<li >
											<a href="proj_sch/sch_insert.php">Insert</a>
										</li>
										<li >
											<a href="proj_sch/sch_update.php">Update</a>
										</li>
										<li >
											<a href="proj_sch/sch_delete.php">Delete</a>
										</li>
									</ul>
								</div>
							</li>

							<li >
								<a  href="#">Resource Allotment</a>
								<div class="mp-level">
									<h2 >Resource Allotment</h2>
									<ul>
										<li>
											<a href="res_all/res_view.php">View</a>
										</li>
										<li >
											<a href="res_all/res_insert.php">Insert</a>
										</li>
										<li >
											<a href="res_all/res_update.php">Update</a>
										</li>
										<li >
											<a href="res_all/res_delete.php">Delete</a>
										</li>
									</ul>
								</div>
							</li>

							<li >
								<a  href="#">Daily log</a>
								<div class="mp-level">
									<h2 >Daily log</h2>
									<ul>
										<li >
											<a href="daily_log/dl_view.php">View</a>
										</li>
										<li >
											<a href="daily_log/dl_insert.php">Insert</a>
										</li>
										<li >
											<a href="daily_log/dl_update.php">Update</a>
										</li>
										<li >
											<a href="daily_log/dl_delete.php">Delete</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</nav>
				<!-- /mp-menu -->
				<div class="scroller"><!-- this is for emulating position fixed of the nav -->
					<div class="scroller-inner">
						<!-- Top Navigation -->
						<header class="codrops-header">
						<img src = "../logo.png">
						<div style="width: 60px;height: 60px;float: right;position: relative;padding: 35px;">
							<a href="../index.php"><img src="../home.png" style="float: right;width: 50px;height: 50px"></a>
						</div>
							<h1>Construction site management system <span></span></h1>
						</header>
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
							</div>
						</div>
						<div id="form">
						<p>	
						<?php
						

						//building the condition
						$table_struct = ["emp_id", "fname", "lname", "house_no", "lane", "area", "city", "dob", "gender", "designation", "tos", "email", "salary", "dot", "hrs_w", "hrly_rate", "floor_w"];
						$where = "where ";
						$check_v = 0;
						for($q=0; $q!=sizeof($table_struct); $q++)
							if($_POST[$table_struct[$q]]!=""){
								if($q==7 || $q==13){
									$given_date = strtotime($_POST[$table_struct[$q]]);
									$given_date = date("Y-m-d", $given_date);
									$where = $check_v==0? $where.$table_struct[$q]."=\"".$given_date.'" ': $where."and ".$table_struct[$q]."=\"".$given_date.'" ';
								}
								else if($q==3 || $q==12 || $q==14 || $q==15 || $q==16)
									$where = $check_v==0? $where.$table_struct[$q]."=".$_POST[$table_struct[$q]]." ": $where."and ".$table_struct[$q]."=".$_POST[$table_struct[$q]]." ";
								else
									$where = $check_v==0? $where.$table_struct[$q]."=\"".$_POST[$table_struct[$q]].'" ': $where."and ".$table_struct[$q]."=\"".$_POST[$table_struct[$q]].'" ';
								$check_v = 1;
							}

						//performing deletion
						$query = "delete from emp_details ".$where;
						$result = mysql_query($query);
						if($result)
							echo "Deletion succesful ".mysql_affected_rows()." row(s) were deleted succesfully";
						else
							echo "Error in deletion";
					      ?>

						</p>
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