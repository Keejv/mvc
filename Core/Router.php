<?php

// Router
class Router{
    // the routing table, associative array of routes
    protected $routes = [];
    //an method to ADD a route ($route, string) and a array that is a list of parameters($params, controllers actions etc)
    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }
    //Get all the routes from the table, return array so we can see what it contains
    public function getRoutes()
    {
        return $this->routes;
    }
}

?>