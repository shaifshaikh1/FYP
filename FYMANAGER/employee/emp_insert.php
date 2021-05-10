<?php				
	//Establishing connection with database
	$servername='localhost';
    $username='root';
    $password='';
    $dbname = "my_db";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn){
          die('Could not Connect MySql Server:');
        }
		$pass="Insertion succesful";
		$fail="Error during insertion";
	//performing insertion
	//$values="('emp_id', 'fname', 'lname', 'house_no', 'lane', 'area', 'city', 'dob', 'gender', 'designation', 'tos', 'email', 'salary', 'dot', 'hrs_w', 'hrly_rate', 'floor_w)'";
	//$query = "insert into emp_details values (".$values.")";
	$query = "INSERT INTO `emp_details` (`emp_id`, `fname`, `lname`, `house_no`, `lane`, `area`, `city`, `dob`, `gender`, `designation`, `tos`, `email`, `salary`, `dot`, `hrs_w`, `hrly_rate`, `floor_w`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
	if($query){
		echo $pass;	
	}else{
		echo $fail;
	}
?>
