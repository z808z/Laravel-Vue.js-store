<?php

use Illuminate\Http\Request;

use App\Appeal;
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

Route::get('categories', 'api\CategoryController@getAll');
Route::get('categories/{category}', 'api\ProductController@getProductsByCategory');


Route::get('categories/store', 'api\CategoryController@store');
Route::get('categories/update/{id_category}', 'api\CategoryController@update');
Route::get('categories/delete/{id_category}', 'api\CategoryController@delete');