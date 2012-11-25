<?php echo form_open(base_url() . 'admin/administrator/validateAdmin');?>
<input type="text" name="ad_user" class="field"/><?php echo form_error('ad_user','<div class="error">','</div>')?>
<input type="password" name="ad_pass" class="field" /><?php echo form_error('ad_pass','<div class="error">','</div>'); ?>
<input type="submit" name="submit" value="Log-in" class="button"/>
<?php echo form_close();?>