# RekoSystem # 
---------

## Introduction 
Reko is a recommendation system that looks at a set of users with similar taste to a particular user (User-Based Collaborative Filtering). it looks at the items users liked and create a ranked list of suggestions. Firstly, we collected data from the database and converted it into a matrix form. Then we calculated the similarity between the users. Similarity is calculated based on rating. To determine which users are similar we used the Euclidean distance Then we determined the rating a user would give to an item based on the rating of similar users. we predict the rating user U will give the item I.

## to use
in the app/config file
```
<?php 
//define site url
define('BURL','http://resys.local/'); //the localhost/folder_name
/**
 * database configuration
 */
define("HOST","localhost");
define("USER", "root");
define("PASSWORD","");
define("DBNAME","test");

```

in the core/DB file, change as required
```
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

```