<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Visible extends CI_controller{
	
	function __construct(){
		
		parent::__construct();
		
	}
	
	function index(){
		
		$this->homeView();
		
	}
	
	public function homeView(){
		
		$data['main_content'] = "public/home";
		$data['title'] = "QITC HomePage";
		$this->load->view('includes/template',$data);
		
	}
	
	public function aboutView(){
		
		$data['main_content'] = "public/about";
		$data['main_content'] = "About Quantum ..";
		$this->load->view('includes/template',$data);
		
	}
	
	public function cotactUsView(){
		
		$data['main_content'] = "public/contactUs";
		$data['title'] = "Contact Us";
		$this->load->view('includes/template',$data);
		
	}
	
	public function speakers(){
		
		$data['main_content'] = "public/speakers";
		$data['title'] = "Speakers C.V.";
		$this->load->view('includes/template',$data);
		
	}
	
}