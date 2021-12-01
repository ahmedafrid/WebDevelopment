<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['clientmsaid']==0)) {
  header('location:logout.php');
  } else{
  	?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Customer Management System || Manage Customers </title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- /js -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<!-- //js-->
	<!-- <style>
		.search-box-main {
    margin-top: 32px;
}
	</style> -->
</head> 
<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<?php include_once('includes/header.php');?>
				<!-- //header-ends -->
				<!--outter-wp-->
				<div class="outter-wp">
					<!--sub-heard-part-->
					<div class="sub-heard-part">
						<ol class="breadcrumb m-b-0">
							<li><a href="dashboard.php">Home</a></li>
							<li class="active">Manage Customers</li>
						</ol>
					</div>
					<!--//sub-heard-part-->
					<div class="graph-visual tables-main">
							<h3 class="inner-tittle two">Manage Customers </h3>
    						<!-- <input type="text" id="#" class="form-control " aria-describedby="passwordHelpInline" placeholder="Search Customer"></div>
							<button class=" btn btn-primary btn-sm">Search</button> -->
						<div class="graph">
							<div class="tables">
								<table class="table" border="1"> <thead> 
									<tr> 
										<th>Job Number</th>
										<th>Customer Name</th> 
									 	<th>Phone</th>
									 	<th>Return Date</th>
									 	<th>Repair Status</th>
										<th>Amount</th> 
									 	<th>Setting</th>
									  </tr>
									   </thead>
									    <tbody>
									    	
											
<?php
// $sql="SELECT * from tblclient";
$sql="SELECT * from tblcustomers";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               
?>
										 <tr class="active">
									      <th scope="row"><?php echo htmlentities($row->JobNo);?></th>
									       <td><?php  echo htmlentities($row->CustomerName);?></td>
									        <td><?php  echo htmlentities($row->Phone);?></td>
									         <td><?php  echo htmlentities($row->ReturnDate);?></td> 
									         <td><?php  echo htmlentities($row->RepairStatus);?></td>
									         <td><?php  echo htmlentities($row->Amount);?></td>
									        <td><a href="edit-client-details.php?editjobno=<?php echo $row->JobNo;?>">Edit</a>  ||  <a href="add-client-services.php?addjobno=<?php echo $row->JobNo;?>">Assign Services</a></td>
									     </tr>
									     <?php $cnt=$cnt+1;}} ?>
									     </tbody> </table> 
							</div>

						</div>
				
					</div>
					<!--//graph-visual-->
				</div>
				<!--//outer-wp-->
				<?php include_once('includes/footer.php');?>
			</div>
		</div>
		<!--//content-inner-->
		<!--/sidebar-menu-->
		<?php include_once('includes/sidebar.php');?>
		<div class="clearfix"></div>		
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {                
			if (toggle)
			{
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({"position":"absolute"});
			}
			else
			{
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({"position":"relative"});
				}, 400);
			}

			toggle = !toggle;
		});
	</script>
	<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php }  ?>