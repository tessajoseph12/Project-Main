<?php
session_start();
if(isset($_SESSION['email']))
{
$email=$_SESSION['email'];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<title>CITYLINE</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="style2.css">
</head>

	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">
					

					<!-- Logo -->
						<h1 id="logo">CITY LINE </h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="staffndex.php"><?php echo "Welcome ".$email; ?> </a>
								<li><a href="staffindex.php">Home</a></li>
								<li  class="current">
									<a href="viewchannels.php">Channels</a>
									<ul>	
										<li><a href="addingchannels.php">Add Channel</a></li>
										<li><a href="#channels.php">Update Channel</a></li>
										<li><a href="viewchannels.php">View Channels</a></li>				
									</ul>
								</li>
								<li><a href="viewplans.php">Plans</a>
									<ul>
										 <li><a href="addingplans.php">Add Plans</a></li>
										<li><a href="viewplans.php">View Plans</a></li>
									</ul>
								</li>
								<li><a href="viewcustomers.php"> View Customers</a></li>
								<li><a href="viewcomplaints.php"> View Complaints</a></li>
								<li><a href="viewfeedbacks.php"> View Feedback</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
				</div>

<br/><br/><br/>
<div class="container">
<div class="d-flex justify-content-center h-100">
<div class="card">
<div class="card-header">
<h3><center>Adding Plan</center></h3>
</div>
<div class="card-body">

<form action="addplan.php" method="POST">
<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-bars"></i></span>
</div>
<input type="text" name="pname" class="form-control" placeholder="Plans Name"  required >
</div>

<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-bars"></i></span>
</div>
<input type="text" name="pdesc" class="form-control" placeholder="Plan Description"  required >
</div>

<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-bars"></i></span>
</div>
<input type="text" name="pdate" class="form-control" placeholder="Plan Date"  required >
</div>

<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-bars"></i></span>
</div>
<input type="text" name="pamt" class="form-control" placeholder="Plan Amount"  required >
</div>
<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-bars"></i></span>
</div>
<input type="text" name="pstat" class="form-control" placeholder="Plan Status"  required >
</div>

</div>
<div class="card-footer">
<div class="d-flex justify-content-center links">
&emsp;<input type="submit" value="Add" class="btn btn-primary">
&emsp;
</div>
</div>
</form>
</div>
</div>
</div>
</body>	
</html>
<?php 
}
else 
{
header('location:staffindex.php');
}