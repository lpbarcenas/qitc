<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminHome extends CI_Controller{
	
	function __construct(){

		parent::__construct();
		$this->load->model('mdldata');

	}
	
	public function index(){
		
		$this->_checkPoint();
		$this->displayHome();
		
	}
	
	public function displayHome(){
		
		$data['main_content'] = 'admin/adminHome';
		$data['title'] = 'Administrators Home';
	//	$data['logs'] = $this->_getLogs();
		$data['admin'] = $this->_adminDB();
		$data['admin'] = $this->_getAdmin();
		
	//	call_debug($data);
		
		$this->load->view('includes/template',$data);
		
	}
	
	private function _getAdmin(){
		
		$params = array('admin_fullname','admin_id');
		$this->sessionbrowser->getInfo($params);
		$arr = $this->sessionbrowser->mData;
		
	//	call_debug($arr['admin_fullname']);
		
		return $arr;
		
	}
	
	private function _getLogs(){
		
		//All about LOGS DISPLAY of what are the recent activities within the administrator
		$this->mdldata->reset();
		$strqry = 'SELECT * FROM `logs` ORDER BY date DESC';
		$params['querystring'] = $strqry;
		$this->mdldata->select($params);
		if($this->mdldata->_mRowCount < 1){
			$logs1 = "NO RECENT LOGS";
			return $logs1;
		} else {
			$logs2 = $this->mdldata->_mRecords;
			return $logs2;
		}
		
	}
	
	private function _adminDB(){
		
		//Administrator Database
		$this->mdldata->reset();
		$strqry = "SELECT * FROM `admin` ORDER BY `lname` ASC";
		$params['querystring'] = $strqry;
		$this->mdldata->select($params);
		$adminList = $this->mdldata->_mRecords;
		return $adminList;
		
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