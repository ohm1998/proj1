<?php 


require('./connection.php');

print_r($_POST);

$_POST['password'] = md5($_POST['password']);

$sql = "INSERT INTO `admin_details`(`NAME`, `USERNAME`, `PASSWORD`) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['password']."')";
echo $sql;

$res  = mysqli_query($con,$sql);

print($res);

header("location: home.php");

?>