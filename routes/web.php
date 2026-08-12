<?php

$router->get('', function(){
    (new homeController())->index();
});

$router->get("login", function(){
    (new authController())->showLogin();
});

$router->post("login", function(){
    (new authController())->login();
});

$router->get("register", function(){
    (new authController())->showRegister();
});

$router->post("register", function(){
    (new authController())->register(); 
});