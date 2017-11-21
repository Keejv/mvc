<?php

//build a front controller
//echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"'; 

// Routing
require '../core/Router.php';

$router = new Router();

//echo get_class($router);

//lets add some routes in our frontcontroller
$router->add('', ['controller' => 'Home', 'Action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Post', 'action' => 'new' ]);

//now lets try to display it
echo '<pre>';
var_dump($router->getRoutes());
echo '</pre>';
?>