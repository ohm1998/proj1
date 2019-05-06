<?php 
require("./connection.php");
print_r($_GET);
$name = $_GET['name'];
$email = $_GET['email'];
$contact = $_GET['contact'];
$number = $_GET['num'];
$address = $_GET['address'];
$sql = "insert into foster (`name`,`email`,`contact`,`number`,`address`) values 
		('$name','$email','$contact',$number,'$address')";
	echo $sql;
$con->query($sql);
?>