<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Administrator extends CI_Controller{
	private $_mfullname;
	private $_username; 
	private $_id;
	
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
			$plength = strlen($this->input->post('ad_user'));
			if($plength > 10){
				redirect('admin/administrator');
			}
			else if($this->_isAdmin()){
				$this->_logAdmin();
				redirect('admin/adminHome');
			}
			else if(!$this->_isAdmin()) {
				redirect('admin/administrator');
			}
		}
		
	}//End of ValidateAdmin() Method
	
	private function _isAdmin(){
		
		$this->load->model('mdldata');
		$this->mdldata->reset();
		$strqry = sprintf("SELECT * FROM `admin` WHERE `username` LIKE '%s'",$this->input->post('ad_user'));
		$params['querystring'] = $strqry;
		$this->mdldata->select($params);
		$info = $this->mdldata->_mRecords;
		
		$this->_mfullname = $info[0]->fname.' '.$info[0]->lname;
		$this->_username = $info[0]->username;
		$this->_id = $info[0]->ad_id;
		
	//	call_debug($info[0]->ad_id);
		
		if($this->mdldata->_mRowCount < 1){
			return FALSE;
		} else {
			if($info[0]->password == $this->input->post('ad_pass')){
			return TRUE;
			} else {
				return FALSE;
			}
		}
		
		
		
	}//End of _isAdmin()
	
	private function _logAdmin(){
		
		$params = array(
				'admin_uname' => $this->_username,
				'admin_islog' => TRUE,
				'admin_fullname' => $this->_mfullname,
				'admin_id' => $this->_id,
				);
		$this->sessionbrowser->setInfo($params);
		
	}//End of _logAdmin()
	
	private  function _redirectUser(){
		
		$params = array('admin_islog');
		$this->sessionbrowser->getInfo($params);
		$arr = $this->sessionbrowser->mData;
		if($arr['admin_islog']){
			redirect('admin/adminHome');
		}
		
	}//End of _redirectUser()
	
	public function logout(){
		
		$this->_checkPoint();
		$params = array('admin_uname','admin_islog','admin_fullname');
		$this->sessionbrowser->destroy($params);
		redirect(base_url() . 'admin/administrator');
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