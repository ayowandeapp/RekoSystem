<?php

//define("ROOT_PATH",dirname(__DIR__));

//require_once('autoload.php');
require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\HomeController;
use app\controllers\ProductController;
use app\controllers\UserController;
use app\core\App;

$app = new App();

$app->get('/', [UserController::class,'index']);

$app->get('/user/add_user', [UserController::class,'add_user']);
$app->post('/user/add_user', [UserController::class,'add_user']);

$app->post('/product/list_product', [ProductController::class,'list_product']);

$app->post('/product/add_product', [ProductController::class,'add_product']);

$app->post('/user/user_recommend', [UserController::class,'user_recommend']);

$app->get('/users', 'contact');
$app->post('/users', [HomeController::class,'index']);

$app->run();

?>