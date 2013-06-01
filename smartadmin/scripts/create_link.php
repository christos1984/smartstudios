<?php 

	include("spaw2/spaw.inc.php"); 
	$spaw = new SpawEditor('article');
	// overwrite first page with meaningful caption and initial value
	$spaw->addPage(new SpawEditorPage("article","Ελληνικό κείμενο ")); 
	// add additional page for English translation
	$spaw->addPage(new SpawEditorPage("article_en","Αγγλικό κείμενο")); 
?>


<div class="create_style">Διαχείριση &rsaquo; Σύνδεσμοι &rsaquo; Δημιουργία συνδέσμου</div>
<br />
<form id="form11" name="create_article" action="scripts/insert_link.php" method="post">
	<input type="hidden" name="editor_id" value="<?php echo $_SESSION['NOW_id']; ?>" />
	<table border="0" cellpadding="0" cellspacing="2" width="700" class="">
		<tr>
			<td width="120" align="right"><b>Τίτλος:</b>&nbsp;&nbsp;</td>
			<td width="580"><input name="dealtitle" class="required long2" type="text" maxlength="150" /></td>
		</tr>
		<tr>
			<td width="120" align="right"><b>Τίτλος(Αγγλικά):</b>&nbsp;&nbsp;</td>
			<td width="580"><input name="dealtitleen" class="required long2" type="text" maxlength="150" /></td>
		</tr>
		<tr>
			<td width="120" align="right"><b>Διέυθυνση URL:</b>&nbsp;&nbsp;</td>
			<td width="580"><input name="urltitle" class="required long2" type="text" maxlength="150" /></td>
		</tr>
		<tr>
			<td width="120" align="right"><b>Κείμενο:</b>&nbsp;&nbsp;</td>
			<td> <textarea class="content" name="article"></textarea></td>
		</tr>
		<tr>
			<td width="120" align="right"><b>Κείμενο (Αγγλικά):</b>&nbsp;&nbsp;</td>
			<td> <textarea class="content" name="article_en"></textarea></td>
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