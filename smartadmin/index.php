<?php
	//Initial values to check wrong values in the log-in form
	
	if(isset($_REQUEST['error_state'])){
		$error_state =$_REQUEST['error_state'];
	}else{
		$error_state=0;	
	}
	//create the error message
	if ($error_state)
	{
		$error_msg = "Λάνθασμένο όνομα χρήστη ή/και συνθηματικό.";
	}else{
		$error_msg = "";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SMART STUDIOS | CMS</title>
<link type="text/css" rel="stylesheet" href="stylesheet.css" media="screen" />
</head>
<body>
	<div id="container">
		<div id="main_area">
			<div id="header_area"></div>
			<div id="contents_area">
				<div align="center" class="hma_style">
					Καλωσήρθατε στο <b>Σύστημα Διαχείρησης SMART STUDIOS</b> CMS!<br /><br />
					Εισάγετε το όνομα χρήστη και το συνθηματικό σας για να συνεχίσετε:<br /><br /><br />
					<form action="scripts/checkpassword.php" method="post" name="Log-in Form">
						<table border="0" cellpadding="0" cellspacing="2" width="200" class="hma_style">
						<tr>
							<td width="100" align="right"><b>Username:</b>&nbsp;&nbsp;</td>
							<td width="100"><input name="cmsun" type="text" id="short" maxlength="100" /></td>
						</tr><tr>
							<td width="100" align="right"><b>Password:</b>&nbsp;&nbsp;</td>
							<td width="100"><input name="cmspw" type="password" id="short" maxlength="100" width="100" /></td>
						</tr><tr>
							<td width="100">&nbsp;</td>
							<td width="100" align="right"><input type="submit" name="submit" id="submits" value="log in*" /></td>
						</tr>
						</table>
					</form>
				</div>
				<div class="error_style" align="center">
					<?php /*print log-in error*/ echo $error_msg; ?>
				</div>
			</div>
			<div id="footer_area" class="FooterFontStyle" align="center">
				&copy;2011 <br />SMART STUDIOS 
			</div>
		</div>
	</div>
</body>
</html>