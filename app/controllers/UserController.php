<?php
namespace app\controllers;
use app\core\View;
use app\models\User;
use app\models\Recommendation; 
use app\core\App;

class UserController{

	public static function add_user(){
		$request = strtolower($_SERVER['REQUEST_METHOD']);
		if($request == 'post'){

			if(isset($_POST['Submit'])) {
				$data = [];
		        foreach ($_POST as $key => $value) {
		            $data[$key] = $value;
		        }
		        //echo var_dump($data); die;
		        //simple validation
		        if($data['username']==''){
		        	App::renderView('user/add_user',['errors'=>'data required']);
		        	exit;

		        }
		        $db = new User();
		        $db->storeUser($data);
		        //echo 'successfull';
		        App::renderView('user/add_user',['success'=>'data successfully inserted']);
		        
		        exit;

			}
		}
		App::renderView('user/add_user');
		exit;


	}
	public static function index(){
		$db = new User();
		$data['users'] = $db->fetchUser();
		//View::load('index',$data);
		return App::renderView('index',$data);
	}

	public static function user_recommend()
	{
		if(isset($_POST['add_recommendation'])){
			$user_id = $_POST['user_id'];

		//simple validation
		if($user_id==''){
	        header('Location: /');
	        exit;
	    }
			// //echo $user_id; die;
			// App::renderView('user/user_recommend',['user_id'=>$user_id]);
		
		$products = array();
		$db = new Recommendation();
		$products = $db->fetchrecommend($user_id);
		//var_dump($recommends);
		App::renderView('user/user_recommend',['products'=>$products]);
		exit;
		}
	}

}