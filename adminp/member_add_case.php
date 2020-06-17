<?php 

require("./connection.php");
session_start();
$_SESSION['curr_page_class']='.case_closed';


if(isset($_GET['mem_id']) && isset($_GET['case_id']))
{
    extract($_GET);
    $q = "insert into rescue_case_mem(`rescue_case_id`,`mem_id`) values($case_id,$mem_id)";
    mysqli_query($con,$q);
    $query = "update rescue set attended=1 where case_id=".$_GET['case_id'];
    mysqli_query($con,$query) or die(mysqli_error($con));
    echo "  <script>
                window.alert('Case ID: $case_id was successfully assigned to you!!');
                window.location = './home.php';
            </script>
    ";
    // header("Location: ./home.php");
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

    $s = "<table class='table hover table-stripped table-bordered'>" ."<thead><tr>"; 

    foreach($data[0] as $key=>$val)
    {
        $s = $s."<th>".$key."</th>";
    }
    $s = $s."</tr></thead><tbody>";
    return $s. implode('', $rows). "</tbody></table>";
}

?>



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

    $_SESSION['member_logged_id'] = 4;

    if($r['attended']==0)
        $res[$key]['Accept'] = '<a href="member_add_case.php?case_id='.$res[$key]['case_id'].'&mem_id='.$_SESSION['member_logged_id'].'">ACCEPT</a>';
    else
        $res[$key]['Accept'] = '<a href="">-</a>';
}


echo html_table($res);

?>