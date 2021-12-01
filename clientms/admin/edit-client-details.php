<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
// if (strlen($_SESSION['clientmsaid']==0)) {
//   header('location:logout.php');
//   } else{
    if(isset($_POST['submit']))
  {
// $eid=$_GET['editid'];
// $clientmsaid=$_SESSION['clientmsaid'];
//   $accttype=$_POST['accounttype'];
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
 
// $sql="update tblclient set AccountType=:accttype,ContactName=:cname,CompanyName=:comname,Address=:address,City=:city,State=:state,ZipCode=:zcode,Workphnumber=:wphnumber,Cellphnumber=:cellphnumber,Otherphnumber=:ophnumber,Email=:email,WebsiteAddress=:websiteadd,Notes=:notes where ID=:eid";
//My Code
$ejobno=$_GET['editjobno']; //getting job no from manage client
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

$sql="UPDATE tblcustomers SET CustomerName='$custno',Phone='$phone',ReceivedDate='$rcvdata',ReturnDate='$rtndata',ModelNo='$modelno',Problem='$problem',RepairStatuS='$repair',Amount='$amount',Accessories='$accessories' WHERE JobNo='$ejobno'";

$query=$dbh->prepare($sql);
$query->bindParam(':custno',$custno,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':rcvdate',$rcvdate,PDO::PARAM_STR);
$query->bindParam(':rtndate',$rtndate,PDO::PARAM_STR);
$query->bindParam(':modelno',$modelno,PDO::PARAM_STR);
$query->bindParam(':problem',$problem,PDO::PARAM_STR);
$query->bindParam(':repair',$repair,PDO::PARAM_STR);
$query->bindParam(':amount',$amount,PDO::PARAM_STR);
$query->bindParam(':accessories',$accessories,PDO::PARAM_STR);
$query->bindParam(':ejobno',$ejobno,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Client detail has been updated")</script>';
echo "<script type='text/javascript'> document.location ='manage-client.php'; </script>";
  }
  ?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Customer Management Sysytem|| Update Customers</title>

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
	
<?php //include_once('includes/header.php');?>
				<!--//outer-wp-->
<div class="outter-wp">
					<!--/sub-heard-part-->
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="dashboard.php">Home</a></li>
<li class="active">Update Customer</li>
</ol>
</div>	
					<!--/sub-heard-part-->	
					<!--/forms-->
<div class="forms-main">
<h2 class="inner-tittle">Update Customer </h2>
<div class="graph-form">
<div class="form-body">

<form method="post"> 
	<?php
$ejobno=$_GET['editjobno'];
$sql="SELECT * from tblcustomers where JobNo=:ejobno";
$query = $dbh -> prepare($sql);
$query->bindParam(':ejobno',$ejobno,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
		
	<div class="form-group"> <label for="exampleInputEmail1">Customer Name</label> <input type="text" name="custno" value="<?php  echo $row->CustomerName;?>" class="form-control" required='true'> </div>

	<div class="form-group"> <label for="exampleInputEmail1">Customer Phone</label> <input type="text" name="phone" value="<?php  echo $row->Phone;?>" class="form-control" required='true'> </div>

	<div class="form-group"> <label for="exampleInputEmail1">Received Date</label> <input type="text" name="rcvdate" value="<?php  echo $row->ReceivedDate;?>" class="form-control" required='true' readonly='true'></div>

	<div class="form-group"> <label for="exampleInputEmail1">Return Date</label> <input type="text" name="rtndate" value="<?php  echo $row->ReturnDate;?>" class="form-control" required='true' readonly='true'> </div>


	<div class="form-group"> <label for="exampleInputEmail1">Model/Serial Number</label> <input type="text" name="modelno" value="<?php  echo $row->ModelNo;?>" class="form-control" required='true'> </div>

	<div class="form-group"> <label for="exampleInputEmail1">Problem Report</label> <input type="text" name="problem" value="<?php  echo $row->Problem;?>" class="form-control" required='true'> </div>

	<div class="form-group"> <label for="exampleInputEmail1">Repair Status</label> <select type="text" name="repair" class="form-control" required='true'>
		<option value="<?php echo htmlentities($row->RepairStatus);?>"><?php echo htmlentities($row->RepairStatus);?></option>
		<option value="">Choose Status</option>
		<option value="Repaired">Repaired</option>
		<option value="Pending">Pending</option>
		<option value="Rejected">Rejected</option>
		<option value="Other">Other</option>		
	</select> </div>

	<div class="form-group"> <label for="exampleInputEmail1">Amount</label><input type="text" name="amount" value="<?php  echo $row->Amount;?>" class="form-control""> </div>

	<div class="form-group"> <label for="exampleInputEmail1">Accessories</label><textarea type="text" name="accessories" value="<?php  echo $row->Accessories;?>" class="form-control"></textarea> </div>
	<?php $cnt=$cnt+1;}} ?>

	 <button type="submit" class="btn btn-default" name="submit" id="submit">Update</button><input type="button" class="btn btn-default" value="Back" onClick="history.back();return true;"> 
	</form> 


	<!-- <div class="form-group"> <label for="exampleInputEmail1">Repair Status</label><input type="text" name="repair" value="" placeholder="Repair Status"  class="form-control"> </div> -->

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

 ?>