<?php

$router = new \Bramus\Router\Router();

$router->set404(function () {
    echo 'Pagina nao encontrada - Http 404';
});

$router->mount('/v1/public/characters', function () use ($router) {
    $router->setNamespace('Controllers');
    $router->get('/', 'MarvelController@index');
    $router->get('/(\d+)', 'MarvelController@show');
    $router->get('/(\d+)/comics', 'MarvelController@getComics');
    $router->get('/(\d+)/events', 'MarvelController@getEvents');
    $router->get('/(\d+)/series', 'MarvelController@getSeries');
    $router->get('/(\d+)/stories', 'MarvelController@getStories');
});

$router->run();
