<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Home\HomeController;

Route::get('/', function () {
    return view('login');
});

Route::get('home', [HomeController::class,'showHomeForm'])->name('home');

Route::post('login', [LoginController::class, 'login']); 
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login'); 

Route::get('logout', [LoginController::class, 'logout'])->name('logout'); 

Route::middleware(['auth', 'auth.session'])->group(function () {

//user
Route::get('userlist', [UserController::class,'index'])->name('userlist');
Route::get('useradd', [UserController::class,'create'])->name('useradd');

Route::get('useredit/{id}', [UserController::class, 'edit'])->name('useredit');
Route::post('userupdate/{id}', [UserController::class, 'update'])->name('userupdate');

Route::post('usercreate', [UserController::class,'store'])->name('usercreate');
Route::get('userdelete/{id}', [UserController::class,'destroy'])->name('userdelete');
Route::post('userbulkdelete', [UserController::class, 'bulkDelete'])->name('userbulkdelete');

//category
Route::get('categorylist', [CategoryController::class,'index'])->name('categorylist');
Route::get('categoryadd', [CategoryController::class,'create'])->name('categoryadd');

Route::get('categoryedit/{id}', [CategoryController::class, 'edit'])->name('categoryedit');
Route::post('categoryupdate/{id}', [CategoryController::class, 'update'])->name('categoryupdate');

Route::post('categorycreate', [CategoryController::class,'store'])->name('categorycreate');
Route::get('categorydelete/{id}', [CategoryController::class,'destroy'])->name('categorydelete');

//product
Route::get('productlist', [ProductController::class,'index'])->name('productlist');
Route::get('productadd', [ProductController::class,'create'])->name('productadd');

Route::get('productedit/{id}', [ProductController::class, 'edit'])->name('productedit');
Route::post('productupdate/{id}', [ProductController::class, 'update'])->name('productupdate');

Route::post('productcreate', [ProductController::class,'store'])->name('productcreate');    
Route::get('productdelete/{id}', [ProductController::class,'destroy'])->name('productdelete');

});