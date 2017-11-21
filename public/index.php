<?php

//build a front controller, its a central entry point that handles request
//echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"'; 

// Routing which controller or action to run based on the routes coming from the URL (routing table)
require '../core/Router.php';

$router = new Router();

//echo get_class($router);

//lets add some routes in our frontcontroller
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new' ]);

//now lets display it
/*echo '<pre>';
var_dump($router->getRoutes());
echo '</pre>';*/

//lets match the request route
$url = $_SERVER['QUERY_STRING'];

if ($router->match($url)) {
    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
} else {
    echo "No route found for the URL '$url'";
}
?>