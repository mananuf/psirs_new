<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manageImagesController;
use  App\Http\Controllers\categoryController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\directorateController;

Route::get('/', MainController::class)->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/imagess',manageImagesController::class);
Route::resource('/category',categoryController::class);
Route::resource('blog',blogController::class);
Route::resource('directorate',directorateController::class);
Route::get('/dash',function(){
    return view('admin.dashboard');

});
Route::get('/create',function(){
    return view('admin.blog.create');

});
