<?php 



require("./connection.php");


print_r($_POST);

$query = "INSERT INTO `adopter_details`(`name`, `contact`, `email`, `address`, `anim_sr`) VALUES ('".$_POST['name']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['address']."',".$_POST['anim_sr'].");";

$res = mysqli_query($con,$query);


$q = "update adoption set adopt_status=1 where sr=".$_POST['anim_sr'];

mysqli_query($con,$q);
header("Location: ./adoption.php");

?>