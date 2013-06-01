<style type="text/css">
.jspVerticalBar
{
	left: 0;
}
.jspVerticalBar .jspCap
{
	height: 20px;
}
.jspCap
{
	display: block;
	background:transparent;
}

.jspVerticalBar .jspCap
{
	height: 20px;
}

.jspHorizontalBar .jspCap
{
	width: 20px;
	height: 100%;
}

</style>

<div id="left_text_st" class="desctext2">
	<div class="scroll-pane2" style="height:440px;margin-top:15px;">
		Ο προσωπικός χώρος μελέτης, ύπνου και ξεκούρασης, διαθέτει γραφείο
		μελέτης, Ενσύρματο Internet 24Mbps Conn-X, Αυτόνομη οικονομικά ρυθμιζόμενη
		θέρμανση, Air Condition, Τηλεόραση Flat 20 ιντσών, Μεγάλο μπαλκόνι και
		όλα τα ουσιώδη για την κάλυψη των καθημερινών φοιτητικών αναγκών.
		Επίσης η κουζίνα του κάθε Studio στο οποίο θα μπορούν να συγκατοικούν
		έως και δύο φοιτητές διαθέτει εντοιχισμένες ηλεκτρικές συσκευές, Ψυγείο,
		Φούρνο, Ηλεκτρικά Μάτια, Απορροφητήρα και Κουζινικά Σκεύη.
		<br/><br/>	
		<div><b>
        ΣΥΓΚΑΤΟΙΚΗΣΗ/
		ΕΝΟΙΚΙΑ:</b></div><br/>
		Tα μηνιαία μισθώματα ξεκινούν από πολύ χαμηλές τιμές, ιδιαίτερα σε περίπτωση συγκατοίκησης, 
		και μπορούν να γίνουν ακόμα πιο χαμηλές στην περίπτωση που κάποιος φοιτητής έχει πάρει κάποιο από τα πακέτα <a href="<?php echo add_or_change_parameter("page", "deals"); ?>">"Smart-Deal"</a><br/><br/>	
		<div><b>
		 ΠΡΟΫΠΟΘΕΣΕΙΣ ΕΝΟΙΚΙΑΣΗΣ:</b></div><br/>
		Έγγραφη συναίνεση και εγγύηση του κηδεμόνα του φοιτητή.
		Για την καλή διεκπαιρέωση των όρων της μισθωτικής σύμβασης εγγύηση
		αντίστοιχη δύο μηνιαίων ενοικίων.
		Κατάσταση επίπλων και ηλεκτρικών συσκευών που παραλαμβάνει ο
		ενοικιαστής δια την καλή τους χρήση.
	</div>
</div>

<?php
//Include of text file that manages the available rooms - Change the wpk.txt content to edit availability //
//--------------------------------------------------------------------------------------------------------//
@$lines = file('includes/wpk_gr.txt');
$l_count = count($lines); ?>

<div style="float:left;margin-top:5px;margin-bottom:10px;margin-left:3px;font-family:Arial;font-size:10px;" class="b">
	<div id="building">
		<table width="194" border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td valign="top" height="85" style="background-image:url(images/floors/orofoi_william.jpg)"><div style="padding:5px 0 0 5px;"><?php echo $lines[0]; ?></div></td>
			</tr>
			<tr>
				<td valign="top" height="85" style="background-image:url(images/floors/orofoi_william.jpg)"><div style="padding:5px 0 0 5px;"><?php echo $lines[1]; ?></div></td>
			</tr>
			<tr>
				<td valign="top" height="85" style="background-image:url(images/floors/orofoi_william.jpg)"><div style="padding:5px 0 0 5px;"><?php echo $lines[2]; ?></div></td>
			</tr>
			<tr>
				<td valign="top" height="85" style="background-image:url(images/floors/orofoi_william.jpg)"><div style="padding:5px 0 0 5px;"><?php echo $lines[3]; ?></div></td>
			</tr>
				<td height="85" style="background-image:url(images/floors/isogio_william.jpg)"><div style="padding:38px 0 0 5px;"><?php echo $lines[4]; ?></div></td>
			</tr>
			<tr>
				<td height="44" style="background-image:url(images/floors/ipogio_william.jpg)"><div style="padding:5px 0 0 5px;"><?php echo $lines[5]; ?></div></td>
			</tr>
		</table>
	</div>
	
	<div id="floorselect"> <!-- images of floors next to the appropriate building floor -->
		<div style="height:85px;width:30px">
			<img style="display:block;padding-bottom:4px;" src="images/floors/4A.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/4A.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/4A_over.jpg';" onclick="changer('images/floors/4A_greek.jpg');" />
			<img style="display:block" src="images/floors/4B.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/4B.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/4B_over.jpg'" onclick="changer('images/floors/4B_greek.jpg');" />
		</div>
		<div style="height:85px;width:30px">
			<img style="display:block;padding-bottom:4px;" src="images/floors/3A.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/3A.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/3A_over.jpg'" onclick="changer('images/floors/3A_greek.jpg');" />
			<img style="display:block" src="images/floors/3B.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/3B.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/3B_over.jpg'" onclick="changer('images/floors/3B_greek.jpg');" />
		</div>
		<div style="height:85px;width:30px">
			<img style="display:block;padding-bottom:4px;" src="images/floors/2A.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/2A.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/2A_over.jpg'" onclick="changer('images/floors/2A_greek.jpg');"  />
			<img style="display:block" src="images/floors/2B.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/2B.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/2B_over.jpg'" onclick="changer('images/floors/2B_greek.jpg');"  />
		</div>
		<div style="height:85px;width:30px">
			<img style="display:block;padding-bottom:4px;" src="images/floors/1A.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/1A.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/1A_over.jpg'" onclick="changer('images/floors/1A_greek.jpg');"  />
			<img style="display:block" src="images/floors/1B.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/1B.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/1B_over.jpg'" onclick="changer('images/floors/1B_greek.jpg');"  />
		</div>
		<div style="height:85px;width:30px">
			<img style="display:block;padding-bottom:4px;" src="images/floors/0A.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/0A.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/0A_over.jpg'" onclick="changer('images/floors/0A_greek.jpg');"  />
			<img style="display:block" src="images/floors/0B.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/0B.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/0B_over.jpg'" onclick="changer('images/floors/0B_greek.jpg');"  />
		</div>
		<div style="height:35px;width:30px">
			<img style="display:block;padding-bottom:4px;" src="images/floors/-1A.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/-1A.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/-1A_over.jpg'" onclick="changer('images/floors/-1A_greek.jpg');"  />	
		</div>
	</div>
	<div id="right_text_st"> <!-- the container of the actual image -->
		<div id="loader" class="loading">
			<img src="images/floors/4A_greek.jpg"/>
		</div>
	</div>
</div>
