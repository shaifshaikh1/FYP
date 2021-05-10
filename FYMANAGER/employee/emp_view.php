<?php
include_once "db/connect.php";

								$servername='localhost';
								$username='root';
								$password='';
								$dbname = "construction_site";
								$conn=mysqli_connect($servername,$username,$password,$dbname);
								  if(!$conn){
									  die('Could not Connect MySql Server:' .mysql_error());
									}
								//building the condition for view part
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

								//building the selection part
								$select = "select ";
								$check_v = 0;
								for($q=0; $q!=sizeof($table_struct); $q++)
									if(isset($_POST[$q])){
										$select = $check_v==0? $select.$table_struct[$q]: $select.", ".$table_struct[$q];
										$check_v = 1;
									}

								//final query and result generation
								$query = strlen($where)==6? $select." from emp_details ": $select." from emp_details ".$where;
								$result = mysql_query($query);
								while($row = mysql_fetch_assoc($result)){
									for($q=0; $q!=17; $q++)
										if(isset($_POST[$q]))
												echo "<b>".$table_struct[$q].": </b>".$row[$table_struct[$q]]."<br>";	
										echo "<br>";
								}
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