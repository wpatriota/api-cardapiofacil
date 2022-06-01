<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

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

Route::get('products', 'ProductController@index');
Route::get('products',[ProductController::class, 'index']);
Route::get('products/{id}', 'ProductController@show');
Route::post('products', 'ProductController@store');
Route::put('products/{id}', 'ProductController@update');
Route::delete('products/{id}', 'ProductController@delete');

Route::post('register', 'Auth\RegisterController@register');

Route::get('categories',[CategoryController::class, 'index']);

Route::get('colaboradores',[CategoryController::class, 'index']);
Route::get('colaboradores/{id}',[CategoryController::class, 'show']);

Route::get('fichatecnica',[CategoryController::class, 'index']);
Route::get('fichatecnica/{id}',[CategoryController::class, 'show']);

Route::get('insumos',[CategoryController::class, 'index']);
Route::get('insumos/{id}',[CategoryController::class, 'show']);

Route::get('insumos',[CategoryController::class, 'index']);
Route::get('insumos/{id}',[CategoryController::class, 'show']);

Route::get('customensal',[CategoryController::class, 'index']);
Route::get('customensal/{id}',[CategoryController::class, 'show']);