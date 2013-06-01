<?php	
    if (isset($_POST['submit'])) {
		if ($_POST['human'] != null) {die ("Spam");}

        if ($_POST['Name'] != "") {
            $_POST['Name'] = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
            if ($_POST['Name'] == "") {
                @$errors .= 'Παρακαλώ εισάγετε όνομα.<br/>';
            }
        } else {
            @$errors .= 'Παρακαλώ εισάγετε όνομα.<br/>';
        }

        if ($_POST['Email'] != "") {
            $email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                @$errors .= "Οχι έγκυρο email.<br/>";
            }
        } else {
            @$errors .= 'Παρακαλώ εισάγετε email.<br/>';
        }

        if ($_POST['Subject'] != "") {
            $subject = filter_var($_POST['Subject'], FILTER_SANITIZE_STRING);
            if ($_POST['Subject'] == "") {
                @$errors .= "$Παρακαλώ εισάγετε έγκυρο θέμα.<br/>";
            }
        } else {
            @$errors .= 'Παρακαλώ εισάγετε θέμα.<br/>';
        }

        if ($_POST['Message'] != "") {
            $_POST['Message'] = filter_var($_POST['Message'], FILTER_SANITIZE_STRING);
            if ($_POST['Message'] == "") {
                @$errors .= 'Παρακαλώ εισάγετε μήνυμα.<br/>';
            }
        } else {
            @$errors .= 'Παρακαλώ εισάγετε μήνυμα.<br/>';
        }

        if (@!$errors) {
			$finalurl = $_POST['ke'] . "&validation=1"; 
			$charset="UTF-8";
            $mail_to = 'christos1984@gmail.com';
            $email = $_POST['Email'];
			$name=$_POST['Name'];
			$subject=$_POST['Subject'];
			$snd_name_addr_enc = "=?$charset?B?".base64_encode($name)."?=".
                       " <".$email.">";
			$subject = "=?$charset?B?". base64_encode($subject) . '?=';
			$output = $_POST['Message'];
			$hdrs = "From: ".$snd_name_addr_enc."\n".
          "MIME-Version: 1.0\n". 
          "Content-Type: text/plain; charset=$charset; format=flowed\n".
          "Content-Transfer-Encoding: 8bit\n". 
          "Message-ID: <".md5(uniqid(time()))."@{$_SERVER['SERVER_NAME']}>\n".
          "X-Mailer: PHP/".phpversion(); 

            mail($mail_to, $subject, $output, $hdrs);

			$host  = $_SERVER['HTTP_HOST'];
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra = 'index.php';

        } else {
		$finalurl = $_POST['ke'] . "&validation=0";

        }
		header("Location: http://localhost/smartstudios/index.php?$finalurl");
    }
?>