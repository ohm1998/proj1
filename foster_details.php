<?php 
require("./connection.php");
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$number = $_POST['num'];
$address = $_POST['address'];
$sql = "insert into foster (`name`,`email`,`contact`,`number`,`address`) values 
		('$name','$email','$contact',$number,'$address')";
	echo $sql;
$con->query($sql);
?>