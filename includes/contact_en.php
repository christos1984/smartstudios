<div class="holder">
	<div id="left_text_c" class="desctext2 contactleft">
		<h2 class="lefttitle"> Contact </h2>
		<br/>
		For lettings and more information please contact us at:
		<br/>
		<br/>
		<dl style="line-height:24px;">
		<dd style="text-align:right;clear:both;margin:0;padding-right:40px;">
		<span style="float:left;"><strong>Cell Phone</strong></span>
		+30 6946 954697
		</dd>
		<dd style="text-align:right;clear:both;margin:0;padding-right:40px;">
		<span style="float:left"> <strong>Landline</strong></span>
		+30 210 6835391
		</dd>
		<dd style="text-align:right;clear:both;margin:0;padding-right:40px;">
		<span style="float:left"> <strong>E-mail</strong></span>
		info@smart-studios.gr
		</dl>
		<br/>
		You can also find us at our <a href="http://www.facebook.com/pages/Smart-Studios/182114821808938">Facebook page</a>
    </div>
         
    <div id="right_text" class="desctext2">
		<?php if ((isset($_GET['validation']) && ($_GET['validation']== 1))) {?>
			<h2 align="center"> Thank you for contacting us! We will get back to you as soon as possible.</h2>
		<?php } else if ((isset($_GET['validation']) && ($_GET['validation']== 0))) { ?>
		<h2 align="center"> An error has occured: Blank fields or problem connecting to database</h2>
		<?php } else { ?>
		<h2 class="lefttitle" align="center">Contact form</h2>
		<div id="contact-area">
			<form id="commentFormss" method="post" action="includes/sendmail.php">
				<input type="hidden" name="ke" value="<?php echo (htmlentities($_SERVER['QUERY_STRING']));?>" />
				
				<br/>
				<label for="Name">Name:</label>
				<input type="text" name="Name"  id="Name" />		
				<br/>
				<label for="Email">E-mail:</label>
				<input type="text" name="Email" title="Required field" id="Email" class="required email"/>
                <br/>
                <label for="Subject">Subject:</label>
				<input type="text" name="Subject" title="Required field" id="Subject" class="required"/>
             	<br/>
				<input type="text" name="human" id="human" />
				<label for="Message">Message:</label>
				<textarea name="Message" rows="20" cols="20" title="Required field" id="Message"class="required"></textarea><br />
				<input type="submit" name="submit" value="Submit" class="submit-button" />
			</form>
		</div>
		<?php } ?>
	</div>
</div>