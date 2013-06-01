<?php
	include("spaw2/spaw.inc.php"); 
	
	if(isset($_REQUEST['id'])){
		$edit_id = $_REQUEST['id'];
	}else{
		header('Location: index.php?error_state=1');
	}
	//We connect to the database
	//We use a different file in order to ensure easy editing that will be applied to the whole CMS/website.
	require("global_vars.php");
	require("db_connect.php");
	$spaw = new SpawEditor('article');	
	
	
	//select the row that the user chose to edit
	$sql_edit_article = "SELECT * FROM links WHERE link_acc=$edit_id AND lang_id='1'";
	$query_edit_article = mysql_query($sql_edit_article) or die(mysql_error());
	if (mysql_num_rows($query_edit_article)){
		while ($article_row = mysql_fetch_array($query_edit_article))
		{
			$edit_title = stripslashes($article_row['link_title']);
			$edit_text = stripslashes($article_row['link_text']);
		}
		$spaw->addPage(new SpawEditorPage("article","Ελληνικό κείμενο ",$edit_text)); 
	}
	else $spaw->addPage(new SpawEditorPage("article","Ελληνικό κείμενο "));

	
	$sql_edit_article2 = "SELECT * FROM links WHERE link_acc=$edit_id AND lang_id='2'";
	$query_edit_article2 = mysql_query($sql_edit_article2) or die(mysql_error());
	if (mysql_num_rows($query_edit_article2)){
		while ($article_row2 = mysql_fetch_array($query_edit_article2))
		{
			$edit_title_en = stripslashes($article_row2['link_title']);
			$edit_text_en = stripslashes($article_row2['link_text']);
			$edit_url = stripslashes($article_row2['link_url']);
		}
		$spaw->addPage(new SpawEditorPage("article_en","Αγγλικό κείμενο",$edit_text_en)); 
	}
	else $spaw->addPage(new SpawEditorPage("article_en","Αγγλικό κείμενο")); 	
?>
<div class="create_style">Διαχείριση &rsaquo; Σύνδεσμοι &rsaquo; Επεξεργασία συνδέσμου</div>
<br />
<form id="form11" name="edit_article" action="scripts/update_link.php" method="post">
	<input type="hidden" name="edit_id" value="<?php echo $edit_id; ?>" />
	<table border="0" cellpadding="0" cellspacing="2" width="700" class="">
		<tr>
			<td width="120" align="right"><b>Τίτλος:</b>&nbsp;&nbsp;</td>
			<td width="580"><input name="dealnamegr" class="required long2" type="text" maxlength="150" value="<?php if (!empty($edit_title)) echo $edit_title; ?>" /></td>
		</tr>
		<tr>
			<td width="120" align="right"><b>Τίτλος(Αγγλικά):</b>&nbsp;&nbsp;</td>
			<td width="580"><input name="dealnameen" class="required long2" type="text" maxlength="150" value="<?php if (!empty($edit_title_en)) echo $edit_title_en; ?>" /></td>
		</tr>
		<tr>
			<td width="120" align="right"><b>Διεύθυνση:</b>&nbsp;&nbsp;</td>
			<td width="580"><input name="urltitle" class="required long2" type="text" maxlength="150" value="<?php if (!empty($edit_url)) echo $edit_url; ?>" /></td>
		</tr>
		<tr>
			<td width="120" align="right"><b>Κείμενο:</b>&nbsp;&nbsp;</td>
			<td> <textarea class="content" name="article"><?php echo $edit_text; ?></textarea></td>
		</tr>
		<tr>
			<td width="120" align="right"><b>Κείμενο(Αγγλικά):</b>&nbsp;&nbsp;</td>
			<td> <textarea class="content" name="article_en"><?php echo $edit_text_en;?></textarea></td>
		</tr>
		<!--<tr>
			<td width="120" align="right"><b>Γλώσσα:</b>&nbsp;&nbsp;</td>
			<td width="580">
			<select name="language" id="visible_style">
			  <?php 				
				//$sql_language_listing = "SELECT * FROM languages ORDER BY LANG_ID";
				//$query_language_listing = mysql_query($sql_language_listing) or die(mysql_error());
				//while ($result = mysql_fetch_array($query_language_listing))
				//{
					//if ($edit_language != $result['LANG_ID'])
					//{
					//	echo ' <option value="'.$result['LANG_ID'].'">'.$result['LANG_DESC'].'</option>';
					//}else{
				//		echo ' <option value="'.$result['LANG_ID'].'" selected="selected">'.$result['LANG_DESC'].'</option>';
				//	}
			//	}
				
			  ?>
			</select>
			</td>
		</tr>-->
		<tr>
			<td width="120" align="right">&nbsp;</td>
			<td width="580" align="left"><input type="submit" name="submit" id="submits" value="edit*" /></td>
		</tr>
	</table>
	<div class="error"></div>
</form>
<?php
	//We disconnect from the database
	require("db_disconnect.php");
?>