<?php
require_once("classes/FormAssist.class.php");
require_once("classes/DataAccess.class.php");
require_once("classes/FormValidator.class.php");
$fields=array("name"=>"","email"=>"","addr"=>"","city"=>"","paswd"=>"","cpaswd"=>"","phn"=>"");
$rules= array("name"=>array("required"=>"","minlength"=>3,"maxlength"=>20),
				"email"=>array("required"=>"","email"=>""),
				"city"=>array("required"=>"","dbexist"=>array("table"=>"city","field"=>"d_id")),
				"paswd"=>array("required"=>"","compare"=>array("compareto"=>"email","operator"=>"!=")),
				"cpaswd"=>array("required"=>"","compare"=>array("compareto"=>"paswd","operator"=>"=")),
				"addr"=>array("required"=>"")
				);
$labels=array("city"=>"City","paswd"=>"Password","addr"=>"Address","cpaswd"=>"Confirm Password");
$validator=new FormValidator($rules,$labels);
$form=new FormAssist($fields,$_POST);
$dao=new DataAccess();
if(isset($_POST["reg"]))
{
	if($validator->validate($_POST))
	{
		//process form

	}
}
?>
<!DOCTYPE HTML>
<html>
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
			<?php echo $form->textBox("name",array("placeholder"=>"Full Name")); ?>
		</div>
		<div class="agile-field-txt">
			<label>
			<i class="fa fa-envelope" aria-hidden="true"></i> Email address </label>
		      	<?php echo $form->textBox("email",array("placeholder"=>"email","type"=>"email",)); ?>
		</div>
		<div class="agile-field-txt">
			<label>
		  	<i class="fa fa-phone" aria-hidden="true"></i> Phone number  </label>
		  	<?php echo $form->textBox("phn",array("placeholder"=>"Phone Number")); ?>
		</div>
		<div class="agile-field-txt">
			<label>
			<i class="fa fa-address-card" aria-hidden="true"></i>  Address</label>
			<?php echo $form->textBox("addr",array("placeholder"=>"address")); ?>
		</div>
	
		<div class="agile-field-txt">
			<label>
			<i class="fa fa-map-marker" aria-hidden="true"></i> Main city </label>
 			<?php echo $form->textBox("city",array("placeholder"=>"Main City")); ?>
		</div>
		<div class="agile-field-txt">
			<label>
			<i class="fa fa-unlock-alt" aria-hidden="true"></i> password </label>
			<?php echo $form->passwordBox("paswd",array("placeholder"=>"password","type"=>"password")); ?>
		</div>
		<div class="agile-field-txt">
			<label>
			<i class="fa fa-unlock-alt" aria-hidden="true"></i> confirm password</label>
			<?php echo $form->passwordBox("paswd",array("placeholder"=>"password","type"=>"password")); ?>
		</div>
			
			<div class="w3ls-bot">
				<div class="switch-agileits">
				</div>
				<div class="form-end">
					<input type="submit" value="REGISTER" name="reg">
				</div>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
	<!-- //form ends here -->
</body>

</html>