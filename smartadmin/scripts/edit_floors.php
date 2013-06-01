<?php 
if(isset($_REQUEST['err'])){
	
}

$myFile = "scripts/wkp_gr.txt";
$fh = fopen(@$myFile, 'r');
$i=1;
while(! feof($fh))
  {
  $lines[$i] = fgets($fh). "<br />";
  $i++;
  }

fclose($fh);
$myFile2 = "scripts/wkp_en.txt";
$fh2 = fopen(@$myFile2, 'r');
$i=1;
while(! feof($fh2))
  {
  $lines2[$i] = fgets($fh2). "<br />";
  $i++;
  }

fclose($fh2)

?>
<div class="create_style">Διαχείριση &rsaquo; Επεξεργασία διαθεσιμότητας</div>
<br /><br />
<div align="center" class="create_style"> William King Project </div>
<br />
<?php

	if (@!fopen($myFile, 'r'))
	{
		echo '<div align="center">Το αρχείο διαθεσιμότητας δεν βρέθηκε</div>';
	}else{
		echo '<table width="500" border="0" cellpadding="0" cellspacing="2" align="center">';
		//first, print the titles
		echo '<tr class="listing_titles">
				<td width="185" height ="18" valign="middle" align="center" id="style2">Περιγραφή</td>
				<td width="60" height ="18" valign="middle" align="center" id="style2">Διαθέσιμα <br/>studios</td>
				<td width="60" height ="18" valign="middle" align="center" id="style2">Επεξεργασία</td>
			  </tr>';
			  for ($i=1;$i<=sizeof($lines);$i++){
				echo '<tr class="listing_results">
				<form name="avail" method="POST" action="scripts/edit_avail.php">
					<td width="185" align="center" valign="middle" id="style1">'.trim($lines[$i]).'</td>
					<td width="60" align="center" valign="middle" id="style1"><input type="text" name="avail" size="1" maxlength="1"></td>
					<td width="60" align="center" valign="middle" id="style1"><input type="submit" name="submit" id="submits" value="edit" /></td>
					<input type="hidden" name="lin" value="'.$i.'"></input>
				  </tr></form>';
				  
				   }		  
		}
		echo '</table>';
		
	
?>
