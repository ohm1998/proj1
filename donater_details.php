<?php
require("./connection.php");

extract($_POST);

$sql = "INSERT INTO `donation`(`name`, `contact`, `email`, `amount`,  `case_id`) VALUES ('$name','$contact','$email','$amount','$anim_sr')";

mysqli_query($con,$sql);

echo "Payment Added";

?>
