<div class="center">
	<strong>Login</strong><br><br>
	<span>Thank you for verifying your email address!</span>	

 			<?php echo form_open("user/login"); ?>
 			<p>
  			<input id="email" type="email" name="email" value="" required/>
  			<label for="email">Email</label>  
  			<br>
  			<br>
  			<input id="password" type="password" name="pass" value="" required/>
  			<label for="password">Password</label>
  			<br>
  			<br>
  			</p>
  			<p>
  			<input class="submit" type="submit" value="Sign in" />
  			</p>
 			<?php echo form_close(); ?>
</div>