<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Db  {
	// Prywatne
    var $handler;
    var $hostname;
    var $username;
    var $password;
    var $database;
 
	// Publiczne
    var $result;
    var $num_rows;

  
	public function __construct($rules = array())
	{
		$this->CI =& get_instance();
		log_message('debug', "DB Class Initialized");
	}

	 
	public function Db($hostname, $username, $password) {
 
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
		 
    }
	
	//Połączenie do bazy
	
	function connect() {
 
        $this->handler = @mysql_pconnect($this->hostname, $this->username, $this->password);
						 mysql_set_charset('utf8'); 
 
    }
	
	//Wybór Bazy Danych
	
	public function select_db($base) {
 		$this->database = $base;
        mysql_select_db($this->database, $this->handler) or $this->throw_error(mysql_error(), __LINE__);
    }
	
	//SPRAWDZAM POŁĄCZENIE
	
	public function ping() {
		return mysql_ping();
	}
	
	//Wyswietlanie Błędów Połączenia
	
	function throw_error($message, $line = 0){
 
        $line = ( !empty($line) ) ? $line = ' on line ' . $line : '' ;
        die ('There was an error on line' . $line .' in class "' . __CLASS__ . '": ' . $message);
 
    }
	

	function close() {
		return true;	
	}
			
			
}
