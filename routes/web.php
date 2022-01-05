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
    return "<h1>Welcome to Isra Arts API</h1>";
});



$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('/register', 'AuthController@register');
    $router->post('/login', 'AuthController@login');

    // For category
    $router->get('/categories', 'CategoryController@index');
    $router->post('/addCategory', 'CategoryController@store');
    $router->post('/category/{id}', 'CategoryController@update');
    $router->delete('/category/{id}', 'CategoryController@destroy');

    // For Subcategory
    $router->get('/subcategories', 'SubcategoryController@index');
    $router->post('/addsubcategory', 'SubcategoryController@store');
    $router->post('/editsubcategory/{id}', 'SubcategoryController@update');
    $router->delete('/deletesubcategory/{id}', 'SubcategoryController@destroy');

    // For products
    $router->get('/products', 'ProductsController@index');
    $router->post('/addproduct', 'ProductsController@store');
    $router->post('/product/{id}', 'ProductsController@update');
    $router->delete('/product/{id}', 'ProductsController@destroy');

    // For products attributes
    $router->get('/attributes', 'ProductAttributeController@index');
    $router->post('/addattribute', 'ProductAttributeController@store');
    $router->post('/editattribute/{id}', 'ProductAttributeController@update');
    $router->delete('/deleteattribute/{id}', 'ProductAttributeController@destroy');

    // For products attribute values
    $router->get('/attributevalue', 'AttributeValueController@index');
    $router->post('/addattrvalue', 'AttributeValueController@store');
    $router->post('/editattrvalue/{id}', 'AttributeValueController@update');
    $router->delete('/deleteattrvalue/{id}', 'AttributeValueController@destroy');

    $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->post('/logout', 'AuthController@logout');
        $router->get('/posts', 'PostController@index');
        $router->post('/posts', 'PostController@store');
        $router->put('/posts/{id}', 'PostController@update');
        $router->delete('/posts/{id}', 'PostController@destroy');
    });
});