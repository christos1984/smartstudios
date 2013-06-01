<?php
	//continue the session...
	session_start();
	
	//check for non logged users
	if (!isset($_SESSION['NOW_id'])){
		header('Location: index.php?error_state=1');
	}
	//Initial values
	if(isset($_REQUEST['action']))
	{
		$actual_action = $_REQUEST['action'];
		$action_file = 'scripts/'.$_REQUEST['action'].'.php'; //create the file name that we will include later
	}else{
		$action_file = '';
		$actual_action = '';
	}
	
	if(isset($_REQUEST['validation']))
	{
		$validation = $_REQUEST['validation'];
		if ($validation)
		{
			$validation_message = "Επιτυχής ενέργεια!";
		}else{
			$validation_message = "ΣΦΑΛΜΑ εγγραφής στη βάση δεδομένων: Κενά πεδία, εσφαλμένες τιμές ή πρόβλημα σύνδεσης στην βάση.";
		}
		
	}else{
		$validation = "";
		$validation_message = "";
	}
	
	/*if (isset($_REQUEST['file_error']))
	{
		$file_error = $_REQUEST['file_error'];
		switch($file_error) //print the error
		{
			case 1: 
				$validation_message .= '<br />'."Μη επιτρεπτό μέγεθος αρχείου! Το αρχείο υπερβαίνει σε μέγεθος το επιτρεπτό όριο του php.ini!";
				break;
			case 2: 
				$validation_message .= '<br />'."Μη επιτρεπτό μέγεθος αρχείου! Το αρχείο υπερβαίνει σε μέγεθος το επιτρεπτό όριο του MAX_FILE_SIZE!";
				break;
			case 3: 
				$validation_message .= '<br />'."Σφάλμα μεταφοράς αρχείου!";
				break;
			case 4: 
				$validation_message .= '<br />'."Σφάλμα μεταφοράς αρχείου!";
				break;
		}
	}
	
	if (isset($_GET['searchvalue']))
	{
		$searchvalue = $_GET['searchvalue'];
	}else{
		$searchvalue = "";
	}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SMART STUDIOS | CMS</title>
<link type="text/css" rel="stylesheet" href="stylesheet.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/jquery.tinymce.js"></script>


<script type="text/javascript">
        $(function() {
                $('textarea.content').tinymce({
                        // Location of TinyMCE script
						
                        script_url : 'tinymce/jscripts/tiny_mce/tiny_mce.js',
						forced_root_block : "",
						force_p_newlines: false,
                        // General options
						language : "el",
						height : "480",
						width:"550",
                        theme : "advanced",
                        plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

                        // Theme options
                        theme_advanced_buttons1 : "code,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,fontsizeselect,fullscreen",
                        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor |,insertdate,inserttime,preview",
                        theme_advanced_toolbar_location : "top",
                        theme_advanced_toolbar_align : "left",
                        theme_advanced_statusbar_location : "bottom",
                        theme_advanced_resizing : true,

                        // Example content CSS (should be your site CSS)
                        content_css : "css/content.css",


                });
        });
</script>

<!-- SCRIPT: Dialogos OK/Cancel pou ton xrhsimopoioume gia na rotisoume an o xrhsths einai sigouros prin proxwrisei se diagrafi kapoias eggrafis. -->
<script Language="JavaScript">
<!--
function checkfields(form)
{
	if(confirm("Είστε σίγουρος για την διαγραφή;"))
		return true;
	else
		return false;
}
-->
</script>

<script type="text/javascript">

$().ready(function() {
	$("#form11").validate({
		errorLabelContainer: $("#form1 table td tr.error")
	});
});
</script>


<script type="text/javascript">
$(document).ready(function() {
	// validate signup form on keyup and submit
	var validator = $("#form1").validate({
		rules: {
			oldpassword: "required",
			newpassword: "required",
			newpassword2: {
				required: true,
				equalTo: "#newpassword"
			}},
		messages: {
			oldpassword: "Εισάγετε τρέχον κωδικό",
			newpassword: "Εισάγετε νέο κωδικό",
			newpassword2: {
				required: "Επαναλάβετε τον νέο κωδικό",
				minlength: jQuery.format("Enter at least {0} characters"),
				equalTo: "Οι 2 κωδικοί δεν είναι ίδιοι"
			},
			email: {
				required: "Please enter a valid email address",
				minlength: "Please enter a valid email address",
				remote: jQuery.format("{0} is already in use")
			},
			dateformat: "Choose your preferred dateformat",
			terms: " "
		},
		// the errorPlacement has to take the table layout into account
		errorPlacement: function(error, element) {
			if ( element.is(":radio") )
				error.appendTo( element.parent().next().next() );
			else if ( element.is(":checkbox") )
				error.appendTo ( element.next() );
			else
				error.appendTo( element.parent().next() );
		},

		// set this class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("checked");
		}
	});
});
</script>
</head>

<body>
<!-- The above function in the onLoad parameter will be used when the user selects 'Search' -->
	<div id="container">
		<!-- <div id="main_area"> -->
			<div id="header_area"></div>
			<div id="horizontal_menu_area">
				<?php include("scripts/hma.php"); ?>
			</div>
			<div id="left_menu_area">
				<?php include("scripts/cms_main_menu.php"); ?>
			</div>
			<div id="management_area">
				<?php 
					if (!$action_file)
					{
						echo "";
					}else{
						include($action_file); 
						echo '<br /><br /><div class="error_style" align="center">'.$validation_message.'</div><br /><br />';
					} 
				?>
	</div>
	<div id="footer_area" class="FooterFontStyle" align="center">
		&copy;2011 <br />SMART STUDIOS
	</div>
		<!-- </div> -->
	
</body>
</html>