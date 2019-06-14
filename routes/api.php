<?php

$api                 = app('Dingo\Api\Routing\Router');
$baseControllersPath = 'App\Api\v1\Controllers\\';

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api->version('v1', function (\Dingo\Api\Routing\Router $api) use ($baseControllersPath) {

    $api->post('register', $baseControllersPath . 'AuthController@register');

    $api->get('login', $baseControllersPath . 'AuthController@login');

    $api->get('logout', $baseControllersPath . 'AuthController@logout');

});

$api->version('v1', ['middleware' => ['jwt.auth']], function (\Dingo\Api\Routing\Router $api) use ($baseControllersPath) {

    $api->resource('todos', $baseControllersPath . 'TodoController', ['only' => ['index', 'store', 'show', 'update', 'destroy']]);

    $api->resource('like', $baseControllersPath . 'LikeController', ['only' =>['store', 'destroy']]);

    $api->resource('comment', $baseControllersPath . 'CommentController', ['only' =>['store', 'destroy']]);

    $api->get('todo/like', $baseControllersPath . 'TodoController@getLikedTodos');

    $api->get('todo/comment', $baseControllersPath . 'TodoController@getCommentedTodos');

});