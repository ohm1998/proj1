<?php 
require("./connection.php");

print_r($_POST);

print_r($_FILES);

$q = 'SELECT AUTO_INCREMENT
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = "petcare"
AND TABLE_NAME = "lost_found"';

$count = mysqli_fetch_array(mysqli_query($con,$q))[0];

$target = "/uploads/lost_found/"."anim".$count.".".explode("/", $_FILES['lost_photo']['type'])[1];


$sql = "INSERT INTO `lost_found`(`animal`, `owner_name`, `contact`, `address`, `photo_location`, `status`,`animal_details`) VALUES ('".$_POST['name']."','".$_POST['owner_name']."','".$_POST['contact']."','".$_POST['address']."','".$target."',".'0'.",'".$_POST['animal_details']."')";

echo $sql;

mysqli_query($con,$sql);

move_uploaded_file($_FILES['lost_photo']['tmp_name'], "./adminp/".$target);

?>