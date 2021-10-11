<?php

spl_autoload_register(function ($class) {
  $root = dirname(__DIR__);
  $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
  if(is_readable($file)) {
    require $file;
  }
});

// require '../App/Controllers/Posts.php';
// require '../Core/Router.php';
$router = new Core\Router();

$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
// $router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

$url = $_SERVER['QUERY_STRING'];

  // echo '<pre>';
  // // var_dump($router->getParams());
  // echo htmlspecialchars(print_r($router->getRoutes(), true));
  // echo '</pre>';

// if($router->match($url)) {
//   echo '<pre>';
//   var_dump($router->getParams());
//   echo '</pre>';
// }

$router->dispatch($url);