<?php
switch($main_content){
	case 'admin/contentManager':
	case 'admin/announcements':
	case 'admin/adminHome':
			$this->load->view('includes/adminHeader');
			$this->load->view('admin/navigation');
			$this->load->view($main_content);
			$this->load->view('includes/footer');
	break;
	case 'admin/login_form':{
		
		$this->load->view('includes/loginHeader');
		$this->load->view($main_content);
		$this->load->view('includes/footer');
		
	}break;
	case '':
	case 'public/home':
		$this->load->view('includes/header');
		$this->load->view('public/home');
		$this->load->view('includes/footer');
	break;
}

