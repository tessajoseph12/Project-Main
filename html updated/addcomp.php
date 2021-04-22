<?php
session_start();
include("DbConnection.php");

$b=$_SESSION['email'];
$abc="select login_id from tbl_login where email='$b'";
$query=mysqli_query($con,$abc);
$result=mysqli_fetch_array($query);
$e=$result['login_id'];


$message=$_POST["message"];
$status=0;

$sq="insert into tbl_feedback(login_id,fd_cont,fstatus) values('$e','$message','$status')"; 
if(mysqli_query($con,$sq))
  {
    ?>
    <script>alert("Feedback Added Successfully");
    location.href="customerindex.php";
     exit;
    </script>
    <?php
  }
    mysqli_close($con);
     ?>
