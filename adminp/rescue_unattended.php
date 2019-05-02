<?php 
require("./connection.php");
session_start();
$_SESSION['curr_page_class']='.rescue_unattended';

print_r($_POST);
if(isset($_POST['mem_id']) && isset($_POST['case_id']))
{
	print_r($_POST);
}

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
    return "<table class='table hover  table-stripped table-bordered'>" ."<thead><tr> <th>Id</th><th>Case Title</th> <th>Date</th> <th>Address</th>  <th>Contact</th> <th>Contact Name</th> <th>Problem</th> <th>Attended</th> </tr></thead><tbody>". implode('', $rows). "</tbody></table>";
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
    return "<table class='table2 hover table-stripped table-bordered'>" ."<thead><tr> <th>ID</th> <th>Name</th><th>DOB</th> <th>Age</th> <th>Contact</th>  </tr></thead><tbody>". implode('', $rows). "</tbody></table>";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Rescue Unattended</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
</head>
<body>
<h1>Case List:</h1>
<?php 

$sql = "select * from rescue";

$res = mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC);

echo html_table($res);

?>
<div class="members">
<h1>Member List:</h1>
	<?php 
		$r = mysqli_fetch_all(mysqli_query($con,"select `sr`,`name`,`dob`,`age`,`contact` from member"),MYSQLI_ASSOC);
		echo html_table2($r); 
	?>
</div>
<form method="POST" action="">
	<h1>Assign Case To Member</h1>
	<input type="text" name="case_id" placeholder="Enter Case Id"><br> <br>
	<input type="text" name="mem_id" placeholder="Enter Member Id"> <br> <br>
	<input type="submit" value="Submit">
</form>
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
    $('.table2').DataTable({
    	responsive: true
    });
} );
</script>
</body>
</html>