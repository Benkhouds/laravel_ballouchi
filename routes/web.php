<?php

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


Route::get('/prod/{product}', [ProductController::class, 'index']);
Route::get('/order/{order}', [OrderController::class, 'index']);


Route::get('/products',[ProductController::class],'store');
Route::post('/products',[ProductController::class],'store');

require __DIR__.'/auth.php';
