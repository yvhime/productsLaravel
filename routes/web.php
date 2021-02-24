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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/oldhome', [App\Http\Controllers\HomeController::class, 'oldhome'])->name('oldhome');
// old home route with app.blade.php 

Route::get('/daf', function () {
    return view('daf');
});
// test route

Route::resource('products', App\Http\Controllers\ProductController::class);
// working route for ProductController