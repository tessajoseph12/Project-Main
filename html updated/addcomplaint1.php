<?php
session_start();
include("DbConnection.php");

$b=$_SESSION['email'];
$abc="select login_id from tbl_login where email='$b'";
$query=mysqli_query($con,$abc);
$result=mysqli_fetch_array($query);
$e=$result['login_id'];

$comp_date=$_POST['cdate']; 
$comp_type=$_POST['ctype']; 
$comp_subject=$_POST['csubject']; 
$comp_payment=0;

$staff_id=0;
$staff_feedback=0;
$comp_resolve_date=0;
$comp_payment_status=0;

$sq="insert into tbl_complaint(login_id,comp_date,comp_type,comp_subject,comp_payment) values('$e','$comp_date','$comp_type','$comp_subject','$comp_payment')"; 
$result1=mysqli_query($con,$sq);

$n=mysqli_insert_id($con);
$sq="insert into tbl_comp_mgmt(comp_id,staff_id,staff_feedback,comp_resolve_date,comp_payment_status) values ('$n','$staff_id','$staff_feedback','$comp_resolve_date','$comp_payment_status')";

if(mysqli_query($con,$sq))
	{
	?>
	<script>alert("Complaint added successfully");
	location.href="customerindex.php";
	exit;
	</script>
	<?php
	}