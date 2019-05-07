<?php 

require './connection.php';

print_r($_POST);

extract($_POST);

$pass = md5($pass);

$sql = "select * from admin_details where username='".$username."'";

$res = mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC);

session_start();

if($pass = $res[0]['PASSWORD'])
{
	$_SESSION['mem_id']= $res[0]['mem_id'];
	$_SESSION['type'] = $res[0]['type'];
	$_SESSION['pass'] = 1;
	header("Location: ./home.php");
}
else
{
	$_SESSION['pass_wrong'] = 1;
	header("Location: ./index.php");
}

?>