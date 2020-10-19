<div class="center">
	<h2>Registration enables features only logged in members can access.</h2>
	<h3><a href="<?php echo base_url(); echo index_page();?>/login/login" title="Login">Go to login</a></h3>
 	<?php echo validation_errors('<p class="error">'); ?>
		 <?php echo form_open("user/registration"); ?>
  		<p>
  			<input class="reg" type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" required/>
  			<label for="user_name">Your Name</label>
  		</p>
 		<p>
  			<input class="reg" type="email" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" required/>
  			<label for="email_address">Your Email</label>
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
 		<div>	I have no end user agreement, other than... 
		<ul>
		<li>I am not going to sell your info.</li>
		<li>I am not going lure you into playing quiz games and harvest your responses.</li>
		<li>The only email you can expect is one to confirm your email address.</li>
		<li>If you mess with my site, I'll lock you out.</li>
		</ul>
	</div>
</div>
