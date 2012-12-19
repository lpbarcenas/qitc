<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Visible extends CI_controller{
	
	function __construct(){
		
		parent::__construct();
		
	}
	
	public function index(){
		
		$this->_display();
		
	}
	
	private function _display(){
		
		$data['main_content'] = 'public/home';
		$data['title'] = 'QITC Homepage';
		$this->load->view('includes/template',$data);
		
	}
	
}