<link rel="stylesheet" href="css/style_php.css" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
<script>
function myFunction()
{
alert( "You don't really think I'm going to let you delete my links, do you?");
}
</script>


	<div id="removeSite"> Your current links are:<br/>
	<br/>
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

$result = mysqli_query($query,"SELECT * FROM websites ORDER by Type");

// iterating through results
   while ($row = mysqli_fetch_array($result)) {
    echo "<input type=\"radio\" name=\"";
    echo $row['href'];
	echo "\"";
	echo " value=\"";
	echo $row['element_Label'];
	echo "\"/>";
	echo $row['element_Label'];
	echo " which is of the type ";
    echo $row['Type'];
    echo "<br/>";

  }
  mysqli_close($query);
  ?>
  
<input type="submit" class="submit" onclick="myFunction()" value="Remove"/>
<a href="sites.php">nevermind</a>
</div>


</form>

