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
// ADMIN
Route::get('adminCat',[CatsController::class,'adminGetList'])->name('adminCat');

Route::get('/home', [PostsController::class, 'getListPost'])->name('home');
Route::get('/cat', [CatsController::class, 'getListCat'])->name('cat');
Route::get('/store', [ProductsController::class, 'getListProduct'])->name('store');
Route::get('/user/{id}', [UsersController::class, 'getUser'])->name('userDetail');
Route::get('/food', [ProductsController::class, 'getFood'])->name('food');
Route::get('/toy', [ProductsController::class, 'getToy'])->name('toy');
Route::get('/medicine', [ProductsController::class, 'getMedicine'])->name('medicine');
Route::get('/updateProduct/{id}', [ProductsController::class, 'findId']);


Route::post('/addUser', [UsersController::class, 'addUser']);
Route::post('/addPost', [PostsController::class, 'addPost']);
Route::post('/addCat', [CatsController::class, 'addCat']);
Route::post('/addProduct', [ProductsController::class, 'addProduct']);
Route::post('/addCmt', [CommentsController::class, 'addCmt']);


Route::put('/upUser/{id}', [UsersController::class, 'upUser']);
Route::put('upPost/{id}', [PostsController::class, 'upPost']);
Route::put('/upCat/{id}', [CatsController::class, 'upCat']);
Route::post('/upProduct/{id}', [ProductsController::class, 'upProduct']); // da sua
Route::put('/upCmt/{id}', [CommentsController::class, 'upCmt']);

Route::delete('/delUser/{id}', [UsersController::class, 'delUser']);
Route::delete('/delPost/{id}', [PostsController::class, 'delPost']);
Route::delete('/delCat/{id}', [CatsController::class, 'delCat']);
Route::get('/delProduct/{id}', [ProductsController::class, 'delProduct']); // da sua
Route::delete('/delCmt/{id}', [CommentsController::class, 'delCmt']);
//API SEARCH
Route::post('/searchProduct', [ProductsController::class, 'find']);



Route::get('/admin', function () {
    return view('admin/admin');
})->name('admin');

Route::get('/flappy', function () {
    return view('flappy');
});
Route::get('/newProduct', function () {
    return view('admin/addProduct');
})->name('newProduct');

Route::get('/upProduct', function () {
    return view('admin/upProduct');
})->name('upProduct');

Route::get('/log', function () {
    return view('log/login');
})->name('log');

Route::get('/sign', function () {
    return view('log/signUp');
})->name('sign');

Route::get('/', function () {
    return view('display');
});

