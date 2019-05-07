<?php 

require("./connection.php");
session_start();
$_SESSION['curr_page_class']='.foster';



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

    $s = "<table class='table hover table-stripped table-bordered'>" ."<thead><tr>"; 

    foreach($data[0] as $key=>$val)
    {
        $s = $s."<th>".ucfirst($key)."</th>";
    }
    $s = $s."</tr></thead><tbody>";
    return $s. implode('', $rows). "</tbody></table>";
}

if(isset($_POST['del_user']))
 {
  $sql = "delete from foster_animal_details where id='".$_POST['del_user']."'";
  mysqli_query($con,$sql);
  header("Location: ./home.php");
 }


if(isset($_POST['change_stat']))
 {
  $sql = "UPDATE foster_animal_details SET foster_status = (CASE foster_status WHEN 1 THEN 0 ELSE 1 END) where id='".$_POST['change_stat']."'";
  mysqli_query($con,$sql);
  echo $sql;
  header("Location: ./home.php");
 }

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
<form action="add_foster.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data" class="form-inline">
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
</form><br> <br>
<h2 class="alert alert-primary">Foster Animals</h2>
<?php 

$q = "select * from foster_animal_details";

$res = mysqli_fetch_all(mysqli_query($con,$q),MYSQLI_ASSOC);
foreach($res as $key=>$r)
{
  if($res[$key]['foster_status'])
  {
    $res[$key]['foster_status']="Fostered 1FF";
  }
  else
  {
    $res[$key]['foster_status'] = "UnFostered 0FF";
  }
	$res[$key]['Photo'] = "<img src='.".$res[$key]['photo_location']."' height=100 width=100>";
	unset($res[$key]['photo_location']);
}
echo  html_table($res);

?>
   <h2 class="alert alert-primary">Delete Foster Animal:</h2>
     <form action="./foster.php" method="POST" accept-charset="utf-8">
          <input type="text" name="del_user" placeholder="Id Of Animal"><br><br>
          <input type="submit" value="Delete">
        </form><br>
        <h2 class="alert alert-primary">Change Foster Status:</h2>
     <form action="./foster.php" method="POST" accept-charset="utf-8">
          <input type="text" name="change_stat" placeholder="Id Of Animal"><br><br>
          <input type="submit" value="Change">
        </form><br>
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