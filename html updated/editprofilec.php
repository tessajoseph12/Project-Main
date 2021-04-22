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
								<li><a href="editprofilec.php"><?php echo "Welcome ".$email; ?></a> </li>

								<li><a href="customerindex.php">Home</a></li>
								<li><a href="#">Channel</a>
									<ul>
										<li><a href="viewchannelc.php">View Channels</a></li>
									</ul>
								</li>
								
								<li class="current"><a href="#">Plans</a>
									<ul>
										<li><a href="viewplanc.php">View Plans</a></li>
									</ul>
								</li>
								<li><a href="#right-sidebar.html"> Recharge</a></li>
								<li><a href="addingcomplaint.php">Complaint</a></li>
								<li><a href="addingfeedback.php">Feedback</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
				</div>
<section class="wrapper style1">
<div>
   <form method="POST" action="Addreg11.php">
<?php
include("DbConnection.php");
$sq="select * from tbl_login where email='$email'";
$res=mysqli_query($con,$sq);
$a=mysqli_fetch_array($res);
$b=$a['login_id'];
$sql="select * from tbl_reg where login_id='$b'";
$c=mysqli_query($con,$sql);
$result=mysqli_fetch_array($c);
$sql1="select * from tbl_login where email='$email'";
  $res1=mysqli_query($con,$sql1);
  $a=mysqli_fetch_array($res1);
  ?>
 <fieldset>
<div>
	<label>Full Name</label>
	<input type="text" id="name1" class="form-control"  name="name" id="name1" autofocus="autofocus" required  placeholder="Enter Full Name"onblur="validate()" value="<?php echo $result['name']; ?>">
    <br>
    <label for="exampleInputEmail1">Email</label>
    <input type="text" id="email" class="form-control"  name="email" id="email" autofocus="autofocus" required  onblur="validate1()" placeholder="Enter Email" value="<?php echo $a['email']; ?>">
    <br>
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="text" id="phno" class="form-control"  name="phno" id="phno" autofocus="autofocus" required  onblur="validate2()" placeholder="Enter Phone Number" value="<?php echo $result['phone_number']; ?>">
    <br>
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" value="<?php echo $result['address']; ?>" autofocus="autofocus" name="addr" id="addr" placeholder="Enter Address" onblur="validate3()" required/>
    <br>
    <label for="exampleInputEmail1">City</label>
    <input type="text" class="form-control" name="city" value="<?php echo $result['main_city']; ?>" autofocus="autofocus" id="city" placeholder="Enter city name" onblur="validate0()"  required/>

<div><center>
<input type="submit" name="update" value="Update" class="btn btn-success">
</div></center></div>
</div>
</form></fieldset>
   </div>
</section>

</div></div>
</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<script>
function validate()
{
var name=document.getElementById("name1").value;
var letters=/^[a-zA-Z\s]*$/;
if(!name.match(letters))
{
alert("Please Enter Valid Name");
document.getElementById("name1").value="";
}
}
function validate1()
{
var email1=document.getElementById("email").value;
var pat=/^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$/;
 if(!email1.match(pat))
{
alert("Please Enter Valid Email");
document.getElementById("email").value="";
}
}
function validate2()
{
var phone = document.getElementById("phno").value;
var ph=/^(9|8|7|6)[0-9]{9}$/;
 if(!phone.match(ph))
{
alert("Enter Valid Phone Number");
document.getElementById("phno").value="";
}
}
function validate3()
{
var name=document.getElementById("addr").value;
var letters=/^[0-9a-zA-Z]+$/;
if(!name.match(letters))
{
alert("Please Enter Valid City name");
document.getElementById("addr").value="";
}
}
function validate0()
{
var name=document.getElementById("city").value;
var letters=/^[a-zA-Z\s]*$/;
if(!name.match(letters))
{
alert("Please Enter Valid Name");
document.getElementById("city").value="";
}
}
function validate4()
{
var password = document.getElementById("pass").value;
var opass = document.getElementById("old").value;
var pass=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{6,}/;
 if(!password.match(pass))
 {
	alert("Please Enter Valid Password");
 document.getElementById("pass").value="";
}

}
function validcpass()
	 {
		var password=document.getElementById("pass").value;
	var cpass=document.getElementById("cpawd").value;
	if(!(password==cpass))
	{
	 alert("Password Not Matching");
	 document.getElementById("cpawd").value="";
	}
	 }

</script>

</body>	
</html>
<?php }
else 
{
header('location:customerindex.php');
}