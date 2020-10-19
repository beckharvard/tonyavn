<div class="center">
<p>
Along with being a Software Quality Assurance Director, Business Analyst, and generally a good guy
(usually), I continue to need to aquire new skills.  I've been taking classes
in order to more efficiently test as well as to better understand the software I test. 
It's been a really mind-wrinkling experience,
and I feel that it has taught me a new way of thinking. 
This website and the links on this page are some of the things that I have built.
<br>
<br>
At Harvard, Northeasterm University, Boston University, and elsewhere I have learned: extensive skills with Javascript, PHP, jQuery, with acadmic usage of Java, C, and mySQL. I'm a daily practitioner, and I'll 
continue to learn as much as I can. I have also, on my own, picked up extensive skills with Selenium, Nightwatch, node.js, Appium, and Xcode. The ability 
to use these tools has significantly extended and elaborated upon what I can provide as an SQA practitioner.  
</p>
<h2> These sites are on a server I configured, with web pages I implemented, and connect to a database that I setup. 
This work represents many of my skills up until 2019, though certainly not all of them.</h2>
<table>
<?php foreach ($websites as $site): ?>

   <?php echo "<tr>";
    echo "<td><a href=\"";
 	echo $site['href'];
 	echo "\" target=\"_blank\">";
   	echo $site['element_Label'];
   	echo "</a>";
   	echo "</td>";
    echo "<td>";
   	echo $site['Type'];
   	echo "</td>";
   	echo "</tr>";
	?>
<?php endforeach ?>
</table>
</div>
