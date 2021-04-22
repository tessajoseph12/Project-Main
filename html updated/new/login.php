<?php
require_once("classes/FormAssist.class.php");
require_once("classes/FormValidator.class.php");
$fields=array("email"=>"","paswd"=>"");
$form=new FormAssist($fields,$_POST);
require_once("header.php");
 ?>
<body>
	<h1>Login Now</h1>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="addlogin1.php" method="post">

			<div class="agile-field-txt">
				<label>
				<i class="fa fa-envelope" aria-hidden="true"></i> Email </label>
				<?php echo $formm->textBox("email",array("placeholder"=>"email","type"=>"email",)); ?></div>
				<div class="agile_label">
				</div>
			<div class="agile-field-txt">
			<label>
			<i class="fa fa-unlock-alt" aria-hidden="true"></i> password </label>
			<?php echo $form->passwordBox("paswd",array("placeholder"=>"password","type"=>"password")); ?>
		</div>
			<div class="w3ls-bot">
				<div class="switch-agileits">

				</div>
				<div class="form-end">
					<input type="submit" value="LOGIN" name="reg"></button>
				</div>
				<div class="clearfix"></div>
			</div>
		</table></form>
	</div>
	<!-- //form ends here -->
	
	<div class="copy-wthree">
		
	</div>
	
</body>

</html>