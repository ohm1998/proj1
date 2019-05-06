<?php 
require("./connection.php");
$_GET = $_POST;
$sql = "select * from rescue";
$result = $con->query($sql);
//Case Number AutoGeneration
$num_of_rows = mysqli_num_rows($result);
if(($num_of_rows+1)<10)
{
	$case_id = 	($num_of_rows+1);
}
if((($num_of_rows+1)<100) && (($num_of_rows+1)>=10))
{
	$case_id = ($num_of_rows+1);
}
if((($num_of_rows+1)<1000) && (($num_of_rows+1)>=100))
{
	$case_id = ($num_of_rows+1);	
}
if(($num_of_rows+1)>=1000)
{
	$case_id = ($num_of_rows+1);		
}

$today = getdate();
$case_date = $today["mday"]."/".$today["mon"]."/".$today["year"];
$case_title = $_GET["case_title"];
$name = $_GET["contact_name"];
$contact_num = $_GET["contact"];
$address = $_GET["animal_address"];
$problem = $_GET["animal_problem"];

print_r($_FILES);
echo $case_id;

$target = "uploads/rescue/"."rescue_anim".$case_id.".".explode("/", $_FILES['photo']['type'])[1];

//Add Query 
$sql_add_query = "insert into rescue (`case_title`, `case_date`, `case_address`, `case_contact`, `contact_name`, `case_problem`, `attended`, `photo_location`) values ('$case_id','$case_title','$case_date','$address','$contact_num','$name','$problem','$target')";
echo $sql_add_query;
move_uploaded_file($_FILES['photo']['tmp_name'], "adminp/".$target);
$con->query($sql_add_query);
?>