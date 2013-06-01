<div class="holder" class="desctext">
	<h2 class="lefttitle" align="center">Smart Deal</h2>
	<div class="subtitle" align="center">Here you can find our special offers</div>
	<div class="holder_left" style="width:700px">
		<div class="scroll-pane desctext2" style="margin-top:10px;margin-bottom:10px;height:360px;">
			<?php
			//Open DB connection
			require('includes/global_vars.php');
			require('includes/db_connect.php');
	
			//get language
			$sql_art = "SELECT * FROM languages WHERE lang_name='$lang'";
			$query_art = mysql_query($sql_art) or die (mysql_error());
			while ($result = mysql_fetch_array($query_art)){
				$lang = $result['lang_id'];
			}
	
			$sql_art = "SELECT * FROM deals WHERE lang_id=$lang ORDER BY deal_id DESC" ;
			$query_art = mysql_query($sql_art) or die (mysql_error());
			$art_rows = mysql_num_rows($query_art);
			if ($art_rows){ 
				echo '<dl class="scrollable" style="width:680px;">';
				while ($result = mysql_fetch_array($query_art)){
			?>
			<dt style="color:#ff9900;font-size:16px;font-weight:bold;margin-bottom:15px;"><?php echo $result['deal_title'];?>:</dt>
			<dd style="margin-bottom:20px;">
			<?php echo $result['deal_text'];?>
			</dd>		
			<?php } echo '</dl>';
			}?>
		</div>
	</div>
	<div class="holder_right" style="height:340px;width:180px;"></div>
</div>
