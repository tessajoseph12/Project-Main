<?php
session_start();
include("DbConnection.php");
$name=$_POST['name'];
$phone=$_POST["phno"];
$address=$_POST['addr'];
$main_city=$_POST['city'];
$email=$_POST['email'];
$password=$_POST["pass"];
$u_status=1;


$r="select * from tbl_login where email='$email'";
$result=mysqli_query($con,$r);
$num=mysqli_num_rows($result);
if($num==1)
{
  ?>
<script>alert("Email already exists");
location.href="reg.php";
 exit;
</script>
<?php
}

else
{
$did=2;
$sqli="insert into tbl_login(email,password,u_status,did) values ('$email','$password','$u_status','$did')";
$result1=mysqli_query($con,$sqli);
$n=mysqli_insert_id($con);
$sq="insert into tbl_reg(login_id,name,phone_number,address,main_city) values ('$n','$name','$phone','$address','$main_city')";
if(mysqli_query($con,$sq))
	{
	?>
	<script>alert("successfully inserted ");
	location.href="login.html";
	exit;
	</script>
	<?php
	}
}
mysqli_close($con);
?> 





