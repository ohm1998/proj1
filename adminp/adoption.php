<?php 
require("./connection.php");


if(isset($_POST['del_anim_id']))
{
	$q = "delete from adoption where sr=".$_POST['del_anim_id'];
	mysqli_query($con,$q);
}


?>
<?php 


if(isset($_POST['adopt_status_chng_id']))
{
	$q = "UPDATE adoption SET adopt_status = (CASE adopt_status WHEN 1 THEN 0 ELSE 1 END) where sr=".$_POST['adopt_status_chng_id'];
	mysqli_query($con,$q);
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
</head>
<body>
<h2>Add Animal For Adoption</h2>
<form action="./add_adoption.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<label>Animal</label>
	<input type="text" name="animal">
	<label>Age</label>
	<input type="text" name="age">
	<label>Gender</label>
	<input type="text" name="gender">
	<label>Breed</label>
	<input type="text" name="breed">
	<label>Photo</label>
	<input type="file" name="adopt_photo">
	<input type="submit" value="Add">
</form>
<h2>Change Adoption Status:</h2>

<form method="POST" accept-charset="utf-8">
	<label>Animal Id: </label>
	<input type="text" name="adopt_status_chng_id" required>
	<input type="submit" value="Change">
</form>

<br><br>
<?php 

echo html_table($res);

?>

<h2>Delete animal:</h2>

<form method="POST" accept-charset="utf-8">
	<label>Animal Id: </label>
	<input type="text" name="del_anim_id" required>
	<input type="submit" value="Delete">
</form>

<h2>Adoption Enquiries:</h2>
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

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>

<script type="text/javascript">
  $(document).ready( function () {
    $('.table').DataTable();
} );
</script>
</body>
</html>