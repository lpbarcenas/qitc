<?php

if(empty($main_content)){
	$this->load->view('includes/header');
	$this->load->view('public/home');
	$this->load->view('includes/footer');
}else if($main_content == 'admin/adminHome' || $main_content == 'admin/announcements' || $main_content == 'admin/contentManager' ){
	$this->load->view('includes/adminHeader');
	$this->load->view('admin/navigation');
	$this->load->view($main_content);
	$this->load->view('includes/footer');
}else if($main_content == 'admin/login_form'){
	$this->load->view('includes/loginHeader');
	$this->load->view($main_content);
	$this->load->view('includes/footer');
}

