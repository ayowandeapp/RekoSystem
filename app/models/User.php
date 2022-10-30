<?php 
namespace app\models;

use app\core\DB;

class User extends DB {
    private $table = "users";
    private $connection; 

    public function __construct(){
        $this->connection = DB::connect();

    }
    public function storeUser($data){
        $username = $data['username'];
        //echo $username; die;
        $date= date('y-m-d h:i:s T');
        $query = "INSERT INTO users (username) VALUES ('$username')";
        $result = $this->connection->query($query);
        return $result;

    }
    public function fetchUser(){
        //fetching data in descending order (lastest entry first)
        $query = "SELECT * FROM users ORDER BY id DESC";
        $result = $this->connection->query($query);
        return $result;
    }

}