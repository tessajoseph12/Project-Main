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
  </head>
  <body class="is-preload">
    <div id="page-wrapper">

      <!-- Header -->
        <div id="header">

          <!-- Logo -->
            <h1><a href="adminindex.html" id="logo">CITY LINE </a></h1>

          <!-- Nav -->
            <nav id="nav">
              <ul>
                <li><a href="header.php"><?php echo "Welcome ".$email; ?> </a>
                <li class="current"><a href="adminindex.php">Home</a></li>
                <li>
                  <a href="#">Channels</a>
                  <ul>  
                    <li><a href="addingchannel.php">Add Channel</a></li>
                    <li><a href="searchingchannel.php">Search Channel</a></li>
                    <li><a href="viewchannel.php">View Channels</a></li>        
                  </ul>
                </li>
                <li><a href="#">Plans</a>
                  <ul>
                     <li><a href="addingplan.php">Add Plans</a></li>
                    <li><a href="viewplan.php">View Plans</a></li>
                  </ul>
                </li>
                <li><a href="#">Users</a>
                  <ul>
                     <li><a href="viewcustomer.php"> View Customers</a></li>
                    <li><a href="viewstaff.php">View Staff</a></li>
                  </ul>
                </li>
                <li><a href="viewcomplaint.php"> View Complaints</a></li>
                <li><a href="viewfeedback.php"> View Feedback</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </nav>
        </div>



<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content" style="width: 130%">
<div class="modal-header"><h3>Edit Profile</h3>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
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
?>
<div class="form-group">
<div class="form-label-group">
<input type="hidden" name="id" value="<?php echo $b;?>">
<label for="exampleInputEmail1">Full Name</label>
<input type="text" id="name1" class="form-control"  name="name" id="name1" autofocus="autofocus" required  placeholder="Enter Full Name"  onblur="validate()" value="<?php echo $result['name']; ?>">
    <br><label for="exampleInputEmail1">Phone Number</label>
    <input type="text" id="phno" class="form-control"  name="phno" id="phno" autofocus="autofocus" required  onblur="validate2()" placeholder="Enter Phone Number" value="<?php echo $result['phone']; ?>">
    <br><label for="exampleInputEmail1">Email Address</label>
    <input type="text" class="form-control" value="<?php echo $result['address']; ?>" autofocus="autofocus" name="email" id="email1" placeholder="Enter Email Address" onblur="validate1()" required/>
    <br><label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="city"  value="<?php echo $a['main_city']; ?>" autofocus="autofocus" id="uname1" placeholder="Enter city name" onblur="validate3()"  required/>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
Close
<span class="glyphicon glyphicon-remove-sign"></span>
</button>
<input type="submit" name="update" value="Update" class="btn btn-success">
</div>
</form>
</div>
</div>
</div>
</div>

<div class="modal fade" id="myTodal" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content" style="width: 130%">
<div class="modal-header"><h3>Change Password</h3>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<form method="POST" action="changepass.php">
  <?php
  include("DbConnection.php");
  $sq="select * from tbl_login where email='$email'";
  $res=mysqli_query($con,$sq);
  $a=mysqli_fetch_array($res);
  ?>
<div class="form-group">
<div class="form-label-group">

<label for="exampleInputEmail1">Username</label>
<input type="text"  class="form-control"  name="name"  autofocus="autofocus" required  placeholder="Email"  value="<?php echo $a['email']; ?>">
    <br><label for="exampleInputEmail1">Old Password</label>
    <input type="password"  class="form-control"   autofocus="autofocus" required  placeholder="Old Password" name="old" id="old" value="<?php echo $a['password']; ?>">
    <br><label for="exampleInputEmail1">New Password</label>
    <input type="password" class="form-control" name="new" id="pass" placeholder="New Password" onblur="validate4()" autofocus="autofocus" required>
    <br><label for="exampleInputEmail1">Confirm Password</label>
    	<input type="password" name="cnew" class="form-control" id="cpawd" placeholder="Confirm New Password" onblur="validcpass()" autofocus="autofocus" required>
</div>
</div><br>
<div class="pad-top">
  <label>
     <center><I>Password must have at least one digit (0-9), one lowercase character (a-z) , one uppercase character(A-Z),one special character. It can have minimum 8 characters and maximum 16 characters.</I></center>
  </label></div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
Close
<span class="glyphicon glyphicon-remove-sign"></span>
</button>
<input type="submit" name="update" value="Update" class="btn btn-success">
</div>
</form>
</div>
</div>
</div>
</div>


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
function validate1()
{
var email=document.getElementById("email1").value;
var pat=/^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$/;
 if(!email.match(pat))
{
alert("Please Enter Valid Email");
document.getElementById("email1").value="";
}
}
function validate3()
{
var name=document.getElementById("uname1").value;
var letters=/^[0-9a-zA-Z]+$/;
if(!name.match(letters))
{
alert("Please Enter Valid City name");
document.getElementById("uname1").value="";
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
</div>
</html>