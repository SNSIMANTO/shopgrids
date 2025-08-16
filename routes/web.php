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
