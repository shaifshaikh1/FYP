<?php 
	session_start(); 
	if(!isset($_SESSION['SN_USER']))
	{
		header("location:index.php");
	}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>CSMS</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
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
											<a href="employee/view.php">View</a>
										</li>
										<li >
											<a href="employee/insert.php">Insert</a>
										</li>
										<li >
											<a href="employee/update.php">Update</a>
										</li>
										<li >
											<a href="employee/delete.php">Delete</a>
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
											<a href="proj_sch/view.php">View</a>
										</li>
										<li >
											<a href="proj_sch/insert.php">Insert</a>
										</li>
										<li >
											<a href="proj_sch/update.php">Update</a>
										</li>
										<li >
											<a href="proj_sch/delete.php">Delete</a>
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
											<a href="res_all/view.php">View</a>
										</li>
										<li >
											<a href="res_all/insert.php">Insert</a>
										</li>
										<li >
											<a href="res_all/update.php">Update</a>
										</li>
										<li >
											<a href="res_all/delete.php">Delete</a>
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
											<a href="daily_log/view.php">View</a>
										</li>
										<li >
											<a href="daily_log/insert.php">Insert</a>
										</li>
										<li >
											<a href="daily_log/update.php">Update</a>
										</li>
										<li >
											<a href="daily_log/delete.php">Delete</a>
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
					<header class="codrops-header">
						<img src = "logo1.png">
						<div style="width: 100px;height: 100px;float: right;position: relative;padding: 35px;">
							<a href="#"><img src="home1.png" style="float: right;width: 150px;height: 150px"></a>
						</div>
							<h1> StandWell Construction Management System <span></span></h1>
						</header>
						<div class="content clearfix">
							<div class="block block-40 clearfix">
								<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
							</div>
						</div>
						<div id = "form">
							<h2> Schedule of the day!</h2>
							<?php
								$servername='localhost';
								$username='root';
								$password='';
								$dbname = "construction_site";
								$conn=mysqli_connect($servername,$username,$password,$dbname);
								  if(!$conn){
									  die('Could not Connect MySql Server:' .mysqli_error());
									}
							?>
						</div>
					</div><!-- /scroller-inner -->
				</div><!-- /scroller -->

			</div><!-- /pusher -->
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
	</body>
</html>
