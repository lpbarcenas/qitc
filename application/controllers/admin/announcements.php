<?php 

class Announcements extends CI_Controller{
	
	function __construct(){
		
		parent::__construct();
		$this->load->model('mdldata');
		
	}
	
	public function index(){
		
		$this->_checkPoint();
		$this->display();
		
	}
	
	public function display(){
		
		$data['main_content'] = 'admin/announcements';
		$data['title'] = 'Administrators -- Announcements Page';
		$data['admin'] = $this->_getAdmin();
		$data['annRecords'] = $this->_annLists();
	//	call_debug($data['annRecords']);
		$this->load->view('includes/template',$data);
		
	}
	/* FORM VERIFIER:
	 *  -letsVerify();
	 */
	public function letsVerify(){
		
		$this->_checkPoint();
		$this->mdldata->reset();
		//Check what form: if update, add, delete
		$type = $this->input->post('type');
		if($this->input->post('remove')){
			$type = 'announceRemove';		
		}
		switch($type){
			case 'announceUpdate':
				$params['table'] = array(
									'name' => 'announcements',
									'criteria' => 'post_id',
									'criteria_value' => $this->input->post('post_id')
									);
				$params['fields'] = array(
									'post_content' => $this->input->post('ann_content'),
									'post_date' => $this->input->post('post_date'),
									'ad_id' => $this->input->post('ad_id'),
									'post_heading' => $this->input->post('ann_heading'),
									'post_time' => $this->input->post('post_time')
									);
				$this->mdldata->update($params);
				$this->display();
				break;
			case 'announceAdd':
				$this->form_validation->set_rules('announcement_content','Announcement Content','required');
				$this->form_validation->set_rules('announcement_heading','Title','required');
				if($this->form_validation->run() == FALSE){
					$this->display();
				} else{
					$params['table']['name'] = 'announcements';
					$params['fields'] = array(
										'post_id' => null,
										'post_content' => $this->input->post('announcement_content'),
										'post_date' => $this->input->post('post_date'),
										'ad_id' => $this->input->post('ad_id'),
										'post_heading' => $this->input->post('announcement_heading'),
										'post_time' => $this->input->post('post_time')			  
										);
					$this->mdldata->insert($params);
					$this->display();
				}
				break;
			case 'announceRemove':
				$params['table'] = array(
									'name' => 'announcements',
									'criteria' => 'post_id',
									'criteria_value' => $this->input->post('post_id')
									);
				$this->mdldata->delete($params);
				$this->display();
				break;
		}
		
	}
	
	public function updateForm(){
		
		$this->_checkPoint();
		$id = $this->uri->segment(4);
		$strqry = "SELECT * FROM `announcements` WHERE `post_id` = '".$id."'";
		$params['querystring'] = $strqry;
		$this->mdldata->select($params);
		
		$data['recent'] = $this->mdldata->_mRecords;
	//	call_debug($data['recent'][0]->post_heading);
		$data['admin'] = $this->_getAdmin();
		$data['main_content'] = 'admin/forms/announce_update';
		$this->load->view('includes/template',$data);
		
	}
	
	public function viewForm(){
		
		$id = $this->uri->segment(4);
		$strqry = "SELECT * FROM `announcements` WHERE `post_id` = '".$id."'";
		$params['querystring'] = $strqry;
		$this->mdldata->select($params);
		
		$data['announcement'] = $this->mdldata->_mRecords;
		$data['main_content'] = 'admin/forms/view';
		$this->load->view('includes/template',$data);
		
	}
	
	public function addform(){
		$data['admin'] = $this->_getAdmin();
		$data['main_content'] = 'admin/forms/addform';
		$this->load->view('includes/template',$data);
	}
	
	private function _annLists(){
		
		$this->mdldata->reset();
		$strqry = "SELECT * FROM `announcements` ORDER BY `post_date` AND `post_time` ASC";
		$params['querystring'] = $strqry;
		$this->mdldata->select($params);
		if($this->mdldata->_mRowCount<1){
			$data['messh'] = "There are no Announcements made yet..";
			$data['amount'] = 0;
		}else{
			$data['records'] = $this->mdldata->_mRecords;
			$data['amount'] = $this->mdldata->_mRowCount;
		}
		return $data;
		
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