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
		<title>Adding channels</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<style>
body
{
	background-repeat: no-repeat;
	background-image: url("image9.jpg");
	background-position: center;
	background-size: 1400px 850px;

}
 .but
{
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  /* margin: 4px 2px;
 margin-right: 100px; */
  cursor: pointer;
  border-radius:10px;
}
.but1
{
  background-color: #1fffb8;
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
 margin-right: 100px;
  cursor: pointer;
  border-radius:100%;
 margin: auto;
}
</style>

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
								<li><a href="#"><?php echo "Welcome ".$email; ?></a></li>
								<li><a href="adminindex.php">Home</a></li>
								<li><a href="#">Channels</a>
									<ul>				
										<li><a href="viewchannel.php">View Channels</a></li>				
										<li><a href="addingchannelold.php">Add Channel</a></li>				
									</ul>
								</li>
								<li><a href="#">Plans</a>
									<ul>
										<li><a href="viewplan.php">View Plans</a></li>
										<li><a href="addingplan.php">Add Plans</a></li>
									</ul></li>
								<li><a href="viewcustomer.php"> View Customers</a></li>
								<li><a href="viewissues.php"> View Issues</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
				</div>

<br/><br/><br/>
<div class="container">
<div class="d-flex justify-content-center h-100">
<div class="card">
<div class="card-header">
<h3><center>Adding Channel</center></h3>
</div>
<div class="card-body">

<form action="addchannel.php" method="POST">
<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-bars"></i></span>
</div>
<input type="text" name="chname" class="form-control" placeholder="Channel Name"  required >
</div>

<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-bars"></i></span>
</div>
<input type="text" name="chno" class="form-control" placeholder="Channel Number"  required >
</div>

<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-bars"></i></span>
</div>
<input type="text" name="chdate" class="form-control" placeholder="Channel Date"  required >
</div>
<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-bars"></i></span>
</div>
<input type="text" name="chtype" class="form-control" placeholder="Channel Type"  required >
</div>

<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-bars"></i></span>
</div>
<input type="text" name="chamt" class="form-control" placeholder="Channel Amount"  required >
</div>
<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-bars"></i></span>
</div>
<input type="text" name="chstat" class="form-control" placeholder="Channel Status"  required >
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
header('location:adminindex.php');
}