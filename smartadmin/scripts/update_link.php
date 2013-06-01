<?php
	//continue the session...
	session_start();

	//check for non logged users
	if (!isset($_SESSION['NOW_id']))
		header('Location: index.php?error_state=1');
	
	//Get values from 'edit_article' form
	$inputed_title = addslashes($_POST['dealnamegr']);
	$inputed_title_en = addslashes($_POST['dealnameen']);
	$inputed_url = addslashes($_POST['urltitle']);
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
	
	if ( (empty($inputed_title)) || (empty($inputed_title_en)) || (empty($inputed_body)) || (empty($inputed_body_en)) || (empty($inputed_url))){
		$valid_entry_err = 1; //check for empty fields (which escaped javascript)
	}
	
	
	if (!$valid_entry_err){
			require("global_vars.php");
			require("db_connect.php");
			
			//We insert the article into the database
			$sql_insert_art = "UPDATE link_codes SET link_code_title='$inputed_title' WHERE link_code_id=$id";
			mysql_query($sql_insert_art) or die('error 1');
			$sql_insert_art = "UPDATE links SET link_title='$inputed_title',link_text='$inputed_body',link_url='$inputed_url' WHERE link_acc=$id AND lang_id=1";
			mysql_query($sql_insert_art) or die('error 1');
			
			
			
			$sql_insert_art = "UPDATE links SET link_title='$inputed_title_en',link_text='$inputed_body_en',link_url='$inputed_url' WHERE link_acc=$id AND lang_id=2";
			mysql_query($sql_insert_art) or die('error 2');
			$valid_entry = 1;			
		
		
			require("db_disconnect.php");
	}
	
	//Sending message to the user depending on the process validation
	header('Location: ../main.php?action=links&validation='.$valid_entry);
?>