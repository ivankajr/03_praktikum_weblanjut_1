<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;

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


// 1. Route Biasa
Route::get('/', [HomeController::class, 'home']);

// 2 & 4. Route Prefix
Route::prefix('product') -> group(function() {
    Route::get('/', [HomeController::class, 'product']);
});
Route::prefix('program') -> group(function() {
    Route::get('/', [HomeController::class, 'program']);
});

// 3. Route Param
Route::get('/news/{title}', [HomeController::class, 'news']);

// 4. Route Biasa
Route::get('/about-us', [HomeController::class, 'aboutus']);

// 5. Route Resource
Route::resource('/contact-us', ContactController::class, [
    'only' => ['index']
]);
