<?php
session_start();
include("DbConnection.php");
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
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="index.html" id="logo">CITY LINE </a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="customerindex.php"><?php echo "Welcome ".$email; ?></a> </li>
								<li><a href="customerindex.php">Home</a></li>
								<li><a href="viewchannelc.php">View Channels</a></li>
								<li><a href="viewplanc.php"> View Plans</a></li>
								<li><a href="#"> Recharge</a></li>
								<li class="current"><a href="feedback.php"> Report Issues</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
				</div>

							<section class="col-6 col-12-narrower">
								<h3><center>Report Issues</h3>
								<form action="addcomp.php" method="POST">
									
									<div class="row gtr-60">
										<div class="col-3 col-6-mobilep">
											<input type="name" name="name" id="name" placeholder="Name" /><br>
										</div>
										<div class="col- 2 col-8-mobilep">
											<input type="email" name="emaill" id="emaill" placeholder="Email" />
										</div>
										<div class="col-12">
											<textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input type="submit" class="button alt" value="Send Message" /></li>
											</ul>
										</div>
									</div>
								</form></center>
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
header('location:customerindex.php');
}