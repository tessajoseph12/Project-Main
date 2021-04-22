<?php
session_start();
if(isset($_SESSION['email']))
{
$email=$_SESSION['email'];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>CITYLINE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
			table, th, td {
 			border: 2px solid black;
  			border-collapse: collapse;
			text-align: center;
  			background-color: #D8BFD8;
			padding: 5px;
			}
			#dataTable th {
  			background-color: black;
  			color: white;
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
								<li><a href="#"><?php echo "Welcome ".$email; ?> </a>
								<li><a href="staffindex.php">Home</a></li>
								<li>
									<a href="#">Channels</a>
									<ul>	
										<li><a href="addingchannels.php">Add Channel</a></li>
										<li><a href="#channels.php">Update Channel</a></li>
										<li><a href="viewchannels.php">View Channels</a></li>				
									</ul>
								</li>
								<li class="current"><a href="#">Plans</a>
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
<section class="wrapper style1">
<div>
   <form action="addplan.php" method="POST">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php
  $query="select * from tbl_plan";
  $con=mysqli_connect("localhost","root","","db2") or die("couldn't connect");
  $result=mysqli_query($con,$query);
echo "<h2><center>LIST OF PLANS </h2>";
  echo "<tr><th><b>Plan name</b></th><th><b>Plan description</b></th><th><b>Plan amount</b></th><th><b>Plan date</b></th><th><b>Plan status</b></th></tr>";
  echo "<hr>";
while($fin=mysqli_fetch_array($result))
  {
if($fin['plan_status']==1)
  	{
  		$f='Active';
  	}
  	else
  	{
  		$f='Inactive';
  	}
  echo "<tr>";
  echo "<td>".$fin['plan_name'].
       "</td><td>".$fin['plan_desc'].
       "</td><td>".$fin['plan_amt'].
       "</td><td>".$fin['plan_date'].
      "</td><td>".$f.
       "</td></td>";

echo "</tr>";
}
   ?>
</table></center>
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
header('location:staffindex.php');
}