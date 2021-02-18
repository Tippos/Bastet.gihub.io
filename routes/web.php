<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CommentsController;
use \App\Http\Controllers\PostsController;
use \App\Http\Controllers\CatsController;
use App\Http\Controllers\ProductsController;

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
Route::get('/home', [PostsController::class, 'getListPost']);
Route::get('/cat', [CatsController::class, 'getListCat']);
Route::get('/store', [ProductsController::class, 'getListProduct']);
Route::get('/user/{id}',[UsersController::class,'getUser']);

Route::post('/addUser', [UsersController::class, 'addUser']);
Route::post('/addPost', [PostsController::class, 'addPost']);
Route::post('/addCat', [CatsController::class, 'addCat']);
Route::post('addProduct', [ProductsController::class, 'addProduct']);
Route::post('addCmt', [CommentsController::class, 'addCmt']);


Route::put('/upUser/{id}', [UsersController::class, 'upUser']);
Route::put('upPost/{id}', [PostsController::class, 'upPost']);
Route::put('/upCat/{id}', [CatsController::class, 'upCat']);
Route::put('/upProduct/{id}', [ProductsController::class, 'upProduct']);
Route::put('/upCmt/{id}', [CommentsController::class, 'upCmt']);

Route::delete('/delUser/{id}', [UsersController::class, 'delUser']);
Route::delete('/delPost/{id}', [PostsController::class, 'delPost']);
Route::delete('/delCat/{id}', [CatsController::class, 'delCat']);
Route::delete('/delProduct/{id}', [ProductsController::class, 'delProduct']);
Route::delete('/delCmt/{id}', [CommentsController::class, 'delCmt']);

Route::get('/', function () {
    return view('home');
});
