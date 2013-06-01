<div class="create_style">Διαχείριση &rsaquo; Προσφορές &rsaquo; Δημιουργία Προσφοράς</div>
<br />
<form id="form11" name="create_article" action="scripts/insert_deal.php" method="post">
	<input type="hidden" name="editor_id" value="<?php echo $_SESSION['NOW_id']; ?>" />
	<table border="0" cellpadding="0" cellspacing="2" width="670">
		<tr>
			<td width="120" align="right"></td>
			<td width="580" class="error"></td>
		</tr>
		<tr>
			<td width="120" align="right"><b>Τίτλος:</b>&nbsp;&nbsp;</td>
			<td width="580"><input title="Παρακαλώ εισάγετε ελληνικό τίτλο" name="dealtitle" class="required long2" type="text" maxlength="150" /></td>
		</tr>
		<tr>
			<td width="120" align="right"><b>Κείμενο:</b>&nbsp;&nbsp;</td>
			<td width="580"> <textarea name="article" class="content"></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td width="120" align="right"><b>Τίτλος(Αγγλικά):</b>&nbsp;&nbsp;</td>
			<td width="550"><input name="dealtitleen" title="Παρακαλώ εισάγετε αγγλικό τίτλο" class="required long2" type="text"  maxlength="150" /></td>
		</tr>
		<tr>
			<td width="120" align="right"><b>Κείμενο(Αγγλικά):</b>&nbsp;&nbsp;</td>
			<td width="580"> <textarea name="article_en" class="content"></textarea></td>
		</tr>
		<?php


				echo '
				<tr>
					<td width="120" align="right">&nbsp;</td>
					<td width="580" align="left"><input type="submit" name="submit" id="submits" value="create*" /></td>
				</tr>';
			
		?>
		</table>
		<div class="error"></div>
</form>