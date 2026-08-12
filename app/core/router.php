<?php

class Router
{
    private $routes = [];

    public function get($url, $callback){
        $url = trim($url, '/');
        $this->routes['GET'][$url] = $callback;
    }

    public function post($url, $callback){
        $url = trim($url, '/');
        $this->routes['POST'][$url] = $callback;
    }

    public function run(){
        $method = $_SERVER['REQUEST_METHOD'];

        $url = $_GET['url'] ?? '';

        $url = trim($url, '/');

        if(isset($this->routes[$method][$url])){
            call_user_func($this->routes[$method][$url]);
        }else{
            echo "404 Not Found";
        }
    }
}