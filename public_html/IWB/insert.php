<?php

$hostname_conn = 'localhost'; 
$database_conn = 'tonyavnc_aveniros'; 
$username_conn = 'tonyavnc_root'; 
$password_conn = 'aveniros'; 

$con=mysqli_connect($hostname_conn, $username_conn, $password_conn, $database_conn);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO person (name, lname, email, ccomment, a1_stand, a2_wall, a3_proj, a4_erase, boards)
VALUES
('$_POST[name]','$_POST[lname]','$_POST[email]','$_POST[ccomment]','$_POST[a1_stand]','$_POST[a2_wall]','$_POST[a3_proj]','$_POST[a4_erase]','$_POST[boards]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Your information has been added and your vote recorded. Thank you!";
echo "<br/>";
echo "<a href=\"results.php\">Click to see results so far</a>";


mysqli_close($con);
?>