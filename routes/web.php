<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontened\AboutUsController;
use App\Http\Controllers\Frontened\BlogGridSidebarController;
use App\Http\Controllers\Frontened\BlogSingleController;
use App\Http\Controllers\Frontened\BlogSingleSidebarController;
use App\Http\Controllers\Frontened\CartController;
use App\Http\Controllers\Frontened\CheckoutController;
use App\Http\Controllers\Frontened\ContactASController;
use App\Http\Controllers\Frontened\FaqController;
use App\Http\Controllers\Frontened\FourZeroFourController;
use App\Http\Controllers\Frontened\HomeController;
use App\Http\Controllers\Frontened\LoginController;
use App\Http\Controllers\Frontened\MailSuccessController;
use App\Http\Controllers\Frontened\ProductDetailsController;
use App\Http\Controllers\Frontened\ProductGridController;
use App\Http\Controllers\Frontened\ProductListController;
use App\Http\Controllers\Frontened\RegisterController;

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




Route::get('/',[HomeController::class,'index']);
Route::get('/signin',[LoginController::class,'index']);
Route::get('/aboutus',[AboutUsController::class,'index']);
Route::get('//blog-grid-sidebar',[BlogGridSidebarController::class,'index']);
Route::get('/blog-single',[BlogSingleController::class,'index']);
Route::get('/blog-single-sidebar',[BlogSingleSidebarController::class,'index']);
Route::get('/ViewCart',[CartController::class,'index']);        //cart.html
Route::get('/checkout',[CheckoutController::class,'index']);
// Route::get('/',[CheckoutController::class,'index']);
Route::get('/contact',[ContactASController::class,'index']);
Route::get('/Faq',[FaqController::class,'index']);
Route::get('/FourZeroFour',[FourZeroFourController::class,'index']);
// Route::get('/',[LoginController::class,'index']);
Route::get('/mailsuccess',[MailSuccessController::class,'index']);
Route::get('/product-details',[ProductDetailsController::class,'index']);
Route::get('/ProductGrid',[ProductGridController::class,'index']);
Route::get('/ProductList',[ProductListController::class,'index']);
Route::get('/register',[RegisterController::class,'index']);

