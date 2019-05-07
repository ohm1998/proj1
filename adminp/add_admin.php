<?php 
session_start();
$_SESSION['curr_page_class'] = '.home';

require('./connection.php');

print_r($_POST);

$q = "select * from admin_details where username='".$_POST['username']."'";
$res = mysqli_query($con,$q);
if($res->num_rows>0)
{
	$_SESSION['usern_exist']=1;
	header("Location: ./home.php");
}

$_POST['password'] = md5($_POST['password']);



$sql = "INSERT INTO `admin_details`(`NAME`, `USERNAME`, `PASSWORD`,`type`,`mem_id`) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['password']."','".$_POST['type']."','".$_POST['mem_id']."')";

/*$res  = mysqli_query($con,$sql);

print($res);

header("location: home.php");
*/
?>