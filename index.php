<?php
// echo 'a';

// Require composer autoloader
require 'vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->get('/teste', function () {
    echo 'Teste';
});

$router->get('/teste/{id}', function ($id) {
    echo 'Teste ' . $id;
});

$router->run();