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

Route::post('usercreate', [UserController::class,'usercreate'])->name('usercreate');

//user
Route::get('userlist', [UserController::class,'showUserlistForm'])->name('userlist');
Route::get('userdelete', [UserController::class,'showUserdeleteForm'])->name('userdelete');
Route::get('useradd', [UserController::class,'showUseraddForm'])->name('useradd');
Route::get('useredit', [UserController::class,'showUsereditForm'])->name('useredit');


//category
Route::get('categorylist', [CategoryController::class,'showCategorylistForm'])->name('categorylist');
Route::get('categorydelete', [CategoryController::class,'showCategorydeleteForm'])->name('categorydelete');
Route::get('categoryadd', [CategoryController::class,'showCategoryaddForm'])->name('categoryadd');
Route::get('categoryedit', [CategoryController::class,'showCategoryeditForm'])->name('categoryedit'); 


//product
Route::get('productlist', [ProductController::class,'showProductlistForm'])->name('productlist');
Route::get('productdelete', [ProductController::class,'showProductdeleteForm'])->name('productdelete');
Route::get('productadd', [ProductController::class,'showProductaddForm'])->name('productadd');
Route::get('productedit', [ProductController::class,'showProducteditForm'])->name('productedit');

});