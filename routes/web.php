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


Route::post('register', [UserController::class,'register'])->name('register');

//user
Route::get('userlist', [UserController::class,'showUserlistForm']);
Route::get('userdelete', [UserController::class,'showUserdeleteForm']);
Route::get('useradd', [UserController::class,'showUseraddForm'])->name('useradd');
Route::get('useredit', [UserController::class,'showUsereditForm']); 


//category
Route::get('categorylist', [CategoryController::class,'showCategorylistForm']);
Route::get('categorydelete', [CategoryController::class,'showCategorydeleteForm']);
Route::get('categoryadd', [CategoryController::class,'showCategoryaddForm']);
Route::get('categoryedit', [CategoryController::class,'showCategoryeditForm']); 


//product
Route::get('productlist', [ProductController::class,'showProductlistForm']);
Route::get('productdelete', [ProductController::class,'showProductdeleteForm']);
Route::get('productadd', [ProductController::class,'showProductaddForm']);
Route::get('productedit', [ProductController::class,'showProducteditForm']);

});