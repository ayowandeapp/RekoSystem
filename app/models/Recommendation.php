<?php 
namespace app\models;
use app\core\DB;

//valid = new Validaton()
class Recommendation extends DB
{
	//private $table = "products";
	private $connection; 

	public function __construct(){
		$this->connection = DB::connect();

	}
	public function fetchrecommend($user_id){
		$query = "SELECT * FROM user_products";
		$products = $this->connection->query($query);
		$matrix = array();
		foreach($products as $product){
			$query = "SELECT username FROM users WHERE id=$product[user_id]";
			$username = mysqli_fetch_array($this->connection->query($query));
			$matrix[$username['username']][$product['name']]=$product['rating'];
		}
		//var_dump($matrix);
		//get username
		$query = "SELECT username FROM users WHERE id='$user_id'";
		$username = mysqli_fetch_array($this->connection->query($query));
		if(empty($username)){
			header('Location: /');
            exit;
		}
		return $this->getrecommendation($matrix,$username['username']);

	}
	private function getrecommendation($matrix,$person){

		$total=array();
		$simsums=array();
		$ranks=array();

		foreach($matrix as $otherPerson =>$value){

			if($otherPerson !=$person){
				$sim = $this->similarity_distance($matrix,$person,$otherPerson);
				foreach ($matrix[$otherPerson] as $key => $value) {
					
					if(array_key_exists($key, $matrix[$person])){

						if(!array_key_exists($key,$total)){
							$total[$key]=0;
						}
						$total[$key]+=$matrix[$otherPerson][$key]*$sim;

						if(!array_key_exists($key,$simsums)){
							$simsums[$key]=0;
						}
						$simsums[$key]+=$sim;

					}
				}
				//var_dump($sim);
			}
		}
		foreach($total as $key=>$value){

			$ranks[$key]=$value/$simsums[$key];

		}

		array_multisort($ranks,SORT_DESC);
		return $ranks;

	}
	private function similarity_distance($matrix,$person1,$person2){

		$sum=0;

		$similar=array();

		foreach($matrix[$person1] as $key=>$value){

			if(array_key_exists($key, $matrix[$person2])){
				$similar[$key]=1;
			}
		}
		if($similar ==0){
			return 0;
		}
		foreach($matrix[$person1] as $key=>$value){

			if(array_key_exists($key, $matrix[$person2])){
				$sum =$sum+pow($value-$matrix[$person2][$key], 2);
			}
			
		}
		return 1/(1+sqrt($sum));

		

	}

}