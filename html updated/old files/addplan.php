<?php
include("DbConnection.php");
$plan_name=$_POST['pname']; 
$plan_desc=$_POST['pdesc'];
$plan_amt=$_POST['pamt']; 
$plan_date=$_POST['pdate']; 
$plan_status=$_POST['pstat']; 
$r="select * from tbl_plan where plan_name='$plan_name' ";
$result=mysqli_query($con,$r);

$num=mysqli_num_rows($result);

if($num==1)

	{
 
 	?>

	<script>alert("plan name already exists");

	location.href="addplan.php";

 	exit;

	</script>

	<?php

	}

else
	{
	$sq="insert into tbl_plan (plan_name,plan_desc,plan_amt,plan_date,plan_status) values ('$plan_name','$plan_desc','$plan_amt','$plan_date','$plan_status')";
	if(mysqli_query($con,$sq))    	
		{
		?>	
		<script>alert("successfully inserted ");
		window.location.href="viewplan.php";
		</script>	
		<?php
		}
	}
mysqli_close($con);
?>