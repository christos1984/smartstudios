<?php 
//getting the $_POST variable of the line that we want to edit
$edit_line = $_POST['lin'];
$availability = $_POST['avail'];

if ((!empty($availability) || $availability == '0') && (is_numeric($availability))){
	
//opening the availability files
$myFileGr = "wkp_gr.txt";
$myFileEn = "wkp_en.txt";

//generating the line counts
//for greek
$fhGr = fopen(@$myFileGr, 'r');
$i=1;
while(! feof($fhGr))
{
  $linesGr[$i] = fgets($fhGr);
  $i++;
}
//for English
$fhEn = fopen(@$myFileEn, 'r');
$i=1;
while(! feof($fhEn))
{
  $linesEn[$i] = fgets($fhEn);
  $i++;
}

switch ($edit_line) {
	case '1':
		$linesGrBack = $linesGr[1];
		$linesEnBack = $linesEn[1];
		$linesGr[$edit_line] = "4ος όροφος: ".$availability."/2 διαθέσιμα\r\n";
		$linesEn[$edit_line] = "4th floor: ".$availability."/2 available\r\n";
		break;
	case '2':
		$linesGrBack = $linesGr[2];
		$linesEnBack = $linesEn[2];
		$linesGr[$edit_line] = "3ος όροφος: ".$availability."/4 διαθέσιμα\r\n";
		$linesEn[$edit_line] = "3th floor: ".$availability."/4 available\r\n";
		break;
	case '3':
		$linesGrBack = $linesGr[3];
		$linesEnBack = $linesEn[3];
		$linesGr[$edit_line] = "2ος όροφος: ".$availability."/4 διαθέσιμα\r\n";
		$linesEn[$edit_line] = "2th floor: ".$availability."/4 available\r\n";
		break;
	case '4':
		$linesGrBack = $linesGr[4];
		$linesEnBack = $linesEn[4];
		$linesGr[$edit_line] = "1ος όροφος: ".$availability."/4 διαθέσιμα\r\n";
		$linesEn[$edit_line] = "1th floor: ".$availability."/4 available\r\n";
		break;
	case '5':
		$linesGrBack = $linesGr[5];
		$linesEnBack = $linesEn[5];
		$linesGr[$edit_line] = "Ισόγειο: ".$availability."/4 διαθέσιμα\r\n";
		$linesEn[$edit_line] = "Ground floor: ".$availability."/4 available\r\n";
		break;
	case '6':
		$linesGrBack = $linesGr[6];
		$linesEnBack = $linesEn[6];
		$linesGr[$edit_line] = "Υπόγειο: ".$availability."/1 διαθέσιμα";
		$linesEn[$edit_line] = "Semi basement: ".$availability."/1 available";
		break;
}

//replacing the line in Greek
$linee = file($myFileGr);
$all_lines = implode('',$linee);
$entry = str_replace($linesGrBack,$linesGr[$edit_line],$all_lines);
$fp = fopen($myFileGr,'w');
$fw = fwrite($fp,$entry);
fclose($fp);

//doing the same for English
$linee = file($myFileEn);
$all_lines = implode('',$linee);
$entry = str_replace($linesEnBack,$linesEn[$edit_line],$all_lines);
$fp = fopen($myFileEn,'w');
$fw = fwrite($fp,$entry);
fclose($fp);

//closing availability files
fclose($fhGr);
fclose($fhEn);

header("Location:../main.php?action=edit_floors");
}
else { header("Location:../main.php?action=edit_floors&validation=0");
}
?>
