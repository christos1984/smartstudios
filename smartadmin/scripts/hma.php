<?php
		//Horizontal menu items that will look like this:
		//
		//Logged in as: Real Name (username) | My Profile | Log out
		//
		echo '<div align="right" style="margin-right:16px;float:right;" class="hma_style">';
		echo '<i>Συνδεδεμένος χρήστης:</i> '.$_SESSION['NOW_username'].' &nbsp;|&nbsp;';
		echo '<a href="main.php?action=edit_profile">Αλλαγή σύνθηματικού</a>&nbsp;|&nbsp;';
		echo '<a href="scripts/logout.php">Αποσύνδεση</a>';
		echo '</div>';
	
	?>