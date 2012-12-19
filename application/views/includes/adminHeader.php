<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- Links -->
<link rel="stylesheet" href="<?php echo base_url();?>css/admin.css" type="text/css">

<!-- Add jQuery library -->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.fancybox.pack.js?v=2.1.3"></script>
<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/docready.js"></script>

<title><?php echo $title;?></title>
</head>
<body>
<div class="nav_wrap">
	<ul class="dark_menu" class="clearfix">
		<li><a href="<?php echo base_url().'admin';?>/adminHome">Admin Home</a></li>
		<li><a href="<?php echo base_url().'admin';?>/contentManager">Content Manager</a></li>
		<li><a href="<?php echo base_url().'admin';?>/announcements">Announcements</a>
			<ul><li class="submenu"><a class="fancybox" data-fancybox-type="iframe" href="<?php echo base_url();?>admin/announcements/addform">Add Announcement</a></li></ul>
		</li>
		<li><a href="">Administrator Settings</a></li>
		<li><a href="">Delegates Database</a></li>
		<li><a href="<?php echo base_url();?>admin/administrator/logout">Log-out</a></li>
	</ul>
</div>
	<div class="nav_button" id="open" style="display: visible;"><a href="#">Hide/Show Navigation</a></div>
<div class="content_wrapper">
<h5>Greetings Admin <?php echo $admin['admin_fullname'].' Welcome!';?></h5>
