<?php
	//continue the session...
	session_start();

	//check for non logged users
	if (!isset($_SESSION['NOW_id']))
		header('Location: index.php?error_state=1');
	
	//Get values from 'edit_article' form
	$inputed_title = addslashes($_POST['dealnamegr']);
	$inputed_title_en = addslashes($_POST['dealnameen']);
	$inputed_body = addslashes($_POST['article']);
	$inputed_body_en = addslashes($_POST['article_en']);
	$id = $_POST['edit_id'];
	
	if (preg_match('/^<br(\s\/)?>(\r?\n)?$/i', $inputed_title))
	{   $inputed_title = '';   }   // FireFox Fix
	if (preg_match('/^<br(\s\/)?>(\r?\n)?$/i', $inputed_title_en))
	{   $inputed_title_en = '';   }   // FireFox Fix
	if (preg_match('/^<br(\s\/)?>(\r?\n)?$/i', $inputed_body))
	{   $inputed_body = '';   }   // FireFox Fix
	if (preg_match('/^<br(\s\/)?>(\r?\n)?$/i', $inputed_body_en))
	{   $inputed_body_en = '';   }   // FireFox Fix
	
	if ( (empty($inputed_body)) || (empty($inputed_body_en))){
		$valid_entry_err = 1; //check for empty fields (which escaped javascript)
	}
	
	
	if (!$valid_entry_err){
			require("global_vars.php");
			require("db_connect.php");
			$date_added = date("Y-m-d H:i:s");
			//We insert the article into the database
			//$sql_insert_art = "UPDATE news_codes SET deal_code_title='$inputed_title' WHERE deal_code_id=$id";
			//mysql_query($sql_insert_art) or die('error 1');
			$sql_insert_art = "UPDATE news SET news_text='$inputed_body' WHERE news_acc=$id AND lang_id=1";
			mysql_query($sql_insert_art) or die('error 1');
			
			
			
			$sql_insert_art = "UPDATE news SET news_text='$inputed_body_en' WHERE news_acc=$id AND lang_id=2";
			mysql_query($sql_insert_art) or die('error 2');
			$valid_entry = 1;			
		
		
			require("db_disconnect.php");
	}
	
	//Sending message to the user depending on the process validation
	header('Location: ../main.php?action=news&validation='.$valid_entry);
?>