<?php
include("DbConnection.php");
$ch_name=$_POST['chname']; 
$ch_no=$_POST['chno']; 
$ch_type=$_POST['chtype'];
$ch_amt=$_POST['chamt']; 
$ch_status=$_POST['chstat']; 
$r="select * from tbl_channels where ch_name='$ch_name' ";
$result=mysqli_query($con,$r);

$num=mysqli_num_rows($result);

if($num==1)

	{
 
 	?>

	<script>alert("channel name already exists");

	location.href="addchannel.php";

 	exit;

	</script>

	<?php

	}

else
	{
	$sq="insert into tbl_channels (ch_name,ch_no,ch_type,ch_amt,ch_status) values ('$ch_name','$ch_no','$ch_type','$ch_amt','$ch_status')";
	if(mysqli_query($con,$sq))    	
		{
		?>	
		<script>alert("successfully inserted ");
		window.location.href="viewchannel.php";
		</script>	
		<?php
		}
	}
mysqli_close($con);
?>