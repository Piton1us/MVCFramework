<?php 

 require_once '../vendor/autoload.php';




 use app\core\Application;

$app = new Application(dirname(__DIR__));


$app->router->get('/public/','home');

$app->router->get('/views/','contact');



$app->run();

?>