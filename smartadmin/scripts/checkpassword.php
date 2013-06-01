<?php 

	//Get values from log in form
	$inputed_username = $_POST['cmsun'];
	$inputed_password = $_POST['cmspw'];
	
	//We connect to the database
	//We use a different file in order to ensure easy editing that will be applied to the whole CMS/website.
	require("global_vars.php");
	require("db_connect.php");
	require("PasswordHash.php");
	
	$pwdHasher = new PasswordHash(8, FALSE);
	$hash = $inputed_password;

	//Check username and password
	$sql = "SELECT * FROM users WHERE user_un='$inputed_username'";
	$query = mysql_query($sql) or die(mysql_error());
	$result = mysql_fetch_array($query);
	
	$pwd = $result['user_pw'];
	if ($pwdHasher->CheckPassword($hash, $pwd)) {
		$what = TRUE;
		
	} else {
		$what = false;
	}

	
	//We check if the inputed username and password exist and are both correct
	//If the inputed values are correct, then we proceed to the main.php file where the user gains access to the CMS.
	//Else, the user is automatically redirected to the initial log-in screen; this time with an indication that he/she has inputed wrong data.
	if ($what)
	{
		//Before proceeding, we open a session to store useful data about the user
		session_start();
		$_SESSION['NOW_id'] = $result['user_id'];
		$_SESSION['NOW_username'] = $result['user_un'];
		
		//update the user's record with his last login
		$now = date("Y-m-d");
		$thisone = $_SESSION['NOW_id'];

		//and then we redirect the user to the CMS
		header('Location: ../main.php?action=start');
	}else{
		header('Location: ../index.php?error_state=1');
	}
	
	//We disconnect from the database
	require("db_disconnect.php");
?>