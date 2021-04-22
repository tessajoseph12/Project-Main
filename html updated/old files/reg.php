<?php
include("Dbconnection.php");
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Registration Form</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Clear login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<!-- title -->
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<h1>Registration Form</h1>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="addregister.php" method="post">
		<div class="agile-field-txt">
			<label>
			<i class="fa fa-user" aria-hidden="true"></i> Name </label>
			<input type="text" name="name" placeholder="Enter your name"  id="nam" onblur="validname()"/>
		</div>
		<div class="agile-field-txt">
			<label>
			<i class="fa fa-envelope" aria-hidden="true"></i> Email address </label>
		      	<input type="text" name="email" placeholder="Enter your email address " id="mail" onchange="validmail()" />
		</div>
		<div class="agile-field-txt">
			<label>
		  	<i class="fa fa-phone" aria-hidden="true"></i> Phone number  </label>
		  	<input type="text" name="phoneno" placeholder="Enter your phone number"  id="pho"  onchange="validpho()"/>
		</div>
		<div class="agile-field-txt">
			<label>
			<i class="fa fa-address-card" aria-hidden="true"></i>  Address</label>
			<input type="text" name="addr" placeholder="Enter your address" required=""/>
		</div>
	
		<div class="agile-field-txt">
			<label>
			<i class="fa fa-map-marker" aria-hidden="true"></i> Main city </label>
 			<input type="text" name="city"placeholder="Enter main city" id="nam" onblur="validname()" />
		</div>
		<div class="agile-field-txt">
			<label>
			<i class="fa fa-unlock-alt" aria-hidden="true"></i> Password </label>
			<input type="password" name="pass" placeholder="Enter your password " id="pawd" onchange="validpaswd()" />
		</div>
		<div class="agile-field-txt">
			<label>
			<i class="fa fa-unlock-alt" aria-hidden="true"></i> Confirm password</label>
			<input type="password" name="pass" placeholder="Enter your password " id="pawd" onchange="validpaswd()"/>
		</div>
			
			<div class="w3ls-bot">
				<div class="switch-agileits">
				</div>
				<div class="form-end">
					<input type="submit" value="REGISTER">
				</div>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
	<!-- //form ends here -->
<script>
		
function validname()
   {
    var name=document.getElementById("nam").value;
	var letters =/^[a-zA-Z ]*$/;
	if(!name.match(letters))
	{
	 alert("Please enter your name correctly");
	 document.getElementById("nam").value="";
	}
   }
   
   function validmail()
   {
    var email=document.getElementById("mail").value;
	var mailexp = /^([A-Za-z0-9\.]{4,30})+@[a-z.]+\.+[a-z]+$/;
	if(!email.match(mailexp))
	{
	 alert("Please enter your email address correctly");
	 document.getElementById("mail").value="";
	 document.getElementById("bt").focus();
	}
   }
   
   function validpho()
   {
    var phono=document.getElementById("pho").value;
	var phoexp =/^((9|8|7|6){1})+([0-9]{9})$/;
	if(!phono.match(phoexp))
	{
	 alert("Please enter your phone number correctly");
	 document.getElementById("pho").value="";
	}
   }
   
    function validpaswd()
   {
    var pass=document.getElementById("pawd").value;
	var passexp =/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
	if(!pass.match(passexp))
	{
	 alert("Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
	 document.getElementById("pawd").value="";
	}
   }
	</script>
</body>

</html>