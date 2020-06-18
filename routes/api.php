<?php

use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
$router->group(['prefix' => 'V1', 'namespace' => 'V1'], function () use ($router) {

        // $router->post('login', 'App\\Http\\V1\\ApiController@login');

    $router->post('login', 'ApiController@login');
    Route::post('register', 'ApiController@register');

    $router->group(['middleware' => 'auth.jwt'], function () use ($router) {

    $router->get('logout', 'ApiController@logout');
    $router->get('user', 'ApiController@getAuthUser');
    $router->get('products', 'ProductController@index');
    $router->get('products/{id}', 'ProductController@show');
    $router->post('products', 'ProductController@store');
    $router->put('products/{id}', 'ProductController@update');
    $router->delete('products/{id}', 'ProductController@destroy');

});

});


