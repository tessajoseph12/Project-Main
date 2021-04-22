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
						<h1 id="logo">CITY LINE </h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>
									<a href="#">Products</a>
									<ul>
										 
										<li><a href="#">SD+</a></li>
										<li><a href="#">HD+</a></li>
										<li><a href="#">Remote</a></li>
									</ul>
								</li>
								<li class="current"><a href="#">Plans</a>
									<ul>
										 
										<li><a href="viewplanindex.php">View Plans</a></li>
										<li><a href="#"></a></li>
										
									</ul></li>
								<li><a href="#right-sidebar.html">Recharge</a></li>
								<li><a href="#contactus.html">Contact Us</a></li>
								<li><a href="login.html">Log In</a></li>
								<li><a href="reg.php">Sign Up</a></li>
							</ul>
						</nav>
				</div>
<section class="wrapper style1">
<div>
   <form action="addplan.php" method="POST">
  <table class="table table-striped table-advance table-hover" style="margin:100px 200px;  width:50%; border:3px solid black;">
   <?php
  $query="select * from tbl_plan";
  $con=mysqli_connect("localhost","root","","db2") or die("couldn't connect");
  $result=mysqli_query($con,$query);
echo "<h2><center>LIST OF PLANS </h2>";
  echo "<tr><th></th><th><b>Plan name</b></th><th><b>Plan description</b></th><th><b>Plan amount</b></th><th><b>Plan date</b></th><th><b>Plan status</b></th></tr>";
  echo "<hr>";
while($fin=mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><th>".$fin['plan_name'].
       "</td><td>".$fin['plan_desc'].
       "</td><td>".$fin['plan_amt'].
       "</td><td>".$fin['plan_date'].
      "</td><td>".$fin['plan_status'].
       "</td><td></th>";

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