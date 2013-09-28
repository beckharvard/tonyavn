
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>WIDGET WEB - Results</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="icon" href="../favicon.png" type="image/png"/>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
</head>

<body>
<script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
    var width = $(window).width(); 
	var height = $(window).height(); 

	//size for regular devices
	 window.onload = function() {
	// debug 
	//alert( "Hey, You're " + width + " wide and " + height + " height!" );
	  $("#siteNav").css("font-size", (  width / 48) );  
	  $("ul#siteNav li").css("padding-left", (  width / 70) );  
	  $("ul#siteNav li").css("padding-right", (  width / 70) );  
}
	$("#footer img").mouseenter(function() {
	  $("#footer img").animate({backgroundColor: '#56a1d5'}) 
		
	});
        

	$("#footer img").mouseleave(function() {
	$("#footer img").animate({backgroundColor: '#808080'}) 
		
	});

    
});

</script>


<div id="wrapper">



<!-- masthead -->
<div id="header">

<h1 title="The Future">WIDGET WEB</h1>


</div>
<!-- site navigation -->
 
<div id="nav">

<ul id="siteNav">
<li><a href="hello.html"><small>Hello</small></a></li>
<li><a href="start.html"><small>Starters</small></a></li>
<li><a href="surf.html"><small>Surface</small></a></li>
<li><a href="proj.html"><small>Projection</small></a></li>
<li><a href="mount.html"><small>Mounting</small></a></li>
<li><a href="quote.html"><small>Quotes</small></a></li>
<li><a href="vote.html"><small>Votes</small></a></li>
<li id="iamhere"><a href="results.php"><small>Results</small></a></li>
</ul>
</div>


<!-- end site navigation -->


<div id="spacer">
<p></p>

</div>



<!-- end masthead -->

<div id="section">
<table id="results">
<thead>
	<tr>
	   <th scope="col">First</th>  
       <th scope="col">Name</th>
       <th scope="col">Choice</th>  
       <th scope="col">Stand?</th>
              <th scope="col">Wall mount?</th>
                     <th scope="col">Projector?</th>
                            <th scope="col">Erasers?</th>
       <th scope="col">Comment</th>  
	</tr>
   </thead>

<?php
// Performing SQL query
$hostname_conn = 'localhost'; 
$database_conn = 'tonyavnc_aveniros'; 
$username_conn = 'tonyavnc_root'; 
$password_conn = 'aveniros'; 

$query=mysqli_connect($hostname_conn, $username_conn, $password_conn, $database_conn);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else
  {
  echo "<h2>Current votes & comments</h2>";
  }

$result = mysqli_query($query,"SELECT * FROM person");

// iterating through results
   while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>";
 	echo $row['name'];
 	echo "</td>";
 	echo "<td>";
   	echo $row['lname'];
   	echo "</td>";
   	echo "<td>";
   	echo $row['boards'];
   	echo "</td>";
   	echo "<td>";
   	echo $row['a1_stand'];
   	echo "</td>";
   	echo "<td>";
   	echo $row['a2_wall'];
   	echo "</td>";
   	echo "<td>";
   	echo $row['a3_proj'];
   	echo "</td>";
   	echo "<td>";
   	echo $row['a4_erase'];
   	echo "</td>";
   	echo "<td>";
   	echo $row['ccomment'];
   	echo "</td>";
   	echo "</tr>";
  }

?>
</table>
<hr/>

</div>

<hr/>
<div id="footer">

<!-- images in the footer (created by me) -->
<a href="https://www.facebook.com/pages/aveniros/129846500528006">
<img src="images/facebook_64.png" alt="Facebook"/> </a>

<a href="http://www.linkedin.com/company/2980438">
<img src ="images/linkedin_64.png" alt="Linked-in"/></a>

<a href="https://twitter.com/4veniros">
<img src="images/Twitter_64.png" alt="Twitter"/> </a>

<a href="http://www.wikihow.com/Create-an-RSS-Feed">
<img src="images/rss_64c.png" alt="RSS Feed"/> </a>

<a title="EMAIL TONY" href="mailto:tony@WIDGET WEB.com?subject=Final Project">
<img src="images/mail_64.png" alt="Email"/> </a>
<!-- end images in the footer -->

<p>Anthony Beck<br/><strong>WIDGET WEB</strong> &trade;<br/>Quality Assurance Manager<br/></p>


</div>
</div>

</body>

</html>


