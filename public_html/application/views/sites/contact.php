<div class="center">
<h2>As a registered user of this site you can send an SMS message to Tony. Lucky you.</h2>

<form id="myForm" method="post">
    <fieldset>
	   
		<label for="message">Your message (160 character limit):</label> 
		<br>      
        <textarea id="message" name="message" maxlength="160" class="required" required></textarea>        
        <?php echo validation_errors(); ?>
       
        <p>
        <input class="submit" type="submit" value="Send"/>
        </p>        
        <br/>     
</fieldset>
</form>
</div>