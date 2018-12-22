<?php
/**
 * * Created by PhpStorm.
 * User: Kalys
 * Date: 22.12.18
 * Time: 18:17
 */

require_once 'vendor/autoloader.php';
$_config = include 'config/config.php';

$router = new Router();
$config = new Config($_config);

$router->get("/",function (){
  echo "index";
});

$router->get("/test",function (){
  return new View("test",[
    "name" => $_GET['name']
  ]);
});


$application = new Application($router,$config);
$application->run();