<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Registration extends CI_controller {
	
	public function index(){
		
		$this->load->view('public/reg');
	}
}