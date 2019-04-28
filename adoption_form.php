<?php  
require("./connection.php");

$sql = "select * from adoption where adopt_status=0 and sr=".$_GET['sr'];
$res = mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Adoption Form</title>
</head>
<body>
	<h2>Details:</h2>
	<img src="<?php echo "adminp/".$res[0]['photo_location']; ?>" alt="" height=250 width=300> <br>
	<?php
		unset($res[0]['adopt_status']);
		foreach ($res[0] as $key => $value)
		{
			if($key=="photo_location")
			{
				continue;
			}
			echo $key.": ".$value."<br>";
		} 
	?>
	<br>
<form action="./adopter_details.php" method="post" accept-charset="utf-8">
	<label>Name:</label>
	<input type="text" name="name" required>
	<label>Contact</label>
	<input type="text" name="contact" required>
	<label>Email:</label>
	<input type="text" name="email" required>
	<label>Address</label>
	<input type="text" name="address" required>
	<input type="hidden" name="anim_sr" value="<?php echo $_GET['sr']; ?>">
	<input type="submit" value="Submit">
</form>
</body>
</html>