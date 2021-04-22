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
		<style>

.box
	{

	background-color:pink;
	
	margin-left:400px;
	
	margin-right:300px;
	
	margin-top:50px;
	
	align-content:center;
	
	padding:50px;
	
	opacity:.8;
	
	border-radius:10px;
	
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
										<li><a href="addingchannel.php">Add Channel</a></li>				
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
<section class="wrapper style1">
<div>
<form method="POST" action="addchannel.php">
<br>
<center>

<h1>ADDING  CHANNEL</h1>

<div class="box">

<table>  

<tr>  
	
	<td>Channel Name</td>   
	
	<td><input type="text" name="chname" id="pn" required/>
</td>
</tr><br>

  <tr>  
	
	<td>Channel Number</td>   
	
	<td><input type="text" name="chno" id="chnno" placeholder="Assign a channel_no"  required/>
</td>
</tr>
<tr>  
	
	<td>Channel Type</td>   
	
	<td><input type="text" name="chtype" id="cht" placeholder="Type of channel" required/>
</td>
</tr>
<tr>  
	
	<td>Channel Amount</td>   
	
	<td><input type="text" name="chamt" id="cha"  required/>
</td>
</tr>
<tr>  
	
	<td>Channel Status</td>   
	
	<td><input type="text" name="chstat" id="chs" required/>
</td>
</tr>
<tr>	
	
	<td colspan="2"><center><input type="submit" name="submit" value="Submit"></center></td>

</tr>

</table>
</div>
</center>

</form>

</div>
</section>
	
			<!-- Footer -->
				<div id="footter">
					<div class="container">
						<div class="row">
						        <section class="col-3 col-5-narrower col-6-mobilep">

								<h3>Contact Info</h3>
								<ul class="links">
								<li><span class="fa fa-map-marker" aria-hidden="true"></span>
								  1234k Avenue, 4th block,Cochin. </li>
						<li><span class="fa fa-envelope" aria hidden="true"></span>  cityline@gmail.com</li>
					 			<li><span class="fa fa-phone" aria-hidden="true"></span>   +91 9874558821</li>
								</ul>
							</section>
						</div>
					</div>
					
											<!-- Icons -->
						<ul class="icons"></n><center>
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon brands fa-google-plus-g"><span class="label">Google+</span></a></li>
						</ul>
				</div>
		</div></center>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

</body>	
</html>
<?php }
else 
{
header('location:adminindex.php');
}