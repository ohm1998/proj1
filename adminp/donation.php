<?php 

require("./connection.php");
session_start();
$_SESSION['curr_page_class']='.donation';


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
        $s = $s."<th>".$key."</th>";
    }
    $s = $s."</tr></thead><tbody>";
    return $s. implode('', $rows). "</tbody></table>";
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Donantions</title>
</head>
<body>
<h2 class="alert alert-primary">Donations:</h2>
<?php 
$sql = "select * from donation";

$res = mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC);

echo html_table($res);

?>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
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