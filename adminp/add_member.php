<?php 

require("./connection.php");
session_start();
$_SESSION['curr_page_class'] = '.mem_list';


//print_r($_POST);

print_r($_FILES['photo']);

$_POST['aoi'] = implode($_POST['aoi'], ",");
//echo $_POST['aoi'];

$ext = explode("/", $_FILES['photo']['type'])[1];


$q = 'SELECT AUTO_INCREMENT
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = "petcare"
AND TABLE_NAME = "member"';

$count = mysqli_fetch_array(mysqli_query($con,$q))[0];



$target = "./uploads/member/";

$target = $target."m".$count.".".$ext;

$query = "INSERT INTO `member`(`name`, `dob`, `age`, `address`, `contact`, `panid`, `email`, `occ`, `school`, `currclub`, `club_society`, `club_status`, `prev_memnum`, `mem_type`, `area_of_interest`, `agreed`, `photo_location`, `reg_timestamp`, `payment`) VALUES ";

$query = $query."('".$_POST['name']."','".$_POST['dob']."',".$_POST['age'].",'".$_POST['address']."','".$_POST['contact']."','".$_POST['panid']."','".$_POST['email']."','".$_POST['occ']."','".$_POST['school']."','".$_POST['currclub']."','".$_POST['society']."','".$_POST['status']."','".$_POST['memnum']."','".$_POST['mem_type']."','".$_POST['aoi']."',".$_POST['agree'].",'".$target."',".time().",".'1'.",0)";


$res = mysqli_query($con,$query);

move_uploaded_file($_FILES['photo']['tmp_name'], $target);

header("Location: ./home.php");
	
?>