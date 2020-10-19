<div class="center">
	<h2>Login</h2><br><br>
	<?php echo validation_errors('<p class="error">'); ?>
 			<?php echo form_open("user/login"); ?>
 			<p>
  			<input id="email" type="text" name="email" value="" required/>
  			<label for="email">Email</label>  
  			<br>
  			<br>
  			<input id="password" type="password" name="pass" value="" required/>
  			<label for="password">Password</label>
  			<br>
  			<br>
  			<input class="submit" type="submit" value="Sign in" />
  			</p>
  			<div>
  			<a href="<?php echo base_url(); echo index_page();?>/user/reset" title="Reset">Reset your password</a>
  			<br>
  			<br>
  		  <a href="<?php echo base_url(); echo index_page();?>/user/registration" title="Register">Register</a></div>

 			<?php echo form_close(); ?>


</div>