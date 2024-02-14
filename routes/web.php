<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardIndexController;
use App\Http\Controllers\LoginuserController;
use Illuminate\Support\Facades\Auth;

use App\Models\country;
use App\Models\category;
use App\Models\categoryproduct;
use App\Models\product;
use App\Models\About;
use App\Models\Post;



Route::get('/', function () {
            $modelPost = new Post;
            $Posts=$modelPost->getListPost();
            $Countries=country::all();
            $Categoryproducts = categoryproduct::all();
            $Categorys = category::all();
            $Products = product::all();
            $Abouts = About::all();
            return view('index.index',["title"=>"home","active"=>"index"],compact('Categoryproducts','Products','Abouts','Categorys','Posts'));
        })->name('login')->middleware('guest');

Route::get('/logingiganfive', function () {
            return view('login.index',["title"=>"home","active"=>"index"]);
        })->name('login')->middleware('guest');

Route::get('/loginuser', function () {
            return view('login.login',["title"=>"home","active"=>"login"]);
            })->name('login')->middleware('guest');


Route::post('/login',  [LoginController::class,'autenticate']);
Route::post('/loginusercek',  [LoginUserController::class,'autenticate']);
Route::post('/logout',  [LoginController::class,'logout']);
Route::post('/logoutuser',  [LoginUserController::class,'logout']);
Route::resource('/index',\App\Http\Controllers\IndexController::class);
Route::resource('/visitor', \App\Http\Controllers\VisitorController::class);
Route::resource('/register',\App\Http\Controllers\UserController::class);

Route::group(["middleware"=>["auth"]],function(){
Route::resource('/users',\App\Http\Controllers\UserAdminController::class);
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::resource('/abouts', \App\Http\Controllers\AboutController::class);
Route::resource('/members', \App\Http\Controllers\MemberController::class);
Route::resource('/countrys', \App\Http\Controllers\CountryController::class);
Route::resource('/categorys', \App\Http\Controllers\CategoryController::class);
Route::resource('/categoryproducts', \App\Http\Controllers\CategoryProductController::class);
Route::resource('/imageproducts', \App\Http\Controllers\ImageController::class);
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/shippingcosts', \App\Http\Controllers\ShippingcostController::class);
Route::resource('/dashboardindexs', \App\Http\Controllers\DashboardIndexController::class);
Route::resource('/shoppingcarts', \App\Http\Controllers\ShoppingCartController::class);
Route::resource('/transactions', \App\Http\Controllers\TransactionController::class);
Route::get('/dashboard',  [DashboardController::class,'index']);
});
