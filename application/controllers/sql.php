<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sql extends CI_Controller {

	 function __construct() {
		session_start();
		ob_start(); 
		parent::__construct();
 		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('db');
}
	 
	public function index()
	{

	}
        
	public function display()
	{
            echo 'ddddd';
            
            print_r($_GET['data']);            
            
            
            die;
	}        
	
	function check_czy_zalogowany() {
		$check = $_SESSION['sessiondb'];
		return $check['logged_in'];	
	}
	
	function laczenie_z_baza() {
		$check = $_SESSION['sessiondb'];
		$this->db->Db($check['server'], $check['username'], $check['password']);	
	}
	
	public function mysql_tabela_struktura() {
		if(empty($_POST['table'])) {
		echo 'Proszę Wybrać Bazę Danych Z Lewego Menu';	
		} else {
		$this->laczenie_z_baza();
		$this->db->select_db($_POST['db']);

		$res = mysql_query('DESC '.$_POST['table']);
		$dane = array();
		$i=0;
		while($row = mysql_fetch_array($res)) {
			$dane['nazwa'][$i] = $row['Field'];
			$dane['typ'][$i] = $row['Type'];
			$dane['aic'][$i] = $row['Null'];
			$dane['klucz'][$i] = $row['Key'];
			$dane['domyslne'][$i] = $row['Default'];
			$dane['extra'][$i] = $row['Extra'];
			$i++;
		}	
		//return $dane;
		print_r(json_encode($dane));
		}
	}
	
	public function mysql_send_sql() {
            $this->laczenie_z_baza();
            $this->db->select_db($_POST['db']);
            $res = @mysql_query($_POST['dane']);
         	$dane = array();
            if (!$res) 
            {
                $dane['error'] = 'Invalid query: ' . mysql_error();
				$dane['code_error'] = 2;
            } else {
				$i=0;                                
                                
			  while($row = mysql_fetch_array($res, MYSQL_ASSOC))
			  {                                    
                                    
			  $dane[$i] = $row;
			  $i++;
			  }	
			  // $dane['error'] = 'Zapytanie Udało się: ' . $_POST['dane'];
			  // $dane['code_error'] = 1;
			}
             // print_r($dane); die();                      
            echo json_encode($dane); die;
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */