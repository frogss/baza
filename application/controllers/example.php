<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
ob_start();

class Example extends CI_Controller {

	 function __construct() {
		parent::__construct();
 		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
}
	 
	public function index()
	{
            //load the content variables
             // $layout_data['content_navigation'] = $this->load->view('navigation', $navigation_data, true);
            $body_data = 'tresc';
            
             $layout_data['content_body'] = $this->load->view('example/index', $body_data, true);

            $this->load->view('layouts/main', $layout_data);            
		
        }
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */