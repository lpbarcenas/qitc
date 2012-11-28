<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminHome extends CI_Controller{
	
	function __construct(){

		parent::__construct();

	}
	
	function index(){
		
		$data['main_content'] = 'admin/adminHome';
		$data['title'] = 'Administrator Home Page';
		$this->load->view('includes/template',$data);
		
	}
	
	public function newAnnouncement(){
		
		//Using the model
		$this->load->model('mdldata');
		$this->mdldata->reset();
		
		//Retrieving all recent Announcements
		$strqry = "SELECT * `announcements`";
		$params['querystring'] = $strqry;
		$data['announcementLists'] = $this->mdldata->mRecords; //Lists of Announcements that will be displayed;
		
		//Call input form and the lists to e displayed
		$data['main_content'] = 'admin/announcementForm';
		$data['title'] = 'Admin -- Announcements';
		$this->load->view('includes/template',$data);
		
	}
	
	public function contents(){
		
		//Using the model
		$this->load->model('mdldata');
		$this->mdldata->reset();
		
		//Retrieving all recent contents
		$strqry = "SELECT * `contents`";
		$params['querystring'] = $strqry;
		$data['listOfContents'] = $this->mdldata->mRecords;
		
		//Call the views for displaying all the contents
		$data['main_content'] = 'admin/contentPage';
		$data['title'] = 'Admin -- Website Contents';
		$this->load->view('includes/template',$data);
		
	}
	
}