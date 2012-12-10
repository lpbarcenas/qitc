<div id="edit_form">
	<?php echo form_open(base_url() . 'admin/announcements/letsVerify');?>
	<input type="text" name="ann_heading" maxlength="100">
	<textarea name="ann_content" rows=""></textarea>
	<?php echo form_hidden('type','announceForm');?>
	<?php echo form_submit('submit','Update!');?>
	<?php echo form_close();?>
</div>