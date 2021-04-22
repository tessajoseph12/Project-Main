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
		<title>Complaints</title>
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
								<li class="current"><a href="addingcomplaint.php">Complaint</a></li>
								<li><a href="addingfeedback.php">Feedback</a></li>
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
<h3><center>Complaints</center></h3>
</div>
<div class="card-body">

<form action="addcomplaint1.php" method="POST">
<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
</div>
<input type="text" name="cdate" class="form-control" placeholder="Complaint Date"  required >
</div>

<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-bars"></i></span>
</div>
<input type="text" name="ctype" class="form-control" placeholder="Complaint Type"  required >
</div>

<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-comment" aria-hidden="true"></i></span>
</div>
<textarea  cols="30" rows="5" name="csubject" class="form-control" placeholder="Complaint Subject"></textarea>
</div>

</div>
<div class="card-footer">
<div class="d-flex justify-content-center links">
&emsp;<input type="submit" value="Send Complaint" class="btn btn-primary">
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