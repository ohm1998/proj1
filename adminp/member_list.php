
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
    <th>Current Club</th>
    <th>Society</th>
    <th>Status</th>
    <th>Prev Mem No</th>
    <th>Mem Duration</th>
    <th>Areas Of Interest</th>
    <th>Contact</th>
    <th>Contact</th>
    </tr></thead><tbody>". implode('', $rows). "</tbody></table>";
}

 ?>

<?php 
require("./connection.php");
session_start();
$_SESSION['curr_page_class'] = '.mem_list';


$res = mysqli_fetch_all(mysqli_query($con,"select * from member"),MYSQLI_ASSOC);
//print_r($res);
foreach($res as $i=>$r)
{
	$res[$i]['photo_location'] = "<img src='".$res[$i]['photo_location']."' height=100 width=150 alt'".$res[$i]['photo_location']."' >";	
	foreach($r as $x=>$q)
	{
		$res[$i][$x]= '"'.$res[$i][$x].'"';

	}
	unset($res[$i]['payment']);
	unset($res[$i]['agreed']);
}
//$res[0]['photo_location'] = '<img src="'.$res[0]['photo_location'].'" height=200 width=300 alt"'.$res[0]['photo_location'].'" >';
/*echo html_table($res);*/

$s = '{ "data" : [';

foreach ($res as $r)
{
	$s = $s.'['.implode($r,",").'],';
}

$s = substr($s, 0, -1);
$s = $s.'] }'; 


echo $s;

?>