<div class="create_style">Διαχείριση &rsaquo; Προσφορές</div>
<br />
<?php
	//We connect to the database
	//We use a different file in order to ensure easy editing that will be applied to the whole CMS/website.
	require("global_vars.php");
	require("db_connect.php");
	date_default_timezone_set('Europe/Athens');
	//start by putting the 'Create new article' button
	echo '<a href="main.php?action=create_deal"><img src="images/create_new_01.jpg" border="0" title="Δημιουργία προσφοράς" /></a><br /><br />';
	
	//list all the existing articles, depending on the user's access level

	$sql_article_listing = "SELECT * FROM deal_codes ORDER BY deal_date DESC";	
	$query_article_listing = mysql_query($sql_article_listing) or die(mysql_error());
	$art_rows = mysql_num_rows($query_article_listing);

	if (!$art_rows)
	{
		echo '<div align="center">Δεν υπάρχουν προσφορές</div>';
	}else{
		echo '<table width="500" border="0" cellpadding="0" cellspacing="2" align="center">';
		//first, print the titles
		echo '<tr class="listing_titles">
				<td width="185" height ="18" valign="middle" align="center" id="style2">Τίτλος</td>
				<td width="30" height ="18" valign="middle" align="center" id="style2">Ημερομηνία</td>
				<td width="60" height ="18" valign="middle" align="center" id="style2">Edit</td>
				<td width="60" height ="18" valign="middle" align="center" id="style2">Delete</td>
			  </tr>';
		//then, print the database rows
		while ($result = mysql_fetch_array($query_article_listing))
		{
			//create the links of the EDIT and DELETE buttons
				$edit_button = '<a href="main.php?action=edit_deal&id='.$result['deal_code_id'].'"><img src="images/edit.jpg" border="0" title="" /></a>';
				$delete_button = '<a href="scripts/delete_deal.php?id='.$result['deal_code_id'].'" onclick="return checkfields(this);"><img src="images/del.jpg" border="0" title="" /></a>';
			
			
			//get the name of the article's category
			//$art_cat = $result['deal_id'];
			//$sql_cat = "SELECT * FROM categories WHERE CAT_ID='$art_cat'";
			//$query_cat = mysql_query($sql_cat) or die(mysql_error());
			//$art_cat_row = mysql_fetch_array($query_cat);
			//$art_cat = stripslashes($art_cat_row['CAT_NAME']);
			
			//Generate 'Date' value
			$date = $result['deal_date'];
			//create the table row
			echo '<tr class="listing_results">
					<td width="185" align="center" valign="middle" id="style1">'.stripslashes($result['deal_code_title']).'</td>
					<td width="30" align="center" valign="middle" id="style1">'.date("d-m-Y H:i:s",strtotime($date)).'</td>
					<td width="60" align="center" valign="middle" id="style1">'.$edit_button.'</td>
					<td width="60" align="center" valign="middle" id="style1">'.$delete_button.'</td>
				  </tr>';
		}
		echo '</table>';
	}
	
	//We disconnect from the database
	require("db_disconnect.php");
	
?>