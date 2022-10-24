<?php

class ProductController{
	public function index(){
		//echo 'products';
		$db = new Product();
		$data['products'] = $db->fetchData();
		View::load('index',$data);
	}
	public function add_product($user_id){
		//echo $user_id; die;
		$errors=[];
		if(isset($_POST['Submit'])) {
			
			$data = [];
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }
            $data['user_id'] = $user_id;
			$db = new Product();
			$db->storeProduct($data);
			View::load('product/add_product',['user_id'=>$user_id,'success'=>'inserted successfully']);
			exit;
			}
		//echo var_dump($errors['errors']);
		View::load('product/add_product',['user_id'=>$user_id]);
		exit;

	}
	public function list_product($user_id){
		$db = new Product();
		$products = $db->fetchUserProduct($user_id);
		View::load('product/list_product',['user_id'=>$user_id, 'products'=>$products]);
		exit;
	}




}