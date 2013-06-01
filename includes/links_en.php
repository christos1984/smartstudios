<div class="holder desctext">
	<div class="holder_left" style="padding:20px;width:710px;">
		<h2 class="lefttitle"> Links</h2>
			<br/><br/>
            <div class="scroll-pane" style="height:360px;">
		

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
	
		$sql_art = "SELECT * FROM links WHERE lang_id=$lang";
		$query_art = mysql_query($sql_art) or die (mysql_error());
		$art_rows = mysql_num_rows($query_art);
		if ($art_rows){ 
			echo '<ul class="scrollable" style="width:680px;">';
			while ($result = mysql_fetch_array($query_art)){
		?>
			<div>
				
				
				
				<li><div style="color:#ff9900;font-size:14px;font-weight:bold"><a href="<?php echo $result['link_url'];?>" target="_blank"><?php echo $result['link_title'];?></a></div>
				<p>
						<div style="width:650px;margin-left:30px;">
						<?php echo $result['link_text'];?>
						</div>
				</li>
					
			</div>
		<?php } echo '</ul>';
		}?>
	</div>
    </div>
<div class="holder_right" style="height:440px;width:180px;"></div>
</div>

