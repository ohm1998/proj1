<?php 
require("./connection.php");
session_start();
$_SESSION['curr_page_class']='.rescue_unattended';

if(isset($_POST['mem_id']) && isset($_POST['case_id']))
{
    extract($_POST);
    $q = "insert into rescue_case_mem(`rescue_case_id`,`mem_id`) values($case_id,$mem_id)";
    mysqli_query($con,$q);
    $query = "update rescue set attended=1 where case_id=".$_POST['case_id'];
    mysqli_query($con,$query);
    header("Location: ./home.php");
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
    return "<table class='table hover  table-stripped table-bordered'>" ."<thead><tr> <th>Id</th><th>Case Title</th> <th>Date</th> <th>Address</th>  <th>Contact</th> <th>Contact Name</th> <th>Problem</th> <th>Attended</th> <th>Photo</th> </tr></thead><tbody>". implode('', $rows). "</tbody></table>";
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


function html_table3($data = array())
{
    $rows = array();
    foreach ($data as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }

    $s = "<table class='table2 hover table-stripped table-bordered'>" ."<thead><tr>"; 

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
	<title>Rescue Unattended</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
</head>
<body>
<br>
<h2 class="alert alert-primary">Case List:</h2>
<br>

<?php 

$sql = "select * from rescue where attended=1 or attended=0";

$res = mysqli_fetch_all(mysqli_query($con,$sql),MYSQLI_ASSOC);

foreach($res as $key=>$r)
{
    if($r['attended']==-1)
    {
        $res[$key]['attended'] = "Case Closed"." CC";
    }
    else if($r['attended']==0)
    {
        $res[$key]['attended'] = "Unattended"." UA";
    }
    else if($r['attended']==1)
    {
        $res[$key]['attended'] = "Attended"." assigned";
    }
    $res[$key]['photo_location'] = '<img src="'.$res[$key]['photo_location'].'" alt="animal pic" height=200 width=180>' ;
}


echo html_table($res);

?>
<br>
<br>
<div class="members">
<h2 class="alert alert-primary">Member List:</h2><br>
	<?php 
		$r = mysqli_fetch_all(mysqli_query($con,"select `sr`,`name`,`dob`,`age`,`contact` from member"),MYSQLI_ASSOC);
		echo html_table2($r); 
	?>
</div>
<br><br>
<form method="POST" action="rescue_unattended.php">
	<h2 class="alert alert-primary">Assign Case To Member</h2><br>
	<input type="text" name="case_id" placeholder="Enter Case Id"><br> <br>
	<input type="text" name="mem_id" placeholder="Enter Member Id"> <br> <br>
	<input type="submit" class="btn btn-info" value="Submit">
</form>
<br><br>
<h2 class="alert alert-primary">Case Assigned To Member</h2><br>
<?php 

$query = "select sr as member_id,name as member_name,case_id,case_title,case_address,case_contact,contact_name,case_problem from rescue join rescue_case_mem on rescue_case_mem.rescue_case_id=rescue.case_id join member on member.sr = rescue_case_mem.mem_id";

$res = mysqli_fetch_all(mysqli_query($con,$query),MYSQLI_ASSOC);

foreach($res as $key=>$r)
{
    unset($res[$key]['attended']);
    unset($res[$key]['id']);
    unset($res[$key]['rescue_case_id']);
    unset($res[$key]['case_date']);
}

echo html_table3($res);

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
    $('.table2').DataTable({
    	responsive: true
    });
} );
</script>
</body>
</html>