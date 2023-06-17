<?php 

 require_once '../vendor/autoload.php';
 use app\core\Application;

$app = new Application();


$app->router->get('/public/','home');

$app->router->get('/contact/','contact');



$app->run();

?>