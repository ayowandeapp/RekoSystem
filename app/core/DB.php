<?php
class DB 
{	
	private $_host = 'localhost';
	private $_username = 'root';
	private $_password = '';
	private $_database = 'recsys';
	
	protected $db;
	
	public function connect()
	{
		$this->db = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
		if(!$this->db){
			die("could not connect to the database: <be />". mysqli_connect_error());
			}
		return $this->db;	
		
	}
}
