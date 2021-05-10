<?php
include_once "db/connect.php";

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
	$query = "update proj_sched set ".$set." ".$where;
	$result = mysql_query($query);
	if($result)
		echo "Updation succesful ".mysql_affected_rows()." row(s) were updated";
	else
		echo "Error during updation";
?>
