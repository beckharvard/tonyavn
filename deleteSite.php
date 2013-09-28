<link rel="stylesheet" href="css/style_php.css" type="text/css" />
<?php
if(isset($_POST['element_Label']))
{

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
  
$element_Label = $_POST['element_Label'];  

$sql ="UPDATE websites
SET visible='1'
WHERE element_Label ='$_POST[element_Label]'");

mysql_select_db('_MadMade');
$retval = mysql_query( $sql, $con );
if (!$retval)
  {
  die('Error: ' . mysqli_error($con));
  }
echo "That website has been removed from the visible links. Thank you!";
echo "<br/>";
echo "<a href=\"sites.php\">Go Back</a>";


mysqli_close($con);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Current Links</td>
<td><input name="element_Label" type="text" id="element_Label"></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="delete" type="submit" id="delete" value="Delete">
</td>
</tr>
</table>
</form>
<?php
}
?>