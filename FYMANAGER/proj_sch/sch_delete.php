<?php
include_once "db/connect.php";

	//Establishing connection with database
	$conn = mysql_connect("localhost", "root");
	if(!$conn){
		echo "Error while establishing connection with database";
		exit();
	}
	$db = mysql_select_db("construction_site");
	if(!$db){
		echo "Error while selection appropriate database";
		exit();
	}
?>
<?php
	if($_POST['floor']!="" && $_POST['mat_id']=="")
	{
		$b = $_POST['floor'];
		$sql = "delete from res_allot where floor = $b";
	}
	else if($_POST['floor']=="" && $_POST['mat_id']!="")
	{
		
		$a = $_POST['mat_id'];
		//$b = "$_POST['floor']";
		$sql = "delete from res_allot where id='$a'";
	}
	else if($_POST['floor']!="" && $_POST['mat_id']!="")
	{
		$a =  $_POST['mat_id'];
		$b = $_POST['floor'];
		$sql = "delete from res_allot where id='$a' and  floor= $b";
	}
	$result = mysql_query($sql);
	if($result)
	{
		echo "Successful.";
	}
	else
	{
		echo "unsucessful.";
	}
?>
<?php
	
	//performing deletion
	$query = "delete from proj_sched ".$where;
	$result = mysql_query($query);
	if($result)
		echo "Deletion succesful ".mysql_affected_rows()." row(s) were deleted succesfully";
	else
		echo "Error in deletion";
?>
