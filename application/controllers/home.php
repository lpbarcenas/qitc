<?php	if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Home extends CI_controller{
	
	function __construct(){
		
		parent::__construct();
		
	}
	
	function index(){
		
		$this->defaultView();
		
	}
	
	public function defaultView(){
		
		$this->load->view('public/home');
		
	}
	
}