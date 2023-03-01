<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/about', function () {
    return view('layouts.about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'about'])->name('home.about');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'blog'])->name('home.blog');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('home.contact');

Route::get('/product', [App\Http\Controllers\ProductController::class, 'create'])->name('home.product');

// ADMIN ROUTES
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin.index'); 

