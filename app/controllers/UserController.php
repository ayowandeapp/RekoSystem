<?php

class UserController{

	public function add_user(){
		if(isset($_POST['Submit'])) {
			$data = [];
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }
            //echo var_dump($data); die;
            //simple validation
            if($data['username']==''){
            	View::load('user/add_user',['errors'=>'data required']);
            	exit;

            }
            $db = new User();
            $db->storeUser($data);
            //echo 'successfull';
            
            exit;

		}
		View::load('user/add_user');
		exit;
	}
	public function index(){
		$db = new User();
		$data['users'] = $db->fetchUser();
		View::load('index',$data);
	}

	public function user_recommend($user_id)
	{
		//simple validation
		if($user_id==''){
            header('Location: /');
            exit;

            }
		$products = array();
		$db = new Recommendation();
		$products = $db->fetchrecommend($user_id);
		//var_dump($recommends);
		View::load('user/user_recommend',['products'=>$products]);
		exit;

	}

}