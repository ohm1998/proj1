<!DOCTYPE html>
<html>
<head>
	<title>Member List</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

</head>
<body>
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
    return "<table class='table hover table-stripped table-bordered'>" ."<thead><tr> <th>ID</th> <th>Name</th><th>DOB</th> <th>Age</th> 
    <th>Address</th>
    <th>Contact</th>
    <th>Pan Id No</th>
    <th>Email</th>
    <th>Occupation/College</th>
    <th>School</th>
    <th>Society</th>
    <th>Contact</th>
    <th>Contact</th>
    <th>Contact</th>
    <th>Contact</th>
    <th>Contact</th>
    <th>Contact</th>
    <th>Contact</th>
    <th>Contact</th>
    <th>Contact</th>
    </tr></thead><tbody>". implode('', $rows). "</tbody></table>";
}

 ?>

<?php 
require("./connection.php");
session_start();
$_SESSION['curr_page_class'] = '.mem_list';


$res = mysqli_fetch_all(mysqli_query($con,"select * from member"));

print_r($res);

echo html_table($res);

?>
<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
$(".table").DataTable({
		scrollX : true,
		responsive : true,
		fixedColumns: {
			leftColumns: 2
		}
	});
	});
</script>
</body>
</html>