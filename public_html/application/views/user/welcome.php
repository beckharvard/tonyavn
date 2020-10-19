<div class="center">
	<h2>Welcome Back, <?php echo $this->session->userdata('user_name'); ?>!</h2>
	<p>The buttons below allow access to features that only logged in members can access.</p>
	<div class="button">
	<?php if(is_logged_in()){ echo "<a class=\"blink\" href="; echo base_url(); echo index_page(); 
	  echo "/sites/create"; echo " title=\"Add\">Add Work Examples</a>"; }?>
	</div>
	<div class="button"><!--
n---><?php if(is_logged_in()){ echo "<a class=\"blink\" href="; echo base_url(); echo index_page(); 
	  echo "/sites/delete"; echo " title=\"Delete\">Remove Work Examples</a>"; }?>
	</div>
	<div class="button">
	<a class="blink" href="<?php echo base_url(); echo index_page();?>/sites/contact" title="Contact">Send SMS</a>
	</div>
</div>