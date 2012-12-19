
	<?php echo form_open(base_url() . "admin/administrator/validateAdmin")?>
	<input type="text" name="ad_user" class="field" placeholder="Admin Username:" /><?php echo form_error('ad_user','<span class="error">','</span>');?>
	<input type="password" name="ad_pass" class="field" placeholder="Admin Password:" />
	<input type="submit" name="submit" value="Log-in" class="button" />
	<input type="submit" name="cancel" value="Go Home" class="button" />
	</form>
