<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', MainController::class)->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/images', [App\Http\Controllers\manageImagesController::class])->name('images');
Route::resource('/category', [App\Http\Controllers\categoryController::class])->name('category');
Route::resource('/blog', [App\Http\Controllers\blogController::class])->name('blog');
Route::get('/dash',function(){
    return view('admin.dashboard');

});
