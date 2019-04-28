<?php  

require("./connection.php");

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
    return "<table class='table hover table-stripped order-column table-bordered'>" ."<thead><tr> <th>SR</th> <th>Animal</th> <th>Animal Details</th> <th>Owner Name</th> <th>Contact</th>  <th>Address</th> <th>Photo</th> <th>Status</th> <th>Date</th> </tr></thead><tbody>". implode('', $rows). "</tbody></table>";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Lost and Found</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.dataTables.min.css">
</head>
<body>
<h2>Lost Found Enquiries</h2>
<?php 


$sql = "select * from lost_found";

$res = mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC);
foreach($res as $key=>$val)
{
	$res[$key]['photo_location'] = '<img src=".'.$res[$key]['photo_location'].'" alt="" height=150 width=150>' ;
}



echo html_table($res);

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