<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CommentsController;
use \App\Http\Controllers\PostsController;
use \App\Http\Controllers\CatsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\EmailController;

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
Route::get('/admin',[UsersController::class,'getAdmin'])->name('admin');
Route::get('/inforAdmin',[UsersController::class,'inforAdmin'])->name('inforAdmin');
//edit user detail
Route::get('/userAdmin/{id}', [UsersController::class, 'getUserAdmin']);
Route::get('userAdmin/updateUserPageAdmin/{id}',[UsersController::class,'updateUserPageAdmin']);
Route::get('upUserPageAdmin/updateUserPageAdmin/{id}',[UsersController::class,'updateUserPageAdmin']);
Route::post('/upUserPageAdmin/{id}', [UsersController::class, 'upUserPageAdmin']);

 //  ----------------------------------product-------------------------------------

    //get && sort + paginate VUE
Route::get('/food', function (){
    return view('admin-page/admin/product/menuFood');
})->name('food');

Route::get('/getFood', [ProductsController::class, 'getFood'])->name('getFood');

Route::get('/toy', function (){
    return view('admin-page/admin/product/menuToy');
})->name('toy');

Route::get('/getToy', [ProductsController::class, 'getToy'])->name('getToy');

Route::get('/getMedicine', [ProductsController::class, 'getMedicine'])->name('getMedicine');

Route::get('/medicine', function () {
    return view('admin-page/admin/product/menuMedicine');
})->name('medicine');



    // insert

Route::get('/newProduct', function () {
    return view('admin-page/admin/product/newProduct');
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
Route::get('/getCat',[CatsController::class,'getCat'])->name('getCat');
Route::get('/adminCat', function () {
    return view('admin-page/admin/cat/adminCat');
})->name('adminCat');
    //Insert
Route::get('/newCat', function () {
    return view('admin-page/admin/cat/newCat');
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
Route::get('/getAdminUser',[UsersController::class,'getAdminUser'])->name('getAdminUser');
Route::get('adminUser',function (){
    return view('admin-page/admin/user/adminUser');
})->name('adminUser');
Route::get('/getStandardUser',[UsersController::class,'getStandardUser'])->name('getStandardUser');
Route::get('standardUser',function (){
    return view('admin-page/admin/user/adminStandard');
});
    //Insert

Route::get('/newUser', function () {
    return view('admin-page/admin/user/newUser');
})->name('newUser');
Route::post('addUser',[UsersController::class,'addUser'])->name('addUser');

    //Update
Route::get('/updateUser/{id}', [UsersController::class, 'findId']);
Route::post('/upUser/{id}', [UsersController::class, 'upUser']);

    //Delete
Route::get('/delUser/{id}', [UsersController::class, 'delUser']);
    //Search
Route::post('/searchUser', [UsersController::class, 'find']);






//page standard
Route::get('/homeStandard', [PostsController::class, 'getPost'])->name('homeStandard');
//admin
Route::get('/home', [PostsController::class, 'getListPost'])->name('home');

//-------------------------------Login-----------------------
Route::get('getAuthLogin',[UsersController::class,'getAuthLogin'])->name('getAuthLogin');
Route::post('postAuthLogin',[UsersController::class,'postAuthLogin'])->name('postAuthLogin');

//-------------------------------LogOut-----------------------
Route::get('logOut',[UsersController::class,'logOut'])->name('logOut');


Route::get('/cat', [CatsController::class, 'getListCat'])->name('cat');


Route::get('/user/{id}', [UsersController::class, 'getUser'])->name('userDetail');


Route::post('/regisUser', [UsersController::class, 'regisUser'])->name('register');
Route::post('/addPost', [PostsController::class, 'addPost']);



Route::put('upPost/{id}', [PostsController::class, 'upPost']);

Route::delete('/delPost/{id}', [PostsController::class, 'delPost']);
//Product

Route::get('/stores', [ProductsController::class, 'getListProduct'])->name('stores');
Route::get("/sFood",[ProductsController::class,'getFoodStore'])->name('sFood');
Route::get("/sToy",[ProductsController::class,'getToyStore'])->name('sToy');
Route::get("/sMedicine",[ProductsController::class,'getMedicineStore'])->name('sMedicine');



//User Standard
Route::get('/gCat', [CatsController::class, 'getListCatStandard'])->name('gCat');

Route::get('/gStores', [ProductsController::class, 'getListProductStandard'])->name('gStores');
Route::get("/gSFood",[ProductsController::class,'getFoodStoreStandard'])->name('gSFood');
Route::get("/gSToy",[ProductsController::class,'getToyStoreStandard'])->name('gSToy');
Route::get("/gSMedicine",[ProductsController::class,'getMedicineStoreStandard'])->name('gSMedicine');

//UpdateUser Standard
Route::get('user/updateUserPage/{id}',[UsersController::class,'updateUserPage'])->name('updateUserPage');
Route::get('upUserPage/updateUserPage/{id}',[UsersController::class,'updateUserPage'])->name('updateUserPage');

Route::post('/upUserPage/{id}', [UsersController::class, 'upUserPage']);

Route::post('/addPostStandard', [PostsController::class, 'addPostStandard']);

Route::get('/flappy',[UsersController::class,'game'])->name('falppy');



Route::get('/sign', function () {
    return view('log/signUp');
})->name('sign');

Route::get('/', function () {
    return view('display');
});


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Mail
Route::group(['prefix'=>'email'],function(){
    Route::get('/form', function () {
        return view('mail.pages.email');
    });
    Route::get('/success',function(){
        return view('mail.pages.success');
    });
    Route::post('/form','EmailController@store');
});
