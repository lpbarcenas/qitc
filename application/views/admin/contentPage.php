<div class="contentWrapper">
	<div class="formWrapper">
		<form action="<?php echo base_url();?>admin/contentManager">
			<textarea name="content" rows="10" cols="90">
			</textarea>
			<?php 
			$options = array(
					'home','about'
					);
			echo 'Content Placement: ' . form_dropdown('content_page',$options,'home');
			$options2 = array(
					'1','2','3','4'
					);
			echo 'Content Position:' . form_dropdown('content_pos',$options2,'1');?>
			<input type="submit" name="submit" value="Save Content" />
		</form>
	</div>
</div>