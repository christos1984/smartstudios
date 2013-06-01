<div class="holder">
	<h2 class="header" align="center">Καλωσήλθατε στον κόσμο των Smart Studios!</h2>
	<div class="subtitle" align="center">Την καλύτερη και πιο "Smart" λύση στη φοιτητική στέγαση</div>
		<div class="holder_left desctext" style="width:550px;">
			<h2 class="lefttitle">Τελευταία νέα</h2>
			<br/>
			<div class="scroll-pane" style="height:328px;">
			<?php
				//Open DB connection
				require('includes/global_vars.php');
				require('includes/db_connect.php');
			
				//get language
				$sql_art = "SELECT * FROM languages WHERE lang_name='$lang'";
				$query_art = mysql_query($sql_art) or die (mysql_error());
				while ($result = mysql_fetch_array($query_art)){
					$lang_c = $result['lang_id'];
				}
			
				$sql_art = "SELECT * FROM news WHERE lang_id=$lang_c ORDER BY news_date DESC";
				$query_art = mysql_query($sql_art) or die (mysql_error());
				$art_rows = mysql_num_rows($query_art);
				if ($art_rows){ 
					echo '<dl class="scrollable" style="width:550px;">';
					while ($result = mysql_fetch_array($query_art)){
				?>
						<dt style="font-size:14px;width:80px;float:left;display:inline;background:url(images/bullet.jpg) no-repeat scroll 0 50% transparent;padding-left:15px;">
						<b><?php echo date("d-m-Y", strtotime($result['news_date'])); ?></b>
						</dt>
						<dd style="margin-left:30px;margin-bottom:20px;width:400px;float:left;display:inline;">
						<?php echo $result['news_text']; ?>
						</dd>
						<div style="clear:both"></div>
				<?php }echo '</dl>';} else echo 'Δεν υπάρχουν νέα'; ?>
			</div>
		</div>
	<div class="holder_right" style="height:340px;width:340px;padding-left:5px;">
	<?php if ($b == "amp"){ ?>
	<img src="images/ktirio_ambelokipi.jpg" />
	<?php } else {?>
	<img src="images/ktirio_williamking.jpg" />
	<?php } ?>
	
	
	</div>
</div>