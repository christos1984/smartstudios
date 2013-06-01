<?php
	//continue the session...
	session_start();
	
	//check for non logged users
	if (!isset($_SESSION['NOW_id']))
		header('Location: index.php?error_state=1');
		
	//Get values from 'create_user' form
	$old_pw = $_POST['oldpassword'];
	$new_pw = $_POST['newpassword'];
	$new_pw2 = $_POST['newpassword2'];
	$id = $_POST['edit_id'];
	
	$valid_entry = 1; //starting value of the process validation
	
	//We connect to the database
	//We use a different file in order to ensure easy editing that will be applied to the whole CMS/website.
	require("global_vars.php");
	require("db_connect.php");
	require("PasswordHash.php");
	
	$pwdHasher = new PasswordHash(8, FALSE);
	
	//Check username and password
	$sql = "SELECT * FROM users WHERE user_id='$id'";
	$query = mysql_query($sql) or die(mysql_error());
	$result = mysql_fetch_array($query);
	
	$pwd = $result['user_pw'];
	if ($pwdHasher->CheckPassword($old_pw, $pwd)) {
		$found = 1;	
	} else {
		header('Location: ../main.php?action=edit_profile&validation=0');
	}
	
	
	if (($found) && (!empty($new_pw)) && (!empty($new_pw)) && ($new_pw==$new_pw2)) {
		require("PasswordHash.php");
		
		$pwdHasher = new PasswordHash(8, FALSE);
		$hash = $pwdHasher->HashPassword($new_pw);
		$hash_sql = "user_pw='".$hash."'";
	}else{
		$hash_sql = '';
	}

	$sql_update_user = "UPDATE users SET ".$hash_sql." WHERE user_id=$id";
	if (mysql_query($sql_update_user) or die(mysql_error()))
	{
		$valid_entry = 1;
	}else{
		$valid_entry = 0;
	}
	
	//We disconnect from the database
	require("db_disconnect.php");
	
	//Sending message to the user depending on the process validation
	header('Location: ../main.php?action=start&validation='.$valid_entry);
?>