<?php 
require("./connection.php");
$sql = "select * from rescue";
$result = $con->query($sql);
//Case Number AutoGeneration
$num_of_rows = mysqli_num_rows($result);
if(($num_of_rows+1)<10)
{
	$case_id = "PET000".($num_of_rows+1);
}
if((($num_of_rows+1)<100) && (($num_of_rows+1)>=10))
{
	$case_id = "PET00".($num_of_rows+1);
}
if((($num_of_rows+1)<1000) && (($num_of_rows+1)>=100))
{
	$case_id = "PET0".($num_of_rows+1);	
}
if(($num_of_rows+1)>=1000)
{
	$case_id = "PET".($num_of_rows+1);		
}

$today = getdate();
$case_date = $today["mday"]."/".$today["mon"]."/".$today["year"];
$case_title = $_GET["case_title"];
$name = $_GET["contact_name"];
$contact_num = $_GET["contact"];
$address = $_GET["animal_address"];
$problem = $_GET["animal_problem"];
//Add Query 
$sql_add_query = "insert into rescue values ('$case_id','$case_title','$case_date','$address'
												,'$contact_num','$name','$problem')";
echo ("The Record was saved");
$con->query($sql_add_query);
?>