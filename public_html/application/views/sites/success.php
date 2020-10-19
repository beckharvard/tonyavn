<div class="center">
<br>
<br>
<br>
<h2>Success!</h2>
<table>
<?php foreach ($websites as $site): ?>

   <?php echo "<tr>";
    echo "<td colspan=\"2\"><a href=\"";
 	echo $site['href'];
 	echo "\" class=\"nomargin\" target=\"_blank\">";
   	echo $site['element_Label'];
   	echo "</a>";
   	echo "</td>";
    echo "<td colspan=\"2\">";
   	echo $site['Type'];
   	echo "</td>";
   	echo "</tr>";
	?>
<?php endforeach ?>
</table>

<h3><?php if(is_logged_in()){ echo "<a href="; echo base_url(); echo index_page(); 
	  echo "/sites/create"; echo " title=\"Register\">Add another</a>"; }?>
	</h3>
</div>