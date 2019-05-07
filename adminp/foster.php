<?php 

require("./connection.php");
session_start();
$_SESSION['curr_page_class']='.foster';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Foster</title>
	<link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
  <style>
  	.form-inline > * {
    margin:15px 3px !important;
	}
  </style>
</head>
<body>
<h2 class="alert alert-primary">Add Animal For Foster</h2>
<form action="add_foster.php" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="form-inline">
	<div class="form-group">
		<input type="text" class="form-control" name="animal" placeholder="Animal" required="">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="age" placeholder="Age"  required>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="gender" placeholder="Gender" required>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="breed" placeholder="Breed" required>
	</div>
    <div class="custom-file">
	    <input type="file" class="custom-file-input" name="adopt_photo" aria-describedby="inputGroupFileAddon01">
	    <label class="custom-file-label" for="inputGroupFile01">Upload Photo</label>
    </div>
	<div class="form-group">
		<input type="submit" class="btn btn-success" value="Submit">
	</div>
</form>
</body>
</html>