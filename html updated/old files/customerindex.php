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
								<li class="current"><a href="customerindex.php">Home</a></li>
								<li><a href="viewchannelc.php">View Channels</a></li>
								<li><a href="viewplanc.php"> View Plans</a></li>
								
								<li><a href="#right-sidebar.html"> Recharge</a></li>
								<li><a href="feedback.php"> Report Issues</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2> <a href="#offers.html">Special Offer </a><em>on first recharge </em></h2>
						<a href="#offers.html" class="button">Show Offers</a>
					</header>
				</section>

			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<section class="col-4 col-12-narrower">
								<div class="box highlight">
									<i class="icon solid major fa-paper-plane"></i>
									<h3>About</h3>
									<p>Details about cityline </p>
								</div>
							</section>
							<section class="col-4 col-12-narrower">
								<div class="box highlight">
									<i class="icon solid major fa-pencil-alt"></i>
									<h3>Help</h3>
									<p>You can contact us at</p>
								</div>
							</section>
							<section class="col-4 col-12-narrower">
								<div class="box highlight">
									<i class="icon solid major fa-wrench"></i>
									<h3>FAQ</h3>
									<p>Frequently asked questions</p>
								</div>
							</section>
						</div>
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
header('location:login.html');
}