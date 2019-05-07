<?php 

require("./connection.php");
session_start();
$_SESSION['curr_page_class']='.foster';

print_r($_POST);

print_r($_FILE);


?>