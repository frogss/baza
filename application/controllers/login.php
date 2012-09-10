<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	 function __construct() {
		session_start();
		ob_start(); 
		parent::__construct();
 		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
}
	 
	public function index()
	{

	
	}
	
	
	public function logout()
	{
		
		session_destroy();
		redirect('/', 'refresh');	
		
	}
	

}