<?php
include_once "db/connect.php";

						//building the condition for updation
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

						//building the attributes to be set
						$set = "";
						$check_v = 0;
						for($q=0; $q!=sizeof($table_struct); $q++)
							if($_POST[$q]!=""){
								if($q==3 || $q==12 || $q==14 || $q==15 || $q==16)
									$set = $check_v==0? $set.$table_struct[$q]."=".$_POST[$q]: $set.", ".$table_struct[$q]."=".$_POST[$q];
								else
									$set = $check_v==0? $set.$table_struct[$q].'="'.$_POST[$q].'"': $set.", ".$table_struct[$q].'="'.$_POST[$q].'"';
								$check_v = 1;
							}

						//building query and performing updation
						$query = "update emp_details set ".$set." ".$where;
						$result = mysql_query($query);
						if($result)
							echo "Updation succesful ".mysql_affected_rows()." row(s) were updated";
						else
							echo "Error during updation";
					?>

						