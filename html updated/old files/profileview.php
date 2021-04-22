<?php
session_start();
if(isset($_SESSION['email']))
{
$email=$_SESSION['email'];
?>
<!DOCTYPE HTML>
<html>
<title>cable tv</title>
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
								<li><a href="#"><?php echo "Welcome ".$email; ?></a></li>
								<li><a href="customerindex.php">Home</a></li>
								<li><a href="viewchannelc.php">View Channels</a></li>
								<li class="current"><a href="viewplanc.php">View Plans</a></li>
								<li><a href="#viewoffers.php">View Offers</a></li>
								<li><a href="#right-sidebar.html"> Recharge</a></li>
								<li><a href="#right-sidebar.html"> Report Issues</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
				</div>
___________
<div>
    <form action="plr_profile.php" method="POST">
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php
   session_start();
   include('DbConnection.php');
  $a=$_SESSION['email'];
  $query="select p_name, p_username, p_email, p_address, p_age, p_gender, p_position, p_pre_club, p_city, p_phone from player_reg_tbl where p_reg_id='$a'";
  $result=mysqli_query($con,$query);
  echo "<h2><center>Player Profile View </center></h2>";
  echo "<tr><th></th><th>Name</th><th>Username</th><th>Email</th><th>Address</th><th>Age</th><th>Gender</th><th>Position</th><th>Previous Club</th><th>City</th><th>Phone</th></tr>";
  while($r=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><th>".$r['p_name'].
       "</td><td>".$r['p_username'].
       "</td><td>".$r['p_email'].
       "</td><td>".$r['p_address'].
       "</td><td>".$r['p_age'].
       "</td><td>".$r['p_gender'].
       "</td><td>".$r['p_position'].
       "</td><td>".$r['p_pre_club'].
       "</td><td>".$r['p_city'].
       "</td><td>".$r['p_phone']."</td><td></th>";


echo "</tr>";
}
   ?>
</table>
</form>
</div>
</body>
</html>
