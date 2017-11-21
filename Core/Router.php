<?php

// class Router (comments on top of syntax)
class Router{
    // the routing table, associative array of routes
    protected $routes = [];
    // Parameters from the matched route
    protected $params = [];
    //an method to ADD a route ($route, string) and a array that is a list of parameters($params, controllers actions etc)
    public function add($route, $params)
    {
        $this->routes[$route] = $params;
    }
// match method
   public function match($url)
    {
        foreach ($this->routes as $route => $params) {
            if ($url == $route) {
                $this->params = $params;
                return true;
            }
        }

        return false;
    }
    //Get all the routes from the table, return array so we can see what it contains
    public function getParams()
    {
        return $this->params;
    }
}

?>