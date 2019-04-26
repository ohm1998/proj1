<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petcare";

$con = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_error()) {
    die("Connection failed! ".mysqli_connect_error());
} 
?>