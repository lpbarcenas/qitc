<div id="login">
<form action="<?php base_url(). 'admin/administrator/validateAdmin'?>" method="post">
<input type="text" name="ad_user" class="field"/><?php echo form_error('ad_user','<div class="error">','</div>')?>
<input type="password" name="ad_pass" class="field" />
<input type="submit" name="submit" value="Log-in" class="button" />
<input type="submit" name="cancel" value="Go Home" class="button" />
</form>
</div>