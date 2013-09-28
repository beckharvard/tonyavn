<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript">
</script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js">
</script>
<link rel="stylesheet" href="css/style_php.css" type="text/css" />

<script type="text/javascript">
$(document).ready(function(){
  var validation =  $("#myForm").validate({
  rules: { 
           element_Label:  { required: true, minlength: 2 },
           href: { required: true, url: true },
  		   Type: { required: true }
       }
	}); 
});
</script>
<br/>
<p>Add a link</p>
<br/>
<form id="myForm" method="post" action="addSite.php">
    <fieldset>
		<p id="hiddenfield1">           
        <em style="color: red;" >*</em>  
        <input type="text" id="element_Label" name="element_Label" size="25" class="required"/> 
        <label for="element_Label">Link label</label>
        </p>
        
        <p id="hiddenfield2">  
        <em style="color: red;" >*</em>      
        <input type="text" id="href" name="href" size="25" class="required"/>
        <label for="href">Link URL</label>   
        </p>
        
        <p id="hiddenfield3">    
        <em style="color: red;" >*</em>    
        <input type="text" id="Type" name="Type" size="25" class="required"/> 
        <label for="Type">Type or Category</label>
        </p>
        <br/>
<div>  
<br/>    
<br/>  
<br/>
<br/>  
<input class="submit" type="submit" value="Add"/>
<a href="sites.php">nevermind</a>
</div>
</fieldset>
</form>

</html>