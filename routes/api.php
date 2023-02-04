<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articles/getAll','App\Http\Controllers\ArticleController@index');
Route::post('/articles/create','App\Http\Controllers\ArticleController@store');
Route::put('/articles/update/{art_id}', 'App\Http\Controllers\ArticleController@update');
Route::delete('/articles/delete/{art_id}', 'App\Http\Controllers\ArticleController@destroy');
Route::get('/articles/getSingle/{art_id}', 'App\Http\Controllers\ArticleController@show');

Route::get('/subarticles/getAll','App\Http\Controllers\SubArticleController@index');
Route::post('/subarticles/create','App\Http\Controllers\SubArticleController@store');
Route::put('/subarticles/update/{subart_id}', 'App\Http\Controllers\SubArticleController@update');
Route::delete('/subarticles/delete/{subart_id}', 'App\Http\Controllers\SubArticleController@destroy');
