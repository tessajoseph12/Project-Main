<?php
session_start();
if(isset($_SESSION['email']))
{
$email=$_SESSION['email'];
?>
<!DOCTYPE HTML>
<html>
<title>CITYLINE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
<head>
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
								<li class="current"><a href="profileview.php"><?php echo "Welcome ".$email; ?></a></li>
								<li><a href="customerindex.php">Home</a></li>
								<li><a href="viewchannelc.php">View Channels</a></li>
								<li><a href="viewplanc.php">View Plans</a></li>
								<li><a href="#viewplanc.php">Recharge</a></li>
								<li><a href="addingcomplaint.php">Complaint</a></li>
								<li><a href="addingfeedback.php">Feedback</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
				</div>
		<div>
  <form action="plr_profile.php" method="POST">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php
  $a=$_SESSION['email'];
  $query="select * from tbl_login where email='$a'";
  $con=mysqli_connect("localhost","root","","db2") or die("couldn't connect");
  $result=mysqli_query($con,$query);
  echo "<h2><center>Customer Profile View </center></h2>";
  echo "<tr><th>Email</th><th>Phone number</th><th>Address</th><th>Main city</th></tr>";
  while($r=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><th>".$r[''].
       "</td><td>".$r['email'].
       "</td><td>".$r['phone_number'].
       "</td><td>".$r['address'].
       "</td><td>".$r['main_city'].
       "</td><td></th>";

echo "</tr>";
}
   ?>
</table>
</form>

</body>
</html>
<?php }
else 
{
header('location:customerindex.php');
}