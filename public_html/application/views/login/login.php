<div class="center">
	<strong>Login</strong>	
        <?php echo validation_errors('<p class="error">'); ?>	
 			<?php echo form_open("login/login"); ?>
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

<h3><a href="<?php echo base_url(); echo index_page();?>/user/registration" title="Register">Click here to register</a></h3>
</div>