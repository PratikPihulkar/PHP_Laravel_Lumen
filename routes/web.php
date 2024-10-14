<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use App\database\factories;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProductCategoryFactoryController;


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
    return 'Program Is Running';
    // return $router->app->version();
});

$router->get('postProduct', function () use ($router) {
    return $router->app->version();
});



Route::get('/create_product_categories', function () {
    
    return '10 Product Categories Created!';
});

Route::get('/insert_products','ProductCategoryFactoryController@insert_products');