<?php
include_once "db/connect.php";
include "header.php"
	//building insertion query
	$table_struct = ["floor", "work", "man_d", "mat_n", "end_d", "man_q", "mat_q", "funds","mat_id"];
	$values = "";
	$check_v = 0;
	for($q=0; $q!=sizeof($table_struct); $q++){
		if($_POST[$table_struct[$q]]!=""){
			if($q==0 || $q==5 || $q==7)
				$values = $check_v==0? $values.$_POST[$table_struct[$q]]: $values.", ".$_POST[$table_struct[$q]];
			else
				$values = $check_v==0? $values.'"'.$_POST[$table_struct[$q]].'"': $values.', "'.$_POST[$table_struct[$q]].'"';
			$check_v = 1;
		}
		else
			$values = $values.", NULL";
	}

	//performing insertion
	$query = "insert into proj_sched values (".$values.")";
	$result = mysql_query($query);
	echo $query;
	if($result)
		echo "Insertion succesful";
	else
		echo "Error during insertion";
?>
