<?php
	//We close the session and unset all session variables
	session_start();
	unset($_SESSION['NOW_id']);
	unset($_SESSION['NOW_username']);
	session_destroy();
	
	//and then, the user is redirected to the initial log-in screen
	header('Location: ../index.php')
?>