<?php 
require("./connection.php");
session_start();
$_SESSION['curr_page_class']='.case_details';

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

if(isset($_POST['case_id']))
{
	print_r($_POST);
    extract($_POST);
    if($follow=="no")
    {
        $followup="-1";
        $query = "update rescue set attended=-1 where case_id=".$case_id;
        mysqli_query($con,$query);
    }
    $q = "INSERT INTO `rescue_case_followup`( `case_id`, `cost_incurred`, `follow_up_date`, `extra_comments`) VALUES ($case_id,$charge,'$followup','$comments')";
    echo $q;
    mysqli_query($con,$q);
    header("Location: ./home.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Case</title>
</head>
<body>
    <br>
<?php 
$query = "select sr as member_id,name as member_name,case_id,case_title,case_address,case_contact,contact_name,case_problem from rescue join rescue_case_mem on rescue_case_mem.rescue_case_id=rescue.case_id join member on member.sr = rescue_case_mem.mem_id where rescue.attended=1";

$res = mysqli_fetch_all(mysqli_query($con,$query),MYSQLI_ASSOC);

foreach($res as $key=>$r)
{
    unset($res[$key]['attended']);
    unset($res[$key]['id']);
    unset($res[$key]['rescue_case_id']);
    unset($res[$key]['case_date']);
}

echo html_table($res);
?>
<h2>Enter Case Details:</h2>
<form action="case_details.php" method="POST" accept-charset="utf-8">
	<input type="number" name="case_id" placeholder="Case Id" required>
	<input type="number" step="0.01" min="1" name="charge" placeholder="Charge Incurred" required><br>
    <label>Followup Date:</label><br>
    <input type="radio" id="y" name="follow" value="yes"/> Yes
    <input type="radio" id="n"   name="follow" value="no" />No
	<input type="date" name="followup" placeholder="Follow Up Date" id="follow_date" style="display: none;"><br> <br>
	<textarea name="comments" placeholder="Extra Comments"></textarea>
	<input type="submit" value="Submit">
</form>
<h2>Case Details</h2>
<?php 

$q = "select * from rescue_case_followup";
$res = mysqli_fetch_all(mysqli_query($con,$q),MYSQLI_ASSOC);

foreach($res as $key=>$r)
{
    if($r['follow_up_date']=="-1")
    {
        $res[$key]['follow_up_date'] = "Case Closed";
    }
}

echo html_table($res);
?>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('.table').DataTable({
    	responsive: true
    });
} );
  $("#y").click(function()
  {
    $("#follow_date").show();
  });
  $("#n").click(function()
  {
    $("#follow_date").hide();
  });
</script>
</body>
</html>