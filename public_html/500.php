<!-- PHP Wrapper - 500 Server Error -->
<html><head><title>500 Server Error</title></head>
<body bgcolor=white>
<h1>500 Server Error</h1>
Oh, damn. 
A misconfiguration on the server caused a hiccup.
Check the server logs, fix the problem, then try again.
<hr>

<?
  echo "URL: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."<br>\n";
  $fixer = "checksuexec ".escapeshellarg($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);
  echo `$fixer`;
?>

<img src="images/iblamemicrosoft.png" title="Blame Microsoft" alt="It's probably my fault, but I blame Microsoft"/>


</body></html>
