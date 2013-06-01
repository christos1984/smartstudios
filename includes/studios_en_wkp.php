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
		Spacious and quite with comfortable furniture including a study desk and chair, bookshelves, 
		coffee table, good storage space, large balcony. Also offers wired Internet 24Mbps Conn-X, self-regulated heating, 
		Air Conditioning and all electrical appliances such as a flat 20 inch TV, oven and hobs, large fridge – all essentials 
		to meet the everyday needs of the student.
		<br/><br/>	
		<div><b>
        FLATSHARING / PRICES:
		</b></div><br/>
		The monthly rents start from € 270 per person in each studio. There is also an option, 
		if a student wishes, to rent the whole flat for self.<br/><br/>	
		<div><b>
		LETTING CONDITIONS:</b></div><br/>
		Written consent of the student’s guardian is needed. Also, as part of the standard terms of the tenancy agreement, 
		an advance payment of two monthly rents is required as a deposit. 
		Furniture and electrical appliances as well as the interior of the premises should be kept on the same condition delivered. 
		For this, an inventory check is arranged before and after the termination of the tenancy.
	</div>
</div>

<?php
//Include of text file that manages the available rooms - Change the wpk.txt content to edit availability //
//--------------------------------------------------------------------------------------------------------//
@$lines = file('includes/wpk_en.txt');
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
			<img style="display:block;padding-bottom:4px;" src="images/floors/4A.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/4A.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/4A_over.jpg';" onclick="changer('images/floors/4A_english.jpg');" />
			<img style="display:block" src="images/floors/4B.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/4B.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/4B_over.jpg'" onclick="changer('images/floors/4B_english.jpg');" />
		</div>
		<div style="height:85px;width:30px">
			<img style="display:block;padding-bottom:4px;" src="images/floors/3A.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/3A.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/3A_over.jpg'" onclick="changer('images/floors/3A_english.jpg');" />
			<img style="display:block" src="images/floors/3B.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/3B.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/3B_over.jpg'" onclick="changer('images/floors/3B_english.jpg');" />
		</div>
		<div style="height:85px;width:30px">
			<img style="display:block;padding-bottom:4px;" src="images/floors/2A.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/2A.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/2A_over.jpg'" onclick="changer('images/floors/2A_english.jpg');"  />
			<img style="display:block" src="images/floors/2B.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/2B.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/2B_over.jpg'" onclick="changer('images/floors/2B_english.jpg');"  />
		</div>
		<div style="height:85px;width:30px">
			<img style="display:block;padding-bottom:4px;" src="images/floors/1A.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/1A.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/1A_over.jpg'" onclick="changer('images/floors/1A_english.jpg');"  />
			<img style="display:block" src="images/floors/1B.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/1B.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/1B_over.jpg'" onclick="changer('images/floors/1B_english.jpg');"  />
		</div>
		<div style="height:85px;width:30px">
			<img style="display:block;padding-bottom:4px;" src="images/floors/0A.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/0A.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/0A_over.jpg'" onclick="changer('images/floors/0A_english.jpg');"  />
			<img style="display:block" src="images/floors/0B.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/0B.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/0B_over.jpg'" onclick="changer('images/floors/0B_english.jpg');"  />
		</div>
		<div style="height:35px;width:30px">
			<img style="display:block;padding-bottom:4px;" src="images/floors/-1A.jpg" onmouseout="this.style.cursor='default';this.src='images/floors/-1A.jpg'" onmouseover="this.style.cursor='pointer';this.src='images/floors/-1A_over.jpg'" onclick="changer('images/floors/-1A_english.jpg');"  />	
		</div>
	</div>
	<div id="right_text_st"> <!-- the container of the actual image -->
		<div id="loader" class="loading">
			<img src="images/floors/4A_english.jpg"/>
		</div>
	</div>
</div>
