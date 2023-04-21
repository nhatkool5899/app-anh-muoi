<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Front-end
Route::get('/', [PageController::class, 'sale']);
Route::get('/trang-chu', [PageController::class, 'sale']);
Route::get('/gio-hang', [PageController::class, 'cart']);



Route::get('/admin', [AdminController::class, 'index']);
Route::post('/login', [AdminController::class, 'login']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);


Route::resource('/product', ProductController::class);
Route::resource('/sale', SalesController::class);
