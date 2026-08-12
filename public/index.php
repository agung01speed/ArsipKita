<?php

require '../app/core/Router.php';

require '../app/controllers/HomeController.php';
require '../app/controllers/AuthController.php';

$router = new Router();

require '../routes/web.php';
$router->run();
?>