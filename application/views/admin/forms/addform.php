<div id="announcement_form" style="width:500px;">
		<?php echo form_open(base_url() . 'admin/announcements/letsVerify');?>
			<input type="text" name="announcement_heading" placeholder="Announcement Title"/><?php echo form_error('announcement_heading','<span class="error">','</span>');?>
			<textarea name="announcement_content" rows="10" cols="80" placeholder="You can use HTML tags in making an announcement, just becareful in using double/single qoutes makes sure to escape the characterss before submitting because it could cause an SQL error thank you.."></textarea><?php echo form_error('announcement_content','<span class="error">','</span>');?>
			<?php echo form_hidden('type','announceAdd');
				  echo form_hidden('ad_id',$admin['admin_id']);
				  echo form_hidden('post_date',date('Y-m-d'));
				  echo form_hidden('post_time',date('h:i:s'));?>
			<div id="announce_buttons"><input type="reset" name="clear" value="Clear Textbox"><input type="submit" name="submit" value="Publish New Announcement"></div>
		<?php echo form_close();?>
	</div>