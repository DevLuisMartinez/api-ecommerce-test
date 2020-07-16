<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Product Route
$router->get('/products', 'ProductController@index');

//Cart Route
$router->get('/cart/current', 'CartController@getCurrentCart');
$router->post('/cart/products', 'CartController@addProductsCart');
$router->post('/cart/checkout', 'CartController@checkoutCart');