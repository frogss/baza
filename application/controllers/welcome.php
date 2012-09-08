<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

		$this->form_validation->set_rules('server', 'Server', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
			
		$sprawdz = $this->check_czy_zalogowany();
		if(empty($sprawdz)) {	
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');	
		}
		else
		{
		
		$b = @mysql_connect($this->input->post('server'), $this->input->post('username'), $this->input->post('password'));
		if(!@mysql_ping($b)) {
		$this->load->view('login');
		} else {
			$newdata = array(
					   'server'    => $this->input->post('server'),
					   'username'  => $this->input->post('username'),
					   'password'  => $this->input->post('password'),
					   'hash'      => sha1($this->input->post('server').$this->input->post('username').$this->input->post('password')),
					   'logged_in' => TRUE
				   );
				   ini_set('session.gc-maxlifetime', 60*30);
				   $_SESSION['sessiondb'] = $newdata;
				
						 redirect('/', 'refresh');
				
					#$this->session->set_userdata($newdata); 
		}
	}
	} else {
			$data['db_list'] = $this->mysql_current_db();
		    $this->load->view('dba',$data);
			#echo '<br><Br>BAZYYYYYYYY<br><br>';
			
			#echo $this->mysql_show_db_tables_list('cms_easy');	
		}
		
	}
	
	function check_czy_zalogowany() {
	$check = @$_SESSION['sessiondb'];
	return $check['logged_in'];	
	}
	
	function mysql_current_db() {
	$this->laczenie_z_baza();
    $db_list = mysql_list_dbs();

	$i = 0;
	$cnt = mysql_num_rows($db_list);
	$dane = array();
	while ($i < $cnt) {
		$dane[$i] = mysql_db_name($db_list, $i);
		$i++;
	}
	return $dane;
	}
	
	public function mysql_show_db_tables_list() {
		if(empty($_POST['db'])) {
	echo 'Proszę Wybrać Bazę Danych Z Lewego Menu';	
	} else {
	$this->laczenie_z_baza();
	$result = @mysql_list_tables($_POST['db']);
	$dane = array();
	$i=0;
	while ($row = @mysql_fetch_row($result)) {
		$dane['nazwa'][$i] = $row[0];
		$dane['db'] = $_POST['db'];  
	$i++;
	}
	print_r(json_encode($dane));
	@mysql_free_result($result);
	}
	}
	
	function laczenie_z_baza() {
	$check = $_SESSION['sessiondb'];
	mysql_connect($check['server'], $check['username'], $check['password']);	
	}
	
	public function mysqlstruktura() {
	if(empty($_POST['db'])) {
	echo 'Proszę Wybrać Bazę Danych Z Lewego Menu';	
	} else {
	$this->laczenie_z_baza();
	$res = mysql_query('SHOW TABLE STATUS FROM '.$_POST['db']);
	$dane = array();
	$i=0;
	while($row = mysql_fetch_array($res)) {
		$dane['nazwa'][$i] = $row['Name'];
		$dane['silnik'][$i] = $row['Engine'];
		$dane['wpisow'][$i] = $row['Rows'];
		$dane['kodowanie'][$i] = $row['Collation'];
		$dane['rozmiar'][$i] = $row['Avg_row_length'];
		$dane['db'] = $_POST['db'];
		$i++;
	}	
	//return $dane;
	print_r(json_encode($dane));
	}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */