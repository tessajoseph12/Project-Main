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
								<li><a href="staffindex.php"><?php echo "Welcome ".$email; ?> </a>
								<li class="current"><a href="staffindex.php">Home</a></li>
								<li>
									<a href="#">Channels</a>
									<ul>	
										<li><a href="addingchannels.php">Add Channel</a></li>
										<li><a href="#channels.php">Update Channel</a></li>
										<li><a href="viewchannels.php">View Channels</a></li>				
									</ul>
								</li>
								<li><a href="#">Plans</a>
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
   <form action="addcomplaint1.php" method="POST">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
   <?php
  $query="select * from tbl_complaint";
  $con=mysqli_connect("localhost","root","","db2") or die("couldn't connect");
  $result=mysqli_query($con,$query);  
echo "<h2><center>VIEW COMPLAINT </h2>";
  echo "<tr><th><b>Login id</b></th><th><b>Complaint id</b></th><th><b>Complaint date</b></th><th><b>Complaint type</b></th><th><b>Complaint subject</b></th></tr>";
  echo "<hr>";
while($fin=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>".$fin['login_id'].
       "</td><td>".$fin['comp_id'].
       "</td><td>".$fin['comp_date'].
       "</td><td>".$fin['comp_type'].
       "</td><td>".$fin['comp_subject'].
       "</td>";

echo "</tr>";
}
   ?>
</table></center>
</form>
</div>
</section>
	
<br><br>
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