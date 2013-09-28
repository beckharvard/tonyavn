<link rel="stylesheet" href="css/style_php.css" type="text/css" />

	<div> Your current links are:<br/>
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
</div>

<form name="test" action="<?php echo htmlentities(deleteSite.php); ?>" method="post">
<input type="submit" name="submit" value="Remove"><br>
</form>

