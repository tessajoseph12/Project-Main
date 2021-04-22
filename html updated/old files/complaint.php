<?php
session_start();
include("DbConnection.php");

if(isset($_SESSION['uname']))
{
$temp=$_SESSION['uname'];
	?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="css/styles.css" rel="stylesheet" />
        <title>cable tv</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
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
								<li><a href="customerindex.php"><?php echo "Welcome ".$temp; ?></a> </li>
								<li><a href="customerindex.php">Home</a></li>
								<li><a href="viewchannelc.php">View Channels</a></li>
								<li><a href="viewplanc.php"> View Plans</a></li>
								<li><a href="#right-sidebar.html"> View Offers</a></li>
								<li class="current"><a href="complaint.php"> Report Issues</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
				</div>

        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="customerindex.php">Cityline</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">

                    <div class="input-group-append">

                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
							<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php
									 echo $temp;
									 ?></a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
											<a class="dropdown-item" href="logout.php">Logout</a>
									</div>
							</li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
														<div class="sb-sidenav-menu-heading">Activities</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Project
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="#">Upload Project</a>

                                </nav>
                            </div>

                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Complaints</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Complaints</li>
                        </ol>


												<div class="card mb-4">
														<div class="card-body">
															<div class="table-responsive">

															<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

																<section class="ftco-section contact-section">
																	<div class="container">
																		<div class="row block-9 justify-content-center mb-5">
																			<div class="col-md-8 mb-md-5">
																				<h1 class="mt-4"><center>Add Complaints</center></h1>
																				<form action="addcomp.php" method="POST" class="bg-light p-5 contact-form">

																					<?php
																					include("DbConnection.php");

																					$sql="select login_id,email_id from tbl_login";
																					$c=mysqli_query($con,$sql);
																					$result=mysqli_fetch_array($c);
																					?>

																					<div class="form-group">
																						<input type="text" class="form-control"  name="name" placeholder="Customer Name">
																					</div>
																					<div class="form-group">
																						<input type="text" class="form-control"  name="email_id" placeholder="Customer Email">
																					</div>

																					<div class="form-group">
																						<textarea  cols="30" rows="7" name="comp" class="form-control" placeholder="Complaint"></textarea>
																					</div>
																					<div class="form-group">
																						<input type="submit" value="Send Complaint" class="btn btn-primary py-3 px-5">
																					</div>
																				</form>

																			</div>
																		</div>
</div>

																</section>


</table>


</div></div>
</div>

  <div style="height: 100vh;"></div>
  <div class="card mb-4"><div class="card-body"></div></div>
</div>
</main>
<footer class="py-4 bg-light mt-auto">
<div class="container-fluid">
  <div class="d-flex align-items-center justify-content-between small">
      <div class="text-muted"></div>
      <div>
          <a href="#"></a>
          &middot;
          <a href="#"></a>
      </div>
  </div>
</div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>
<?php
}
else
{
	header("location: ../login.php");
}
?>
