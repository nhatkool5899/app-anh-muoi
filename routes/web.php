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
Route::post('/add-product-cart', [PageController::class, 'add_product_cart']);
Route::post('/update-item-quantity', [PageController::class, 'update_item_quantity']);
Route::post('/delete-item-cart', [PageController::class, 'delete_item_cart']);
Route::get('/delete-all-item', [PageController::class, 'delete_all_item']);
Route::post('/customer-order', [PageController::class, 'customer_order']);



Route::get('/admin', [AdminController::class, 'index']);
Route::post('/login', [AdminController::class, 'login']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);


Route::resource('/product', ProductController::class);
Route::resource('/sale', SalesController::class);
