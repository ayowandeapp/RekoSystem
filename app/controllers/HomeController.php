<?php 
namespace app\controllers;
/**
 * 
 */
use app\core\App;
class HomeController extends Controller
{
	
	public static function index(){
		//echo $id;
		//require_once(VIEWS.'home.php');
		//echo "this class is : ".__class__." and method is: ".__method__;
		
		// $data['title'] = 'home page';
		// $data['content'] = 'content of the homepage';
		$params = [
			'name'=> 'wande'];
		return App::renderView('contact',$params);

		//View::load('home');

	}
		public static function home(){
		//echo $id;
		//require_once(VIEWS.'home.php');
		//echo "this class is : ".__class__." and method is: ".__method__;
		
		// $data['title'] = 'home page';
		// $data['content'] = 'content of the homepage';
		$params = [
			'name'=> 'wande'];
		return App::renderView('index');

		//View::load('home');

	}
}