<?php
	//The edit_profile.php is very similar to the file edit_user.php
	$edit_id = $_SESSION['NOW_id'];
	
	//We connect to the database
	//We use a different file in order to ensure easy editing that will be applied to the whole CMS/website.
	require("global_vars.php");
	require("db_connect.php");
	
	//select the row that the user chose to edit
	$sql_edit_users = "SELECT * FROM users WHERE user_id=$edit_id";
	$query_edit_users = mysql_query($sql_edit_users) or die(mysql_error());
	while ($users_row = mysql_fetch_array($query_edit_users))
	{

	}
?>
<div class="create_style">Το προφίλ μου &rsaquo; Επεξεργασία προφίλ</div>
<br />
<form id="form1" autocomplete="off" name="edit_profile" action="scripts/update_profile.php" method="post">
	<input type="hidden" name="edit_id" value="<?php echo $edit_id; ?>" />
	<table border="0" cellpadding="0" cellspacing="2" width="700" class="hma_style">
		<tr>
			<td width="120" align="left"><b>Τρέχον συνθηματικό:</b>&nbsp;&nbsp;</td>
			<td width="300"><input id="oldpassword" name="oldpassword"  type="password"  class="long" maxlength="10" /></td>
			<td width="220" class="status"></td>

		</tr>
		<tr>
			<td width="120" align="left"><b>Νέο συνθηματικό:</b>&nbsp;&nbsp;</td>
			<td width="300"><input name="newpassword"  type="password" id="newpassword" class="long" maxlength="10" /></td>
			<td width="220" class="status"></td>

		</tr>
		<tr>
			<td width="120" align="left"><b>Νέο συνθηματικό (επιβεβαίωση):</b>&nbsp;&nbsp;</td>
			<td width="300"><input name="newpassword2" type="password" class="long" id="newpassword2" maxlength="10" /></td>
			<td width="220" class="status"></td>

		</tr>
		<!-- Of course, only the administrator is authorized to change the access level of a user. So, the user's access level option is disabled in this file -->
		
		<tr>
			<td width="120" align="right">&nbsp;</td>
			<td width="300" align="left"><input type="submit" name="submit" id="submits" value="edit*" /></td>
		</tr>
	</table>
</form>
<?php
	//We disconnect from the database
	require("db_disconnect.php");
?>