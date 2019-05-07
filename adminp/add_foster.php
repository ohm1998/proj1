<?php 

require("./connection.php");
session_start();
$_SESSION['curr_page_class']='.foster';


$q = 'SELECT AUTO_INCREMENT
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = "petcare"
AND TABLE_NAME = "foster_animal_details"';

$count = mysqli_fetch_array(mysqli_query($con,$q))[0];


$target = "/uploads/foster/"."anim".$count.".".explode("/", $_FILES['adopt_photo']['type'])[1];

$query = "INSERT INTO `foster_animal_details` (`animal`, `age`, `gender`, `breed`, `photo_location`, `foster_status`) VALUES ('".$_POST['animal']."',".$_POST['age'].",'".$_POST['gender']."','".$_POST['breed']."','".$target."',".'0'.")";



$res = mysqli_query($con,$query);

move_uploaded_file($_FILES['adopt_photo']['tmp_name'], ".".$target);

header("Location: home.php");
?>