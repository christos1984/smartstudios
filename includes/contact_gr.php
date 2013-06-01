<div class="holder">
	<div id="left_text_c" class="desctext2 contactleft">
		<h2 class="lefttitle"> Contact </h2>
		<br/>
		Για κλείσιμο μισθώσεων και για περισσότερες πληροφορίες επικοινωνήστε με τα τηλέφωνα: 
		<br/>
		<br/>
		<dl style="line-height:24px;">
		<dd style="text-align:right;clear:both;margin:0;padding-right:40px;">
		<span style="float:left;"><strong>Κινητό</strong></span>
		+30 6946 954697
		</dd>
		<dd style="text-align:right;clear:both;margin:0;padding-right:40px;">
		<span style="float:left"><strong>Σταθερό</strong></span>
		+30 210 6835391
		</dd>
		<dd style="text-align:right;clear:both;margin:0;padding-right:40px;">
		<span style="float:left"><strong>E-mail</strong></span>
		info@smart-studios.gr
		</dl>
		<br/>
		Μπορείτε να μας βρείτε και στην σελίδα μας στο  <a href="http://www.facebook.com/pages/Smart-Studios/182114821808938">Facebook</a>
    </div>
         
    <div id="right_text" class="desctext2">
		<?php if ((isset($_GET['validation']) && ($_GET['validation']== 1))) {?>
			<h2 align="center"> Ευχαριστούμε που επικοινωνήσατε μαζί μας </h2>
		<?php } else if ((isset($_GET['validation']) && ($_GET['validation']== 0))) { ?>
		<h2 align="center"> Παρουσιάστηκε σφάλμα </h2>
		<?php } else { ?>
		<h2 class="lefttitle" align="center">Φόρμα επικοινωνίας</h2>
		<div id="contact-area">
			<form id="commentForm" method="post" action="includes/sendmail.php">
				<input type="hidden" name="ke" value="<?php echo (htmlentities($_SERVER['QUERY_STRING']));?>" />
				
				<br/>
				<label for="Name">Όνομα:</label>
				<input type="text" name="Name" id="Name" class="required"/>		
				<br/>
				<label for="Email">E-mail:</label>
				<input type="text" name="Email" id="Email" class="required email"/>
                <br/>
                <label for="Subject">Θέμα:</label>
				<input type="text" name="Subject" id="Subject" class="required"/>
             	<br/>
				<input type="text" name="human" id="human" />
				<label for="Message">Μήνυμα:</label>
				<textarea name="Message" rows="20" cols="20" id="Message"class="required"></textarea><br />
				<input type="submit" name="submit" value="Καταχώρηση" class="submit-button" />
			</form>
		</div>
		<?php } ?>
	</div>
</div>