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

Route::apiResource('/posts','API\PostController');
Route::apiResource('/category','API\CategoryController');
Route::apiResource('/tag','API\TagController');
Route::get('/trending','API\HomeController@trending');
Route::get('/category-name/{slug}','API\CategoryController@getName');
