<?php

//build a front controller, its a central entry point that handles request
//echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"'; 

// Routing which controller or action to run based on the routes coming from the URL (routing table)
require '../core/Router.php';

$router = new Router();

//echo get_class($router);

//lets add some routes in our frontcontroller
$router->add('', ['controller' => 'Home', 'Action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Post', 'action' => 'new' ]);

//now lets display it
echo '<pre>';
var_dump($router->getRoutes());
echo '</pre>';
?>