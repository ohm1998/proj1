<?php 
require("./connection.php");
$sql = "select * from rescue";
$result = $con->query($sql);
//Case Number AutoGeneration
$num_of_rows = mysqli_num_rows($result);
if ($num_of_rows<10) 
{
	$case_id = "PET000".($num_of_rows+1);
}
else if($num_of_rows<100)
{
	$case_id = "PET00".($num_of_rows+1);
}
else if($num_of_rows<1000)
{
	$case_id = "PET0".($num_of_rows+1);	
}
else
{
	$case_id = "PET".($num_of_rows+1);		
}

$today = getdate();
$case_date = $today["mday"]."/".$today["mon"]."/".$today["year"];
$case_title = $_POST["case_title"];
$name = $_POST["contact_name"];
$contact_num = $_POST["contact"];
$address = $_POST["animal_address"];
$problem = $_POST["animal_problem"];
//Add Query 
$sql_add_query = "insert into rescue values (`$case_id`,`$case_title`,`$case_date`,`$address`
												,`$contact_num`,`$name`,`$problem`)";
echo $sql_add_query;
//$result = $con->query($sql_add_query);
?>