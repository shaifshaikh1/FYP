<?php
include_once "db/connect.php";

							
								//building the condition for view part
								$table_struct = ["id", "floor", "funds", "quantity", "sources"];
								$where = "where ";
								$check_v = 0;
								for($q=0; $q!=sizeof($table_struct); $q++)
									if($_POST[$table_struct[$q]]!=""){
										if($q==1 || $q==2)
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
								$query = strlen($where)==6? $select." from res_allot ": $select." from res_allot ".$where;
								$result = mysql_query($query);
								while($row = mysql_fetch_assoc($result)){
									for($q=0; $q!=17; $q++)
										if(isset($_POST[$q]))
												echo "<b>".$table_struct[$q].": </b>".$row[$table_struct[$q]]."<br>";	
										echo "<br>";			
								}
							