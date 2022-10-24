<?php


/**
 * 
 * front end controller
*/
class App{
	protected $controller = "UserController";
	protected $action = "index";

	protected $params = [];

	public function __construct(){
		$this->prepareURL();
		$this->render();
	}

	/**
	 * 
	 * extract controller,methods, parameters
	 * @return void
	 * */
	private function prepareURL(){

		$url = $_SERVER['QUERY_STRING'];
		if (!empty($url)) {
			$url = trim($url,"/");
			$url = explode("/", $url);
			//define the controller
			$this->controller = isset($url[0]) ? ucwords($url[0])."Controller":"UserController";
			//echo $this->controller;

			//define the action
			$this->action = isset($url[1]) ? $url[1]:"index";
			unset($url[0],$url[1]);

			$this->params = !empty($url) ? array_values($url):[];
			//var_dump($this->params);
		}

	}

	private function render(){
		if(class_exists($this->controller)){
			$controller = new $this->controller;
			if(method_exists($controller, $this->action)){
				call_user_func_array([$controller, $this->action],$this->params);

			}else{
				//echo 'method not found';
				header('Location: /');
			}


		}else{
			//echo 'this controller:'.$this->controller.' does not exist';
			header('Location: /');
		}
	}
}