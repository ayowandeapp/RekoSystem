<?php
namespace app\controllers;
use app\models\Product; 
use app\core\App;

class ProductController{
	public static function index(){
		//echo 'products';
		$db = new Product();
		$data['products'] = $db->fetchData();
		return App::renderView('index',$data);
	}
	public static function add_product(){
		$errors=[];
		if(isset($_POST['add_product'])) {
			$user_id = $_POST['user_id'];
			//echo $user_id; die;
			App::renderView('product/add_product',['user_id'=>$user_id]);
		}

		if(isset($_POST['Submit'])) {
			
			$data = [];
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }
            //echo var_dump($data); die;
            $user_id = $data['user_id'];
			$db = new Product();
			$db->storeProduct($data);
			App::renderView('product/add_product',['user_id'=>$user_id,'success'=>'inserted successfully']);
			exit;
			}

	}
	public static function list_product(){
		$data = [];
        foreach ($_POST as $key => $value) {
            $data[$key] = $value;
        }
        //echo var_dump($data); die;
        $user_id = $data['user_id'];
		$db = new Product();
		$products = $db->fetchUserProduct($user_id);
		App::renderView('product/list_product',['user_id'=>$user_id, 'products'=>$products]);
		exit;
	}




}