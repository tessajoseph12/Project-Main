<?php
session_start();
include("DbConnection.php");
if(isset($_POST['update']))
{
$cust_name=$_POST["name"];
$phno=$_POST["phno"];
$email=$_POST["email"];
$address=$_POST["addr"];
$city=$_POST["city"];
$did="2";
$u_status=1;
$temp=$_SESSION['email'];

$h="select login_id from tbl_login where email='$temp'";
$res=mysqli_query($con,$h);
$a=mysqli_fetch_array($res);
$b=$a['login_id'];
$sq="update tbl_reg set name='$cust_name',
phone_number='$phno',address='$address',main_city='$city' where login_id='$b'";
mysqli_query($con,$sq);
$a="update tbl_login set email='$email' where email='$temp'";
if(mysqli_query($con,$a))
{
	$_SESSION['email']=$email;
  ?>
  <script>alert("Profile Updated Successfully");
  location.href="customerindex.php";
   exit;
  </script>
  <?php
}}
mysqli_close($con);
?>