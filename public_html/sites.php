<link rel="stylesheet" href="css/style_php.css" type="text/css" />

<table id="sites">
<thead>
      <th scope="col" style="text-align: left;">
      	<td>Link</td>
      	<td>Type</td>
      </th> 

   </thead>
   <tfoot>
   	<tr> 
		<td colspan="2" scope="row">
	   	<a href="insert_MadMade.php" title="Click to Add a Site" style="text-decoration: none; font-size: 3.0em;" class="nomargin">+</a>
		<a href="removeSite.php" title="Click to Delete a Site" style="text-decoration: none; font-size: 3.0em;" class="nomargin">-</a>
 		</td>    	
	</tr>
   </tfoot>
		<?php

// Performing SQL query
$hostname_conn = 'localhost'; 
$database_conn = 'tonyavnc_MadMade'; 
$username_conn = 'tonyavnc_root'; 
$password_conn = 'aveniros'; 

$query=mysqli_connect($hostname_conn, $username_conn, $password_conn, $database_conn);


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
  {
  echo "<p style=\"display: none;\">Connection is OK</p>";
  }

$result = mysqli_query($query,"SELECT * FROM websites WHERE visible='0' ORDER by Type");

// iterating through results
   while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td colspan=\"2\"><a href=\"";
 	echo $row['href'];
 	echo "\" class=\"nomargin\" target=\"_blank\">";
   	echo $row['element_Label'];
   	echo "</a>";
   	echo "</td>";
    echo "<td colspan=\"2\">";
   	echo $row['Type'];
   	echo "</td>";
   	echo "</tr>";
  }

?>
</table>


