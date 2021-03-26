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
// -------------------------------------ADMIN-------------------------------------
Route::get('/admin', function () {
    return view('admin/admin');
})->name('admin');


 //  ----------------------------------product-------------------------------------

    //get
Route::get('/food', [ProductsController::class, 'getFood'])->name('food');
Route::get('/toy', [ProductsController::class, 'getToy'])->name('toy');
Route::get('/medicine', [ProductsController::class, 'getMedicine'])->name('medicine');

    // insert

Route::get('/newProduct', function () {
    return view('admin/product/newProduct');
})->name('newProduct');

Route::post('/addProduct', [ProductsController::class, 'addProduct']);

    // update

Route::get('/updateProduct/{id}', [ProductsController::class, 'findId']);
Route::post('/upProduct/{id}', [ProductsController::class, 'upProduct']);
//Route::get('/upProduct', function () {
//    return view('admin/upProduct');
//})->name('upProduct');

    // Delete

Route::get('/delProduct/{id}', [ProductsController::class, 'delProduct']);
//API SEARCH

Route::post('/searchProduct', [ProductsController::class, 'find']);


 //--------------------------------Cat-------------------------------------
    //get
Route::get('adminCat',[CatsController::class,'adminGetList'])->name('adminCat');
    //Insert
Route::get('/newCat', function () {
    return view('admin/cat/newCat');
})->name('newCat');
Route::post('/addCat', [CatsController::class, 'addCat']);
    //Update
Route::get('/updateCat/{id}', [CatsController::class, 'findId']);
Route::post('/upCat/{id}', [CatsController::class, 'upCat']);

    //Delete
Route::get('/delCat/{id}', [CatsController::class, 'delCat']);
    //search

Route::post('/searchCat', [CatsController::class, 'find']);

//--------------------------------User-------------------------------------
    //get
Route::get('/adminUser',[UsersController::class,'getUserAdmin'])->name('adminUser');
Route::get('/standardUser',[UsersController::class,'getUserStandard'])->name('standardUser');
    //Insert
Route::get('/newUser', function () {
    return view('admin/user/newUser');
})->name('newUse');
    //Update
Route::get('/updateUser/{id}', [UsersController::class, 'findId']);
Route::post('/upUser/{id}', [UsersController::class, 'upUser']);

    //Delete
Route::get('/delUser/{id}', [UsersController::class, 'delUser']);
    //Search
Route::post('/searchUser', [UsersController::class, 'find']);






//GUEST
Route::get('/homeGuest', [PostsController::class, 'getPost'])->name('homeGuest');



//User
Route::get('/home', [PostsController::class, 'getListPost'])->name('home');
Route::get('/cat', [CatsController::class, 'getListCat'])->name('cat');
Route::get('/store', [ProductsController::class, 'getListProduct'])->name('store');
Route::get('/user/{id}', [UsersController::class, 'getUser'])->name('userDetail');


Route::post('/addUser', [UsersController::class, 'addUser']);
Route::post('/addPost', [PostsController::class, 'addPost']);



Route::put('upPost/{id}', [PostsController::class, 'upPost']);

Route::delete('/delPost/{id}', [PostsController::class, 'delPost']);







Route::get('/flappy', function () {
    return view('flappy');
});

Route::get('/log', function () {
    return view('log/login');
})->name('log');

Route::get('/sign', function () {
    return view('log/signUp');
})->name('sign');

Route::get('/', function () {
    return view('display');
});

