<?php 
require("./connection.php");
session_start();
$_SESSION['curr_page_class']='.adopt_form';

if(isset($_POST['del_anim_id']))
{
	$q = "delete from adoption where sr=".$_POST['del_anim_id'];
	echo $q;
	mysqli_query($con,$q) or die(mysqli_error($con));
	header('location:home.php');
}


?>
<?php 

if(isset($_POST['del_adopter_id']))
{
	$q = "delete from adopter_details where id=".$_POST['del_adopter_id'];
	mysqli_query($con,$q);
	header('location:home.php');
	//mysqli_query($con,$q);
}

?>
<?php 


if(isset($_POST['adopt_status_chng_id']))
{
	$q = "UPDATE adoption SET adopt_status = (CASE adopt_status WHEN 1 THEN 0 ELSE 1 END) where sr=".$_POST['adopt_status_chng_id'];
	mysqli_query($con,$q);
	header('location:home.php');
}

?>
<?php 



function html_table($data = array())
{
    $rows = array();
    foreach ($data as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }
    return "<table class='table hover table-stripped table-bordered'>" ."<thead><tr> <th>SR</th> <th>Animal</th> <th>Age</th> <th>Gender</th>  <th>Breed</th> <th>photo</th> <th>Adoption Status</th> </tr></thead><tbody>". implode('', $rows). "</tbody></table>";
}

function html_table2($data = array())
{
    $rows = array();
    foreach ($data as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }
    return "<table class='table hover table-stripped table-bordered'>" ."<thead><tr> <th>SR</th> <th>Adopter Name</th> <th>Contact</th> <th>Email</th>  <th>Address</th> <th>Animal Id</th> <th>Animal type</th> <th>Animal Gender</th> <th>Animal Breed</th> <th>photo</th> </tr></thead><tbody>". implode('', $rows). "</tbody></table>";
}

$sql = "select * from adoption";

$res = mysqli_fetch_all(mysqli_query($con,$sql));
foreach ($res as $key => $value) 
{
	$res[$key][5] = "<img src='.".$res[$key][5]."' height=100 width=100>";

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Add For Adoption</title>
	<link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
  <style>
  	.form-inline > * {
    margin:15px 3px !important;
	}
  </style>
</head>
<body>
<br>
<h2 class="alert alert-primary">Add Animal For Adoption</h2>    


<form action="add_adoption.php" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="form-inline">
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
<br><br>
<h2 class="alert alert-primary">Change Adoption Status:</h2>

<form method="POST" action="adoption.php" accept-charset="utf-8" class="form-inline">
	<div class="form-group">
		<input type="text" class="form-control" name="adopt_status_chng_id" placeholder="Animal Id" required>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-success" value="Change">
	</div>
</form>

<br><br>
<?php 

echo html_table($res);

?>

<br><br>
<h2 class="alert alert-primary">Delete animal:</h2>

<form method="POST" action="adoption.php" accept-charset="utf-8" class="form-inline">
	<div class="form-group">
		<input type="text" class="form-control" name="del_anim_id" placeholder="Animal Id" required>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-success" value="Delete">
	</div>
</form>

<br><br>
<h2 class="alert alert-primary">Adoption Enquiries:</h2>
<?php  

$sql = "select *  from adopter_details join adoption on adoption.sr=adopter_details.anim_sr";


$res = mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC);

foreach($res as $i=>$r)
{
	unset($res[$i]['anim_sr']);
	unset($res[$i]['age']);
	unset($res[$i]['adopt_status']);
	$res[$i]['photo_location'] = "<img src='.".$res[$i]['photo_location']."' height=100 width=100>";
}
echo html_table2($res);

?>
<br><br>
<h2 class="alert alert-primary">Delete Adopter Detail:</h2>

<form method="POST" action="adoption.php" accept-charset="utf-8" class="form-inline">
	<div class="form-group">
		<input type="text" class="form-control" name="del_adopter_id" placeholder="Adopter Id" required>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-success" value="Delete">
	</div>
</form>
<br><br><br>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('.table').DataTable({
    	responsive: true
    });
} );
</script>
</body>
</html>