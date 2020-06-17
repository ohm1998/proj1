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

if(!isset($_SESSION['pass']) || !$_SESSION['pass']==1 )
{
  header("Location: ./index.php");
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
</head>

<body>

  <div class="d-flex toggled" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin</div>
      <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action bg-light home">Home</a>
        <!-- <a class="list-group-item list-group-item-action bg-light add_member">Add Member</a> -->
        <a class="list-group-item list-group-item-action bg-light mem_list">Member List</a>
        <a class="list-group-item list-group-item-action bg-light adopt_form">Adoption</a>
        <a class="list-group-item list-group-item-action bg-light rescue_unattended">Rescue Unattended</a>
        <a class="list-group-item list-group-item-action bg-light case_details">Enter Case Details</a>
        <a class="list-group-item list-group-item-action bg-light case_closed">Closed Cases</a>
        <a class="list-group-item list-group-item-action bg-light foster">Foster Animals</a>
        <a class="list-group-item list-group-item-action bg-light foster_enquiry">Foster Enquiry</a>
        <a class="list-group-item list-group-item-action bg-light donation">Donations</a>
        <a class="list-group-item list-group-item-action bg-light member_add_case">Assign Case (For members)</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button id="menu-toggle" class="navbar-toggler" style="display: inline-block !important;outline: none;"><i class="fas fa-bars"></i></button>


          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="./logout.php">Logout<span class="sr-only">(current)</span></a>
            </li>
          </ul>
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
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

<script type="text/javascript">
	/*$(".add_member").click(function()
	{
		$(".load").load("./member.php");
	});*/
	$(".home").click(function()
	{
		$(".load").load("./home_opt.php");
		
	});
  $(".adopt_form").click(function()
  {
    $(".load").load("./adoption.php");
    
  });
  $(".case_details").click(function()
  {
    $(".load").load("./case_details.php");
    
  });
  $(".case_closed").click(function()
  {
    $(".load").load("./case_closed.php");
    
  });
  $(".donation").click(function()
  {
    $(".load").load("./donation.php");
    
  }); 
  $(".foster").click(function()
  {
    $(".load").load("./foster.php");
    
  });
   $(".foster_enquiry").click(function()
  {
    $(".load").load("./foster_enquiry.php");
    
  });
	$(".mem_list").click(function()
	{
		$(".load").html("<br><br><h2 class='alert alert-primary'>Member Details:</h2><table class='table hover stripe row-border'><thead><tr> <th>ID</th> <th>Name</th><th>DOB</th> <th>Age</th>    <th>Address</th> <th>Contact</th>    <th>Pan Id No</th>    <th>Email</th>    <th>Occupation/College</th>    <th>School</th><th>Current Club</th>    <th>Society</th>    <th>Status</th>    <th>Prev Mem No</th>    <th>Mem Duration</th>    <th>Areas Of Interest</th>  <th>Photo</th> <th>Timestamp</th> </tr></thead><tbody></tbody></table>");
				$(".table").DataTable(
					{
						scrollX : true,
						responsive : true,
						"ajax":
						{
							url: "./member_list.php"
						}
			});
	});
  $(".rescue_unattended").click(function()
  {
    $(".load").load("./rescue_unattended.php");
  });


  $(".member_add_case").click(function()
  {
    $(".load").load("./member_add_case.php");
    
  });


</script>
<script type="text/javascript">
	var a = (<?php echo $curr_page_class; ?>);
	console.log(a);
	$(a).click();
</script>
<!-- <script type="text/javascript">
  function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};
if(!isMobileDevice()) 
{
  $("#menu-toggle").click();
}
</script> -->
</body>

</html>
