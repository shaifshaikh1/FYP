<?php
include_once "db/connect.php";


	//building the condition
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

	//performing deletion
	$query = "delete from daily_log ".$where;
	$result = mysql_query($query);
	if($result)
		echo "Deletion succesful ".mysql_affected_rows()." row(s) were deleted succesfully";
	else
		echo "Error in deletion";
?>
