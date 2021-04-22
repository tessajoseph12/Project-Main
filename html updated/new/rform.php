<?php
require_once("classes/FormAssist.class.php");
$dd=array("fname"=>"","email"=>"","gen"=>"","addr"=>"","paswd"=>"");
$ff=new FormAssist($dd,$_POST);
?>
<html>
<head> </head>
<body><center><fieldset>
<legend>Registration form</legend>
<h3>Registration form</h3>
<form method="post">
<table>
<tr>
	<td>Name</td>
	<td><?php echo $ff->textBox("fname",array("placeholder"=>"Name")); ?></td>
	<td></td>
</tr>
<tr>
	<td>Email</td>
	<td><?php echo $ff->textBox("email",array("placeholder"=>"Email","type"=>"email",)); ?></td>
	<td></td>
</tr>
<tr>
	<td>Gender</td>
	<td><?php
		$gender=array("Female"=>"f","Male"=>"m");
		echo $ff->radioGroup("gen",array("class"=>"class1"),$gender);
	?></td>
	<td></td>
</tr>
<tr>
	<td>Address</td>
	<td><?php echo $ff->textArea("addr",array("placeholder"=>"Address")); ?></td>
	<td></td>
</tr>
<tr>
	<td>Password</td>
	<td><?php echo $ff->passwordBox("paswd",array("placeholder"=>"Password","type"=>"password")); ?></td>
	<td></td>
</tr>
<tr>

	<td><input type="submit" value="Register"</td>
</tr>
</table>
</form></fieldset>
</body></center>
</html>