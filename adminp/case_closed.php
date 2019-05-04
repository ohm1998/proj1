<?php 

require("./connection.php");
session_start();
$_SESSION['curr_page_class']='.case_closed';


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
	<title>Case Closed</title>
</head>
<body>
<?php 

$query = "select sr as member_id,name as member_name,case_id,case_title,case_address,case_contact,contact_name,case_problem from rescue join rescue_case_mem on rescue_case_mem.rescue_case_id=rescue.case_id join member on member.sr = rescue_case_mem.mem_id where rescue.attended=-1";

$res = mysqli_fetch_all(mysqli_query($con,$query),MYSQLI_ASSOC);

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