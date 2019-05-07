<?php 
session_start();

    require("./connection.php");

$_SESSION['curr_page_class'] = '.home';

/*function html_table($data = array())
{
    $rows = array();
    foreach ($data as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }
    return "<table class='table hover table-stripped table-bordered'>" ."<thead><tr> <th>SR</th> <th>Name</th> <th>USERNAME</th></tr></thead><tbody>". implode('', $rows). "</tbody></table>";
}*/
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
 <?php 

 if(isset($_POST['del_user']))
 {
  $sql = "delete from admin_details where username='".$_POST['del_user']."'";
  mysqli_query($con,$sql);
  header("Location: ./home.php");
 }

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Admin</title>

<link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.dataTables.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
</head>
<body>
<br>
<h2 class="alert alert-primary">Add User:</h2>
<?php 

if(isset($_SESSION['usern_exist']) && $_SESSION['usern_exist']==1)
{
  echo "Username already Exists! Check the Login Details Table at the bottom";
  unset($_SESSION['usern_exist']);
}

?>
        <form action="./add_admin.php" method="POST" accept-charset="utf-8">
          <input type="text" name="name" placeholder="Name"><br><br>
          <input type="text" name="username" placeholder="Username"><br><br>
          <input type="password" name="password" placeholder="Password"><br><br>
          <select name="type">
            <option value="m">Member</option>
            <option value="a">Admin</option>
          </select>
          <br> <br>
          <input type="text" name="mem_id" placeholder="Member Id"><br><br>
          <input type="submit" value="Add">
        </form>
        <br>
    <h2 class="alert alert-primary">Delete User:</h2>
     <form action="./home_opt.php" method="POST" accept-charset="utf-8">
          <input type="text" name="del_user" placeholder="Username Of User"><br><br>
          <input type="submit" value="Delete">
        </form><br>
        <h2 class="alert alert-primary">Members List:</h2>
        <?php 

$res = mysqli_fetch_all(mysqli_query($con,"select * from member"),MYSQLI_ASSOC);
foreach($res as $key=>$val)
{
  $res[$key]['photo_location'] = '<img src=".'.$res[$key]['photo_location'].'" alt="" height=150 width=150>' ;
}

echo html_table($res);

?>
<h2 class="alert alert-primary">Current Login Details:</h2>
        <?php  
    $res  = mysqli_fetch_all(mysqli_query($con,"select  `SR`,`NAME`,`USERNAME`,`type`,`mem_id` from admin_details;"),MYSQLI_ASSOC);
    echo html_table($res);

    ?>


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
} );
</script>
</body>
</html>
