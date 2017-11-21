<?php

// Router
class Router{
    // the routing table
    protected $routes = [];
    //something about $params Parameters etc, loko into this again
    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }
    //Get all the routes from the table, return array
    public function getRoutes()
    {
        return $this->routes;
    }
}

?>