<?php
	//continue the session...
	session_start();
	
	//check for non logged users
	if (!isset($_SESSION['NOW_id']))
		header('Location: index.php?error_state=1');
	
	//We get the id we want to delete
	if(isset($_REQUEST['id']))
	{
		$id = $_REQUEST['id'];
	}else{
		header('Location: index.php?error_state=1');
	}
	
	//We connect to the database
	//We use a different file in order to ensure easy editing that will be applied to the whole CMS/website.
	require("global_vars.php");
	require("db_connect.php");
	

	
	$sql_delete = "DELETE FROM link_codes WHERE link_code_id=$id";
	$result = mysql_query($sql_delete) or die("MySQL ERROR: ".mysql_error());
	if ($result)
	{
		$valid_entry = 1;
	}else{
		$valid_entry = 0;
	}
	
	//We disconnect from the database
	require("db_disconnect.php");
	
	//Update RSS XML
	include("export_rss_xml.php");
	
	//Sending message to the user depending on the process validation
	header('Location: ../main.php?action=links&validation='.$valid_entry);
?>