<?php

if(empty($main_content)){
	$this->load->view('includes/header');
	$this->load->view('admin/login_form');
	$this->load->view('includes/footer');
}else{
	$this->load->view('includes/header');
	$this->load->view($main_content);
	$this->load->view('includes/footer');
}

