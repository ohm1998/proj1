<?php 
require("./connection.php");
session_start();
$_SESSION['curr_page_class'] = '.mem_list';


$res = mysqli_fetch_all(mysqli_query($con,"select * from member"),MYSQLI_ASSOC);
//print_r($res);
foreach($res as $i=>$r)
{
	$res[$i]['reg_timestamp'] = date('d-m-Y', $res[$i]['reg_timestamp']) ;
	$res[$i]['photo_location'] = "<img src='".$res[$i]['photo_location']."' height=100 width=150 alt'".$res[$i]['photo_location']."' >";	
	foreach($r as $x=>$q)
	{
		if($res[$i][$x]=="")
		{
			$res[$i][$x] = "-";	
		}
		$res[$i][$x]= '"'.$res[$i][$x].'"';

	}
	unset($res[$i]['payment']);
	unset($res[$i]['agreed']);
}
$s = '{ "data" : [';

foreach ($res as $r)
{
	$s = $s.'['.implode($r,",").'],';
}

$s = substr($s, 0, -1);
$s = $s.'] }'; 


echo $s;

?>