<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Administrator extends CI_Controller{
	private $_mfullname; 
	
	function __construct(){
		
		parent::__construct();
		
	}
	
	public function index(){
		
		$this->adminform();
		
	}
	
	public function adminform(){
		$this->_redirectUser();
		$data['main_content'] = 'admin/login_form';
		$data['title'] = 'Administrator Login';
		$this->load->view('includes/template',$data);
		
	}
	
	
	function validateAdmin(){
		
		if($this->input->post('cancel')){
			redirect();			
		}
		$this->form_validation->set_rules('ad_user','Username','required');
		if($this->form_validation->run() == FALSE){
			$this->adminform();
		} else {
			if($this->_isAdmin()){
				$this->_logAdmin();
				redirect('admin/adminHome');
			} else {
				redirect();
			}
		}
		
	}//End of ValidateAdmin() Method
	
	private function _isAdmin(){
		
		$this->load->model('mdldata');
		$this->mdldata->reset();
		$strqry = sprintf("SELECT * FROM `administrator` WHERE `adminUser` LIKE %s ",$this->input->post('ad_users'));
		$params['querystring'] = $strqry;
		$this->mdldata->select($params);
		if($this->mdldata->_mRowCount < 1){
			return FALSE;
		} else {
			return TRUE;
		}
		
		foreach($this->mdldata->_mRecords as $row){
			$this->_mfullname = $row->fname.' '.$row->lname;
		}
		
	}//End of _isAdmin()
	
	private function _logAdmin(){
		
		$params = array(
				'admin_uname' => $this->input->post('ad_user'),
				'admin_islog' => TRUE,
				'admin_fullname' => $this->_mfullname,
				);
		$this->sessionbrowser->setInfo($params);
		
	}//End of _logAdmin()
	
	private  function _redirectUser(){
		
		$params = array('admin_islog');
		$this->sessionbrowser->getInfo($params);
		$arr = $this->sessionbrowser->mData;
		if($arr['admin_islog']){
			redirect();
		}
		
	}
	
}