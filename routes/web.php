<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class], 'store');

Route::get('/order/{order}', [OrderController::class, 'index']);





Route::get('/order', [OrderController::class, 'show']);
Route::get('/order', [OrderController::class, 'store']);

Route::get('/address', [AddressController::class, 'index']);
Route::post('/address', [AddressController::class, 'store']);
Route::get('/address/{id}', [AddressController::class, 'show']);
Route::delete('/address/{id}', [AddressController::class, 'destroy']);

Route::post('/addToCartItem', [CartItemController::class, 'store']);
require __DIR__ . '/auth.php';
