<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['clientmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

// $clientmsaid=$_SESSION['clientmsaid'];
//  $acctid=mt_rand(100000000, 999999999);
//  $accttype=$_POST['accounttype'];
//  $password=md5($_POST['password']);
//  $cname=$_POST['cname'];
//  $comname=$_POST['comname'];
//  $address=$_POST['address'];
//  $city=$_POST['city'];
//  $state=$_POST['state'];
//  $zcode=$_POST['zcode'];
//  $wphnumber=$_POST['wphnumber'];
//  $cellphnumber=$_POST['cellphnumber'];
//  $ophnumber=$_POST['ophnumber'];
//  $email=$_POST['email'];
//  $websiteadd=$_POST['websiteadd'];
//  $notes=$_POST['notes'];


//My Code
$jobno=$_SESSION['jobno'];
$custno=$_POST['custno'];
$phone=$_POST['phone'];
$rcvdate=$_POST['rcvdate'];
$rtndata=$_POST['rtndate'];
$modelno=$_POST['modelno'];
$problem=$_POST['problem'];
$repair=$_POST['repair'];
$amount=$_POST['amount'];
$accessories=$_POST['accessories'];

$sql="INSERT INTO tblcustomers(JobNo,CustomerName,Phone,ReceivedDate,ReturnDate,ModelNo,Problem,RepairStatus,Amount,Accessories) VALUES ('$jobno','$custno','$phone','$rcvdate','$rtndata','$modelno','$problem','$repair','$amount','$accessories')";
// $sql="INSERT INTO tblcustomers(JobNo,CustomerName,Phone,ReceivedDate,ReturnDate,ModelNo,Problem,RepairStatus,Amount,Accessories) VALUES (:jobno,:custno,:phone,:date,:rtndata,:modelno,:problem,:repair,:amount,:accessories)";('$jobno','$custno','$phone','$date','$rtndata','$modelno','$problem','$repair','$amount','$accessories')"
$query=$dbh->prepare($sql);
$query->bindParam(':jobno',$jobno,PDO::PARAM_STR);
$query->bindParam(':custno',$custno,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':rcvdate',$rcvdate,PDO::PARAM_STR);
$query->bindParam(':rtndate',$rdate,PDO::PARAM_STR);
$query->bindParam(':modelno',$modelno,PDO::PARAM_STR);
$query->bindParam(':problem',$problem,PDO::PARAM_STR);
$query->bindParam(':repair',$repair,PDO::PARAM_STR);
$query->bindParam(':amount',$amount,PDO::PARAM_STR);
$query->bindParam(':accessories',$accessories,PDO::PARAM_STR);
$query->execute();

$LastInsertId=$dbh->lastInsertId();
if ($LastInsertId>0) {
 echo '<script>alert("Customer added Successfully.")</script>';
echo "<script>window.location.href ='add-client.php'</script>";
}
else
 {
	  echo '<script>alert("Something Went Wrong. Please try again")</script>';
 }
  
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Customer Management Sysytem|| Add Customer</title>

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
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<!--clock init-->
	<script src="js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>
	<!--//skycons-icons-->
</head> 
<body>
<div class="page-container">
<!--/content-inner-->
<div class="left-content">
<div class="inner-content">
	
<?php include_once('includes/header.php');?>
				<!--//outer-wp-->
<div class="outter-wp">
					<!--/sub-heard-part-->
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="dashboard.php">Home</a></li>
<li class="active">Add Clients</li>
</ol>
</div>	
					<!--/sub-heard-part-->	
					<!--/forms-->
<div class="forms-main">
<h2 class="inner-tittle">Add Customers </h2>
<div class="graph-form">
<div class="form-body">

	<form method="post"> 
	<div class="form-group"> <label for="exampleInputEmail1">Customer Name</label> <input type="text" name="custno" placeholder="Customer Name" value="" class="form-control" required='true'> </div>

	<div class="form-group"> <label for="exampleInputEmail1">Phone</label> <input type="number" name="phone" placeholder="Customer Phone" value="" class="form-control" required='true'> </div>

	<div class="form-group"> <label for="exampleInputEmail1">Received Date</label> <input type="date" name="rcvdate" placeholder="Recieved Date" value="" class="form-control" required='true'> </div>

	<div class="form-group"> <label for="exampleInputEmail1">Return date</label> <input type="date" name="rtndate" placeholder="Return Date" value="" class="form-control" required='true'> </div>

	<div class="form-group"> <label for="exampleInputEmail1">Model/Serial Number</label> <input type="number" name="modelno" placeholder="Model and Serial Number" value="" class="form-control" required='true'> </div>

	<div class="form-group"> <label for="exampleInputEmail1">Problem Report</label> <textarea type="text" name="problem" placeholder="problem" value="" class="form-control" required='true'> </textarea> </div>
	<!-- <div class="form-group"> <label for="exampleInputEmail1">Repair Status</label><input type="text" name="repair" value="" placeholder="Repair Status"  class="form-control"> </div> -->
	<div class="form-group"> <label for="exampleInputEmail1">Repair Status</label> 
		<select  name="repair"  class="form-control select2" required='true'>
		<option value="">Choose Status</option>
		<option value="Repaired">Repaired</option>
		<option value="Pending">Pending</option>
		<option value="Rejected">Rejected</option>
		<option value="Other">Other</option>		
	</select> </div>
	<div class="form-group"> <label for="exampleInputEmail1">Amount</label><input type="text" name="amount" value="" placeholder="Amount Charged"  class="form-control" required='true'> </div>

	<div class="form-group"> <label for="exampleInputEmail1">Accessories</label><textarea type="text" name="accessories" value="" placeholder="Accessories" value="" class="form-control" required='true'> </textarea> </div>

	 <button type="submit" class="btn btn-default" name="submit" id="submit">Save</button> 
	</form> 

</div>
</div>
</div> 
</div>
<?php include_once('includes/footer.php');?>
</div>
</div>		
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
 
 <?php } ?>