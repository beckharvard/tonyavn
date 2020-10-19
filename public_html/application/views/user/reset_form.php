<div class="center">
	<h2>Please enter your email and your new password</h2>
	<?php echo validation_errors('<p class="error">'); ?>
		 <?php echo form_open("user/reset_form"); ?>
 		<p>
  			<input class="reg" type="email" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" required/>
  			 <?php echo $email ?><label for="email_address">Your Email</label>
 		</p>
  		<p> 
  			<input class="reg" type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" required/>
  			<label for="password">Password</label>
  		</p>
  		<p>
  			<input class="reg" type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" required/>
  			<label for="con_password">Confirm Password</label>
  		</p>
  		<p>
  			<input class="submit" type="submit" value="Submit" />
  		</p>
 		<?php echo form_close(); ?>
 		<h3><a href="<?php echo base_url(); echo index_page();?>/login/login" title="Login">Go to login page</a></h3>
	</div>	
</div>
