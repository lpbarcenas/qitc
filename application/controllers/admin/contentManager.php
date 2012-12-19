<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class ContentManager extends CI_Controller{
	
	function __construct(){
		
		parent::__construct();
		
	}
	
	public function index(){
		
		$this->_checkPoint();
		$this->display();
		
	}
	
	public function display(){
		
		$data['main_content'] = 'admin/contentManager';
		$data['title'] = 'Administrators -- Content Manager';
		$data['lists'] = $this->_allContent();
		$data['admin'] = $this->_getAdmin();
		$this->load->view('includes/template',$data);
			
	}
	
	private function _allContent(){
		
		//Content Retriever method: _allContent()
		
		//Using the model
		$this->load->model('mdldata');
		$this->mdldata->reset();
		
		//Retrieving all recent contents
		$strqry = "SELECT * `contents` ORDER BY content_page ASC";
		$params['querystring'] = $strqry;
		$lists = $this->mdldata->_mRecords;
		
		return $lists;
	}
	
	private function _getAdmin(){
	
		$params = array('admin_fullname','admin_id');
		$this->sessionbrowser->getInfo($params);
		$arr = $this->sessionbrowser->mData;
	
		//	call_debug($arr['admin_fullname']);
	
		return $arr;
	
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