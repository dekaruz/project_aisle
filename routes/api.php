<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product/search', 'ProductController@search');
Route::post('/product/store', 'ProductController@store');
Route::put('/product/update', 'ProductController@update');
Route::delete('/product/delete', 'ProductController@delete');
Route::delete('/product/show', 'ProductController@show');