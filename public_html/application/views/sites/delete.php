<div class="center">
<h2>Delete</h2>
<?php echo form_open('sites/delete', "id=\"myForm\"") ?>
<fieldset>
<?php foreach ($websites as $site): ?>

   <?php echo "<input type=\"radio\"";
    echo " value=\"";
 	echo $site['href'];
 	echo "\" name=\"";
 	echo "href";
	echo "\" >"; 
	?><?php echo $site['href']; ?>
	<br>
<?php endforeach ?>
<br>
<input class="submit" type="submit" value="Delete"/>
</fieldset>
<?php echo form_close(); ?>

<h3><?php if(is_logged_in()){ echo "<a href="; echo base_url(); echo index_page(); 
	  echo "/user/registration"; echo " title=\"index\">Back to list</a>"; }?>
	</h3>
</div>