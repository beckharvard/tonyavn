<!--I Think this can safely be removed -->

<div class="center">
<form id="myForm" method="post">
	<?php echo validation_errors('<p class="error">'); ?>
 	<?php echo form_open("user/verify"); ?>
  		<label for="email">Email:</label>
  		<input type="text" id="email" name="email" value="" />
  		<label for="pass">Password:</label>
  		<input type="password" id="pass" name="pass" value="" />
  		<label for="pass">Activation Code:</label>
  		<input type="code" id="code" name="code" value="" />
  		<input type="submit" class="submit" value="Verfiy" />

 	<?php echo form_close(); ?>
<h3>Thanks for registering! Please check for a welcome email.</h3>
<h3>You can log in here.</h3>
</fieldset>
</form>
</div>
</div>