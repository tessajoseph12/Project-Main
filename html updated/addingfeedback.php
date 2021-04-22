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
								<li><a href="customerindex.php">Home</a></li>
								<li><a href="viewchannelc.php">Channel</a>
									<ul>
										<li><a href="viewchannelc.php">View Channels</a></li>
									</ul>
								</li>
								<li><a href="viewplanc.php">View Plans</a></li>
								<li><a href="#right-sidebar.html"> Recharge</a></li>
								<li><a href="addingcomplaint.php">Complaint</a></li>
								<li class="current"><a href="addingfeedback.php">Feedback</a></li>
								<li><a href="#"><?php echo "Welcome ".$email; ?></a>
									<ul>
										<li><a href="editprofilec.php">Edit profile</a></li>
										<li><a href="logout.php">Logout</a></li>
									</ul>
								</li>
							</ul>
						</nav>
				</div>


<br/><br/><br/>
<div class="container">
<div class="d-flex justify-content-center h-100">
<div class="card">
<div class="card-header">
<h3><center>Feedback</center></h3>
</div>
<div class="card-body">

<form action="addfeedback.php" method="POST">
<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"></span>
</div>
<textarea  cols="35" rows="6" name="message" class="form-control" placeholder="Enter your feedback"></textarea>
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
header('location:customerindex.php');
}