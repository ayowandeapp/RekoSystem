<?php
namespace app\core;

use MYSQLI;
class DB 
{	
	private $_host = 'localhost';
	private $_username = 'root';
	private $_password = '';
	private $_database = 'recsys';
	
	//protected $db;
	protected $mysqli;
	
	public function connect()
	{
		$this->mysqli = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
		if(!$this->mysqli){
			die("could not connect to the database: <be />". mysqli_connect_error());
			}
		return $this->mysqli;	
		
	}
}
