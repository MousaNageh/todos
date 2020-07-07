<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/todos","todosController@index") ;
Route::get("/new-todos","todosController@create") ;
Route::get("/todos/{todos}","todosController@show") ;
Route::post("/store-todos","todosController@store") ;
Route::get("/todos/{todos}/edit","todosController@edit") ;
Route::post("/todos/{todos}/update-todos","todosController@update") ;
Route::get("/todos/{todos}/delete","todosController@destroy") ;
Route::get("todos/{todos}/complete","todosController@complete") ;
