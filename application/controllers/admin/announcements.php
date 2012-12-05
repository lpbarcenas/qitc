<?php 

class Announcements extends CI_Controller{
	
	function __construct(){
		
		parent::__construct();
		
	}
	
	public function index(){
		
		$this->_checkPoint();
		$this->display();
		
	}
	
	public function display(){
		
		$data['main_content'] = 'admin/announcements';
		$data['title'] = 'Administrators -- Announcements Page';
		$this->load->view('includes/template',$data);
		
	}
	
	private function _checkPoint(){
	
		//Checking session DATA
		$params = array('admin_islog');
		$this->sessionbrowser->getInfo($params);
		$arr = $this->sessionbrowser->mData;
		
		if(empty($arr['admin_islog'])){
			redirect('admin/administrator');
		}
		
	}
	
}