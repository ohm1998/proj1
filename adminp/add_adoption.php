<?php 

require("./connection.php");


print_r($_FILES);

print_r($_POST);


$q = 'SELECT AUTO_INCREMENT
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = "petcare"
AND TABLE_NAME = "adoption"';

$count = mysqli_fetch_array(mysqli_query($con,$q))[0];

$target = "/uploads/adoption/"."anim".$count.".".explode("/", $_FILES['adopt_photo']['type'])[1];

echo $target;

echo $count;

$query = "INSERT INTO `adoption`(`animal`, `age`, `gender`, `breed`, `photo_location`, `adopt_status`) VALUES ('".$_POST['animal']."',".$_POST['age'].",'".$_POST['gender']."','".$_POST['breed']."','".$target."',".'0'.")";


$res = mysqli_query($con,$query);

move_uploaded_file($_FILES['adopt_photo']['tmp_name'], ".".$target);

header("Location: ./adoption.php");
?>