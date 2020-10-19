<div class="center">
<h2>Add a work sample</h2>

<p>
This is really a place for me to quickly add URLS to samples of my work as I develop my skills. 
If I have done work for you, you are welcome to add a link to it here. That being said, I may remove it, 
or reorganize this list.
</p>

<?php echo form_open('sites/create', "id=\"myForm\"") ?>

    <fieldset>
		<p id="hiddenfield1">           
        <em style="color: red;" >*</em>  
        <input type="text" id="element_Label" name="element_Label" size="25" class="required" required/> 
        <label for="element_Label">Link label</label>
        </p>
        
        <p id="hiddenfield2">  
        <em style="color: red;" >*</em>      
        <input type="url" id="href" name="href" size="25" class="required" required/>
        <label for="href">Link URL</label>   
        </p>
        
        <p id="hiddenfield3">    
        <em style="color: red;" >*</em>    
        <input type="text" id="type" name="type" size="25" class="required" required/> 
        <label for="type">Type or Category</label>
        </p>
        <br/>
<div>  
<br/>
<p>     
<input class="submit" type="submit" value="Add"/>
<a href="<?php echo base_url(); echo index_page();?>/home">nevermind</a>
</p>
</div>
</fieldset>

 <?php echo form_close(); ?>
</div>