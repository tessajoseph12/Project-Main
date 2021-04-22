<?php
session_start();
include("DbConnection.php");
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from tbl_login where email='$email' and password='$password' and u_status='1'";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
$_SESSION['email']=$email;
if($n>0)
{
while($fin=mysqli_fetch_array($result))
{
	if($fin['did']=="1")
		{
		header("location: adminindex.php");
		exit;
    		}

	else if($fin['did']=="2")
		{
		header("location:customerindex.php");
		exit;
		}
}}
else
	{
	?>
	<script> alert("Invalid email or password");
	window.location.href="login.html";
	exit;
	</script>
	<?php
	}

mysqli_close($con);
?>