<?php
session_start();
if(isset($_SESSION['email']))
{
$email=$_SESSION['email'];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>cable tv</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="adminindex.html" id="logo">CITY LINE </a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="adminindex.php"><?php echo "Welcome ".$email; ?> </a>
								<li class="current"><a href="adminindex.php">Home</a></li>
								<li>
									<a href="#">Channels</a>
									<ul>	
										<li><a href="addingchannel.php">Add Channel</a></li>
										<li><a href="#addingplan.php">Search Channel</a></li>
										<li><a href="viewchannel.php">View Channels</a></li>				
									</ul>
								</li>
								<li><a href="#">Plans</a>
									<ul>
										 <li><a href="addingplan.php">Add Plans</a></li>
										 <li><a href="#addingplan.php">Search Plans</a></li>
										<li><a href="viewplan.php">View Plans</a></li>
									</ul>
								</li>
								<li><a href="#">Users</a>
									<ul>
										 <li><a href="viewcustomer.php"> View Customers</a></li>
										<li><a href="viewstaff.php">View Staff</a></li>
									</ul>
								</li>
								<li><a href="viewissues.php"> View Complaints</a></li>
								<li><a href="#viewfeedback.php"> View Feedback</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
				</div>
<section class="wrapper style1">
<div class="card mb-4">
														<div class="card-body">
															<div class="table-responsive">
                            <h2><center>Search Plan</center></h2>
															<form action="viewplanc.php" method="POST">
															<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

												<div class="input-group form-group">
												<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-map-bars"></i></span>
												</div>

												<select onChange="getplan(this.value);"  name="pname" id="plan" class="form-control" required/>
												<option value="">Select Plan</option>
												<?php $query =mysqli_query($con,"SELECT * FROM tbl_plan");
												while($row=mysqli_fetch_array($query))
												{ ?>
												<option value="<?php echo $row['plan_name'];?>"><?php echo $row['plan_name'];?></option>
												<?php
												}
												?>
												</select>

												<div class="card-footer">
						            <div class="d-flex justify-content-center links">
						            <center><input type="submit" name="search" value="Search" class="btn btn-primary" >
						            <input type="reset" value="Cancel" class="btn btn-primary"></center>
						            </div>
						            </div>
											</table>
											</form>
										</div></div>
									</div>

    </body>
</html>
<?php
}
else
{
		header("location: login.php");
}
?>




<?php
$con=mysqli_connect("localhost","root","","db2") or die("couldn't connect");
$query = "select plan_id,plan_name,plan_status from tbl_plan";
$results = mysqli_query($con,$query);
if(mysqli_num_rows($results)>0)
{
	?>
	<script>alert("Search Found");
	 exit;
	</script>
	<?php

echo "<h2><center>Plan Details</center></h2>";
echo "<tr><th>Plan Name</th><th>Plan Status</th><th>View Plan</th></tr>";

while($fin=mysqli_fetch_array($results))
{
if($fin['plan_status']==1)
{
	$a='Active';
}
else {
	$a='Inactive';
}
echo "<tr>";
echo "<td>".$fin['plan_name']."</td><td>"
              .$a."</td><td>";
 //echo "<a href='viewprof.php?x=" .$fin['contractor_id']." '>View Profile</a>";
   // echo "</td>";
echo "</tr>";
}}else {
	?>
	<script>alert("Search  Not  Found");
	location.href="searchplan.php";
	 exit;
	</script>
	<?php
}
?>
</table>


</div></div>
</div>
