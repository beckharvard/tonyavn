<div class="center">
<br>
<br>
<br>
<h2>Sent!</h2>
<table>
<?php 
$arrlength = count($message);
for($x = 0; $x < $arrlength ; $x++)
{
 
 	echo "<tr>";
    echo "<td>";
 	echo $message[$x]['message'];
   	echo "</td>";
   //	echo "<td>";
   //   echo $message[$x]['created'];
   //	echo "</td>";
   	echo "</tr>";
}
 ?>
</table>

<h3><?php if(is_logged_in()){ echo "<a href="; echo base_url(); echo index_page(); 
	  echo "/sites/contact"; echo " title=\"contact\">Send another</a>"; }?>
	</h3>
</div>