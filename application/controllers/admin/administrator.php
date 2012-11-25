<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller{
	
	function __construct(){
		
		parent::__construct();
		
	}
	
	public function index(){
		
		$this->adminform();
		
	}
	
	public function adminform(){
		
		$this->load->view('admin/login_form');
		
	}
	
}