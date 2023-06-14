<?php 

 require_once '../vendor/autoload.php';
 use app\core\Application;

$app = new Application();


$app->router->get('/public/',function(){
   return "hello world";
});

$app->router->get('/contact/',function(){
   return "Contact";
});



$app->run();

?>