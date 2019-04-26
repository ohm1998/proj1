<?php 

session_start();
if(isset($_SESSION['curr_page_class']))
{
	$curr_page_class = "'".$_SESSION['curr_page_class']."'";
}
else
{
	$curr_page_class = "'".".home"."'";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Panel</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.dataTables.min.css">
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin</div>
      <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action bg-light home">Home</a>
        <a class="list-group-item list-group-item-action bg-light add_member">Add Member</a>
        <a class="list-group-item list-group-item-action bg-light mem_list">Member List</a>
        <a class="list-group-item list-group-item-action bg-light">Events</a>
        <a class="list-group-item list-group-item-action bg-light">Profile</a>
        <a class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid load">
        
      </div>
    </div>


    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

<script type="text/javascript">
	$(".add_member").click(function()
	{
		$(".load").load("./member.php");
	});
	$(".home").click(function()
	{
		$(".load").load("./home_opt.php");
		
	});
	$(".mem_list").click(function()
	{
		$(".load").html("<table class='table hover stripe row-border order-column'><thead><tr> <th>ID</th> <th>Name</th><th>DOB</th> <th>Age</th>    <th>Address</th> <th>Contact</th>    <th>Pan Id No</th>    <th>Email</th>    <th>Occupation/College</th>    <th>School</th><th>Current Club</th>    <th>Society</th>    <th>Status</th>    <th>Prev Mem No</th>    <th>Mem Duration</th>    <th>Areas Of Interest</th>  <th>Photo</th> <th>Timestamp</th> </tr></thead><tbody></tbody></table>");
				$(".table").DataTable(
					{
						scrollX : true,
						responsive : true,
						fixedColumns: {
							leftColumns: 2
						},
						"ajax":
						{
							url: "./member_list.php"
						}
			});
	});
</script>
<script type="text/javascript">
	var a = (<?php echo $curr_page_class; ?>);
	console.log(a);
	$(a).click();
</script>
</body>

</html>
