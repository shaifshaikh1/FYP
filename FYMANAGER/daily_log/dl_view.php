<?php
include "db/connect.php";

								//building the condition for view part
								$table_struct = ["floor", "date", "mat_n", "mat_q", "funds", "per_comp"];
								$where = "where ";
								$check_v = 0;
								for($q=0; $q!=sizeof($table_struct); $q++)
									if($_POST[$table_struct[$q]]!=""){
										if($q==1){
											$given_date = strtotime($_POST[$table_struct[$q]]);
											$given_date = date("Y-m-d", $given_date);
											$where = $check_v==0? $where.$table_struct[$q]."=\"".$given_date.'" ': $where."and ".$table_struct[$q]."=\"".$given_date.'" ';
										}
										else if($q==0 || $q==4 || $q==5)
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
								$query = strlen($where)==6? $select." from daily_log ": $select." from daily_log ".$where;
								$result = mysqli_query($query);
								while($row = mysqli_fetch_assoc($result)){
									for($q=0; $q!=17; $q++)
										if(isset($_POST[$q]))
												echo "<b>".$table_struct[$q].": </b>".$row[$table_struct[$q]]."<br>";	
										echo "<br>";
								}
							?>
							