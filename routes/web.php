<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('/marbeledugames', [App\Http\Controllers\ProductController::class, 'marbeledugames']);
});

Route::get('/news/{id}', [App\Http\Controllers\NewsController::class, 'berita']);

Route::prefix('program')->group(function () {
    Route::get('/karir', [App\Http\Controllers\ProgramController::class, 'karir']);
});

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about']);

Route::resource('contactus', App\Http\Controllers\ContactController::class);

