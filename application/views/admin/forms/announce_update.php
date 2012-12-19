<div id="edit_form">
	<?php $attrib = array('target'=>'_top');
	 echo form_open(base_url().'admin/announcements/letsVerify',$attrib);?>
	<input type="text" name="ann_heading" value="<?php echo $recent[0]->post_heading;?>"/>
	<textarea name="ann_content" rows="10" cols="80"><?php echo $recent[0]->post_content;?></textarea>
	<?php echo form_hidden('post_id',$recent[0]->post_id);
		  echo form_hidden('ad_id',$admin['admin_id']);
		  echo form_hidden('post_date',date('Y-m-d'));
		  echo form_hidden('post_time',date('h:i:s'));?>
	<?php echo form_hidden('type','announceUpdate');?>
	<input type="submit" name="updatEdit" value="update" />
	<?php echo form_close();?>
</div>