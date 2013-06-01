<?php
	//continue the session...
	session_start();
	
	//check for non logged users
	if (!isset($_SESSION['NOW_id']))
		header('Location: index.php?error_state=1');
		
	//Get values from 'create_article' form
	$inputed_title = addslashes($_POST['dealtitle']);
	//$inputed_title_en = addslashes($_POST['dealtitleen']);
	$inputed_body = addslashes($_POST['article']);
	$inputed_body_en = addslashes($_POST['article_en']);
	//$inputed_language = $_POST['language'];
	
	if (preg_match('/^<p(\s\/)?>(\r?\n)?$/i', $inputed_title))
	{   $inputed_title = '';   }   // FireFox Fix
	
	if (preg_match('/^<p(\s\/)?>(\r?\n)?$/i', $inputed_body))
	{   $inputed_body = '';   }   // FireFox Fix
	if (preg_match('/^<p(\s\/)?>(\r?\n)?$/i', $inputed_body_en))
	{   $inputed_body_en = '';   }   // FireFox Fix
	
	//generate the fields: date added
	//same dates and users since the article is now being created
	$date_added = date("Y-m-d H:i:s");
	$valid_entry=0;
	$valid_entry_gr = 1; //starting value of the process validation
	$valid_entry_en = 1; //starting value of the process validation
	$valid_entry_err = 0; //starting value of the process validation

	if ( (empty($inputed_body)) || (empty($inputed_body_en))){
		$valid_entry_err = 1; //check for empty fields (which escaped javascript)
	}
	
	
	if (!$valid_entry_err){
			require("global_vars.php");
			require("db_connect.php");
			//if (empty($inputed_title)) {
				//$inputed_title = $inputed_title_en;
			//}
			$sql_insert_art = "INSERT INTO news_codes (news_code_id,news_date) VALUES ('','$date_added')";
			mysql_query($sql_insert_art);
			$sql_article_listing = "SELECT * FROM news_codes";	
			$query_article_listing = mysql_query($sql_article_listing) or die(mysql_error());
			$art_rows = mysql_num_rows($query_article_listing);
			while ($result = mysql_fetch_array($query_article_listing)){ $deal_acc = $result['news_code_id']; } 
			
			
				//We insert the article into the database
				$sql_insert_art = "INSERT INTO news (news_id,news_acc,news_text,news_date,lang_id) VALUES ('','$deal_acc','$inputed_body','$date_added','1')";
				mysql_query($sql_insert_art) or die('error 1');
			
			
			
				$sql_insert_art = "INSERT INTO news (news_id,news_acc,news_text,news_date,lang_id) VALUES ('','$deal_acc','$inputed_body_en','$date_added','2')";
				mysql_query($sql_insert_art) or die('error 2');
				$valid_entry = 1;
			
		
		
			require("db_disconnect.php");
	}
	
	//Sending message to the user depending on the process validation
	header('Location: ../main.php?action=news&validation='.$valid_entry);

	
		
				
	/*
	//We connect to the database
	//We use a different file in order to ensure easy editing that will be applied to the whole CMS/website.
	require("global_vars.php");
	require("db_connect.php");
	
	if (!empty($inputed_body) || !empty($inputed_body_en)){
		$sql_insert_art = "INSERT INTO deal_codes (deal_code_id,deal_code_title,deal_date) VALUES ('','$inputed_title','$date_added')";
		mysql_query($sql_insert_art);
	}
	
	if ($valid_entry_3){
			$sql_article_listing = "SELECT * FROM deal_codes";	
			$query_article_listing = mysql_query($sql_article_listing) or die(mysql_error());
			$art_rows = mysql_num_rows($query_article_listing);
			while ($result = mysql_fetch_array($query_article_listing)){ $deal_acc = $result['deal_code_id']; } 
		if (!empty($inputed_body)){
			//We insert the article into the database
			$sql_insert_art = "INSERT INTO deals (deal_id,deal_acc,deal_title,deal_text,lang_id) VALUES ('','$deal_acc','$inputed_title','$inputed_body','1')";
			mysql_query($sql_insert_art) or die('error 1');
			$valid_entry_1 = 1;
		}
		if (!empty($inputed_body_en)){
			//We insert the article into the database
			$sql_insert_art = "INSERT INTO deals (deal_id,deal_acc,deal_title,deal_text,lang_id) VALUES ('','$deal_acc','$inputed_title_en','$inputed_body_en','2')";
			mysql_query($sql_insert_art) or die('error 2');
			$valid_entry_1 = 1;
		}
	}
	//We disconnect from the database
	require("db_disconnect.php");
	
	//Sending message to the user depending on the process validation
	header('Location: ../main.php?action=articles&validation='.$valid_entry);
	//*/
?>