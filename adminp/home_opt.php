<?php 
session_start();

$_SESSION['curr_page_class'] = '.home';

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
    return "<table class='table hover table-stripped table-bordered'>" ."<thead><tr> <th>SR</th> <th>Name</th> <th>USERNAME</th></tr></thead><tbody>". implode('', $rows). "</tbody></table>";
}
 ?>
<br>
        <form action="./add_admin.php" method="POST" accept-charset="utf-8">
          <input type="text" name="name" placeholder="Name"><br><br>
          <input type="text" name="username" placeholder="Username"><br><br>
          <input type="password" name="password" placeholder="Password"><br><br>
          <input type="submit" value="Add">
        </form>
        <br>
        <?php  
    require("./connection.php");
    $res  = mysqli_fetch_all(mysqli_query($con,"select  `SR`,`NAME`,`USERNAME` from admin_details;"));
    echo html_table($res);

    ?>


<script type="text/javascript">
  $(document).ready( function () {
    $('.table').DataTable();
} );
</script>