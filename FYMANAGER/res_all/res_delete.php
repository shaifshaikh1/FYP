<?php
include_once "db/connect.php";

	//building the condition
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

	//performing deletion
	$query = "delete from res_allot ".$where;
	$result = mysql_query($query);
	if($result)
		echo "Deletion succesful ".mysql_affected_rows()." row(s) were deleted succesfully";
	else
		echo "Error in deletion";
		?>
		