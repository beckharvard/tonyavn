<hr>
<span>
<?php 
$h = "7";// Hour for time zone goes here e.g. +7 or -4, just remove the + or -
$hm = $h * 60; 
$ms = $hm * 60;
//$TZOffset = GetTZOffset(); 
$gmdate = gmdate("l, M jS Y h:ia", time()-($ms)); // the "-" can be switched to a plus if that's what your time zone is.
echo "$gmdate";
?>
<span id="copyright">&copy; <?php echo date("Y") ?></span>
</span>
</div>
</body>
</html>

