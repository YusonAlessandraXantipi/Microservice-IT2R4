<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/users', ['uses' => 'UserController@getUsers']);

    $router->get('/users', 'UserController@index');//get all users records
    $router->post('/users', 'UserController@addUser');//create new user record
    $router->get('/users/{id}', 'UserController@show');//get user by id
    $router->put('/users/{id}', 'UserController@update');//update user record
    $router->patch('/users/{id}', 'UserController@update');//update user record
    $router->delete('/users/{id}', 'UserController@delete');//delete record