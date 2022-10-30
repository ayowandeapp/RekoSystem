<?php 
namespace app\controllers;
/**
 * 
 */
use app\core\App;

class Controller
{
	
	public static function render($views, $params=[]){
		return App::renderView($view,$params);

	}
}