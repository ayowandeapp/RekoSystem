<?php 
//valid = new Validaton()
namespace app\models;
use app\core\DB;

class Product extends DB
{
	private $table = "products";
	private $connection; 

	public function __construct(){
		$this->connection = DB::connect();

	}
	public function fetchData()
	{
		//fetching data in descending order (lastest entry first)
		$query = "SELECT * FROM user_products ORDER BY id DESC";
		$result = $this->connection->query($query);
		
		
		return $result;
	}
	public function storeProduct($data){
			//echo $data['name']; die;
			$user_id = $data['user_id'];
			$name = $data['name'];
			$price = $data['price'];
			$typeSwitch = $data['typeSwitch'];
			$rating = $data['rating'];
			$size = $data['size'];
			$query = "INSERT INTO user_products (user_id,name,price,type,size,rating) VALUES ('$user_id','$name','$price','$typeSwitch','$size','$rating')";
			$result = $this->connection->query($query);
			return $result;
	}
	public function fetchUserProduct($user_id){
		$query = "SELECT * FROM user_products WHERE user_id = '$user_id' ORDER BY id DESC";
		$result = $this->connection->query($query);
		return $result;

	 }

}