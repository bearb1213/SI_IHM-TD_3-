<?php

use flight\Engine;
use flight\net\Router;
//use Flight;
use app\controllers\PanneController;



/** 
 * @var Router $router 
 * @var Engine $app
 */


$router->get("/",function(){
	Flight::render("index");
});

