<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="petcare";

$con = mysqli_connect($servername, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}

if (isset($_POST['title'])) {
	$t=mysqli_real_escape_string($con,$_POST['title']);
	$p=mysqli_real_escape_string($con,$_POST['phone']);
	$input_date=$_POST['date'];
	$date=date("Y-m-d H:i:s",strtotime($input_date));
	$adr=mysqli_real_escape_string($con,$_POST['address']);

	$query = "insert into  pet (title,phone,date,address) values('".$t."','".$p."','".$date."','".$adr."')";
	$rs = mysqli_query($con,$query) or die(mysqli_error($con));
	echo "Thanks for contacting us!";
}

?>