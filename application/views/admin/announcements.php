<div id="content_announcements">
	<div id="announcement_lists">
		<?php if($annRecords['amount'] < 1){?>
			<h3><?php echo $annRecords['messh'];}else{?></h3>
		<div id="announcement_box">
			<h3>Announcements:</h3>
			<?php foreach($annRecords['records'] as $row): ?>
				<div class="announcements">
					<?php echo $row->post_heading;?>
				</div>
				<div class="date"><?php echo $row->post_date.'--'.$row->post_time;?></div>
				<div class="announcement_options">
					<?php echo form_open(base_url() . 'admin/announcements/letsVerify');?>
						<?php echo form_hidden('post_id',$row->post_id);?>
						<a class="viewfancybox" data-fancybox-type="iframe" href="<?php echo base_url();?>admin/announcements/viewForm/<?php echo $row->post_id;?>">View</a><a class="fancybox" data-fancybox-type="iframe" href="<?php echo base_url();?>admin/announcements/updateForm/<?php echo $row->post_id;?>">Update</a><input type="submit" name="remove" value="delete"/>
					<?php echo form_close();?>
				</div>
			<?php endforeach;?>
		</div>
		<?php }?>
			
	</div>
</div>