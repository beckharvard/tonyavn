<div class="center">
	<strong>Reset your password</strong><br><br>
		<?php echo validation_errors('<p class="error">'); ?>
 			<?php echo form_open("user/reset"); ?>
 			<p>
 			Please enter the email address that you registered with, 
 			and click on "Reset" to receive an email with a link to reset your password.
 			<br>
 			</p>
 			<label for="email">Email</label>  
  			<input id="email" type="text" name="email" value="" required/>
  			<input class="submit" type="submit" value="Reset" />
 			<?php echo form_close(); ?>
 			<br>
</div>