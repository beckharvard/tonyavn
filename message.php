<?php

$hostname_conn = 'localhost'; 
$database_conn = 'tonyavnc_MadMade'; 
$username_conn = 'tonyavnc_root'; 
$password_conn = 'aveniros'; 

$con=mysqli_connect($hostname_conn, $username_conn, $password_conn, $database_conn);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO message (message)
VALUES
('$_POST[message]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "That message has been saved. Thank you!";
echo "<br/>";
echo "<a href=\"contactInfo.html\">Go Back</a>";


mysqli_close($con);
?>